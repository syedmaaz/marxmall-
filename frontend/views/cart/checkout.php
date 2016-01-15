<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-detail">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>

  <form id="checkout_form" action="<?= Yii::$app->urlManager->createUrl('cart/checkout') ?>" method="post">
    <?php foreach($products as $prod): ?>
      <div class="product">
        <div class="product-image">
          <img src="http://s.cdpn.io/3/dingo-dog-bones.jpg">
        </div>
        <div class="product-detail">
          <div class="product-title"><?= $prod->prod_name ?></div>
          <p class="product-description"><?= $prod->prod_desc ?></p>
        </div>
        <div class="product-price"><?= $prod->prod_price ?></div>
        
        <div class="product-quantity">
          <input name="qty[]" type="number" value="1" min="1">
        </div>
        <div class="product-removal">
          <button class="remove-product">
            Remove
          </button>
        </div>
        <div class="product-line-price"><?= $prod->prod_price ?></div>
      </div>
      <input type="hidden" name="prod_name[]" value="<?= $prod->prod_name ?>">
      <input type="hidden" name="prod_id[]" value="<?= $prod->prod_id ?>">
      <input type="hidden" name="prod_price[]" value="<?= $prod->prod_price ?>">
    <?php endforeach; ?>
    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
  <!-- </form> -->

  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal">71.97</div>
    </div>
    <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total">90.57</div>
    </div>
  </div>
      
      <button class="checkout" data-toggle="modal" data-target="#buy-campaign-modal">Checkout</button>

</div>

<div class="modal fade" id="buy-campaign-modal" data-width="800" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="border:0px;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                
                <div class="tab-pane " id="shipping-address">
                  <div class="shipping-address">
                    <div class="col-sm-12">
                      <h3>Shipping Address</h3>
                    </div>

                    <!-- <form id="shippingDetail" name="shippingAddress" class="form ng-pristine ng-invalid ng-invalid-required ng-valid-email" novalidate=""> -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                          <div class="form-group">
                            <label class="control-label">Full Name</label>
                            <input name="full_name" class="form-control" type="text" ng-model="shippingDetail.fullName" required="">
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                          <div class="form-group">
                            <label class="control-label">Email</label>
                            <input class="form-control" type="email" name="email" ng-model="shippingDetail.email" required="">
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                          <div class="form-group">
                            <label class="control-label">House/flat number</label>
                            <input class="form-control " type="text" name="address" ng-model="shippingDetail.address" required="">
                          </div>
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                          <div class="form-group">
                            <label class="control-label">Street</label>
                            <input class="form-control" type="text" name="street" ng-model="shippingDetail.street" required="">
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-6">
                          <div class="form-group">
                            <label class="control-label">City</label>
                            <input class="form-control" type="text" name="city" ng-model="shippingDetail.city" required="">
                          </div>
                        </div>
                       
                        <div class="col-sm-12 col-md-2 col-lg-2">
                          <div class="form-group">
                            <label class="control-label">Postal Code</label>
                            <input class="form-control  ng-class:{ 'active-error': shippingAddress.postal_code.$invalid &amp;&amp; shippingAddress.postal_code.$touched } ng-pristine ng-untouched ng-invalid ng-invalid-required" type="text" name="postal_code" ng-model="shippingDetail.postalCode" required="">
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                          <div class="form-group">
                            <label class="control-label">Country (only in Australia)</label>
                            <input class="form-control " type="text" value="Australia" >
                            <input type="hidden" name="country" value="Australia">
                          </div>
                        </div>
                        
                    </form>
                      
                      <div class="col-sm-12 col-md-6 col-lg-6 text-right">
                          <button id="do_the_payment" class="btn btn-primary">Payment »</button>
                      </div>
                  </div>        
                </div>
             
                <div class="modal-footer" style="border:0px;">
                </div>
            </div>
        </div>
    </div>

