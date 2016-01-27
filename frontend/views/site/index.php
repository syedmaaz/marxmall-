<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
    <div class="page">
        <header>
            <div class="wrapper">
                <div class="logo"> <img src="images/t1/home-logo.png" /></div>
                <div class="social-media">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li>
                            <div id="wrap">
                                <form action="" autocomplete="on">
                                    <input id="search" name="search" type="text" placeholder="Search">
                                    <input id="search_submit" value="Rechercher" type="submit">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="support">
                    <ul>
                        <li><a href="#">LIVE CHAT</a></li>
                        <li><a href="<?= Yii::$app->urlManager->createUrl(['site/register-store']) ?>">BUY A SHOP</a></li>
						<li><a href="#">REGISTER</a></li>
						<li><a href="#">MY ACCOUNT<span><i class="fa fa-caret-down"></i></span></a></li>
						<li><a href="#">EN<span><i class="fa fa-angle-down"></i></span></a></li>
                    </ul>
                </div>
            </div>
        </header>
        <section>
            <div class="arrow" style="display:none">
                <a class="navigat-btn" href="#shop-catogories"><img src="images/t1/arrow.png" /></a>
            </div>
            <div class="tabs-menu" style="display:none;">
                <ul>
                    <li class="tab-1"><a href="#home">Home<span><img src="images/t1/home-icon.png"/></span></a></li>
                    <li class="tab-2"><a href="#about-us">About Us<span><img src="images/t1/information-icon.png"/></span></a></li>
                    <li class="tab-3"><a href="#testimonials">Testimonials<span><img src="images/t1/pencil.png"/></span></a></li>
					<li class="tab-4"><a href="#garments">Garments<span><img src="images/t1/fax.png"/></span></a></li>
                    <li class="tab-5"><a href="#terms-condition">Terms &amp; conditions<span><img src="images/t1/hand-shake.png"/></span></a></li>
                    <li class="tab-6"><a href="#privacy-policy">Privacy Policy<span><img src="images/t1/lock.png"/></span></a></li>
					<li class="tab-7"><a href="#shop-catogories">Shop-catogories<span><img src="images/t1/book.png"/></span></a></li>
                    <li class="tab-8"><a href="#blog">Blog<span><img src="images/t1/note.png"/></span></a></li>
                </ul>
            </div>
            <div class="tab">
                <div class="wrapper">
                    <div id="home" class="tab-content" style="margin: 192px auto 0">
                        <div class="under-cons">
                            <main>
                                <p>Welcome To</p>
                                <a href="#" class="bounceInDown">
                                    <img src="images/t1/logo.png" alt="Logo" />
                                </a>
                                <h4>First Time online Shopping Mall</h4>
                                <a href="#promotions" class="pulse btn navigat-btn">
                                click to enter <span><i class="fa fa-angle-right"></i></span>
                            </a>
                            </main>
                        </div>
                    </div>
                    <div id="promotions" class="tab-content">
                        <div class="slider-wrapper">
                            <div id="slider">
                                <div class="slide1">
