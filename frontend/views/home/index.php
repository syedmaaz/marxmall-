
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
  <section class="block">
    <div class="container header-background">
      <div class="col-md-12">
        <div class="masonary-post">
          <h5>CUSTOMER FAVORITES</h5>
        </div>
        <div class="fixed-img sec-bg2"></div>
        <div id="best-seller">
		        <?php $prod_chunk = array_chunk($product, 4);
					foreach ($prod_chunk as $key => $products): ?>
						<div  class="row item <?= ($key == 0) ? 'active' : '' ?>">						
						   <?php foreach ($products as $key => $prod): ?>
							<div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
							  <div class="best-seller most-sold">
								<div class="sticker"> <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/new-tag.png"/> </div>
								<div class="best-seller seller2 sold-thumb"><a href="<?= Yii::$app->urlManager->createUrl(['home/detail', 'id' => $prod->prod_id]) ?>">								
								 <?php if (isset($prod->productImg[0])) { ?>
                                    <img class="seller-still" alt="" src="<?= Yii::$app->urlManager->getBaseUrl() . '/uploads/product/' .$prod->productImg[0]->meta_value ?>" alt="">
                                <?php } else { ?>
                                    <img class="seller-still" alt="" src="http://placehold.it/280x355" alt="">
                                <?php } ?>
																	
								</a> </div>
								<div class="down">
								  <h3><?= $prod->prod_name ?></h3>
								  <span>$<?= $prod->prod_price; ?></span> <img src="<?= Yii::$app->urlManager->getBaseUrl() . '/images/stars.png'?>" alt="star" class="star"/>
								  <ul class="bag">
									<li ><a class="add-to-cart" href="<?php echo Yii::getAlias('@web') ?>/images/t2/add-to-bag.png" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
								  </ul>
								</div>							
							   <img src="<?= Yii::$app->urlManager->getBaseUrl().'/images/border.jpg' ?>"  class="border"/> </div>
						</div>  
				<?php endforeach; ?>
						</div>
			<?php endforeach; ?>					     	
          </div>
	<div class="shop-tabs">
          <div class="col-md-12 padding-0">
            <ul class="nav nav-tabs shop-tab" id="myTab">
              <li class="active"><a data-toggle="tab" href="#tab-photos">WOMEN</a></li>
              <li class=""><a data-toggle="tab" href="#reviews">NEW STYLE</a></li>
              <li class="brdr"><a data-toggle="tab" href="#video">FOOTWEAR</a></li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div id="tab-photos" class="tab-pane fade active in">
                <div class="tab-photos">
                  <div class="tab-photo-sec">
                    <div class="tab-photo">
                      <div id="best-seller-2">
                        <div class="row">
                          <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                            <div class="best-seller most-sold">
                              <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                              <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                              <div class="down">
                                <h3>LOREM ISPUM</h3>
                                <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                                <ul class="bag">
                                  <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                              </div>
                              <img src="images/border.jpg"  class="border"/> </div>
                          </div>
                          <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                            <div class="best-seller most-sold">
                              <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                              <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                              <div class="down">
                                <h3>LOREM ISPUM</h3>
                                <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                                <ul class="bag">
                                  <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                              </div>
                              <img src="images/border.jpg"  class="border"/> </div>
                          </div>
                          <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                            <div class="best-seller most-sold">
                              <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                              <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                              <div class="down">
                                <h3>LOREM ISPUM</h3>
                                <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                                <ul class="bag">
                                  <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                              </div>
                              <img src="images/border.jpg"  class="border"/> </div>
                          </div>
                          <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                            <div class="best-seller most-sold">
                              <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                              <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                              <div class="down">
                                <h3>LOREM ISPUM</h3>
                                <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                                <ul class="bag">
                                  <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                              </div>
                              <img src="images/border.jpg"  class="border"/> </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                            <div class="best-seller most-sold">
                              <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                              <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                              <div class="down">
                                <h3>LOREM ISPUM</h3>
                                <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                                <ul class="bag">
                                  <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                              </div>
                              <img src="images/border.jpg"  class="border"/> </div>
                          </div>
                          <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                            <div class="best-seller most-sold">
                              <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                              <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                              <div class="down">
                                <h3>LOREM ISPUM</h3>
                                <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                                <ul class="bag">
                                  <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                              </div>
                              <img src="images/border.jpg"  class="border"/> </div>
                          </div>
                          <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                            <div class="best-seller most-sold">
                              <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                              <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                              <div class="down">
                                <h3>LOREM ISPUM</h3>
                                <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                                <ul class="bag">
                                  <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                              </div>
                              <img src="images/border.jpg"  class="border"/> </div>
                          </div>
                          <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                            <div class="best-seller most-sold">
                              <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                              <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                              <div class="down">
                                <h3>LOREM ISPUM</h3>
                                <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                                <ul class="bag">
                                  <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                              </div>
                              <img src="images/border.jpg"  class="border"/> </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                            <div class="best-seller most-sold">
                              <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                              <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                              <div class="down">
                                <h3>LOREM ISPUM</h3>
                                <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                                <ul class="bag">
                                  <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                              </div>
                              <img src="images/border.jpg"  class="border"/> </div>
                          </div>
                          <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                            <div class="best-seller most-sold">
                              <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                              <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                              <div class="down">
                                <h3>LOREM ISPUM</h3>
                                <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                                <ul class="bag">
                                  <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                              </div>
                              <img src="images/border.jpg"  class="border"/> </div>
                          </div>
                          <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                            <div class="best-seller most-sold">
                              <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                              <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                              <div class="down">
                                <h3>LOREM ISPUM</h3>
                                <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                                <ul class="bag">
                                  <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                              </div>
                              <img src="images/border.jpg"  class="border"/> </div>
                          </div>
                          <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                            <div class="best-seller most-sold">
                              <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                              <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                              <div class="down">
                                <h3>LOREM ISPUM</h3>
                                <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                                <ul class="bag">
                                  <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                              </div>
                              <img src="images/border.jpg"  class="border"/> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="reviews" class="tab-pane fade">
                <div class="tab-reveiws">
                  <div class="fixed-img sec-bg2"></div>
                  <div id="best-seller-3">
                    <div class="row">
                      <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                        <div class="best-seller most-sold">
                          <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                          <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                          <div class="down">
                            <h3>LOREM ISPUM</h3>
                            <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                            <ul class="bag">
                              <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                            </ul>
                          </div>
                          <img src="images/border.jpg"  class="border"/> </div>
                      </div>
                      <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                        <div class="best-seller most-sold">
                          <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                          <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                          <div class="down">
                            <h3>LOREM ISPUM</h3>
                            <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                            <ul class="bag">
                              <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                            </ul>
                          </div>
                          <img src="images/border.jpg"  class="border"/> </div>
                      </div>
                      <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                        <div class="best-seller most-sold">
                          <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                          <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                          <div class="down">
                            <h3>LOREM ISPUM</h3>
                            <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                            <ul class="bag">
                              <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                            </ul>
                          </div>
                          <img src="images/border.jpg"  class="border"/> </div>
                      </div>
                      <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                        <div class="best-seller most-sold">
                          <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                          <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                          <div class="down">
                            <h3>LOREM ISPUM</h3>
                            <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                            <ul class="bag">
                              <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                            </ul>
                          </div>
                          <img src="images/border.jpg"  class="border"/> </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                        <div class="best-seller most-sold">
                          <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                          <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                          <div class="down">
                            <h3>LOREM ISPUM</h3>
                            <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                            <ul class="bag">
                              <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                            </ul>
                          </div>
                          <img src="images/border.jpg"  class="border"/> </div>
                      </div>
                      <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                        <div class="best-seller most-sold">
                          <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                          <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                          <div class="down">
                            <h3>LOREM ISPUM</h3>
                            <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                            <ul class="bag">
                              <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                            </ul>
                          </div>
                          <img src="images/border.jpg"  class="border"/> </div>
                      </div>
                      <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                        <div class="best-seller most-sold">
                          <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                          <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                          <div class="down">
                            <h3>LOREM ISPUM</h3>
                            <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                            <ul class="bag">
                              <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                            </ul>
                          </div>
                          <img src="images/border.jpg"  class="border"/> </div>
                      </div>
                      <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                        <div class="best-seller most-sold">
                          <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                          <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                          <div class="down">
                            <h3>LOREM ISPUM</h3>
                            <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                            <ul class="bag">
                              <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                            </ul>
                          </div>
                          <img src="images/border.jpg"  class="border"/> </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                        <div class="best-seller most-sold">
                          <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                          <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                          <div class="down">
                            <h3>LOREM ISPUM</h3>
                            <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                            <ul class="bag">
                              <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                            </ul>
                          </div>
                          <img src="images/border.jpg"  class="border"/> </div>
                      </div>
                      <div class="cat1 cat3 col-lg-3  col-md-3 col-sm-12 inner-products ">
                        <div class="best-seller most-sold">
                          <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                          <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                          <div class="down">
                            <h3>LOREM ISPUM</h3>
                            <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                            <ul class="bag">
                              <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                            </ul>
                          </div>
                          <img src="images/border.jpg"  class="border"/> </div>
                      </div>
                      <div class="cat1 cat3 col-lg-3  col-md-3 col-sm-12 inner-products ">
                        <div class="best-seller most-sold">
                          <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                          <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                          <div class="down">
                            <h3>LOREM ISPUM</h3>
                            <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                            <ul class="bag">
                              <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                            </ul>
                          </div>
                          <img src="images/border.jpg"  class="border"/> </div>
                      </div>
                      <div class="cat1 cat3 col-lg-3  col-md-6 col-sm-12 inner-products ">
                        <div class="best-seller most-sold">
                          <div class="sticker"> <img src="images/sticker.jpg" /> </div>
                          <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="images/girl1.jpg" /> </div>
                          <div class="down">
                            <h3>LOREM ISPUM</h3>
                            <span>$460</span> <img src="images/stars.png" alt="star" class="star"/>
                            <ul class="bag">
                              <li ><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                            </ul>
                          </div>
                          <img src="images/border.jpg"  class="border"/> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
       
            </div>
          </div>
        </div>
	</div>
	</section>
			

