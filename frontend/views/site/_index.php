<nav id="main-nav">

    <div id="nav-container">

        <ul id="nav" data-mobile="Go To">
            <li id="menu-item-107"
                class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5 current_page_item active menu-item-107">
                <a href="#intro">Home</a>
            </li>
            <li id="menu-item-110"
                class="menu-item menu-item-type-post_type menu-item-object-page active menu-item-110"
                data-toggle="modal" data-target=".live_chat">
                <a data-toggle="modal" data-target=".bs-example-modal-sm">Live Chat</a>
            </li>
            <!-- <li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109">
                <a href="#our-services">Buy a Shop</a>
            </li>
            <li id="menu-item-108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108">
                <a href="#register">Register</a>
            </li>
            <li id="menu-item-117" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-117">
                <a href="#contact">My Account</a>
            </li> -->
        </ul>

        <a href="" class="logo">
            <img alt="logo" src="images/logo.png">
        </a>

        <div id="nav-social">
            <div class='social-btn'>
                <a href="#">
                    <i class="fb"></i>
                </a>
                <a href="#">
                    <i class="gplus"></i>
                </a>
                <a href="#">
                    <i class="twt"></i>
                </a>
                <a href="#">
                    <i class="insta"></i>
                </a>
            </div>
        </div>

        <a href="#" id="responsive-nav">
            <i class="icon-list"></i>
        </a>
    </div>
</nav>

<nav id="side-nav" style="display: none">

    <a href="" style="width: 82px;right: 44px;">
        <span>Home</span> <i class="home-ico"></i>
    </a>

    <a href="" style="width: 101px;right: 64px;">
        <span>About Us</span> <i class="about-ico" style="background-position: 0 -47px;"></i>
    </a>

    <a href="" style="width: 116px;right: 80px;">
        <span>Testimonial</span> <i class="edit-ico" style="background-position: 0 -95px;"></i>
    </a>

    <a href="" style="width: 110px;right: 73px;">
        <span>Contact us</span> <i class="edit-ico" style="background-position: 0 -140px;"></i>
    </a>

    <a href="" style="width: 171px;right: 134px;">
        <span>Term and Condition</span> <i class="1-ico" style="background-position: 0 -182px;"></i>
    </a>

    <a href="" style="width: 129px;right: 92px; ">
        <span>Privacy Policy</span> <i class="2-ico" style="background-position: 0 -232px;"></i>
    </a>

    <a href="" style="width: 71px;right: 34px;">
        <span>Blog</span> <i class="3-ico" style="background-position: 0 -278px;"></i>
    </a>

    <a href="" style="width: 108px;right: 66px;">
        <span>Classified</span> <i class="4-ico" style="background-position: 0 -327px;right: 3px;width: 36px;"></i>
    </a>

</nav>

<section id="intro" class="section intro"
        style="background-image: url('images/background.jpg')">
    <div class="container">
        <div class="row">
            <img src="images/welcome.png" style="height: auto;max-width: 490px;">
            <a class="get-started content-menu-link" href="#live_chat">
                <img src="images/enter_btn.png" style="width: 28%;">
            </a>
        </div>
    </div>
</section>


<section class="section" id="live_chat">

    <a href="#intro" class="prev-btn">
        <img src="images/prev-btn.png"/>
    </a>
    <a href="#our-services" class="next-btn">
        <img src="images/next-btn.png"/>
    </a>

    <div class="container content">
        <div class="row-fluid">
            <div class="span12">
                <!--<h1>About</h1>-->

                <div class="row-fluid">

                    <div class="span6">
                        <img src="images/shop_img1.jpg" style="width: 502px; height: 431px;"/>
                    </div>
                    <div class="span3">
                        <img src="images/shop_img2.jpg"/>
                    </div>
                    <div class="span3">
                        <img src="images/shop_img3.jpg" style="    height: 208px;"/>
                        <img src="images/shop_img4.jpg"/>
                    </div>

                </div>


            </div>
        </div>
    </div>
</section>

<section class="section" id="our-services">

    <a href="#live_chat" class="prev-btn">
        <img src="images/prev-btn.png"/>
    </a>

    <a href="#register" class="next-btn">
        <img src="images/next-btn.png"/>
    </a>

    <div class="container content">

        <h1>SHOP CATEGORY</h1>

        <div class="row gallery garments">

            <?php
            foreach ($categories as $key => $cat_chunk):
                ?>
                <div class="row">

                    <?php
                    foreach ($cat_chunk as $cat):
                        ?>

                        <a href="#register" class="span2">

                            <img style="height: 148px;" src="<?= Yii::$app->urlManager->getBaseUrl() . '/uploads' . $cat->cat_pic ?>"/>

                            <div class="view-store">
                                <img src="images/view-store.png"/>
                            </div>
                        </a>

                    <?php endforeach; ?>
                </div>

            <?php endforeach; ?>


           <!--  <div class="index">

                <a href=""> INDEX </a>
                <a href=""> A </a>
                <a href=""> B </a>
                <a href=""> C </a>
                <a href=""> D </a>
                <a href=""> E </a>
                <a href=""> F </a>
                <a href=""> G </a>
                <a href=""> H </a>
                <a href=""> I </a>
                <a href=""> J </a>
                <a href=""> K </a>
                <a href=""> L </a>
                <a href=""> M </a>
                <a href=""> N </a>
                <a href=""> O </a>
                <a href=""> P </a>
                <a href=""> K </a>
                <a href=""> R </a>
                <a href=""> S </a>
                <a href=""> T </a>
                <a href=""> U </a>
                <a href=""> V </a>
                <a href=""> X </a>
                <a href=""> Y </a>
                <a href=""> Z </a>
            </div>
 -->
        </div>

    </div>
