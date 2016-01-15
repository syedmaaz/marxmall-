<div class="container">
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

<div class="row">
    <div class="container col-md-12" style="font-size: 18px;color: #fe735d;">
        <h3>Shop By</h3>
    </div>
</div>

<div id="prod-list" class="row">

<div class="col-sm-3 col-lg-3 col-md-3 pull-left filter-panel">

</div>

<div class="col-sm-9 col-lg-9 col-md-9 row carousel container">

<div class="col-sm-12 col-lg-12 col-md-12 row banner">
    <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/banner.jpg">
</div>

<div class=" col-sm-12 col-lg-12 col-md-12  row ">

    <div class="sort-panel">
        <div class=" col-sm-6 col-lg-6 col-md-6 row ">
            <div class="col-sm-2 col-lg-2 col-md-2 grid-list">

                <div class="grid">
                    <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/grid_list.png" alt="">
                </div>

                <div class="list">
                </div>

            </div>

            <div class="col-sm-6 col-lg-6 col-md-6 sort-by">
                <label>Sort By</label>

                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
                        Size
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">All</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class=" col-sm-6 col-lg-6 col-md-6 row pull-right ">

            <div class="col-sm-4 col-lg-4 col-md-4 pull-right compare-btn">
                <img src="<?php echo Yii::getAlias('@web') ?>/images/t2/compare-btn.png" alt="">
            </div>

            <div class="col-sm-6 col-lg-6 col-md-6 pull-right show-dropdown">


                <label>Show</label>

                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
                        --
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">9</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">8</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">7</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
                    </ul>
                </div>


            </div>

        </div>
    </div>

</div>
<?php
$prod_chunk = array_chunk($product, 3);
foreach($prod_chunk as $key => $products):
?>
<div class=" col-sm-12 col-lg-12 col-md-12  row item active">

    <?php foreach($products as $key => $prod): ?>

    <div class="product col-sm-4 col-lg-4 col-md-4">

        <div class="thumbnail">
            <img src="http://placehold.it/280x355" alt="">

            <div class="caption">

                <h4 class="pull-right">$24.99</h4>
                <h4><a href="#">First Product</a>

                </h4></div>
            <div class="ratings">
                <a class="pull-right">
                    <img class="add-to-bag" src="<?php echo Yii::getAlias('@web') ?>/images/t2/add-to-bag.png" alt="">
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
        <img class="product-bottom-border" src="<?php echo Yii::getAlias('@web') ?>/images/t2/product-bottom-border.png" alt=""/>
    </div>

    <?php endforeach;?>

</div>

<?php endforeach;?>
    

</div>

</div>


</div>