<!-- END cutomer favorities -->

<!-- category collection -->

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
<script>
    $(document).ready(function(){

        $("#range_1").ionRangeSlider({
            min: 0,
            max: 5000,
            from: 1000,
            to: 4000,
            type: 'double',
            step: 1,
            prefix: "$",
            prettify: true,
            hasGrid: true
        });
    });
</script> 

<!-- SLIDER REVOLUTION --> 
<script type="text/javascript" src="./js/jquery.themepunch.plugins.min.js"></script> 
<script type="text/javascript" src="./js/jquery.themepunch.revolution.min.js"></script> 
<script type="text/javascript">

	var revapi;
	jQuery(document).ready(function() {
	revapi = jQuery('.tp-banner').revolution(
	{
	delay:10000,
	startwidth:1170,
	startheight:533,
	autoHeight:"off",
	navigationType:"none",
	hideThumbs:10,
	fullWidth:"on",
	fullScreen:"off",
	fullScreenOffsetContainer: ""
	});
	});	
</script> 
<script type="text/javascript">

	$(document).ready(function() {

	
	$(".footer-deal").owlCarousel({
	autoPlay :true,
	stopOnHover : true,
	goToFirstSpeed : 2000,
	slideSpeed:1500,
	singleItem : true,
	autoHeight : true,
	transitionStyle:"goDown",
	paginationNumbers:true
	});	

	$("#tab-recent").owlCarousel({
	autoPlay :true,
	stopOnHover : true,
	navigation:true,
	goToFirstSpeed : 2000,
	slideSpeed:1500,
	singleItem : true,
	autoHeight : true,
	pagination:false,
	transitionStyle:"goDown"
	});

	$("#tab-popular").owlCarousel({
	autoPlay :true,
	stopOnHover : true,
	navigation:true,
	goToFirstSpeed : 2000,
	slideSpeed:1500,
	singleItem : true,
	autoHeight : true,
	pagination:false,
	transitionStyle:"goDown"
	});
	
	var now = new Date();
	var current_year = now.getFullYear();
	var next_year = current_year + 1;

	var target_date = new Date("Jan 1, " + next_year).getTime();

	var days, hours, minutes, seconds;

	var $hours = document.getElementById("h");
	var $minutes = document.getElementById("m");
	var $seconds = document.getElementById("s");

	function update() {
	var current_date = new Date().getTime();
	var seconds_left = (target_date - current_date) / 1000;

	days = parseInt(seconds_left / 86400);
	seconds_left = seconds_left % 86400;

	hours = parseInt(seconds_left / 500);
	seconds_left = seconds_left % 500;

	minutes = parseInt(seconds_left / 60);
	seconds = parseInt(seconds_left % 60);

	$hours.innerHTML = pad(hours, 2);
	$minutes.innerHTML = pad(minutes, 2);
	$seconds.innerHTML = pad(seconds, 2);
	}


	update();

	setInterval(update, 1000);

	function pad(num, size) {
	var s = num+"";
	while (s.length < size) s = "0" + s;
	return s;
	}		

	
	});
	$(".brands").owlCarousel({
	autoPlay: 3000, //Set AutoPlay to 20 seconds
	items : 5
	});
		$("#best-seller").owlCarousel({
	autoPlay :true,
	stopOnHover : true,
	navigation:true,
	goToFirstSpeed : 2000,
	slideSpeed:1500,
	singleItem : true,
	autoHeight : true,
	pagination:false,
	transitionStyle:"goDown"
	});
	
			$("#best-seller-2").owlCarousel({
	autoPlay :true,
	stopOnHover : true,
	navigation:true,
	goToFirstSpeed : 2000,
	slideSpeed:1500,
	singleItem : true,
	autoHeight : true,
	pagination:false,
	transitionStyle:"goDown"
	});
			$("#best-seller-3").owlCarousel({
	autoPlay :true,
	stopOnHover : true,
	navigation:true,
	goToFirstSpeed : 2000,
	slideSpeed:1500,
	singleItem : true,
	autoHeight : true,
	pagination:false,
	transitionStyle:"goDown"
	});
			$("#best-seller-4").owlCarousel({
	autoPlay :true,
	stopOnHover : true,
	navigation:true,
	goToFirstSpeed : 2000,
	slideSpeed:1500,
	singleItem : true,
	autoHeight : true,
	pagination:false,
	transitionStyle:"goDown"
	});
				$("#best-seller-5").owlCarousel({
	autoPlay :true,
	stopOnHover : true,
	navigation:true,
	goToFirstSpeed : 2000,
	slideSpeed:1500,
	singleItem : true,
	autoHeight : true,
	pagination:false,
	transitionStyle:"goDown"
	});
					$("#best-seller-6").owlCarousel({
	autoPlay :true,
	stopOnHover : true,
	navigation:true,
	goToFirstSpeed : 2000,
	slideSpeed:1500,
	singleItem : true,
	autoHeight : true,
	pagination:false,
	transitionStyle:"goDown"
	});
	
						$("#best-seller-7").owlCarousel({
	autoPlay :true,
	stopOnHover : true,
	navigation:true,
	goToFirstSpeed : 2000,
	slideSpeed:1500,
	singleItem : true,
	autoHeight : true,
	pagination:false,
	transitionStyle:"goDown"
	});
	
	
	$("#shop-testimonial").owlCarousel({
	autoPlay: 2000, //Set AutoPlay to 20 seconds
	items : 1,
	itemsDesktop : [1199,1],
	itemsDesktopSmall : [979,1],
	itemsTablet :	[768,1] ,
	itemsMobile :	[479,1],
	pagination:true,
	stopOnHover : true,
	transitionStyle:"goDown",
	paginationNumbers:false,
	autoPlay :true
	
	});

</script>