<?php
 $k = 1;
 foreach($sliders as $sid){ ?>
                                    <div class="banner-<?php echo $k;?>"> <img src="<?= Yii::$app->urlManager->getBaseUrl() . '/uploads/' .  $sid->image ?>" /> </div>                                    

<?php $k++;}?>								
                                </div>                                
                            </div>
                            <div id="slider-direction-nav"></div>
                            <div id="slider-control-nav"></div>
                        </div>
                    </div>
                    <script type="text/javascript">
                    $(document).ready(function() {
                        var slider = $('#slider').leanSlider({
                            directionNav: '#slider-direction-nav',
                            controlNav: '#slider-control-nav'
                        });
                    });
                    </script>
                    <div id="garments" class="tab-content">
                        <div class="garments" id="garments-slide">
                            <div class="garments-tp-bar">
                               <div> <a class="navigat-btn" style="background-color: #880606;border-color: #880606;color: #fff;float: left;font-weight: bold;margin: 20px 37px;text-decoration:none;padding: 6px 10px;text-align: center;"   href="#shop-catogories">Back</a>
							   </div>
							   <div style=" margin: 0 42px;width: 12%;">
								<h3>GARMENTS</h3>								
								</div>
                            </div>
                            <div class="garments-catog">
                                <ul class="garments-list group">
                                    <?php
                                    foreach ($stores as $key => $store_chunk): 
                                       foreach ($store_chunk as $store):  ?>
                                        <li>
                                            <a href="<?= Yii::$app->urlManager->createUrl(['home/index', 'id' => $store->store_id ]) ?>" class="span2">
                                            <img src="<?= Yii::$app->urlManager->getBaseUrl() . '/uploads' . $store->store_picture ?>"/>
                                        </a>
                                        </li>
                                        <?php endforeach; 
                                      endforeach; ?>
                                </ul>
                            </div>
                            <!-- <div class="pagination">
    <ul>
        <li><a>INDEX</a></li>
        <li><a href="#">A</a></li>
        <li><a href="#">B</a></li>
        <li><a href="#">C</a></li>
        <li><a href="#">D</a></li>
        <li><a href="#">E</a></li>
        <li><a href="#">F</a></li>
        <li><a href="#">G</a></li>
        <li><a href="#">H</a></li>
        <li><a href="#">I</a></li>
        <li><a href="#">J</a></li>
        <li><a href="#">K</a></li>
        <li><a href="#">L</a></li>
        <li><a href="#">M</a></li>
        <li><a href="#">N</a></li>
        <li><a href="#">O</a></li>
        <li><a href="#">P</a></li>
        <li><a href="#">Q</a></li>
        <li><a href="#">R</a></li>
        <li><a href="#">S</a></li>
        <li><a href="#">T</a></li>
        <li><a href="#">U</a></li>
        <li><a href="#">V</a></li>
        <li><a href="#">W</a></li>
        <li><a href="#">X</a></li>
        <li><a href="#">Y</a></li>
        <li><a href="#">Z</a></li>
    </ul>
