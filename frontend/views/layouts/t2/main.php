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
    <link href="<?php echo Yii::getAlias('@web') ?>/css/t2/style.css" rel="stylesheet">
    <link href="<?php echo Yii::getAlias('@web') ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo Yii::getAlias('@web') ?>/css/t2/checkout.css" rel="stylesheet">
    <script src="<?php echo Yii::getAlias('@web') ?>/js/t2/jquery.js"></script>
    <script src="<?php echo Yii::getAlias('@web') ?>/js/t1/owl.carousel.min.js"></script>
    <!-- Owl Carousal -->
    <script src="<?php echo Yii::getAlias('@web') ?>/js/t1/daterangepicker.js"></script>
    <!-- Date Range Picker -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Raleway:400,300,600,700,500|Noto+Sans:400,700|Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo Yii::getAlias('@web') ?>/css/font-awesome/css/font-awesome.css" type="text/css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo Yii::getAlias('@web') ?>/css/t1/owl.carousel.css" type="text/css" />
    <!-- Owl Carousal -->
    <link rel="stylesheet" href="<?php echo Yii::getAlias('@web') ?>/css/t1/animate.css" type="text/css" />
    <!-- Animation -->
    <link rel="stylesheet" href="<?php echo Yii::getAlias('@web') ?>/css/t1/ion.rangeSlider.css" />
    <!-- Range Slider -->
    <link rel="stylesheet" href="<?php echo Yii::getAlias('@web') ?>/css/t1/ion.rangeSlider.skinFlat.css" />
    <!-- Range Slider -->
    <link rel="stylesheet" href="<?php echo Yii::getAlias('@web') ?>/css/t1/style.css" type="text/css" />
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo Yii::getAlias('@web') ?>/css/t1/responsive.css" type="text/css" />
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::getAlias('@web') ?>/css/t1/revolution.css" media="screen" />
    <!-- Slider Revolution -->
    <link rel="alternate stylesheet " type="text/css" href="<?php echo Yii::getAlias('@web') ?>/css/t1/purple.css" title="purple" />
    <!-- Purple -->
    <link rel="alternate stylesheet" type="text/css" href="<?php echo Yii::getAlias('@web') ?>/css/t1/green.css" title="green" />
    <!-- Green -->
    <link rel="alternate stylesheet" type="text/css" href="<?php echo Yii::getAlias('@web') ?>/css/t1/orange.css" title="orange" />
    <!-- Orange -->
    <link rel="alternate stylesheet" type="text/css" href="<?php echo Yii::getAlias('@web') ?>/css/t1/cyan.css" title="cyan" />
    <!-- Cyan -->
    <link rel="alternate stylesheet" type="text/css" href="<?php echo Yii::getAlias('@web') ?>/css/t1/red.css" title="red" />
    <!-- Red -->
    <link rel="alternate stylesheet" type="text/css" href="<?php echo Yii::getAlias('@web') ?>/css/t1/black.css" title="black" />
    <!-- Black -->
    <link rel="alternate stylesheet" type="text/css" href="<?php echo Yii::getAlias('@web') ?>/css/t1/pink.css" title="pink" />
    <!-- Pink -->
    <link rel="alternate stylesheet" type="text/css" href="<?php echo Yii::getAlias('@web') ?>/css/t1/gray.css" title="gray" />
    <!-- Gray -->
    <link rel="alternate stylesheet" type="text/css" href="<?php echo Yii::getAlias('@web') ?>/css/t1/grunge.css" title="grunge" />
    <!-- Grunge -->
    <link rel="alternate stylesheet" type="text/css" href="<?php echo Yii::getAlias('@web') ?>/css/t1/brown.css" title="brown" />
    <!-- Brown -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- SLIDER REVOLUTION -->
    <script type="text/javascript" src="<?php echo Yii::getAlias('@web') ?>/js/t1/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::getAlias('@web') ?>/js/t1/jquery.themepunch.revolution.min.js"></script>
</head>

