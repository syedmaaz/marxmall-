<?php
use yii\bootstrap\Nav;

?>
<aside class="left-side sidebar-offcanvas">

    <section class="sidebar">

        <?php if (!Yii::$app->user->isGuest) : ?>
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?= $directoryAsset ?>/img/avatar5.png" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p>Hello, <?= @Yii::$app->user->identity->username ?></p>
                    <a href="<?= $directoryAsset ?>/#">
                        <i class="fa fa-circle text-success"></i> Online
                    </a>
                </div>
            </div>
        <?php endif ?>

        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i
                                        class="fa fa-search"></i></button>
                            </span>
            </div>
        </form>

        <?php
        //       echo  Nav::widget(
        //            [
        //                'encodeLabels' => false,
        //                'options' => ['class' => 'sidebar-menu'],
        //                'items' => [
        //                    [
        //                        'label' => '<span class="fa fa-angle-down"></span><span class="text-info">Menu Yii2</span>',
        //                        'url' => '#'
        //                    ],
        //                    ['label' => '<span class="fa fa-file-code-o"></span> Gii', 'url' => ['/gii']],
        //                    ['label' => '<span class="fa fa-dashboard"></span> Debug', 'url' => ['/debug']],
        //                ],
        //            ]
        //        );
        ?>

        <!-- You can delete next ul.sidebar-menu. It's just demo. -->

        <ul class="sidebar-menu">
            <!--            <li>-->
            <!--                <a href="#" class="navbar-link">-->
            <!--                    <i class="fa fa-angle-down"></i> <span class="text-info">Menu AdminLTE</span>-->
            <!--                </a>-->
            <!--            </li>-->
            <li class="active">
                <a href="">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <!--            <li>-->
            <!--                <a href="--><? //= $directoryAsset ?><!--/pages/widgets.html">-->
            <!--                    <i class="fa fa-th"></i> <span>Widgets</span>-->
            <!--                    <small class="badge pull-right bg-green">new</small>-->
            <!--                </a>-->
            <!--            </li>-->

            <li class="treeview">
                <a href="<?= Yii::$app->urlManager->createUrl('product') ?>">
                    <i class="fa fa-briefcase"></i>
                    <span>Product</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?= Yii::$app->urlManager->createUrl(['product']) ?>">
                            <i class="fa fa-angle-double-right"></i> All Product
                        </a>
                    </li>
                    <li>
                        <a href="<?= Yii::$app->urlManager->createUrl(['product/create']) ?>">
                            <i class="fa fa-angle-double-right"></i> Add Product
                        </a>
                    </li>
                    <li>
                        <a href="<?= Yii::$app->urlManager->createUrl('product') ?>">
                            <i class="fa fa-angle-double-right"></i>
                            Search
                        </a>
                    </li>

                </ul>
            </li>
            <li class="treeview">
                <a href="<?= Yii::$app->urlManager->createUrl('store') ?>/#">
                    <i class="fa fa-street-view"></i>
                    <span>Stores</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <li>
                        <a href="<?= Yii::$app->urlManager->createUrl('store') ?>">
                            <i class="fa fa-angle-double-right"></i>
                            All Store
                        </a>
                    </li>
                    <li>
                        <a href="<?= Yii::$app->urlManager->createUrl('store/create') ?>">
                            <i class="fa fa-angle-double-right"></i>
                            Add New store
                        </a>
                    </li>
                    <li>
                        <a href="<?= Yii::$app->urlManager->createUrl('store')?>">
                            <i class="fa fa-angle-double-right"></i>
                            Search
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="<?= Yii::$app->urlManager->createUrl('category') ?>/#">
                    <i class="fa fa-edit"></i> <span>Categories</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?= Yii::$app->urlManager->createUrl('category') ?>">
                            <i class="fa fa-angle-double-right"></i>
                            All Categories</a>
                    </li>
                    <li>
                        <a href="<?= Yii::$app->urlManager->createUrl('category/create') ?>">
                            <i class="fa fa-angle-double-right"></i>
                            Add New Category</a>
                    </li>
                    <li>
                        <a href="<?= Yii::$app->urlManager->createUrl('category') ?>">
                            <i class="fa fa-angle-double-right"></i>
                            Advanced Elements</a>
                    </li>

                </ul>
            </li>
            <li class="treeview">
                <a href="<?= Yii::$app->urlManager->createUrl('order') ?>">
                    <i class="fa fa-table"></i>
                    <span>Orders</span>

                    <small class="badge pull-right bg-red">3</small>
                </a>

            </li>
