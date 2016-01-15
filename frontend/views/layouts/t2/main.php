<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop Homepage</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::getAlias('@web') ?>/css/t2/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo Yii::getAlias('@web') ?>/css/font-awesome/css/font-awesome.css" type="text/css" />
    <link href="<?php echo Yii::getAlias('@web') ?>/css/t2/style.css" rel="stylesheet">
    <link href="<?php echo Yii::getAlias('@web') ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo Yii::getAlias('@web') ?>/css/t2/checkout.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="main-container" class="container">
        <!-- Navigation -->
        <header class="header1">
            <div class="container">
                <div class="col-lg-12 col-sm-12 header-black">
                    <div class="col-lg-8">
                        <div class="top-bar">
                            <h5>Welcome</h5>
                            <ul class=" language list-inline margin-9">
                               <li>
                                    <?php if(\Yii::$app->user->isGuest) { ?>
                                        <a href="<?= Yii::$app->urlManager->createUrl('site/login') ?>">sign in</a>
                                    <?php } else {?>
                                        <a href="<?= Yii::$app->urlManager->createUrl('site/logout') ?>">sign out</a>
                                    <?php } ?>
                                    
                                </li>

                                <li>
                                    <a href="<?= Yii::$app->urlManager->createUrl('site/register-store') ?>">Register Store</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="top-bar">
                            <ul class=" language list-inline margin-9">
                                <li><a href="#" title=""><i class="fa fa-shopping-cart"></i><span>CART:O Item</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <div class="checkout checkout-2">
                            <a href="<?= Yii::$app->urlManager->createUrl('cart/index') ?>">Checkout<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <div class="col-lg-12 header-background">
                        <div class="col-lg-7 col-md-3 col-sm-12 col-xs-12">
                            <div class="logo"> <a href="./index.html" title=""> <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/logo.jpg" alt="" /> </a> </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 info ">
                            <h3 class="pull-right">NEED IT BY 12/24 ?</h3>
                            <h6 class="pull-right">Order By 12/33 2:00 PM CT <br />
                                Select Overnight Shipping</h6>
                        </div>
                        <div class="col-lg-3  col-md-3 col-sm-12  col-xs-12 pull-right margin-20">
                            <div class="search-header">
                                <form>
                                    <input type="text" placeholder="Search Here" />
                                    <a href="#" title=""><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12  color-grey ">
                        <div class="menu">
                            <ul>
                                <?php $store = $this->params['store_menu']; //print_r($data); exit;?>
                                    <li><a href="<?= Yii::$app->urlManager->createUrl('home/index') ?>" title="">HOME</a> </li>
                                    <li>
                                        <a href="#" title="">Shopes <i class="fa fa-chevron-down"></i></a>
                                        <ul>
                                            <?php foreach($store as $st): ?>
                                                <li><a href="<?= Yii::$app->urlManager->createUrl('home/storedetail/' . $st['store_id'] ) ?>" title=""><?= $st['store_name'] ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                    <li><a href="#" title="">HOLE SALE <i class="fa fa-chevron-down"></i></a>
                                        <ul class="mega2">
                                            <li><a href="#" title="">HOLE SALE 1</a> </li>
                                            <li><a href="#" title="">HOLE SALE 2</a>
                                                <ul>
                                                    <li><a href="#" title="">HOLE SALE 3</a></li>
                                                    <li><a href="#" title="">HOLE SALE 4</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#" title="">ABOUT</a> </li>
                                    <li><a href="#" title="">CONTACT US</a> </li>
                                    <li><a href="#" title="">BLOG</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <header class="responsive-header">
            <div class="search-header">
                <form>
                    <input type="text" placeholder="Search Here" />
                    <a href="#" title=""><i class="fa fa-search"></i></a>
                </form>
            </div>
            <div class="responsive-menu"> <a class="menu-dropdown-btn" title="">MENU <i class="fa fa-align-justify"></i></a>
                <ul>
                    <li><a href="#" title="">Home</a>
                        <ul>
                            <li><a href="#" title="">Home Page 1</a></li>
                            <li><a href="#" title="">Home Page 1</a></li>
                            <li><a href="#" title="">Home Page 1</a></li>
                            <li><a href="#" title="">Home Page 1</a></li>
                            <li><a href="#" title="">Home Page 1</a></li>
                            <li><a href="#" title="">Home Page 1</a></li>
                            <li><a href="#" title="">Home Page 1</a></li>
                            <li><a href="#" title="">Home Page 1</a></li>
                            <li><a href="#" title="">Home Page 1</a></li>
                            <li><a href="#" title="">Home Page 1</a></li>
                            <li><a href="#" title="">Home Page 1</a></li>
                            <li><a href="#" title="">Home Page 1</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="">New Arrival</a>
                        <ul>
                            <li><a href="#" title="">New Arrival</a></li>
                            <li><a href="#" title="">New Arrival</a></li>
                            <li><a href="#" title="">New Arrival</a></li>
                            <li><a href="#" title="">New Arrival</a></li>
                            <li><a href="#" title="">New Arrival</a></li>
                            <li><a href="#" title="">New Arrival</a></li>
                            <li><a href="#" title="">New Arrival</a></li>
                            <li><a href="#" title="">New Arrival</a></li>
                            <li><a href="#" title="">New Arrival</a></li>
                            <li><a href="#" title="">New Arrival</a></li>
                            <li><a href="#" title="">New Arrival</a></li>
                            <li><a href="#" title="">New Arrival</a></li>
                            <li><a href="#" title="">New Arrival</a></li>
                            <li><a href="#" title="">New Arrival</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="">Hote Sale</a>
                        <ul>
                            <li><a href="#" title="">Hote Sale</a></li>
                            <li><a href="#" title="">Hote Sale</a></li>
                            <li><a href="#" title="">Hote Sale</a></li>
                            <li><a href="#" title="">Hote Sale</a></li>
                            <li><a href="#" title="">Hote Sale</a></li>
                            <li><a href="#" title="">Hote Sale</a></li>
                            <li><a href="#" title="">Hote Sale</a></li>
                            <li><a href="#" title="">Hote Sale</a></li>
                            <li><a href="#" title="">Hote Sale</a></li>
                            <li><a href="#" title="">Hote Sale</a></li>
                            <li><a href="#" title="">Hote Sale</a></li>
                            <li><a href="#" title="">Hote Sale</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="">About</a> </li>
                    <li><a href="#" title="">Contact Us</a></li>
                    <li><a href="#" title="">Blog</a></li>
                </ul>
            </div>
        </header>
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <!-- content -->
                <?= $content ?>
            </div>
        </div>
        <!-- /.container -->
        <div class="container">
            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12 footer-subscribe">
                        <div class="col-lg-8 col-md-8 col-sm-8 container newsletter">
                            <label class="text-uppercase">newsletter</label>
                            <input type="text" name="email" />
                            <button type="submit">subscribe</button>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 social-icon">
                            <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/social-icons.png" alt="" />
                            <a href="#" class="fb">
                                <i class="fb-icon"></i>
                            </a>
                            <a href="#" class="twt-icon">
                                <i class="twt-icon"></i>
                            </a>
                            <a href="#" class="g-icon">
                                <i class="gplus-icon"></i>
                            </a>
                            <a href="#" class="rss-icon">
                                <i class="rss-icon"></i>
                            </a>
                            <a href="#" class="pin-icon">
                                <i class="pin-icon"></i>
                            </a>
                            <a href="#" class="linkedin-icon">
                                <i class="linkedin-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 container footer-content">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/logo-footer.png" style="width: 209px" alt="" />
                            <br>
                            <p>Lorem ipsim</p>
                            <div class="cart-option">
                                <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/payment-opt.png" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <h5>information</h5>
                            <ul>
                                <li>about us</li>
                                <li>delivery information</li>
                                <li>privacy policy</li>
                                <li>term & condition</li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <h5>Customer service</h5>
                            <ul>
                                <li>contact us</li>
                                <li>returns</li>
                                <li>site map</li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <h5>extras</h5>
                            <ul>
                                <li>brands</li>
                                <li>gift voucher</li>
                                <li>affiliates</li>
                                <li>specials</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <h5>contact us</h5>
                            <ul>
                                <li>
                                    <i class="pin-icon"></i>
                                    <p>123 main street to London </p>
                                </li>
                                <li>
                                    <i class="phn-icon"></i>
                                    <p>+1-123456-95</p>
                                </li>
                                <li>
                                    <i class="email-icon"></i>
                                    <p>support@yourcompany.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row copyright">
                    <p class="text-capitalize text-center">All right reserved</p>
                </div>
            </footer>
            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
            <input id="baseUrl" type="hidden" name="baseUrl" value="<?= Yii::$app->urlManager->getBaseUrl() ?>" />
        </div>
        <!-- /.container -->
    </div>
    <!-- jQuery -->
    <script src="<?php echo Yii::getAlias('@web') ?>/js/t2/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Yii::getAlias('@web') ?>/js/t2/bootstrap.min.js"></script>
    <script src="<?php echo Yii::getAlias('@web') ?>/js/script.js"></script>
    <script src="<?php echo Yii::getAlias('@web') ?>/js/t2/cart-table.js"></script>
</body>

</html>
