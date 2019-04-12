<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-556">
    <div class="content">
        <div class="container">
            <div class="cmenu">
                <div class="navselect">
                    <ul>
                        <li>
                            <div class="title">
                                <a href="#">My Account(3)</a>
                            </div>
                            <div class="context">
                                <p>My Account 1</p>
                                <p>My Account 2</p>
                                <p>My Account 3</p>

                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <a href="#">My Wishlist(4)</a>
                            </div>
                            <div class="context">
                                <p>My Wishlist 1</p>
                                <p>My Wishlist 2</p>
                                <p>My Wishlist 3</p>
                                <p>My Wishlist 4</p>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <a href="#">My Wishlist(4)</a>
                            </div>
                            <div class="context">
                                <p>My Wishlist 1</p>
                                <p>My Wishlist 2</p>
                                <p>My Wishlist 3</p>
                                <p>My Wishlist 4</p>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <a href="#">Sign in</a>

                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <a href="#">Register</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="navselect">
                    <ul>
                        <li>
                            <div class="title">
                                <a href="#">English <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            </div>
                            <div class="context">
                                <p>English</p>
                                <p>Japan</p>
                                <p>Viet Nam</p>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <a href="#">Dollar <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            </div>
                            <div class="context">
                                <p>Ero</p>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
    <div class="container">
        <div class="clogo">
            <div class="cart">
                <a href="#" title="View my shopping cart">
                    <i class="fa fa-shopping-basket"></i>
                    <b>Cart:</b>
                    <span>(empty)</span>
                </a>
            </div>
            <div class="image">
                <figure><img src="images/logo.jpg" alt="logo"></figure>
            </div>
            <div class="search">
                <input type="text" id="text-search" placeholder="Search...">
                <i class="fa fa-search"></i>
            </div>
        </div>
    </div>
</div>


