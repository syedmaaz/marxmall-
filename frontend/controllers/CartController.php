<?php

namespace frontend\controllers;

use Yii;
use common\models\Product;
use common\models\ProdCat;
use common\models\ProductMeta;
use common\models\Order;
use yii\db\Query;


use PayPal\Api\Address;
use PayPal\Api\CreditCard;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\Transaction;
use PayPal\Api\FundingInstrument;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\RedirectUrls;
use PayPal\Rest\ApiContext;


class CartController extends \yii\web\Controller
{
    public $layout = 't2/main';

    // public function beforeAction($action) {
    //     $this->enableCsrfValidation = false;
    //     return parent::beforeAction($action);
    // }

    
    public function actionIndex() {

        session_start();
        $prod_ids = [];
        if(isset($_SESSION['cart-item'])) {
            $prod_ids = $_SESSION['cart-item'];
        }

        $products = Product::find()->where(['prod_id' => $prod_ids ])->all();

        return $this->render('checkout',[
            'products' => $products 
        ]);
    }

    public function actionAddToCart() {
        session_start();
        

        if($postData = Yii::$app->request->post()) {
            $item = [];
            
            if(isset($_SESSION['cart-item'])) {
                $item = $_SESSION['cart-item'];
               
                $item[$postData['prod_id']] = $postData['prod_id'];
            } else {
                $item[$postData['prod_id']] = $postData['prod_id'];
                // $_SESSION['cart-item'] = $item;
            }
            $_SESSION['cart-item'] = $item;
            
        }
    }

    public function actionCheckout () {
       
        if($postData = Yii::$app->request->post()) { 
             $model = new Product();
            $order = new Order();
            
            $order->shipping_address = $postData['address'];
            $order->city = $postData['city'];
            $order->country = $postData['country'];
            $order->postal_code = $postData['postal_code'];
            $order->status = 0;
            $order->save();

            $order_id = $order->order_id;
            
            $items = [];
            
            foreach($postData['qty'] as $key => $val) {
                $order_detail = new OrderDetail();

                $order_detail->order_id = $order_id;
                $order_detail->prod_id = $postData['prod_id'][$key];
                $order_detail->quantity = $postData['qty'][$key];
                $order_detail->unit_price = $postData['prod_price'][$key];
                $order_detail->unit_sum = $postData['prod_price'][$key] *  $order_detail->quantity;

                $order_detail->save();

                $item = new Item();
                $item->setName($postData['prod_name'][$key])
                    ->setCurrency('USD')
                    ->setQuantity($val)
                    ->setPrice($postData['prod_price'][$key]);
                $items[] = $item;
            }

            $itemList = new ItemList();
            $itemList->setItems($items);
            
            $payment = preparePaypal($itemList);
            print_r($items);
        }
        exit;
    }

 

    public function preparePaypal($itemList) {
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AYSq3RDGsmBLJE-otTkBtM-jBRd1TCQwFf9RGfwddNXWz0uFU9ztymylOhRS',     // ClientID
                'EGnHDxD_qRPdaLdZz8iCr8N7_MzF-YHPTkjs6NKYQvQSBngp4PTTVWkPZRbL'      // ClientSecret
            )
        );
        
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");
        // ### Itemized information
        // (Optional) Lets you specify item wise
        // information
        // $item1 = new Item();
        // $item1->setName('Ground Coffee 40 oz')
        //     ->setCurrency('USD')
        //     ->setQuantity(1)
        //     ->setPrice(7.5);
        // $item2 = new Item();
        // $item2->setName('Granola bars')
        //     ->setCurrency('USD')
        //     ->setQuantity(5)
        //     ->setPrice(2);
        // $itemList = new ItemList();
        // $itemList->setItems(array($item1, $item2));
        // ### Additional payment details
        // Use this optional field to set additional
        // payment information such as tax, shipping
        // charges etc.
        $details = new Details();
        $details->setShipping(1.2)
            ->setTax(1.3)
            ->setSubtotal(17.50);
        // ### Amount
        // Lets you specify a payment amount.
        // You can also specify additional details
        // such as shipping, tax.
        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal(20)
            ->setDetails($details);
        // ### Transaction
        // A transaction defines the contract of a
        // payment - what is the payment for and who
        // is fulfilling it. 
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());
        // ### Redirect urls
        // Set the urls that the buyer must be redirected to after 
        // payment approval/ cancellation.
        //$baseUrl = getBaseUrl();
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("http://www.akarmi.ro/ExecutePayment.php?success=true")
            ->setCancelUrl("http://www.akarmi.ro/ExecutePayment.php?success=false");
        // ### Payment
        // A Payment Resource; create one using
        // the above types and intent set to 'sale'
        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));
        // For Sample Purposes Only.
        $request = clone $payment;
        // ### Create Payment
        // Create a payment by calling the 'create' method
        // passing it a valid apiContext.
        // (See bootstrap.php for more on `ApiContext`)
        // The return object contains the state and the
        // url to which the buyer must be redirected to
        // for payment approval
        try {
            $payment->create($apiContext);
        } catch (Exception $ex) {
            // ResultPrinter::printError("Created Payment Using PayPal. Please visit the URL to Approve.", "Payment", null, $request, $ex);
            // exit(1);
        }
        // ### Get redirect url
        // The API response provides the url that you must redirect
        // the buyer to. Retrieve the url from the $payment->getApprovalLink()
        // method
        $approvalUrl = $payment->getApprovalLink();
        // ResultPrinter::printResult("Created Payment Using PayPal. Please visit the URL to Approve.", "Payment", "<a href='$approvalUrl' >$approvalUrl</a>", $request, $payment);
        return $payment;
        //END SAMPLE 3
    
    }

}