</section>

<section class="section portfolio" id="register">

    <a href="#our-services" class="prev-btn">
        <img src="images/prev-btn.png"/>
    </a>

    <a href="" class="next-btn">
        <img src="images/next-btn.png"/>
    </a>

    <div class="container content">

        <h1>GARMENTS</h1>


        <?php
        foreach ($stores as $key => $store_chunk): ?>

        <div class="row gallery garments">

            <div class="row">

                <?php foreach ($store_chunk as $store): ?>
                    <a href="<?= Yii::$app->urlManager->createUrl(['home/index']) ?>" class="span2">

                        <img style="height: 148px;" src="<?= Yii::$app->urlManager->getBaseUrl() . '/uploads' . $store->store_picture ?>"/>

                        <div class="view-store">
                            <img src="images/view-store.png"/>
                        </div>
                    </a>
                <?php endforeach; ?>


            </div>
            <?php endforeach; ?>


            <!-- <div class="index">

                <a href=""> INDEX </a>
                <a href=""> A </a>
                <a href=""> B </a>
                <a href=""> C </a>
                <a href=""> D </a>
                <a href=""> E </a>
                <a href=""> F </a>
                <a href=""> G </a>
                <a href=""> H </a>
                <a href=""> I </a>
                <a href=""> J </a>
                <a href=""> K </a>
                <a href=""> L </a>
                <a href=""> M </a>
                <a href=""> N </a>
                <a href=""> O </a>
                <a href=""> P </a>
                <a href=""> K </a>
                <a href=""> R </a>
                <a href=""> S </a>
                <a href=""> T </a>
                <a href=""> U </a>
                <a href=""> V </a>
                <a href=""> X </a>
                <a href=""> Y </a>
                <a href=""> Z </a>
            </div> -->

        </div>

    </div>

</section>
<section class="section contacts" id="contact">

    <a href="#portfolio" class="prev-btn">
        <img src="images/prev-btn.png"/>
    </a>

    <div class="container">

    </div>


</section>

<div id="store-slider" >

    <div class="slider">
        <div><img src="images/store_1.png"/></div>
        <div><img src="images/store_2.png"/></div>
        <div><img src="images/store_3.png"/></div>
        <div><img src="images/store_4.png"/></div>
        <div><img src="images/store_5.png"/></div>
        <div><img src="images/store_6.png"/></div>
        <div><img src="images/store_7.png"/></div>
        <div><img src="images/store_8.png"/></div>
        <div><img src="images/store_9.png"/></div>
        <div><img src="images/store_10.png"/></div>
        <div><img src="images/store_7.png"/></div>
        <div><img src="images/store_8.png"/></div>
    </div>

</div>

<footer style="display: none">
    <span>ALL RIGHT RESERVED BY MARX MALL</span>
</footer>


<div class="modal hide fade live_chat" tabindex="-100000" role="dialog" aria-labelledby="mySmallModalLabel"
     aria-hidden="true">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>

        <h3>Send me a message</h3>
    </div>
    <div class="modal-body">
        <form class="contact" name="contact">
            <label class="label" for="name">Your Name</label><br>
            <input style="border: 1px solid black !important;" type="text" name="name" class="input-xlarge"><br>
            <label class="label" for="email">Your E-mail</label><br>
            <input style="border: 1px solid black !important;" type="email" name="email" class="input-xlarge"><br>
            <label class="label" for="message">Enter a Message</label><br>
            <textarea style="border: 1px solid black !important;" name="message" class="input-xlarge"></textarea>
        </form>
    </div>
    <div class="modal-footer">
        <input class="btn btn-success" type="submit" value="Send!" id="submit">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>
<!--<div id="thanks" style="-->
<!--    position: fixed;    top: 45px;    left: 16px;    z-index: 99999999999999;-->
<!--"><p><!-- Large modal -->-->
<!--        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>-->
<!---->
<!--    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">-->
<!--        <div class="modal-dialog modal-lg">-->
<!--            <div class="modal-content">-->
<!--                ...-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <!-- Small modal -->-->
<!--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>-->
<!---->
<!--    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">-->
<!--        <div class="modal-dialog modal-sm">-->
<!--            <div class="modal-content">-->
<!--                ...-->
<!--            </div>-->
<!--        </div>-->
<!--    </div><a data-toggle="modal" data-target="#form-content" href="#form-content" class="btn btn-primary btn-large">Modal powers, activate!</a>-->
<!---->
<!--        <!-- Large modal -->-->
<!--        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>-->
<!---->
<!--    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">-->
<!--        <div class="modal-dialog modal-lg">-->
<!--            <div class="modal-content">-->
<!--                ...-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <!-- Small modal -->-->
<!--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>-->
<!---->
<!--    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">-->
<!--        <div class="modal-dialog modal-sm">-->
<!--            <div class="modal-content">-->
<!--                ...-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!---->
<!--    </p></div>-->