<!--            <li>-->
<!--                <a href="--><?//= $directoryAsset ?><!--/pages/calendar.html">-->
<!--                    <i class="fa fa-calendar"></i> <span>Calendar</span>-->
<!--                    <small class="badge pull-right bg-red">3</small>-->
<!--                </a>-->
<!--            </li>-->
            <li>
                <a href="<?= Yii::$app->urlManager->createUrl('store-owner') ?>">
                    <i class="fa fa-user"></i>
                    <span>Store Owner </span>
                    <small class="badge pull-right bg-yellow">12</small>
                </a>
            </li>
<!--            <li class="treeview">-->
<!--                <a href="--><?//= $directoryAsset ?><!--/#">-->
<!--                    <i class="fa fa-folder"></i> <span>Examples</span>-->
<!--                    <i class="fa fa-angle-left pull-right"></i>-->
<!--                </a>-->
<!--                <ul class="treeview-menu">-->
<!--                    <li>-->
<!--                        <a href="--><?//= $directoryAsset ?><!--/pages/examples/invoice.html">-->
<!--                            <i class="fa fa-angle-double-right"></i> Invoice</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="--><?//= $directoryAsset ?><!--/pages/examples/login.html"><i-->
<!--                                class="fa fa-angle-double-right"></i> Login</a>-->
<!--                    </li>-->
<!--                    <li><a href="--><?//= $directoryAsset ?><!--/pages/examples/register.html"><i-->
<!--                                class="fa fa-angle-double-right"></i> Register</a>-->
<!--                    </li>-->
<!--                    <li><a href="--><?//= $directoryAsset ?><!--/pages/examples/lockscreen.html"><i-->
<!--                                class="fa fa-angle-double-right"></i> Lockscreen</a>-->
<!--                    </li>-->
<!--                    <li><a href="--><?//= $directoryAsset ?><!--/pages/examples/404.html"><i-->
<!--                                class="fa fa-angle-double-right"></i> 404 Error</a></li>-->
<!--                    <li><a href="--><?//= $directoryAsset ?><!--/pages/examples/500.html"><i-->
<!--                                class="fa fa-angle-double-right"></i> 500 Error</a></li>-->
<!--                    <li><a href="--><?//= $directoryAsset ?><!--/pages/examples/blank.html"><i-->
<!--                                class="fa fa-angle-double-right"></i> Blank Page</a></li>-->
<!--                </ul>-->
<!--            </li>-->

			<li class="treeview">
                <a href="<?= Yii::$app->urlManager->createUrl('cms') ?>">
                    <i class="fa fa-table"></i>
                    <span>Content Management System</span>
                    <small class="badge pull-right bg-red"></small>
                </a>
            </li>
			<li class="treeview">
                <a href="<?= Yii::$app->urlManager->createUrl('testimonial') ?>">
                    <i class="fa fa-user"></i>
                    <span>Testimonials</span>
                    <small class="badge pull-right bg-red"></small>
                </a>
            </li>
			<li class="treeview">
                <a href="<?= Yii::$app->urlManager->createUrl('blog') ?>">
                    <i class="fa fa-user"></i>
                    <span>Blogs</span>
                    <small class="badge pull-right bg-red"></small>
                </a>
            </li>
        </ul>		
		
    </section>

</aside>