</div>
 -->
                        </div>
                    </div>
                    <div id="shop-catogories" class="tab-content">
                        <div class="garments">
                            <div class="garments-tp-bar">
                                <h3>SHOP CATOGORIES:</h3>
                            </div>
                            <div class="garments-catog">
                                <ul class="garments-list group">
                                    <?php
                                    foreach ($categories as $key => $cat_chunk):
                                       foreach ($cat_chunk as $cat):  ?>
                                        <li>
                                            <a href="#garments" class="span2 navigat-btn">
                                            <img src="<?= Yii::$app->urlManager->getBaseUrl() . '/uploads' .  $cat->cat_pic ?>"/>
                                        </a>
                                        </li>
                                        <?php endforeach; ?>
                                            <?php endforeach; ?>
                                </ul>
                            </div>
                            <!--   <div class="pagination">
                            <ul>
                                <li><a>INDEX</a></li>
                                <li><a href="#">A</a></li>
                                <li><a href="#">B</a></li>
                                <li><a href="#">C</a></li>
                                <li><a href="#">D</a></li>
                                <li><a href="#">E</a></li>
                                <li><a href="#">F</a></li>
                                <li><a href="#">G</a></li>
                                <li><a href="#">H</a></li>
                                <li><a href="#">I</a></li>
                                <li><a href="#">J</a></li>
                                <li><a href="#">K</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">M</a></li>
                                <li><a href="#">N</a></li>
                                <li><a href="#">O</a></li>
                                <li><a href="#">P</a></li>
                                <li><a href="#">Q</a></li>
                                <li><a href="#">R</a></li>
                                <li><a href="#">S</a></li>
                                <li><a href="#">T</a></li>
                                <li><a href="#">U</a></li>
                                <li><a href="#">V</a></li>
                                <li><a href="#">W</a></li>
                                <li><a href="#">X</a></li>
                                <li><a href="#">Y</a></li>
                                <li><a href="#">Z</a></li>
                            </ul>
                        </div> -->
                        </div>
                    </div>
                    <!-- <div id="register-shop" class="tab-content">
                    <div class="garments" id="garments-slide">
                        <div class="col-lg-12">
                            <?php $form = ActiveForm::begin(['id' => 'form-signup', 'options' => ['enctype' => 'multipart/form-data']]); ?>
                                <?php if(\Yii::$app->user->isGuest): ?>
                                    <?= $form->field($userModel, 'username') ?>
                                    <?= $form->field($userModel, 'email') ?>
                                    <?= $form->field($userModel, 'password')->passwordInput() ?>
                                <?php endif;?>
                                <?= $form->field($storeModel, 'store_name')->textInput(['maxlength' => 100]) ?>
                                <?= $form->field($storeModel, 'store_desc')->textarea(['rows' => 6]) ?>
                                <?= $form->field($storeModel, 'file')->fileInput() ?>
                                <div class="form-group">
                                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                                </div>
                                <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div> -->
                    <div id="about-us" class="tab-content">
                        <div class="about-us">
                            <div class="about-tp-bar">
                                <h3><?php echo $about_us->cms_name;?></h3>
                            </div>
                            <div class="about-us-main">
                                <?php echo $about_us->cms_content;?>
                            </div>
                        </div>
                    </div>
                     <div id="testimonials" class="tab-content">
                    <div class="testimonials">
                        <div class="testimonials-tp-bar">
                            <h3>Testimonials</h3>
                        </div>
                        <div class="testimonials-main">
                            <div class="wrapper-2">
                                 <?php 
                                 foreach ($testimonials as $key => $testi): ?>
                                <div class="testimonials-1">
                                    <div class="testimonials-a"> <img style="height:100px;width:100px" src="<?php echo Yii::$app->urlManager->getBaseUrl() . '/uploads/testimonial/' .$testi->image;?>" /> </div>
                                    <div class="testimonials-b">
                                    <?php echo $testi->comment;?>
                                    </div>
                                </div>
                                <?php endforeach;?>                               
                            </div>
                        </div>
                    </div>
                </div>
                    <div id="blog" class="tab-content">
                        <div class="blog">
                            <div class="blog-tp-bar">
                                <h3>Blogs</h3>
                            </div>
                            <div class="blog-main">
                                <div class="wrapper-2">
                                    <?php foreach ($blogs as $key => $b):  ?>
                                        <div class="blogs-1">
                                            <div class="blog-a">
                                                <ul>
                                                    <li>
                                                        <p>
                                                            <?php echo date("M", strtotime($b->created_at)); ?>
                                                        </p>
                                                    </li>
                                                    <li><span><?php echo date("d", strtotime($b->created_at)); ?></span></li>
                                                </ul>
                                            </div>
                                            <div class="blog-b">
                                                <p><?php echo $b->title;?><p>
                                                    <h5>Posted by <span>Admin</span></h5>
                                                    <?php echo $b->content;?>
                                                        <ul>
                                                            <li><a href="#">Read more</a></li>
                                                            <!--   <li><a href="#">No comments</a></li> -->
                                                        </ul>
                                            </div>
                                            <div class="blog-img"> <img width="150px" height="150px" src="<?php echo Yii::$app->urlManager->getBaseUrl() . '/uploads/blog/' .$b->image_url;?>" /> </div>
                                        </div>
                                        <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="privacy-policy" class="tab-content">
                        <div class="privacy-policy">
                            <div class="privacy-policy-tp-bar">
                                <h3><?php echo $pp->cms_name ?></h3>
                            </div>
                            <div class="privacy-policy-main">
                                    <div class="privacy-policy-list">
                                       <?php echo $pp->cms_content; ?>                              
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div id="terms-condition" class="tab-content">
                        <div class="terms-condition">
                            <div class="terms-condition-tp-bar">
                                <h3><?php echo $tc->cms_name ?></h3>
                            </div>
                            <div class="terms-condition-main">
                                    <div class="terms-condition-list">
                                                <?php echo $tc->cms_content; ?>                             
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="brands-slider" style="display:none;">
            <div class="internal-navbar">
                <div class="panel-body">
                    <ul class="tiles">
                        <li class="tile"> <img src="images/t1/lasenza.png" /> </li>
                        <li class="tile"> <img src="images/t1/canon.png" /> </li>
                        <li class="tile"> <img src="images/t1/puma.png" /> </li>
                        <li class="tile"> <img src="images/t1/sony.png" /> </li>
                        <li class="tile"> <img src="images/t1/nike.png" /> </li>
                        <li class="tile"> <img src="images/t1/dg.png" /> </li>
                        <li class="tile"> <img src="images/t1/levisb.png" /> </li>
                        <li class="tile"> <img src="images/t1/fender.png" /> </li>
                        <li class="tile"> <img src="images/t1/rayban.png" /> </li>
                        <li class="tile"> <img src="images/t1/br.png" /> </li>
                        <li class="tile"> <img src="images/t1/levisb.png" /> </li>
                        <li class="tile"> <img src="images/t1/fender.png" /> </li>
                        <li class="tile"> <img src="images/t1/rayban.png" /> </li>
                    </ul>
                </div>
                <span class="button left hide" id="page-left"></span> <span class="button right" id="page-right"></span> </div>
            <p>All Rights Reserved By Marx Mall</p>
        </div>
    </div>
