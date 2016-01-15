<div class="col-md-12">

<!-- slider -->
<div class="row carousel-holder">

    <div class="col-md-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                </div>
                <div class="item">
                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                </div>
                <div class="item">
                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>

</div>
<!-- end slider -->

<!-- cutomer favorities -->
<div id="customer-favour" class="row carousel slide product-slider container" data-ride="carousel"
     data-interval="false">

    <h4>customer favorites</h4>

    <a class="left carousel-control" href="#customer-favour" data-slide="prev">
        <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/prod-slider-left.png" alt=""/>
    </a>
    <a class="right carousel-control" href="#customer-favour" data-slide="next">
        <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/prod-slider-right.png" alt=""/>
    </a>


    <div class="carousel-inner">

        <?php
        $prod_chunk = array_chunk($product, 4);
        foreach ($prod_chunk as $key => $products): ?>

            <div class="item <?= ($key == 0) ? 'active' : '' ?>">

                <?php foreach ($products as $key => $prod): ?>
                    <div class="product col-sm-3 col-lg-3 col-md-3">
                        <img class="new-tag" src="<?php echo Yii::getAlias('@web') ?>/images/t2/new-tag.png" alt=""/>

                        <div class="thumbnail">
                            <a href="<?= Yii::$app->urlManager->createUrl(['home/detail', 'id' => $prod->prod_id]) ?>">
                            
                                <?php if (isset($prod->productImg[0])) { ?>
                                    <img src="<?= Yii::$app->urlManager->getBaseUrl() . '/uploads/product/' .$prod->productImg[0]->meta_value ?>" alt="">
                                <?php } else { ?>
                                    <img src="http://placehold.it/280x355" alt="">
                                <?php } ?>
                            </a>

                            <div class="caption">

                                <h4 class="pull-right">$<?= $prod->prod_price ?></h4>
                                <h4><a class="prod_name"
                                       href="<?= Yii::$app->urlManager->createUrl(['home/detail', 'id' => $prod->prod_id]) ?>"><?= $prod->prod_name ?></a>

                            </div>
                            <div class="ratings">
                                <a class="pull-right add-to-cart" data-prod="<?= $prod->prod_id ?>">
                                    <img class="add-to-bag"
                                         src="<?php echo Yii::getAlias('@web') ?>/images/t2/add-to-bag.png" alt=""/>
                                </a>

                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                        <img class="product-bottom-border"
                             src="<?php echo Yii::getAlias('@web') ?>/images/t2/product-bottom-border.png"
                             alt=""/>
                    </div>
                <?php endforeach; ?>

            </div>

        <?php endforeach; ?>

    </div>
</div>
<!-- END cutomer favorities -->

<!-- category collection -->

<div id="category-collection" class="row carousel slide product-slider container" data-ride="carousel"
     data-interval="false">
    <nav class="nav prod-cat-nav" style="margin-bottom: 3px;">
        <ul>
            <li>
                <a href="#"> women</a>
            </li>
            <li class="divider-vertical"></li>
            <li>
                <a href="#"> men style</a>
            </li>
            <li class="divider-vertical"></li>
            <li>
                <a href="#"> footwear </a>
            </li>
        </ul>
    </nav>
    <a class="left carousel-control" href="#category-collection" data-slide="prev">
        <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/prod-slider-left.png" alt=""/>
    </a>
    <a class="right carousel-control" href="#category-collection" data-slide="next">
        <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/prod-slider-right.png" alt=""/>
    </a>

    <div class="carousel-inner">

        <?php
        $prod_chunk = array_chunk($product, 4);
        foreach ($prod_chunk as $key => $products):
            ?>

            <div class="item <?= ($key == 0) ? 'active' : '' ?>">

                <?php foreach ($products as $key => $prod): ?>

                    <div class="product col-sm-3 col-lg-3 col-md-3">
                        <img class="new-tag" src="<?php echo Yii::getAlias('@web') ?>/images/t2/new-tag.png" alt=""/>

                        <div class="thumbnail">
                            <a href="<?= Yii::$app->urlManager->createUrl(['home/detail', 'id' => $prod->prod_id]) ?>">
                                <?php if (isset($prod->productImg[0])) { ?>
                                    <img src="<?= $prod->productImg[0]->meta_value ?>" alt="">
                                <?php } else { ?>
                                    <img src="http://placehold.it/280x355" alt="">
                                <?php } ?>
                            </a>


                            <div class="caption">

                                <h4 class="pull-right">$<?= $prod->prod_price ?></h4>
                                <h4>
                                    <a href="<?= Yii::$app->urlManager->createUrl(['home/detail', 'id' => $prod->prod_id]) ?>"><?= $prod->prod_name ?></a>

                            </div>
                            <div class="ratings">
                                <a class="pull-right">
                                    <img class="add-to-bag"
                                         src="<?php echo Yii::getAlias('@web') ?>/images/t2/add-to-bag.png" alt=""/>
                                </a>

                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                        <img class="product-bottom-border"
                             src="<?php echo Yii::getAlias('@web') ?>/images/t2/product-bottom-border.png"
                             alt=""/>
                    </div>

                <?php endforeach; ?>

            </div>
        <?php endforeach; ?>

    </div>
