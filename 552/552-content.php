<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-552">
    <div class="container">
        <div class="row">
            <div class="img-product">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="detail_left">
                        <div class="product-img-box">
                            <div class="image">
                                <img src="<?php echo $url_path ?>/images/image1.jpg"  alt="">
                            </div>

                            <div class="frameswiper">
                                <!-- Swiper -->
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="<?php echo $url_path ?>/images/image2.jpg" width="100" height="105" alt="" class="click">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="<?php echo $url_path ?>/images/image3.jpg" width="100" height="105" alt="" class="click">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="<?php echo $url_path ?>/images/image4.jpg" width="100" height="105" alt="" class="click">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="<?php echo $url_path ?>/images/image4.jpg" width="100" height="105" alt="" class="click">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="<?php echo $url_path ?>/images/image4.jpg" width="100" height="105" alt="" class="click">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="<?php echo $url_path ?>/images/image4.jpg" width="100" height="105" alt="" class="click">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="<?php echo $url_path ?>/images/image1.jpg" width="100" height="105" alt="" class="click">
                                            </figure>
                                        </div>

                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                    <div class="swiper-button-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="detail_right">
                            <div class="product-name">
                                <h1> CHI TIẾT SẢN PHẨM </h1>
                            </div>


                            <div class="short-description">
                                <a href="#">Product one</a> dolor sit amet, consectetur adipiscing elit.
                                Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo,
                                eget vulputate orci purus ut lorem. In fringilla mi in ligula.
                                Pellentesque aliquam quam vel dolor. every item is a vital part of a woman's wardrobe.
                                Pellentesque aliquam quam vel dolor. every item is a vital part of a woman's wardrobe.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend,
                                quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi
                                Pellentesque aliquam quam vel dolor. every item is a vital part of a woman's wardrobe.
                                Pellentesque aliquam quam vel dolor. every item is a vital part of a woman's wardrobe.
                                Pellentesque aliquam quam vel dolor. every item is a vital part of a woman's wardrobe.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend,
                                quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi
                                Pellentesque aliquam quam vel dolor. every item is a vital part of a woman's wardrobe.
                                Pellentesque aliquam quam vel dolor. every item is a vital part of a woman's wardrobe.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend,
                                quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi
                                Pellentesque aliquam quam vel dolor. every item is a vital part of a woman's wardrobe.
                                Pellentesque aliquam quam vel dolor. every item is a vital part of a woman's wardrobe.
                                Pellentesque aliquam quam vel dolor. every item is a vital part of a woman's wardrobe.

                            </div>
                            <div class="sku">
                                <span>Giá: </span>
                                    <b>100$</b>

                            </div>
                            <div class="add">
                                <button class="btnadd">
                                    <span>ADD TO CART</span>
                                </button>
                            </div>


                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>