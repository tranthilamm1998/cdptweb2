<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-705">
            <div class="topheader">
                <div class="container">
                    <div class="row">
                        <nav class="topmenu-left">
                            <ul class="top-parent-menu">
                                <li>
                                    <a class="active" href="#">My Account</a>
                                    <ul class="top-sub-menu">
                                        <li class="dropdown">                          
                                            <a href="#" class="sub-menu">My orders</a>
                                        </li>
                                        <li class="dropdown">                          
                                            <a href="#" class="sub-menu">My credit slips</a>
                                        </li>
                                        <li class="dropdown">                          
                                            <a href="#" class="sub-menu">My addresses</a>
                                        </li>
                                        <li class="dropdown">                          
                                            <a href="#" class="sub-menu">My personal info</a>
                                        </li>
                                        <li class="dropdown">                          
                                            <a href="#" class="sub-menu">My vouchers</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="active" href="#">My Wishlist (0)</a>
                                    <ul class="top-sub-menu">
                                        <li class="dropdown">                          
                                            <a href="#" class="sub-menu">Aaaaa products</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="active" href="#">Watch List (0)</a>
                                    <ul class="top-sub-menu">
                                        <li class="dropdown">                          
                                            <a href="#" class="sub-menu">View products</a>
                                        </li>
                                    </ul>
                                </li>
                                <a href="#" class="sign-in catch">Sign in </a>or
                                <a href="#" class="register catch">Register</a>
                            </ul>
                        </nav>
                        <nav class="topmenu-right">
                            <ul>
                                <li class="dropdown">
                                    <div class="show-countries">
                                        <figure>
                                            <img src="images/eng.jpg" alt="English">
                                            <a class="languege-en languege" href="#">English <i class="fa fa-angle-down"></i></a>
                                        </figure>
                                    </div>     
                                    <div class="hide-countries">
                                        <figure>
                                            <div class="countries">
                                                <img src="images/deu.jpg" alt="Deutch">
                                                <a class="languege" href="#">Deutch</a>
                                            </div>  
                                            <div class="countries">
                                                <img src="images/span.jpg" alt="Español">
                                                <a class="languege" href="#">Español</a>
                                            </div>
                                            <div class="countries">
                                                <img src="images/fra.jpg" alt="Français">
                                                <a class="languege" href="#">Français</a>
                                            </div>  
                                            <div class="countries">
                                                <img src="images/aca.jpg" alt="العربية">
                                                <a class="languege" href="#">العربية</a>
                                            </div>
                                        </figure>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <div class="show-money">
                                        <a class="money-active" href="#">Dollar <i class="fa fa-angle-down"></i></a>
                                    </div>
                                    <div class="hide-money">
                                        <div class="money">
                                            <a href="#">Euro</a>
                                        </div>  
                                        <div class="money">
                                            <a href="#">Pound</a>
                                        </div>  
                                    </div>                           
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="topheader2">
                <div class="container">
                    <div class="row">
                        <div class="shopping-cart">
                            <a class="cart" href="#" title="View my shopping cart">
                                <i class="fa fa-shopping-basket"></i>
                                <b>Cart:</b>
                                <span>(empty)</span>
                            </a>
                        </div>
                        <div class="logo">
                            <figure><img src="images/logo.jpg" alt="logo"></figure>
                        </div>
                        <div class="search">
                            <input type="text" id="text-search" placeholder="Search...">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