</div>

<!-- END category collection -->

<div class="col-sm-12 col-lg-12 col-md-12 pull-right row ads">
    <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/ad.png" alt="" width="100%"/>
</div>

<!-- best offer -->
<div class="col-sm-9 col-lg-9 col-md-9 pull-right row">

<div id="best-offer" class="col-sm-12 col-lg-12 col-md-12 pull-right row carousel slide product-slider container"
     data-ride="carousel" data-interval="false">
    <h4>best offers</h4>

    <a class="left carousel-control" href="#best-offer" data-slide="prev">
        <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/slider-white-btn-left.png" alt=""/>
    </a>
    <a class="right carousel-control" href="#best-offer" data-slide="next">
        <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/slider-white-btn-right.png" alt=""/>
    </a>

    <div class="carousel-inner">

        <?php
        $prod_chunk = array_chunk($product, 3);
        foreach ($prod_chunk as $key => $products):
            ?>

            <div class="item <?= ($key == 0) ? 'active' : '' ?>">

                <?php foreach ($products as $key => $prod): ?>

                    <div class="product col-sm-4 col-lg-4 col-md-4">
                        <img class="new-tag" src="<?php echo Yii::getAlias('@web') ?>/images/t2/new-tag.png" alt=""/>

                        <div class="thumbnail">
                            <a href="<?= Yii::$app->urlManager->createUrl(['home/detail', 'id' => $prod->prod_id]) ?>">
                                <?php if (isset($prod->productImg[0])) { ?>
                                    <img src="<?= $prod->productImg[0]->meta_value ?>" alt="">
                                <?php } else { ?>
                                    <img src="http://placehold.it/280x355" alt="">
                                <?php } ?>
                            </a>

                            <div class="caption">

                                <h4 class="pull-right">$24.99</h4>
                                <h4><a href="#">First Product</a>

                            </div>
                            <div class="ratings">
                                <a class="pull-right">
                                    <img class="add-to-bag"
                                         src="<?php echo Yii::getAlias('@web') ?>/images/t2/add-to-bag.png"
                                         alt=""/>
                                </a>

                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                        <img class="product-bottom-border"
                             src="<?php echo Yii::getAlias('@web') ?>/images/t2/product-bottom-border.png" alt=""/>
                    </div>

                <?php endforeach; ?>


            </div>
        <?php endforeach; ?>


    </div>
</div>
<!-- END best offer -->

