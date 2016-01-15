<?php
namespace frontend\controllers;
// namespace frontend\models;

use common\models\Category;
use Yii;
use common\models\LoginForm;
use common\models\Store;
use common\models\UserStore;
use common\models\CMS;
use common\models\BLOG;
use common\models\TESTIMONIALS;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use yii\base\Model;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $layout = 't1/main';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    //'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $cat = Category::find()->all();
        $blogs = BLOG::find()->all();
        $store = Store::find()->all();
        $userModel = new SignupForm();
        $storeModel = new Store();

        
        $about_us = CMS::find()->where("cms_name = 'ABOUT US'")->one();         
        $contact_us = CMS::find()->where("cms_name = 'CONTACT US'")->one();         
        $pp = CMS::find()->where("cms_name = 'PRIVACY POLICY'")->one();         
        $tc = CMS::find()->where("cms_name = 'TERMS & CONDITIONS'")->one();         
        
        $testimonials = TESTIMONIALS::find()->all();            

        
        return $this->render('index', [
            'categories' => array_chunk($cat, 5),
            'stores' => array_chunk($store, 5),
            'userModel' => $userModel,
            'storeModel' => $storeModel,
            'about_us' => $about_us,
            'contact_us' => $contact_us,
            'testimonials' => $testimonials,
            'pp' => $pp,
            'tc' => $tc,
            'blogs' => $blogs,
        ]);
    }

    public function actionLogin()
    {
        $this->layout = 't2/main';
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $this->layout = 't2/main';
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
         $this->layout = 't2/main';
        return $this->render('about');
    }

    public function actionHelp()
    {
         $this->layout = 't2/main';
        return $this->render('help');
    }

    public function actionSignup()
    {
        $this->layout = 't2/main';
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionRegisterStore() 
    {
        $this->layout = 't2/main';
        $userModel = new SignupForm();
        $storeModel = new Store();

        $user_id = 0;


        if ($userModel->load(Yii::$app->request->post()) && $storeModel->load(Yii::$app->request->post())) {
            // print_r($storeModel->validate()); exit;
            if (Yii::$app->user->isGuest) {
                if ($userModel->validate() && $user = $userModel->signup()) {
                    $user_id = $user->id;                                                                
                } else {
                    return $this->render('registerStore', [
                        'userModel' => $userModel,
                        'storeModel' => $storeModel
                    ]);
                }
            } else {
                $user_id = \Yii::$app->user->identity->id;  
            }    
            $store_img = UploadedFile::getInstances($storeModel, 'file');
            

            if($storeModel->validate()) {
                
                if(!empty($store_img)) {
                    $storeModel->file = $store_img[0];
                    $image_name = '/store/' . $storeModel->file->baseName . '_' . time() . '.' . $storeModel->file->extension;
                    $image_path = Yii::getAlias('@frontend'). '/web/uploads' . $image_name;
                    $storeModel->file->saveAs( $image_path);
                    $storeModel->store_picture = $image_name;
                }    
                if($storeModel->save()) {
                    $store_id = $storeModel->store_id;
                    
                    $userStore = new UserStore();
                    $userStore->user_id = $user_id;
                    $userStore->store_id = $store_id;

                    $userStore->save();

                    return $this->redirect(Yii::$app->urlManager->getBaseUrl() . '/backend/web/');

                } else {
                     print_r($storeModel->error); exit;
                }
                // }

            }  else {
                print_r($storeModel->errors); exit;
                return $this->render('registerStore', [
                    'userModel' => $userModel,
                    'storeModel' => $storeModel
                ]);
            }
            
            echo '<pre>';
            print_r($storeModel);
            print_r($store_img);
            exit;
        }
             // $store_img = UploadedFile::getInstances($storeModel, 'file');
                    // $storeModel->file = $store_img[0];

                    // if($storeModel->validate()) {
                    //     if(!empty($store_img)){
                    //         $image_name = '/store/' . $storeModel->file->baseName . '_' . time() . '.' . $storeModel->file->extension;
                    //         $image_path = Yii::getAlias('@frontend'). '/web/uploads' . $image_name;
                    //         $storeModel->file->saveAs( $image_path);

                    //         $storeModel->store_picture = $image_name;
                            
                    //         if($storeModel->save()) {
                    //             $store_id = $storeModel->store_id;
                    //             $user_id = \Yii::$app->user->identity->id;   

                    //             echo $store_id;
                    //             echo $user_id;

                    //             exit; 
                    //         }

                    //     }
                    //    // return $this->redirect(['view', 'id' => $model->store_id]);
                    // } else {
                    //     // return $this->render('update', [
                    //     //     'model' => $model,
                    //     // ]);
                    // }      
        

        return $this->render('registerStore', [
            'userModel' => $userModel,
            'storeModel' => $storeModel
        ]);   
    }

    public function actionRequestPasswordReset()
    {
         $this->layout = 't2/main';
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
         $this->layout = 't2/main';
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
