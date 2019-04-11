<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-36">
    <div class="container">
        <div class="header">
            <div class="row">

                <div class="col-md-6">

                    <div class="header_contai">
                        <p>Wrlcover to virut over writer <a href="#"> Nark(riday 50% al) erlire size + Shore</a></p>
                    </div>
                </div>

                <div class="col-md-6">

                    <div class="header_contai2 ">
                        <a><i class="fa fa-shopping-cart" aria-hidden="true"></i>Fod & Store</a>
                        <a><i class="fa fa-shopping-cart" aria-hidden="true"></i>My Account</a>
                        <a><i class="fa fa-shopping-cart" aria-hidden="true"></i>Frewcrocring </a>
                        <a><i class="fa fa-shopping-cart" aria-hidden="true"></i>Emg </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="title1">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <h2>CATEGORIES</h2>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 ">
                <div class="title2">
                    <h1><a href="#">a</a>neue</h1>
                </div>
            </div>

        </div>
        <div class="menu">
            <div class="container">

                   <ul >
                       <li><a class="home" href="#">HOME</a></li>
                       <li><a href="#">SHOP</a></li>
                       <li><a href="#">WOMEN'S</a></li>
                       <li><a href="#">MEN'S</a></li>
                       <li><a href="#">PACE</a></li>
                       <li><a href="#">BLOG</a></li>



                   </ul>

            </div>
        </div>
    </div>

</div>