<!-- blogs -->
<div id="blogs-section" class="col-sm-12 col-lg-12 col-md-12 pull-right row carousel slide product-slider container"
     data-ride="carousel" data-interval="false">
    <h4>latest from blog</h4>

    <a class="left carousel-control" href="#blogs-section" data-slide="prev">
        <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/slider-white-btn-left.png" alt=""/>
    </a>
    <a class="right carousel-control" href="#blogs-section" data-slide="next">
        <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/slider-white-btn-right.png" alt=""/>
    </a>

    <div class="carousel-inner">
        <div class="item active">

            <div class="product col-sm-4 col-lg-4 col-md-4">

                <div class="thumbnail">
                    <img src="http://placehold.it/280x355" alt="">

                    <div class="caption">

                        <h4><a href="#">Blog title 1</a></h4>

                        <p>by thems vast - 01 Oct 2014</p>

                        <div class="detail">Some article details</div>
                        <a class="readmore">Readmore ></a>
                    </div>

                </div>

            </div>

            <div class="product col-sm-4 col-lg-4 col-md-4">

                <div class="thumbnail">
                    <img src="http://placehold.it/280x355" alt="">

                    <div class="caption">
                        <h4><a href="#">Blog title 1</a></h4>

                        <p>by thems vast - 01 Oct 2014</p>

                        <div class="detail">Some article details</div>
                        <a class="readmore">Readmore ></a>
                    </div>

                </div>

            </div>

            <div class="product col-sm-4 col-lg-4 col-md-4">

                <div class="thumbnail">
                    <img src="http://placehold.it/280x355" alt="">

                    <div class="caption">
                        <h4><a href="#">Blog title 1</a></h4>

                        <p>by thems vast - 01 Oct 2014</p>

                        <div class="detail">Some article details</div>
                        <a class="readmore">Readmore ></a>
                    </div>

                </div>

            </div>

        </div>

        <div class="item">

            <div class="product col-sm-4 col-lg-4 col-md-4">

                <div class="thumbnail">
                    <img src="http://placehold.it/280x355" alt="">

                    <div class="caption">
                        <h4><a href="#">Blog title 1</a></h4>

                        <p>by thems vast - 01 Oct 2014</p>

                        <div class="detail">Some article details</div>
                        <a class="readmore">Readmore ></a>
                    </div>

                </div>

            </div>

            <div class="product col-sm-4 col-lg-4 col-md-4">

                <div class="thumbnail">
                    <img src="http://placehold.it/280x355" alt="">

                    <div class="caption">
                        <h4><a href="#">Blog title 1</a></h4>

                        <p>by thems vast - 01 Oct 2014</p>

                        <div class="detail">Some article details</div>
                        <a class="readmore">Readmore ></a>

                    </div>

                </div>

            </div>

            <div class="product col-sm-4 col-lg-4 col-md-4">

                <div class="thumbnail">
                    <img src="http://placehold.it/280x355" alt="">

                    <div class="caption">
                        <h4><a href="#">Blog title 1</a></h4>

                        <p>by thems vast - 01 Oct 2014</p>

                        <div class="detail">Some article details</div>
                        <a class="readmore">Readmore ></a>
                    </div>

                </div>

            </div>


        </div>
    </div>
</div>
<!-- END blog -->
</div>
<!-- end -->

<div class="col-sm-3 col-lg-3 col-md-3 pull-left">
    <!-- best seller -->
    <div id="best-seller" class="col-sm-12 col-lg-12 col-md-12 pull-left row carousel slide product-slider container">
        <h4>best seller</h4>

        <div class="carousel-inner">
            <div class="item active">

                <div class="seller">
                    <img src="http://placehold.it/280x355" alt="">

                    <div class="caption">

                        <h4>
                            <a href="#">First Seller</a>
                        </h4>

                        <div class="ratings">
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>

                            <h4 class="">$24.99</h4>
                        </div>
                        <a class="pull-left add-to-bag">
                            <img class="add-to-bag" src="<?php echo Yii::getAlias('@web') ?>/images/t2/add-to-bag.png"
                                 alt="">
                        </a>
                    </div>
                </div>

                <div class="seller">
                    <img src="http://placehold.it/280x355" alt="">

                    <div class="caption">

                        <h4>
                            <a href="#">First Seller</a>
                        </h4>

                        <div class="ratings">
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>

                        <h4 class="">$24.99</h4>

                        <a class="pull-left">
                            <img class="add-to-bag" src="<?php echo Yii::getAlias('@web') ?>/images/t2/add-to-bag.png"
                                 alt="">
                        </a>
                    </div>
                </div>

                <div class="seller">
                    <img src="http://placehold.it/280x355" alt="">

                    <div class="caption">

                        <h4>
                            <a href="#">First Seller</a>
                        </h4>


                        <div class="ratings">
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>

                        <h4 class="">$24.99</h4>
                        <a class="pull-left">
                            <img class="add-to-bag" src="<?php echo Yii::getAlias('@web') ?>/images/t2/add-to-bag.png"
                                 alt="">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- end best offer -->

<!-- best offer -->


<!-- END best offer -->


</div>