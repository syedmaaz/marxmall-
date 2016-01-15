<?php
use common\models\Product;
use common\models\ProductMeta;

?>
<section class="container">
    <div class="block ">
      <div class="row header-background">
        <div class="col-lg-12 margin-top-16 home">
          <ul class="list-inline list-unstyled">
            <li><a href="#">Home</a></li>
            <li><a href="#">Clothing</a></li>
          </ul>
        </div>
        <div class="col-sm-12">
          <div class="">
            <div class="col-md-9 margin-20">
              <div class="row">
                <div class="col-md-6">
                  <div class="single-product-tab">
                    <div class="tab-content" id="single-post-content">
                        <div id="single-post1" class="tab-pane fade in active">
                            <div class=""> 
                                 
                                 <?php if (isset($prod->productImg[0])) { ?>
                                    <img style="height: 466px; width: 370px;" src='<?= Yii::$app->urlManager->getBaseUrl() . '/uploads/product/' .$prod->productImg[0]->meta_value ?>' alt=""/>
                                <?php } else { ?>
                                    <img src="http://placehold.it/280x355" alt="">
                                <?php } ?>
                                <div class="down-1"> <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/product-bottom-border.png"> </div>
                            </div>
                        </div>
                      <div id="single-post2" class="tab-pane fade"> <img src="./images/single-post22.jpg" alt=""> </div>
                      <div id="single-post3" class="tab-pane fade"> <img src="./images/single-post33.jpg" alt=""> </div>
                    </div>
                    <ul class="nav nav-tabs" id="single-post-tabs">
                      <!-- <li class="active"><a data-toggle="tab" href="#single-post1"><img src="./images/single-post1.jpg" alt=""></a></li>
                      <li><a data-toggle="tab" href="#single-post2"><img src="./images/single-post2.jpg" alt=""></a></li>
                      <li><a data-toggle="tab" href="#single-post3"><img src="./images/single-post3.jpg" alt=""></a></li> -->
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="single-post-desc">
                    <div class="single-post-head">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li class="un-rate"><i class="fa fa-star"></i></li>
                      </ul>
                      <span><i>LIMITED</i>$<?= $prod->prod_price ?></span>
                      <p>Product Id: <?= $prod->prod_id ?></p>
                      <h3><?= $prod->prod_name ?></h3>
                    </div>
                    <div class="choose-size-tab">
                      <div class="tab-content" id="product-sizes">
                        <div id="size-xl" class="tab-pane fade in active">
                            <p><?= $prod->prod_desc ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="cart-options social">
                      <ul class="social-btns  padding-0">
                        <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" title=""><i class="fa fa-rss"></i></a></li>
                      </ul>
                      <ul class="social-btns  padding-0">
                        <li><a href="#" title="" class="mrgin"><i class="fa fa-envelope-o"></i></a></li>

                      </ul>
                      
                    </div>
                    <div class="shipping-link"> <a href="#">Shipping Weight:0,4 kg <i class="fa fa-question-circle"></i></a> </div>
                    <div class="form-inline col-md-10 padding-0 clor-price">
                      <label class="control-label" for="HEAR_ABOUT_US">Color :</label>
                      <select name="HEAR_ABOUT_US" id="HEAR_ABOUT_US" class="form-control full-width valid" required="" aria-required="true" aria-invalid="false">
                        <option value="1">Purple</option>
                        <option value="1">Blue</option>
                        <option value="3">Green</option>
                        <option value="6">Yellow </option>
                        <option value="7">Other</option>
                      </select>
                    </div>
                    <div class="form-inline col-md-10 margin-top-16 padding-0 clor-price">
                      <label class="control-label" for="HEAR_ABOUT_US">Size:</label>
                      <select name="HEAR_ABOUT_US" id="HEAR_ABOUT_US" class="form-control full-width valid" required="" aria-required="true" aria-invalid="false">
                        <option value="1">Large</option>
                        <option value="1">Extra Large</option>
                        <option value="3">Small</option>
                        <option value="6">Extra Small
                      </option></select>
                    </div>
                    <div class="margin-top-60 buy"><a href="" class="buy-now" data-prod="<?= $prod->prod_id ?>">Buy Now</a> </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="product-details">
                  
                    <h3>Product details</h3>
                    <ul>
                      <li>
                        <h3>Other Detail Of Product Name</h3>
                      </li>
                      <li><span>Product Id :</span>
                        <p><?= $prod->prod_id ?></p>
                      </li>
                      <!-- <li><span>SKU</span>
                        <p>Lorem Ispum Generator</p>
                      </li> -->

                      <?php
                        $metas = $prod->productMetas;
                        foreach ($metas as $meta):
                            if ($meta->meta_key == 'prod_img') continue;
                            ?>
                            <li>
                                <span><?= $meta->meta_key ?></span>
                                <p><?= $meta->meta_value ?></p>
                            </li>
                            
                        <?php endforeach; ?>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 margin-20 ">
              <div class="information">
                <ul class="list-unstyled ">
                  <li><img src="<?php echo Yii::getAlias('@web') ?>/images/t2/sticker-1.png"><a href="#">Satisfaction <br>
                    Guranteed</a></li>
                  <li><img src="<?php echo Yii::getAlias('@web') ?>/images/t2/car.png" class="cars"><a href="#">International <br>
                    <span>Shipping Information</span></a></li>
                  <li><img src="<?php echo Yii::getAlias('@web') ?>/images/t2/phone.png" class="cell"><a href="#">Call Us <br>
                    +021 46789111</a></li>
                </ul>
              </div>
              <!-- <div class="also-like">
                <h4>You May Also Like</h4>
                <div class="cat1 cat3 inner-products ">
                  <div class="best-seller most-sold">
                    <div class="best-seller seller2 sold-thumb"> <img class="seller-still" alt="" src="<?php echo Yii::getAlias('@web') ?>/images/t2/girl1.jpg"> </div>
                    <div class="down down-1 down-3">
                      <h3>LOREM ISPUM</h3>
                      <span>$460</span>
                      <div class="stars"><img src="images/stars.png" alt="star" class="star">
                        <ul class="bag">
                          <li><a href="#" title="">ADD TO BAG<i class="fa fa-arrow-right"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <img src="images/border.jpg" class="border"> </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
        <div class="margin-bottom-20">
            <div class="col-lg-12 banner-1 padding-0"> <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/banner.jpg" alt="banner" class="margin-top-21"> </div>
        </div>
      </div>
      
    </div>
  </section>
