<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Effloresce by FCT</title>
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
    <div id="wrapper">
        <div id="header-wrapper">
            <div id="header">
                <div class="recommended_items">
                    <!--recommended_items-->
                    <br />
                    <h2 class="title text-center">Popular News</h2><br /><br />

                    <div class="cycle-slideshow" data-cycle-fx=carousel data-cycle-timeout=5000 data-cycle-carousel-visible=5 data-cycle-carousel-fluid=true data-cycle-slides="div.item" data-cycle-prev="#prev" data-cycle-next="#next">
                        <?php foreach ($sliderNews as $sliderItem) : ?>
                            <div class="item">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <p><a href="/news/<?php echo $sliderItem['id']; ?>">
                                                    <img src="/template/images/pic02.jpg" width="180" height="180" alt="" />
                                                </a></p>
                                            <p><a href="/news/<?php echo $sliderItem['id']; ?>">
                                                    <?php echo mb_strimwidth($sliderItem['title'], 0, 30, "..."); ?>
                                                </a></p>
                                                <p><?php echo $sliderItem['COUNT(comm.comment)'] ?> comment(s)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!--/recommended_items-->
        </div>
    </div>
    <!-- end #header -->