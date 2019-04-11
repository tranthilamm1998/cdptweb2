<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/1140.less', 'css/1140.css');
    
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>module 1140</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="<?php echo $url_path ?>/css/bootstrap_v3.3.6.min.css" rel="stylesheet"  />
        <link href="<?php echo $url_path ?>/css/font-awesome_v4.6.3.min.css" rel="stylesheet"/>
        <link href="<?php echo $url_path ?>/css/1140.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo $url_path ?>/js/jquery_v2.2.4.min.js"></script>
        <script src="<?php echo $url_path ?>/js/1140.js"></script>
        <script src="<?php echo $url_path ?>/js/jquery.smartWizard_1140.js"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap_v3.0.0.min.js"></script>


    </head>

    <body>   
            <?php  include $dir_block.'/1140-content.php'; ?>
    </body>
</html>