<!-- <div class="container product-detail">

    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb-list pull-left">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Clothing</a></li>

                </ol>
            </div>
        </div>
    </div>

    <div class="row-fluid">
        <div class="col-md-1 product-gallary">

            <?php
            $prod_img = $prod->productImg;
            foreach ($prod_img as $img):
                ?>
                <img src="<?= Yii::$app->urlManager->getBaseUrl() . '/uploads/product/' .$prod->productImg[0]->meta_value ?>" alt="">
            <?php endforeach; ?>
        </div>

        <div class="col-md-8 product-detail-sect">

       
            <div class="col-md-4 prod-img">
                <?php if(!empty($prod_img)): ?>
                    <img src='<?= Yii::$app->urlManager->getBaseUrl() . '/uploads/product/' .$prod->productImg[0]->meta_value ?>' alt=""/>
                <?php endif; ?>
                <img class="product-bottom-border" src="<?php echo Yii::getAlias('@web') ?>/images/t2/product-bottom-border.png" alt=""/>

            </div>

            <div class="col-md-8">

                <div class="title">
                    Product ID : <?= $prod->prod_id ?>
                    <p><?= $prod->prod_name ?></p>
                </div>

                <div class="price"><?= $prod->prod_price ?></div>

                <p class="prod-disc"><?= $prod->prod_desc ?></p>

                <div class="prod-social social-icons">
                    <div class="fb-icon icon">
                    </div>
                    <div class="twt-icon icon">
                    </div>
                    <div class="gplus-icon icon">
                    </div>
                    <div class="pin-icon icon">
                    </div>
                </div>

                <div class="prod-inq pull-right">
                    <p>
                        Shipping weight: 0.50 kg
                        <i class="ques"></i>
                    </p>
                </div>

                <table class="table dropdown">

                    <tr>
                        <td>
                            <label> Color: </label>
                        </td>
                        <td>
                            <div class="form-group">
                             
                              <select class="form-control" id="sel1">
                                <?php $colors = ProductMeta::getMetaByName($prod->prod_id, 'color');
                                $colors = explode(',', $colors[0]->meta_key)
                                ?>
                                
                                <?php foreach ($colors as $color): ?>
                                    <option value="<?= $color ?>"><?= $color ?></option>
                                <?php endforeach; ?>
                               
                           </select>
                        </div>
                    </tr>


                    <tr>
                        <td>
                            <label> Size: </label>
                        </td>
                        <td>
                            <div class="dropdown">
                                <select class="form-control" id="sel1">
                                    <option value="small">Small</option>
                                    <option value="medium">Medium</option>
                                    <option value="large">Large</option>
                                    <option value="extra-large">Extra Large</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                </table>

                <a href="" class="buy-now" data-prod="<?= $prod->prod_id ?>">Buy Now</a>

            </div>

            <div class="col-lg-12 prod-detail-table">
                <h3>Product Detail</h3>

                <p>Other Details of Product Name</p>

                <div class="col-lg-4">
                    Product ID
                </div>
                <div class="col-lg-6">
                    <?= $prod->prod_id ?>
                </div>

                <?php
                $metas = $prod->productMetas;
                foreach ($metas as $meta):
                    if ($meta->meta_key == 'prod_img') continue;
                    ?>
                    <div class="col-lg-4">
                        <?= $meta->meta_key ?>
                    </div>
                    <div class="col-lg-7">
                        <?= $meta->meta_value ?>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

    </div>

    <div class="col-md-3">
        <img src="images/service-info.png" alt=""/>
    </div>
    <img src="images/ad.png" width="100%" alt=""/>
</div> -->