<body>
    <div class="theme-layout">
        <!-- Navigation -->
        <header class="header1">
            <div class="container">
                <div class="col-lg-12 col-sm-12 header-black">
                    <div class="col-lg-8">
                        <div class="top-bar">
                            <h5>Welcome</h5>
                            <ul class=" language list-inline margin-9">
                                <li><a href="#" title="">SIGN IN</a></li>
                                <li><a href="#" title="">ACCOUNT</a></li>
                                <li><a href="#" title="">YOUR LIST</a></li>
                                <li><a href="#" title="">AUTO-RERODER &amp; SAVE</a></li>
                                <li><a href="#" title="">HELP</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="top-bar">
                            <ul class=" language list-inline margin-9">
                                <li><a href="../cart/index" title=""><i class="fa fa-shopping-cart"></i><span>CART:O Item</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <div class="checkout checkout-2"><a href="<?= Yii::$app->urlManager->createUrl('cart/index') ?>"> Checkout<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <div class="col-lg-12 header-background">
                        <div class="col-lg-7 col-md-3 col-sm-12 col-xs-12">
                            <div class="logo"> 
                              <a href="<?= Yii::$app->urlManager->createUrl('home/index') ?>" title=""> 
                                <img src="<?= Yii::$app->urlManager->getBaseUrl() . '/images/logo.jpg'?>" alt="" /> 
                              </a> 
                            </div>
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
                                <?php $store = $this->params['store_menu']; ?>
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
        <div class="theme-layout">
            <!-- content -->
            <?= $content ?>
        </div>
        <!-- /.container -->
        <!-- Footer -->
        <footer class="block">
            <div class="row">
                <div class="container">
                    <div class="col-md-12">
                        <div class="col-lg-8 col-sm-12">
                            <div class="compare-with">
                                <form>
                                    <label>Newsletter</label>
                                    <input type="text" placeholder="Email Address">
                                    <a href=""><i class="fa fa-envelope-o"></i>Subscribe</a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <ul class="social-btns">
                                <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-rss"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class=" col-lg-3 col-sm-12 box  margin-100"> <a href="#"><img src="<?= Yii::$app->urlManager->getBaseUrl().'/images/logo.jpg'?>" /></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed d copy</p>
                            <div class="payment-accept ">
                                <ul>
                                    <li><a href="#" title=""><img src="<?= Yii::$app->urlManager->getBaseUrl().'/images/payment1.png'?>" alt=""></a></li>
                                    <li><a href="#" title=""><img src="<?= Yii::$app->urlManager->getBaseUrl().'/images/payment3.png'?>" alt=""></a></li>
                                    <li><a href="#" title=""><img src="<?= Yii::$app->urlManager->getBaseUrl().'/images/payment4.png'?>" alt=""></a></li>
                                    <li><a href="#" title=""><img src="<?= Yii::$app->urlManager->getBaseUrl().'/images/payment5.png'?>" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-12 box  margin-100">
                            <h3>INFORMATION</h3>
                            <ul class="padding-0">
                                <li><a href="#"><i class="fa fa-chevron-right"></i>About Us </a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Delivery Information</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Privacy Policy </a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Terms & Condition</a></li>
                            </ul>
                        </div>
                        <div class=" col-lg-2 col-sm-12 box  margin-100">
                            <h3>CUSTOMER SERVICE</h3>
                            <ul class="padding-0">
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Contact Us </a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i> Returns</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Site Map </a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-sm-12 box  margin-100">
                            <h3>EXTRA</h3>
                            <ul class="padding-0">
                                <li><a href="#"><i class="fa fa-chevron-right"></i>Brands  Specials</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i> Gift Vouchers</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i> Affiliates </a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i> Specials</a></li>
                            </ul>
                        </div>
                        <div class=" col-lg-3 col-sm-12 box-1  margin-100">
                            <h3>CONTACT US</h3>
                            <ul class="padding-0 list-unstyled">
                                <li><a href="#"><img src="<?= Yii::$app->urlManager->getBaseUrl().'/images/map1.png'?>" />123 Main Street, Anytown, CA 12345 USA</a></li>
                                <li><a href="#" class="skype"><img src="<?= Yii::$app->urlManager->getBaseUrl().'/images/cell.png'?>" /> +1 123 456 7890</a></li>
                                <li><a href="#"><img src="<?= Yii::$app->urlManager->getBaseUrl().'/images/msg.png'?>" />support@YourCompany.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="bottom-line">
            <div class="container">
                <div class="row"> </div>
            </div>
            <span>All Rights Reserved. @ <i>YourCompany</i>.</span> </div>
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <input id="baseUrl" type="hidden" name="baseUrl" value="<?= Yii::$app->urlManager->getBaseUrl() ?>" />
        <!-- /.container -->
    </div>
    <!-- jQuery -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Yii::getAlias('@web') ?>/js/t2/bootstrap.min.js"></script>
    <script src="<?php echo Yii::getAlias('@web') ?>/js/script.js"></script>
    <script src="<?php echo Yii::getAlias('@web') ?>/js/t2/cart-table.js"></script>
    <!-- Script
  <script src="<?php echo Yii::getAlias('@web') ?>/js/t1/jquery-1.10.2.js"></script>  -->
    <script src="<?php echo Yii::getAlias('@web') ?>/js/t1/modernizr.js"></script>
    <!-- modernizr -->
    <script src="<?php echo Yii::getAlias('@web') ?>/js/t1/onscreen.js"></script>
    <!-- On Screen -->
    <script src="<?php echo Yii::getAlias('@web') ?>/js/t1/switcher.js"></script>
    <!-- Style Switcher -->
</body>

</html>
