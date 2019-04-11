<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1140">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">
                <div class="row content2">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <!--title-->
                            <div class="x_title">
                                <h2>Form Wizards
                                    <small class="sessions">Sessions</small>
                                </h2>


                                <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <!--search-->
                                        <div class="search">
                                            <input type="text" class="form-control" placeholder="Search for...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">Go!</button>
                                            </span>
                                        </div>
                                    </li>


                                    <!--button up-->
                                    <li><a data-toggle="collapse" href="#wizards"><i class="fa fa-chevron-up"></i></a>
                                    </li>


                                    <!--dropdown-->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" id="close">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div id="wizards" class="panel-collapse in">
                                <p>This is a basic form wizard example that inherits the colors from the selected
                                    scheme.</p>
                                <div id="wizard" class="swMain">
                                    <ul class="anchor">
                                        <!--step 1-->
                                        <li>
                                            <a href="#step-1" class="selected first-child">
                                                <span class="step_no">1</span>
                                                <span class="step_descr">
													Step 1<br>
													<small>Step 1 description</small>
												</span>
                                            </a>
                                        </li>
                                        <!--step 2-->
                                        <li>
                                            <a href="#step-2" class="disabled">
                                                <span class="step_no">2</span>
                                                <span class="step_descr">
													Step 2<br>
													<small>Step 2 description</small>
												</span>
                                            </a>
                                        </li>
                                        <!--step 3-->
                                        <li>
                                            <a href="#step-3" class="disabled">
                                                <span class="step_no">3</span>
                                                <span class="step_descr">
													Step 3<br>
													<small>Step 3 description</small>
												</span>
                                            </a>
                                        </li>
                                        <!--step 4-->
                                        <li>
                                            <a href="#step-4" class="disabled">
                                                <span class="step_no">4</span>
                                                <span class="step_descr">
													Step 4<br>
													<small>Step 4 description</small>
												</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-5" class="disabled last-child">
                                                <span class="step_no">5</span>
                                                <span class="step_descr">
													Step 5<br>
													<small>Step 5 description</small>
												</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--step 1 decription-->
                                    <div id="step-1">
                                        <form class="form-horizontal">
                                            <!--form-group First name-->
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                       for="first-name">First Name <span>*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="first-name" required="required"
                                                           class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <!--form-group Last name-->
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                       for="last-name">Last Name <span>*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="last-name" name="last-name"
                                                           required="required" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <!--form-group Midlde name-->
                                            <div class="form-group">
                                                <label for="middle-name"
                                                       class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name /
                                                    Initial</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control col-md-7 col-xs-12" type="text"
                                                           id="middle-name" name="middle-name">
                                                </div>
                                            </div>
                                            <!--form-group Gender-->
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gender">Gender</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-default" data-toggle-class="btn-primary"
                                                               data-toggle-passive-class="btn-default">
                                                            <input type="radio" id="gender" name="gender" value="male">
                                                            &nbsp; Male &nbsp;
                                                        </label>
                                                        <label class="btn btn-primary" data-toggle-class="btn-primary"
                                                               data-toggle-passive-class="btn-default">
                                                            <input type="radio" name="gender" value="female"> Female
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--form-group Birth day-->
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth
                                                    <span>*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control col-md-7 col-xs-12" required="required"
                                                           type="text">
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <!--step 2 decription-->
                                    <div id="step-2">
                                        <h2>Step 2 Content</h2>
                                        <br>
                                        <p>
                                            one one one one one one one one one one one one one one one one one one one
                                            one one
                                        </p>
                                        <p>
                                            one one one one one one one one one one one one one one one one one one one
                                            one one one one one
                                        </p>
                                    </div>
                                    <!--step decription-->
                                    <div id="step-3">
                                        <h2>Step 3 Content</h2>
                                        <br>
                                        <p>
                                            one one one one one one one one one one one one one one one one one one one
                                            one one
                                        </p>
                                        <p>
                                            one one one one one one one one one one one one one one one one one one one
                                            one one
                                        </p>
                                    </div>
                                    <!--step decription-->
                                    <div id="step-4">
                                        <h2>Step 4 Content</h2>
                                        <br>
                                        <p> one one one one one one one one one one one one one one one one one one one
                                            one one </p>
                                        <p>
                                            one one one one one one one one one one one one one one one one one one one
                                            one one .
                                        </p>
                                        <p>
                                            one one one one one one one one one one one one one one one one one one one
                                            one
                                        </p>
                                    </div>
                                    <div id="step-5">
                                        <h2>Step 5 Content</h2>
                                        <br>
                                        <p> one one one one one one one one one one one one one one one one one one one
                                            one one </p>
                                        <p>
                                            one one one one one one one one one one one one one one one one one one one
                                            one one .
                                        </p>
                                        <p>
                                            one one one one one one one one one one one one one one one one one one one
                                            one
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>