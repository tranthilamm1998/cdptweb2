
<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1605">
<!--content-->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="number">
                        <div class="numbercontent"><h3>#1</h3></div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="context">
                        <div class="contextcontent">
                            <h3>THE BEST FURNITURE SOFA</h3>
                            <h2>FOR YOUR HOME</h2>
                            <p>Mes cuml dia sed in lacus eniascet ingerto aliiqt es sitet amet eismodi ut ligulate ameti dapibus ticdu.</p>
                            <a class="shop-button" href="#/">Buy now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>