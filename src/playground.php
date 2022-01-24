<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lte IE 9]>
<html class="ie" lang="en">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex">
<title>Create a New Pen</title>
<link rel="dns-prefetch" href="https://fast.appcues.com">
<link rel="dns-prefetch" href="https://fonts.googleapis.com">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@CodePen">
<meta name="twitter:title" content="">
<meta name="twitter:description" content="...">
<meta name="twitter:image" content="https://shots.codepen.io/anon/pen/-800.jpg?version=1642924">
<meta property="og:image" content="https://shots.codepen.io/anon/pen/-800.jpg?version=1642924" itemprop="thumbnailUrl">
<meta property="og:title" content="">
<meta property="og:url" content="https://codepen.io/anon/details/">
<meta property="og:site_name" content="CodePen">
<meta property="og:description" content="...">
<link rel="alternate" type="application/json+oembed" href="https://codepen.io/api/oembed?url=https%3A%2F%2Fcodepen.io%2Fanon%2Fpen%2F&format=json" title="" />
<link rel="stylesheet" media="all" href="https://cpwebassets.codepen.io/assets/global/global-7f803d09491edc73a8167ba3307798227ebdedc91989a6c536a3b231f2fd7900.css" />
<link rel="stylesheet" media="screen" href="https://cpwebassets.codepen.io/assets/packs/css/everypage-276ca056.css" />
<link rel="stylesheet" media="all" href="https://cpwebassets.codepen.io/assets/editor/editor-ce84559792d1fef032d25f19e7cf0e24b7e0a3308e8c697b3b8ef7cd2411b83f.css" />
<meta name="description" content="...">
<link rel="stylesheet" media="screen" href="https://cpwebassets.codepen.io/assets/editor/themes/twilight-9eb71b6edb11814ec9302f458eb8606e9eb58d14ef36cdf785d88aca31de5447.css" id="cm-theme" />
<style id="cm-font-family" class="cm-font-family" nonce="ogI0u7BWfyw=">
  
  .CodeMirror,
  .console-logs .console-line,
  .console-command-line-input,
  .console-message,
  .CodeMirror-hint {
    font-family: SFMono-Regular, Consolas, Liberation Mono, Menlo,
  monospace;
  }
</style>
<style id="cm-font-size" nonce="ogI0u7BWfyw=">
  .CodeMirror,
  .console-logs .console-line,
  .console-command-line-input,
  .console-message,
  .CodeMirror-hint {
    font-size: 14px;
  }
</style>
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="8TFfi4kaLC7uZqmh3T5MQHIDSvh8j7gmCE5zKd5x81JcVqgDOCqQtZDFDevjpDKbJREQSbC5IuwdvAVwnTLWfQ==" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="monetization" content="$ilp.uphold.com/biyqg2MkQKbe">

<!-- Favicon -->
<link rel="shortcut icon" href="../assets/favicon.svg" type="image/svg">
        <!-- Bootstrap 5 CSS -->
        <link rel="stylesheet" href="../dependencies/bootstrap/css/bootstrap.min.css">
        <!-- Boostrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../static/css/style.css">

        <!-- External JS File -->
        <script type="text/javascript" src="../static/js/script.js"></script>

        <title>Playground | SigmaCodePro</title>

<script nonce="ogI0u7BWfyw=">
  /* Firefox needs this to prevent FOUT */
</script>

</head>
<header class="main-header  " id="main-header">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-xl">
            <a class="navbar-brand" href="home.php">
                <img src="../assets/images/scp-logo-full-green.svg" alt="" style="height: 1.75rem; margin-bottom: 0.2em">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbardiv" aria-controls="navbardiv" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbardiv">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="settings.php">Settings</a>
                </li>
                </ul>
                <form>
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </form>
                <button class="btn btn-outline-danger mx-2" onclick="goTo('logoutProcess.php')">Log out</button>
            </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg bg-black text-white shadow-sm">
            <div class="nav nav-underline container-xl d-flex justify-content-start">
                <a class="nav-link muted-link" href="myprojects.php">
                    Projects
                    <span class="badge bg-success-light text-success rounded-pill align-text-bottom">
                        <?php
                            $project_num = 0;
                            $myid = $_SESSION['myid'];
                            try{
                                //PDO = PHP Data Object
                                $conn=new PDO("mysql:host=localhost:3306;dbname=sigmacodepro_db;","root","");
                                
                                //setting 1 environment variable
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                $myquerystring="SELECT COUNT(*) as num FROM `projects` WHERE owner_id = $myid;";
                                
                                $returnObj = $conn->query($myquerystring);
                            
                                if($returnObj->rowCount()==1){
                                    foreach($returnObj as $row){
                                        $project_num = $row['num'];
                                    }
                                }
                            }
                            catch(PDOException $ex){
                                
                            }

                            echo $project_num;
                        ?>
                    </span>
                </a>
                <a class="nav-link muted-link" href="shared.php">
                    Shared
                    <span class="badge bg-success-light text-success rounded-pill align-text-bottom">
                        <?php
                            $shared_num = 0;
                            
                            try{
                                //PDO = PHP Data Object
                                $conn=new PDO("mysql:host=localhost:3306;dbname=sigmacodepro_db;","root","");
                                
                                //setting 1 environment variable
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                $myquerystring="SELECT COUNT(*) as num FROM `accesses` WHERE user_id = $myid and is_active = 1;";
                                
                                $returnObj = $conn->query($myquerystring);
                            
                                if($returnObj->rowCount()==1){
                                    foreach($returnObj as $row){
                                        $shared_num = $row['num'];
                                    }
                                }
                            }
                            catch(PDOException $ex){
                                
                            }

                            echo $shared_num;
                        ?>
                    </span>
                </a>
                <a class="nav-link muted-link active" href="shell.php">Shell</a>
                <a class="nav-link muted-link" href="playground.php">Playground</a>
                <a class="nav-link muted-link" href="templates.php">Templates</a>
                
                <div class="flex-grow-1">
                    <a class="nav-link muted-link" href="">Download</a>
                </div>
            </div>
            
        </nav>
        <!-- Navbar End -->
</header>
<body class="room-editor editor state-htmlOn-cssOn-jsOn twilight sidebar-false preload prelayout
  layout-top
 logged-out
">

<div class="item-settings-modal tab-layout tab-layout-modal pen  item-settings-modal-half" id="item-settings-modal">
<header class="item-settings-modal-header tab-layout-header">
<h2 class="item-settings-modal-header-title tab-layout-header-title">Pen Settings</h2>
<div class="save-and-close-wrap">
<button type="button" class="button mini-button button-no-right-margin close" id="top-close-settings">
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z" />
</svg>
</button>
</div>
</header>
<div class="tabs tab-layout-wrapper settings-tabs-wrapper">
<nav id="settings-tabs" class="no-mobile-nav tab-layout-tabs item-settings-tabs  notranslate" translate="no">
<div class="tab-layout-tab-group">
<a id="settings-html-tab" href="#settings-html" class="settings-tab-html" data-type="html">
HTML
</a>
<a id="settings-css-tab" href="#settings-css" class="settings-tab-css" data-type="css">
CSS
</a>
<a id="settings-js-tab" href="#settings-js" class="settings-tab-js" data-type="js">
JS
</a>
</div>
<div class="tab-layout-tab-group">
<a id="settings-details-tab" href="#settings-details" class="settings-tab-details" data-type="details">
Pen Details
</a>
<a id="settings-privacy-tab" href="#settings-privacy" class="settings-tab-privacy" data-type="privacy">
Privacy
<span style="border-radius: 2px; padding: 1px 6px 2px 5px; color: black !important; background: var(--cp-color-yellow); white-space: nowrap; text-shadow: none; letter-spacing: 0; font-size: 71%; position: relative; top: -1px;">PRO</span>
</a>
<a id="settings-behavior-tab" href="#settings-behavior" class="settings-tab-behavior" data-type="behavior">
Behavior
</a>
<a id="settings-editor-tab" href="#settings-editor" class="settings-tab-editor" data-type="editor">
Editor
</a>
<a id="settings-template-tab" href="#settings-template" class="settings-tab-template" data-type="template">
Template
</a>
<a id="settings-screenshot-tab" href="#settings-screenshot" class="settings-tab-screenshot" data-type="screenshot">
Screenshot
<span style="border-radius: 2px; padding: 1px 6px 2px 5px; color: black !important; background: var(--cp-color-yellow); white-space: nowrap; text-shadow: none; letter-spacing: 0; font-size: 71%; position: relative; top: -1px;">PRO</span>
</a>
</div>
</nav>
<div class="settings tab-page" id="settings-html">
<h3 aria-label="HTML">HTML</h3>
<div class="settings-row top-label-form normal-labels">
<h4>
<label for="html-preprocessor">
HTML Preprocessor
</label>
</h4>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z" />
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About HTML Preprocessors</h5>
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z" />
</svg>
<p>HTML preprocessors can make writing HTML more powerful or convenient. For instance, Markdown is designed to be easier to write and read for text documents and you could write a loop in Pug.</p>
<p><a href="https://blog.codepen.io/documentation/editor/using-html-preprocessors/" target="_blank" rel="noopener">Learn more</a> &middot; <a href="/versions/" target="_blank" rel="noopener">Versions</a></p>
</div>
</div>
<div class="custom-select-wrap">
<select name="html-preprocessor" id="html-preprocessor" class="fullwidth">
<option value="none">None</option>
<option value="haml">Haml</option>
<option value="markdown">Markdown</option>
<option value="slim">Slim</option>
<option value="pug">Pug</option>
</select>
<div class="select-icon">
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
        c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
        C-73.5,183.9-66.8,183.9-63.2,180.3z" />
</svg>
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
        c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
        C-73.5,183.9-66.8,183.9-63.2,180.3z" />
</svg>
</div>
</div>
</div>
<div class="settings-row top-label-form normal-labels">
<h4>
<label for="html-classes">Add Class(es) to &lt;html></label>
</h4>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z" />
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>Adding Classes</h5>
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z" />
</svg>
<p>In CodePen, whatever you write in the HTML editor is what goes within the <code>&lt;body></code> tags in <a target="_blank" rel="noopener" href="https://blog.codepen.io/documentation/features/preview-template/">a basic HTML5 template</a>. So you don't have access to higher-up elements like the <code>&lt;html></code> tag. If you want to add classes there that can affect the whole document, this is the place to do it.</p>
</div>
</div>
<input type="text" id="html-classes" name="html-classes" class="fullwidth" placeholder="e.g. single post post-1234" maxlength="250">
</div>
<div class="settings-row top-label-form normal-labels">
<h4>
<label for="head-content">Stuff for &lt;head></label>
</h4>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z" />
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About the &lt;head></h5>
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z" />
</svg>
<p>In CodePen, whatever you write in the HTML editor is what goes within the <code>&lt;body></code> tags in <a target="_blank" rel="noopener" href="https://blog.codepen.io/documentation/features/preview-template/">a basic HTML5 template</a>. If you need things in the <code>&lt;head></code> of the document, put that code here.</p>
</div>
</div>
<div class="head-content-wrapper">
<textarea id="head-content" name="head-content" class="fullwidth is-code head-content notranslate" translate="no" placeholder="e.g. &lt;meta>, &lt;link>, &lt;script>"></textarea>
<span class="insecure-resource-tooltip">
<div class="help-flyout-link">
<span class="icon-help">!</span>
<div class="help-flyout help-flyout-reverse">
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z" />
</svg>
<h5>Insecure Resource</h5>
<p>The resource you are linking to is using the 'http' protocol, which may not work when the browser is using https.</p>
</div>
</div>
</span>
</div>
<button class="button mini-button button-medium" id="meta-tag-insert">↑ Insert the most common viewport meta tag</button>
</div>
</div>
<div class="settings tab-page" id="settings-css">
<h3 aria-label="CSS">CSS</h3>
<div class="settings-row top-label-form normal-labels">
<h4>
<label for="css-preprocessor">
CSS Preprocessor
</label>
</h4>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z" />
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About CSS Preprocessors</h5>
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z" />
</svg>
<p>CSS preprocessors help make authoring CSS easier. All of them offer things like variables and mixins to provide convenient abstractions.</p>
<p><a href="https://blog.codepen.io/documentation/editor/using-css-preprocessors/" target="_blank">Learn more</a> &middot; <a href="/versions/" target="_blank">Versions</a></p>
</div>
</div>
<div class="custom-select-wrap">
<select name="css-preprocessor" id="css-preprocessor" class="fullwidth css-preprocessor">
<option value="none">None</option>
<option value="less">Less</option>
<option value="scss">SCSS</option>
<option value="sass">Sass</option>
<option value="stylus">Stylus</option>
<option value="postcss">PostCSS</option>
</select>
<div class="select-icon">
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
        c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
        C-73.5,183.9-66.8,183.9-63.2,180.3z" />
</svg>
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
        c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
        C-73.5,183.9-66.8,183.9-63.2,180.3z" />
</svg>
</div>
</div>
<div id="need-an-addon" class="align-right hide">
<a id="css-need-an-addon-button" href="#0" class="button button-medium mini-button need-an-addon-button">
Need an add-on?
</a>
</div>
<div class="add-ons add-ons-scss hide" id="add-ons"></div>
</div>
<div id="startercss-options-form" class="settings-row top-label-form">
<h4>
CSS Base
</h4>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z" />
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About CSS Base</h5>
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z" />
</svg>
<p>It's a common practice to apply CSS to a page that styles elements such that they are consistent across all browsers. We offer two of the most popular choices: <a href="https://necolas.github.io/normalize.css/" target="_blank" rel="noopener">normalize.css</a> and a <a href="http://meyerweb.com/eric/tools/css/reset/" target="_blank" rel="noopener">reset</a>. Or, choose <b>Neither</b> and nothing will be applied.</p>
</div>
</div>
<ul class="radio-list">
<li>
<input type="radio" id="startercss-normalize" name="startercss" checked value="normalize">
<label for="startercss-normalize" class="small-inline">Normalize</label>
</li>
<li>
<input type="radio" id="startercss-reset" name="startercss" checked value="reset">
<label for="startercss-reset" class="small-inline">Reset</label>
</li>
<li>
<input type="radio" id="startercss-neither" name="startercss" checked value="neither">
<label for="startercss-neither" class="small-inline">Neither</label>
</li>
</ul>
</div>
<div id="prefix-options-form" class="settings-row top-label-form">
<h4>
Vendor Prefixing
</h4>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z" />
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About Vendor Prefixing</h5>
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z" />
</svg>
<p>To get the best cross-browser support, it is a common practice to apply vendor prefixes to CSS properties and values that require them to work. For instance <code>-webkit-</code> or <code>-moz-</code>.</p>
<p>We offer two popular choices: <a href="https://github.com/postcss/autoprefixer" target="blank" rel="noopener">Autoprefixer</a> (which processes your CSS server-side) and <a href="https://leaverou.github.io/prefixfree/" target="_blank" rel="noopener">-prefix-free</a> (which applies prefixes via a script, client-side).</p>
</div>
</div>
<ul class="radio-list">
<li>
<input type="radio" id="prefix-autoprefixer" name="prefix" value="autoprefixer">
<label for="prefix-autoprefixer" class="small-inline">Autoprefixer</label>
</li>
<li>
<input type="radio" id="prefix-prefixfree" name="prefix" value="prefixfree">
<label for="prefix-prefixfree" class="small-inline">Prefixfree</label>
</li>
<li>
<input type="radio" id="prefix-neither" name="prefix" value="neither">
<label for="prefix-neither" class="small-inline">Neither</label>
</li>
</ul>
</div>
<div id="external-css-resources" class="settings-row">
<h4>
Add External Stylesheets/Pens
</h4>
<p>Any URL's added here will be added as <code>&lt;link></code>s in order, and before the CSS in the editor. If you link to another Pen, it will include the CSS from that Pen. If the preprocessor matches, it will attempt to combine them before processing.</p>
<div class="resource-search-bar">
<svg class="icon icon-mag" viewBox="0 0 56.7 56.7">
<path d="M42.8,7.3C33-2.4,17.1-2.4,7.3,7.3c-9.8,9.8-9.8,25.7,0,35.5c8.7,8.7,22.2,9.7,32,2.9l9.6,9.6c1.8,1.8,4.7,1.8,6.4,0
	c1.8-1.8,1.8-4.7,0-6.4l-9.6-9.6C52.5,29.5,51.5,16,42.8,7.3z M36.6,36.6c-6.4,6.4-16.7,6.4-23.1,0s-6.4-16.7,0-23.1
	c6.4-6.4,16.7-6.4,23.1,0C43,19.9,43,30.3,36.6,36.6z" />
</svg>
<input id="external-css-search" type="text" value="" placeholder="Search for resources (Bootstrap, Foundation, Animate.css...)">
</div>
<div class="algolia-shoutout">
<a href="https://www.algolia.com/?utm_source=react-instantsearch&utm_medium=website&utm_content=codepen.io&utm_campaign=poweredby" target="_blank">
Powered by <img alt="Algolia" src="https://cpwebassets.codepen.io/assets/settings/algolia-9e1c0c887f4db420704b2a79926864019ef156bcecc9d5774a7e4eaa731fc5b5.svg" />
</a>
</div>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z" />
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About External Resources</h5>
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z" />
</svg>
<p>You can apply CSS to your Pen from any stylesheet on the web. Just put a URL to it here and we'll apply it, in the order you have them, before the CSS in the Pen itself.</p>
<p>If the stylesheet you link to has the file extension of a preprocessor, we'll attempt to process it before applying.</p>
<p>You can also link to another Pen here, and we'll pull the CSS from that Pen and include it. If it's using a matching preprocessor, we'll combine the code before preprocessing, so you can use the linked Pen as a true dependency.</p>
<p><a href="https://blog.codepen.io/documentation/editor/adding-external-resources/" target="_blank" rel="noopener">Learn more</a></p>
</div>
</div>
<div id="css-external-resources" class="external-resource-wrapper">
</div>
<script id="css-external-resources-template" nonce="ogI0u7BWfyw=" type="text/template">
  <div data-view-id="<%= view_id %>" class="external-resource-url-row <%= insecure_resource %>">

    <span class="move-external-url">
      <svg viewBox="0 0 17 20" class="icon-drag-handle" width="20" height="17">
        <path d="m1.5 3a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3z"/>
      </svg>
    </span>

    <input
      id="external-resource-input-<%= view_id %>"
      class="fullwidth css-resource external-resource"
      type="text"
      pattern="^((ftp|http|https):)?\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$"
      name="external-css"
      placeholder="<%= placeholder %>"
      value="<%= url %>"
      data-view-id="<%= view_id %>">

    <span class="insecure-resource-tooltip">
      <div class="help-flyout-link">
        <span class="icon-help">!</span>
        <div class="help-flyout help-flyout-reverse">
          <svg class="icon-x" viewBox="0 0 100 100">
            <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"/>
          </svg>
          <h5>Insecure Resource</h5>
          <p>You are linking to a resource using the non-secure http:// protocol, which may not work when the browser is using https:// like CodePen enforces.</p>
        </div>
      </div>
    </span>

    <div class="resource-actions">
      <span class="remove-external-url external-url-option" data-view-id="<%= view_id %>">
        <svg class="icon-x" viewBox="0 0 100 100" width="12" height="12">
          <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"/>
        </svg>
      </span>

      <a id="external-resource-input-view-link-<%= view_id %>" class="open-external-url external-url-option" target="_blank" rel="noopener" data-view-id="<%= view_id %>" href="<%= url %>">
        <svg viewBox="0 0 30.5 16.5" id="icon-eye" width="14" height="14">
          <path d="M15.3,0C8.9,0,3.3,3.3,0,8.3c3.3,5,8.9,8.3,15.3,8.3c6.4,0,12-3.3,15.3-8.3C27.3,3.3,21.7,0,15.3,0z M15.3,14.5 c-3.4,0-6.2-2.8-6.2-6.2C9,4.8,11.8,2,15.3,2c3.4,0,6.2,2.8,6.2,6.2C21.5,11.7,18.7,14.5,15.3,14.5z"/>
        </svg>
      </a>
    </div>

  </div>
</script>
<div class="external-resource-actions group">
<span id="add-css-resource" class="button mini-button button-medium add-resource" data-type="css">
<span data-type="css">+ add another resource</span>
</span>
</div>
</div>
</div>
<div class="settings tab-page" id="settings-js">
<div class="item-settings-javascript normal-labels">
<h3>
JavaScript
</h3>
<div class="item-settings-javascript-preprocessor settings-row">
<h4>
<label for="js-preprocessor">
JavaScript Preprocessor
</label>
</h4>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100" width="14" height="14">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z" />
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About JavaScript Preprocessors</h5>
<svg class="icon-x" viewBox="0 0 100 100" width="12" height="12">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z" />
</svg>
 <p>JavaScript preprocessors can help make authoring JavaScript easier and more convenient.</p>
<p><a href="https://blog.codepen.io/documentation/editor/using-js-preprocessors/" target="_blank" rel="noopener">Learn more</a> &middot; <a href="/versions/" target="_blank">Versions</a></p>
</div>
</div>
<div class="custom-select-wrap">
<select name="js-preprocessor" id="js-preprocessor" class="fullwidth">
<option value="none">None</option>
<option value="babel">Babel</option>
<option value="typescript">TypeScript</option>
<option value="coffeescript">CoffeeScript</option>
<option value="livescript">LiveScript</option>
</select>
<div class="select-icon">
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
        c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
        C-73.5,183.9-66.8,183.9-63.2,180.3z" />
</svg>
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
        c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
        C-73.5,183.9-66.8,183.9-63.2,180.3z" />
</svg>
</div>
</div>
<p><small>Babel includes JSX processing.</small></p>
</div>
<div id="external-js-resources" class="item-settings-javascript-external settings-row external-js-resources top-label-form">
<h4>
Add External Scripts/Pens
</h4>
<p>Any URL's added here will be added as <code>&lt;script></code>s in order, and run <em>before</em> the JavaScript in the editor. You can use the URL of any other Pen and it will include the JavaScript from that Pen.</p>
<div class="resource-search-bar">
<svg viewBox="0 0 56.7 56.7" class="icon icon-mag" width="18" height="18">
<path d="M42.8,7.3C33-2.4,17.1-2.4,7.3,7.3c-9.8,9.8-9.8,25.7,0,35.5c8.7,8.7,22.2,9.7,32,2.9l9.6,9.6c1.8,1.8,4.7,1.8,6.4,0
	c1.8-1.8,1.8-4.7,0-6.4l-9.6-9.6C52.5,29.5,51.5,16,42.8,7.3z M36.6,36.6c-6.4,6.4-16.7,6.4-23.1,0s-6.4-16.7,0-23.1
	c6.4-6.4,16.7-6.4,23.1,0C43,19.9,43,30.3,36.6,36.6z" />
</svg>
<input id="external-js-search" type="text" value="" placeholder="Search CDNjs (jQuery, Lodash, React, Angular, Vue.js, Ember...)">
</div>
<div class="algolia-shoutout">
<a href="https://www.algolia.com/?utm_source=react-instantsearch&utm_medium=website&utm_content=codepen.io&utm_campaign=poweredby" target="_blank">
Powered by <img alt="Algolia" src="https://cpwebassets.codepen.io/assets/settings/algolia-9e1c0c887f4db420704b2a79926864019ef156bcecc9d5774a7e4eaa731fc5b5.svg" />
</a>
</div>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100" width="14" height="14">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z" />
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About External Resources</h5>
<svg class="icon-x" viewBox="0 0 100 100" height="12" width="12">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z" />
</svg>
<p>You can apply a script from anywhere on the web to your Pen. Just put a URL to it here and we'll add it, in the order you have them, before the JavaScript in the Pen itself.</p>
<p>If the script you link to has the file extension of a preprocessor, we'll attempt to process it before applying.</p>
<p>You can also link to another Pen here, and we'll pull the JavaScript from that Pen and include it. If it's using a matching preprocessor, we'll combine the code before preprocessing, so you can use the linked Pen as a true dependency.</p>
<p><a href="https://blog.codepen.io/documentation/adding-external-resources/" rel="noopener" target="_blank">Learn more</a></p>
</div>
</div>
<div id="js-external-resources" class="external-resource-wrapper">
</div>
<script id="js-external-resources-template" nonce="ogI0u7BWfyw=" type="text/template">
  <div data-view-id="<%= view_id %>" class="external-resource-url-row <%= insecure_resource %>">

    <span class="move-external-url">
      <svg viewBox="0 0 17 20" class="icon-drag-handle" width="20" height="17">
        <path d="m1.5 3a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 0 1 0-3h17a1.5 1.5 0 0 1 0 3z"/>
      </svg>
    </span>

    <input
      id="external-resource-input-<%= view_id %>"
      class="fullwidth js-resource external-resource"
      type="text"
      pattern="^((ftp|http|https):)?\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$"
      name="external-js"
      placeholder="<%= placeholder %>"
      value="<%= url %>"
      data-view-id="<%= view_id %>">

    <span class="insecure-resource-tooltip">
      <div class="help-flyout-link">
        <span class="icon-help">!</span>
        <div class="help-flyout help-flyout-reverse">
          <svg class="icon-x" viewBox="0 0 100 100">
            <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"/>
          </svg>
          <h5>Insecure Resource</h5>
          <p>You are linking to a resource using the non-secure http:// protocol, which may not work when the browser is using https:// like CodePen enforces.</p>
        </div>
      </div>
    </span>

    <div class="resource-actions">
      <span class="remove-external-url external-url-option" data-view-id="<%= view_id %>">
        <svg class="icon-x" viewBox="0 0 100 100" width="12" height="12">
          <path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z"/>
        </svg>
      </span>

      <a id="external-resource-input-view-link-<%= view_id %>" class="open-external-url external-url-option" target="_blank" rel="noopener" data-view-id="<%= view_id %>" href="<%= url %>">
        <svg viewBox="0 0 30.5 16.5" id="icon-eye" width="14" height="14">
          <path d="M15.3,0C8.9,0,3.3,3.3,0,8.3c3.3,5,8.9,8.3,15.3,8.3c6.4,0,12-3.3,15.3-8.3C27.3,3.3,21.7,0,15.3,0z M15.3,14.5 c-3.4,0-6.2-2.8-6.2-6.2C9,4.8,11.8,2,15.3,2c3.4,0,6.2,2.8,6.2,6.2C21.5,11.7,18.7,14.5,15.3,14.5z"/>
        </svg>
      </a>
    </div>

  </div>
</script>
<div class="external-resource-actions group">
<span id="add-js-resource" class="button button-medium mini-button add-resource" data-type="js">
<span data-type="js">+ add another resource</span>
</span>
</div>
</div>
<h3 aria-label="Packages">Packages</h3>
<div class="item-settings-packages settings-row" id="item-settings-packages">
<h4>Add Packages</h4>
<p>Search for and use JavaScript packages from <a href="https://www.npmjs.com/" target="blank" rel="noopener">npm</a> here. By selecting a package, an <code>import</code> statement will be added to the top of the JavaScript editor for this package.</p>
<div class="resource-search-bar">
<svg viewBox="0 0 56.7 56.7" class="icon icon-mag" width="18" height="18">
<path d="M42.8,7.3C33-2.4,17.1-2.4,7.3,7.3c-9.8,9.8-9.8,25.7,0,35.5c8.7,8.7,22.2,9.7,32,2.9l9.6,9.6c1.8,1.8,4.7,1.8,6.4,0
c1.8-1.8,1.8-4.7,0-6.4l-9.6-9.6C52.5,29.5,51.5,16,42.8,7.3z M36.6,36.6c-6.4,6.4-16.7,6.4-23.1,0s-6.4-16.7,0-23.1
c6.4-6.4,16.7-6.4,23.1,0C43,19.9,43,30.3,36.6,36.6z" />
</svg>
<input id="packages-search" type="text" value="" placeholder="Search npm and add a package...">
</div>
<div class="algolia-shoutout">
<a href="https://www.algolia.com/?utm_source=react-instantsearch&utm_medium=website&utm_content=codepen.io&utm_campaign=poweredby" target="_blank">
Powered by <img alt="Algolia" src="https://cpwebassets.codepen.io/assets/settings/algolia-9e1c0c887f4db420704b2a79926864019ef156bcecc9d5774a7e4eaa731fc5b5.svg" />
</a>
</div>
<div class="help-flyout-link">
<svg class="icon-help" viewBox="0 0 100 100" width="14" height="14">
<path d="M75,0H25C11.19,0,0,11.193,0,25v50c0,13.802,11.19,25,25,25h50c13.811,0,25-11.198,25-25V25C100,11.193,88.811,0,75,0z
   M57.203,85.067H41.504V72.542h15.699V85.067L57.203,85.067z M73.357,42.041c-0.84,2.066-1.873,3.834-3.102,5.298
  c-1.235,1.474-2.604,2.718-4.101,3.751c-1.498,1.035-2.922,2.066-4.249,3.101c-1.333,1.034-1.553,2.214-2.596,3.547
  c-1.025,1.335-0.977,3.004-0.977,5.006v3.924H41.668v-4.623c0-2.864,1.366-5.265,2.27-7.202c0.896-1.935,2.255-3.581,3.459-4.947
  c1.196-1.367,2.62-2.556,3.955-3.557c1.327-0.993,2.637-1.993,3.776-2.995c1.123-1.001,2.083-2.1,2.783-3.304
  c0.7-1.197,1.043-2.694,0.977-4.5c0-3.06-0.74-5.33-2.245-6.795c-1.498-1.465-3.582-2.206-6.25-2.206c-1.8,0-3.337,0.351-4.639,1.05
  c-1.303,0.7-2.369,1.635-3.199,2.808c-0.837,1.163-1.448,3.593-1.847,5.156c-0.407,1.57-0.602,6.115-0.602,6.115H25.399
  c0.073-8.333,0.684-7.963,1.855-10.965c1.164-2.995,2.8-6.132,4.899-8.33c2.099-2.197,4.63-4.179,7.601-5.417
  c2.962-1.228,6.283-1.977,9.945-1.977c4.736,0,8.683,0.581,11.856,1.876c3.167,1.302,5.713,2.889,7.65,4.817
  c1.929,1.937,3.312,4.004,4.149,6.234c0.831,2.237,1.245,4.313,1.245,6.242C74.601,37.354,74.187,39.975,73.357,42.041z" />
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About Packages</h5>
<svg class="icon-x" viewBox="0 0 100 100" width="12" height="12">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z" />
</svg>
<p>Using packages here is powered by <a href="https://www.skypack.dev/">Skypack</a>, which makes packages from npm not only available on a CDN, but prepares them for native JavaScript ES6 <code>import</code> usage.</p>
<p>All packages are different, so refer to their docs for how they work.</p>
<p>If you're using React / ReactDOM, make sure to turn on Babel for the JSX processing.</p>
</div>
</div>
</div>
</div>
</div>
<div class="settings tab-page" id="settings-details">
<div id="pen-details" class="pen-details">
<div id="pen-details-form" class="pen-details-form">
<h3 aria-label="Pen Details">
Details
</h3>
<div class="settings-row top-label-form normal-labels">
<h4>
<label for="item-details-title">
Pen Title
</label>
</h4>
<input type="text" id="item-details-title" class="item-details-title" name="item-details-title" value="" maxlength="255" placeholder="Untitled">
</div>
<div class="settings-row top-label-form normal-labels">
<h4>
<label for="item-details-description">
Pen Description
</label>
</h4>
<textarea class="item-details-description" id="item-details-description" placeholder="Explain what’s going on in your Pen here. This text is searchable, so it can also help others find your work. Remember to credit others where credit is due. Markdown supported."></textarea>
</div>
<div class="tags settings-row top-label-form normal-labels">
<h4>
<label for="pen-tags" class="tags-label">
Tags <em>comma separated, <span id="max-tags-label">max of five</span></em>
</label>
</h4>
<input type="text" id="pen-tags" class="pen-tags">
<div class="active-tags" id="active-tags">
</div>
</div>
</div>
</div>
</div>
<div class="settings tab-page" id="settings-privacy">
<div id="pen-privacy" class="pen-details">
<div id="pen-privacy-form" class="pen-details-form top-label-form ">
<h3>
Privacy
</h3>
<div class="settings-row public-private-checkbox-row">
<div class="public-private-wrap">
<div class="pro-upsell">
<div class="illustration-pro">
<input type="checkbox" name="illustration-pro" id="illustration-pro">
<img alt="Go PRO" class="blind-top" src="https://cpwebassets.codepen.io/assets/pro/blind-top-f2681f21fdd4abda7aac4277b7be978237e2c48832b45e6a8959dd9dcb0f8e64.svg" />
<img alt="Window blinds lowered to protect code." class="blinds" src="https://cpwebassets.codepen.io/assets/pro/blinds-e1e47297e1c0a3b8d2568baaa288d5f264e0c6495561c906a97dbfd553a8f66d.svg" />
<img alt="Code Editor with window blinds (raised) and a light blub turned on." class="code" src="https://cpwebassets.codepen.io/assets/pro/privacy-048c44f7b51ade74eef277e8027a41fe1a8651c393278b25a807ad7ea79f8418.svg" />
<div class="illustration-bg"></div>
</div>
<h4>Keep it secret; keep it safe.</h4>
<p>Private Pens are hidden everywhere on CodePen, except to you. You can still share them and other people can see them, they just can't find them through searching or browsing.</p>
<a href="/features/pro" class="button yellow">Upgrade to PRO</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="settings tab-page" id="settings-behavior">
<h3 aria-label="Pen Behavior">Behavior</h3>
<div class="settings-row">
<h4>Save Automatically?</h4>
<div>
<p class="hint">If active, Pens will autosave every 30 seconds after being saved once.</p>
<div class="ios-toggle-mega-label-wrap">
<span class="ios-toggle ios-toggle-reverse">
<input type="checkbox" id="auto-save" name="auto-save" checked>
<label for="auto-save"></label>
<label for="auto-save" class="ios-toggle-mega-label"></label>
</span>
</div>
</div>
</div>
<div class="settings-row">
<h4>Auto-Updating Preview</h4>
<p class="hint">If enabled, the preview panel updates automatically as you code. If disabled, use the "Run" button to update.</p>
<div class="ios-toggle-mega-label-wrap">
<span class="ios-toggle ios-toggle-reverse">
<input type="checkbox" id="auto-run" name="auto-run" checked>
<label for="auto-run"></label>
<label for="auto-run" class="ios-toggle-mega-label"></label>
</span>
</div>
</div>
<div class="settings-row">
<h4>Format on Save</h4>
<p class="hint">If enabled, your code will be formatted when you actively save your Pen. <strong><span class="inline-note">Note:</span> your code becomes un-folded during formatting.</strong></p>
<div class="ios-toggle-mega-label-wrap">
<span class="ios-toggle ios-toggle-reverse">
<input type="checkbox" id="format_on_save" name="format_on_save">
<label for="format_on_save"></label>
<label for="format_on_save" class="ios-toggle-mega-label"></label>
</span>
</div>
</div>
</div>
<div class="settings tab-page" id="settings-editor">
<h3 aria-label="Editor Settings">Editor Settings</h3>
<div id="editor-settings-form" class="settings-row top-label-form">
<h4>
Code Indentation
</h4>
<ul class="radio-list">
<li>
<input type="radio" id="indent-with-spaces" name="indent-with" value="spaces" checked>
<label for="indent-with-spaces" class="small-inline">Spaces</label>
</li>
<li>
<input type="radio" id="indent-with-tabs" name="indent-with" value="tabs">
<label for="indent-with-tabs" class="small-inline">Tabs</label>
</li>
</ul>
</div>
<div class="settings-row top-label-form normal-labels">
<h4>
<label for="tab-size">
Code Indent width
</label>
</h4>
<div class="custom-select-wrap">
<select id="tab-size" class="fullwidth" name="tab-size">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
<div class="select-icon">
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
        c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
        C-73.5,183.9-66.8,183.9-63.2,180.3z" />
</svg>
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
        c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
        C-73.5,183.9-66.8,183.9-63.2,180.3z" />
</svg>
</div>
</div>
</div>
<div class="settings-row">
<h4>Want to change your Syntax Highlighting theme, Fonts and more?</h4>
<p>Visit <a href="/settings/editor" target="_blank">your global Editor Settings</a>.</p>
</div>
</div>
<div class="settings tab-page" id="settings-template">
<div id="pen-template" class="pen-details">
<div class="top-label-form">
<h3>Template</h3>
<div class="settings-row">
<h4>Make Template?</h4>
<p>Templates are Pens that can be used to start other Pens quickly from the create menu. The new Pen will copy all the code and settings from the template and make a new Pen (that is not a fork). You can <a target="_blank" rel="noopener" href="/you/pens/templates">view all of your templates</a>, or <a target="_blank" rel="noopener" href="https://blog.codepen.io/documentation/api/templates/">learn more in the documentation</a>.</p>
<div class="ios-toggle-mega-label-wrap" id="item-details-template-wrap">
<span class="ios-toggle ios-toggle-reverse">
<input type="checkbox" name="item-details-template" id="item-details-template">
<label for="item-details-template"></label>
<label for="item-details-template" class="ios-toggle-mega-label"><span>On</span></label>
</span>
</div>
</div>
</div>
</div>
</div>
<div class="settings tab-page" id="settings-screenshot">
<div id="pen-screenshot" class="pen-details">
<h3>Screenshot</h3>
<div id="pen-screenshot-form" class="pen-details-form">
<div class="thumbnail-upload-section settings-row">
<h4>
Screenshot or Custom Thumbnail
</h4>
<p>Screenshots of Pens are shown in mobile browsers, RSS feeds, to users who chose images instead of iframes, and in social media sharing.</p>
<div id="settings-screenshot-wrap" class="settings-screenshot-wrap">
<div id="screenshot-type" class="screenshot-description">
<div class="screenshot-area-screenshot screenshot-image" id="custom-screenshot" style="background-image: url(https://shots.codepen.io/anon/pen/-800.jpg?version=1642924);">
<a id="delete-screenshot" class="button mini-button button-dark delete-screenshot inline-display-none">× Delete</a>
</div>
<div class="screenshot-description-container">
<p>This Pen is using the default Screenshot, generated by CodePen. Upgrade to <span style="border-radius: 2px; padding: 1px 6px 2px 5px; color: black !important; background: var(--cp-color-yellow); white-space: nowrap; text-shadow: none; letter-spacing: 0; font-size: 71%; position: relative; top: -1px;">PRO</span> to upload your own thumbnail that will be displayed on previews of this pen throughout the site and when sharing to social media.</p>
<a href="/features/pro" class="button yellow">Upgrade to PRO</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer>
<div class="save-and-close-wrap">
<input type="button" class="button button-small green button-no-right-margin close" value="Close" id="close-settings">
</div>
</footer>
</div>
<div class="page-wrap">
<div class="boxes">
<div class="mobile-editor-nav">
<button id="html-toggle" class="selected"><span>HTML</span></button>
<button id="css-toggle"><span>CSS</span></button>
<button id="js-toggle"><span>JS</span></button>
<button id="result-toggle" class="selected"><span>Result</span></button>
</div>
<div class="top-boxes editor-parent" data-number-of-editors="3" elementtiming="pen-editors">
<div class="editor-resizer html-editor-resizer" title="Double-click to expand."></div>
<div id="box-html" class="box box-html" data-type="html">
<div class="powers">
<div class="powers-drag-handle" title="Double-click to expand."></div>
<div class="editor-actions-left">
<h2 class="box-title html-editor-title" id="html-editor-title">
<svg viewBox="0 0 15 15" class="file-type-icon" id="icon-file-html">
<rect fill="#FF3C41" width="15" height="15" rx="4" />
<path d="M10.97 2.29a.563.563 0 0 0-.495-.29.572.572 0 0 0-.488.277l-5.905 9.86a.565.565 0 0 0-.007.574c.102.18.287.289.495.289a.572.572 0 0 0 .488-.277l5.905-9.86a.565.565 0 0 0 .007-.574" fill="#28282B" />
</svg>
<span class="box-title-name">
HTML
</span>
<span class="box-title-preprocessor-name "></span>
</h2>
</div>
<div class="editor-actions-right">
<div class="collaborators-indicators"></div>
<button id="settings-pane-html" class="button button-medium mini-button settings-nub" data-type="html" title="Open HTML Settings">
<svg viewBox="0 0 100 100" id="icon-gear" width="10" height="10">
<path d="M87.687,45.077c-0.313-2.433-0.816-4.807-1.542-7.079l8.145-11.73l-5.827-7.515l-0.094-0.123l-5.824-7.514
                    l-12.955,5.577c-2.041-1.265-4.192-2.362-6.459-3.219L59.42,0h-9.34h-0.153h-9.341l-3.709,13.474
                    c-2.27,0.857-4.421,1.955-6.463,3.222l-12.957-5.577l-5.825,7.514l-0.097,0.124l-5.822,7.517l8.146,11.731
                    c-0.726,2.271-1.233,4.645-1.544,7.079L0,52.032l2.08,9.375l0.033,0.15l2.08,9.375l14.001,0.761c1.295,2.028,2.771,3.926,4.4,5.668
                    l-2.396,14.227l8.416,4.173l0.138,0.067L37.169,100l9.309-10.796c1.161,0.109,2.335,0.173,3.524,0.173s2.358-0.074,3.52-0.184
                    l9.317,10.804l8.415-4.173l0.141-0.066l8.413-4.172l-2.396-14.228c1.628-1.741,3.104-3.64,4.4-5.672l14-0.759l2.078-9.375
                    l0.035-0.154L100,52.025L87.687,45.077z M50.003,34.51c8.435,0,15.272,7.035,15.272,15.719c0,8.679-6.839,15.717-15.272,15.717
                    c-8.436,0-15.272-7.038-15.272-15.717C34.731,41.545,41.569,34.51,50.003,34.51z" />
</svg>
</button>
<button class="button mini-button button-medium editor-dropdown-button editor-dropdown-button-html" data-dropdown="#editor-dropdown-html" aria-haspopup="true" aria-expanded="false">
<span class="visually-hidden">
HTML Options
</span>
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini" width="10" height="10">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
    c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
    C-73.5,183.9-66.8,183.9-63.2,180.3z" />
</svg>
</button>
<ul id="editor-dropdown-html" class="link-list is-dropdown editor-dropdown editor-dropdown-html" data-dropdown-position="css" data-dropdown-type="html">
<li class="editor-dropdown-list-item">
<button id="tidy-html" class="invisible-button tidy-code-button" data-editor-type="html">
Format HTML
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="view-compiled-html" class="invisible-button view-compiled-button" data-editor-type="html">
View Compiled HTML
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="analyze-html" class="invisible-button analyze-button" data-editor-type="html">
Analyze HTML
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="maximize-html-editor" class="invisible-button maximize-button" data-editor-type="html">
Maximize HTML Editor
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="minimize-html-editor" class="invisible-button minimize-button" data-editor-type="html">
Minimize HTML Editor
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="fold-all-html" class="invisible-button fold-all-button" data-editor-type="html">
Fold All
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="unfold-all-html" class="invisible-button unfold-all-button" data-editor-type="html">
Unfold All
</button>
</li>
</ul>
</div>
</div>
<div class="code-wrap notranslate" translate="no">
<pre id="html" class="code-box" aria-labeledby="html-editor-title">
              <code>
                
              </code>
            </pre>
<div class="error-bar" id="error-bar-html">
<span class="error-icon" data-type="html">
!
</span>
</div>
<span class="code-editor-status"></span>
</div>
</div>
<div class="editor-resizer css-editor-resizer" title="Double-click to expand."></div>
<div id="box-css" class="box box-css" data-type="css">
<div class="powers">
<div class="powers-drag-handle" title="Double-click to expand."></div>
<div class="editor-actions-left">
<h2 class="box-title css-editor-title" id="css-editor-title">
<svg viewBox="0 0 15 15" class="file-type-icon" id="icon-file-css">
<rect fill="#0EBEFF" width="15" height="15" rx="4" /><path d="M8 8.366l1.845 1.065a.507.507 0 0 0 .686-.181.507.507 0 0 0-.186-.685L8.5 7.5l1.845-1.065a.507.507 0 0 0 .186-.685.507.507 0 0 0-.686-.181L8 6.634v-2.13A.507.507 0 0 0 7.5 4c-.268 0-.5.225-.5.503v2.131L5.155 5.569a.507.507 0 0 0-.686.181.507.507 0 0 0 .186.685L6.5 7.5 4.655 8.565a.507.507 0 0 0-.186.685c.134.232.445.32.686.181L7 8.366v2.13c0 .271.224.504.5.504.268 0 .5-.225.5-.503V8.366z" fill="#282828" />
</svg>
<span class="box-title-name">
CSS
</span>
<span class="box-title-preprocessor-name "></span>
</h2>
</div>
<div class="editor-actions-right">
<div class="collaborators-indicators"></div>
<button id="settings-pane-css" class="button button-medium mini-button settings-nub" data-type="css" title="Open CSS Settings">
<svg viewBox="0 0 100 100" id="icon-gear" width="10" height="10">
<path d="M87.687,45.077c-0.313-2.433-0.816-4.807-1.542-7.079l8.145-11.73l-5.827-7.515l-0.094-0.123l-5.824-7.514
                    l-12.955,5.577c-2.041-1.265-4.192-2.362-6.459-3.219L59.42,0h-9.34h-0.153h-9.341l-3.709,13.474
                    c-2.27,0.857-4.421,1.955-6.463,3.222l-12.957-5.577l-5.825,7.514l-0.097,0.124l-5.822,7.517l8.146,11.731
                    c-0.726,2.271-1.233,4.645-1.544,7.079L0,52.032l2.08,9.375l0.033,0.15l2.08,9.375l14.001,0.761c1.295,2.028,2.771,3.926,4.4,5.668
                    l-2.396,14.227l8.416,4.173l0.138,0.067L37.169,100l9.309-10.796c1.161,0.109,2.335,0.173,3.524,0.173s2.358-0.074,3.52-0.184
                    l9.317,10.804l8.415-4.173l0.141-0.066l8.413-4.172l-2.396-14.228c1.628-1.741,3.104-3.64,4.4-5.672l14-0.759l2.078-9.375
                    l0.035-0.154L100,52.025L87.687,45.077z M50.003,34.51c8.435,0,15.272,7.035,15.272,15.719c0,8.679-6.839,15.717-15.272,15.717
                    c-8.436,0-15.272-7.038-15.272-15.717C34.731,41.545,41.569,34.51,50.003,34.51z" />
</svg>
</button>
<button class="button mini-button button-medium editor-dropdown-button editor-dropdown-button-css" data-dropdown="#editor-dropdown-css" aria-haspopup="true" aria-expanded="false">
<span class="visually-hidden">
CSS Options
</span>
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini" width="10" height="10">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
    c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
    C-73.5,183.9-66.8,183.9-63.2,180.3z" />
</svg>
</button>
<ul id="editor-dropdown-css" class="link-list is-dropdown editor-dropdown editor-dropdown-css" data-dropdown-position="css" data-dropdown-type="css">
<li class="editor-dropdown-list-item">
<button id="tidy-css" class="invisible-button tidy-code-button" data-editor-type="css">
Format CSS
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="view-compiled-css" class="invisible-button view-compiled-button" data-editor-type="css">
View Compiled CSS
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="analyze-css" class="invisible-button analyze-button" data-editor-type="css">
Analyze CSS
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="maximize-css-editor" class="invisible-button maximize-button" data-editor-type="css">
Maximize CSS Editor
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="minimize-css-editor" class="invisible-button minimize-button" data-editor-type="css">
Minimize CSS Editor
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="fold-all-css" class="invisible-button fold-all-button" data-editor-type="css">
Fold All
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="unfold-all-css" class="invisible-button unfold-all-button" data-editor-type="css">
Unfold All
</button>
</li>
</ul>
</div>
</div>
<div class="code-wrap notranslate" translate="no">
<pre id="css" class="code-box" aria-labeledby="css-editor-title">
              <code>
                
              </code>
            </pre>
<div class="error-bar" id="error-bar-css">
<span class="error-icon" data-type="css">
!
</span>
</div>
<span class="code-editor-status"></span>
</div>
</div>
<div class="editor-resizer js-editor-resizer" title="Double-click to expand."></div>
<div id="box-js" class="box box-js" data-type="js">
<div class="powers">
<div class="powers-drag-handle" title="Double-click to expand."></div>
<div class="editor-actions-left">
<h2 class="box-title js-editor-title" id="js-editor-title">
<svg viewBox="0 0 15 15" class="file-type-icon" id="icon-file-js">
<rect fill="#FCD000" width="15" height="15" rx="4" />
<path d="M6.554 3.705c0 .267-.19.496-.452.543-1.2.217-2.12 1.61-2.12 3.275 0 1.665.92 3.057 2.12 3.274a.554.554 0 0 1-.205 1.087c-1.733-.322-3.022-2.175-3.022-4.361 0-2.187 1.289-4.04 3.022-4.362a.554.554 0 0 1 .657.544zm1.892 0c0-.347.316-.607.657-.544 1.733.322 3.022 2.175 3.022 4.362 0 2.186-1.289 4.04-3.022 4.361a.554.554 0 0 1-.205-1.087c1.2-.217 2.12-1.61 2.12-3.274 0-1.665-.92-3.058-2.12-3.275a.551.551 0 0 1-.452-.543z" fill="#282828" />
</svg>
<span class="box-title-name">
JS
</span>
<span class="box-title-preprocessor-name "></span>
</h2>
</div>
<div class="editor-actions-right">
<div class="collaborators-indicators"></div>
<button id="settings-pane-js" class="button button-medium mini-button settings-nub" data-type="js" title="Open JS Settings">
<svg viewBox="0 0 100 100" id="icon-gear" width="10" height="10">
<path d="M87.687,45.077c-0.313-2.433-0.816-4.807-1.542-7.079l8.145-11.73l-5.827-7.515l-0.094-0.123l-5.824-7.514
                    l-12.955,5.577c-2.041-1.265-4.192-2.362-6.459-3.219L59.42,0h-9.34h-0.153h-9.341l-3.709,13.474
                    c-2.27,0.857-4.421,1.955-6.463,3.222l-12.957-5.577l-5.825,7.514l-0.097,0.124l-5.822,7.517l8.146,11.731
                    c-0.726,2.271-1.233,4.645-1.544,7.079L0,52.032l2.08,9.375l0.033,0.15l2.08,9.375l14.001,0.761c1.295,2.028,2.771,3.926,4.4,5.668
                    l-2.396,14.227l8.416,4.173l0.138,0.067L37.169,100l9.309-10.796c1.161,0.109,2.335,0.173,3.524,0.173s2.358-0.074,3.52-0.184
                    l9.317,10.804l8.415-4.173l0.141-0.066l8.413-4.172l-2.396-14.228c1.628-1.741,3.104-3.64,4.4-5.672l14-0.759l2.078-9.375
                    l0.035-0.154L100,52.025L87.687,45.077z M50.003,34.51c8.435,0,15.272,7.035,15.272,15.719c0,8.679-6.839,15.717-15.272,15.717
                    c-8.436,0-15.272-7.038-15.272-15.717C34.731,41.545,41.569,34.51,50.003,34.51z" />
</svg>
</button>
<button class="button mini-button button-medium editor-dropdown-button editor-dropdown-button-js" data-dropdown="#editor-dropdown-js" aria-haspopup="true" aria-expanded="false">
<span class="visually-hidden">
JS Options
</span>
<svg viewBox="-122.9 121.1 105.9 61.9" class="icon-arrow-down-mini" width="10" height="10">
<path d="M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2
    c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2
    C-73.5,183.9-66.8,183.9-63.2,180.3z" />
</svg>
</button>
<ul id="editor-dropdown-js" class="link-list is-dropdown editor-dropdown editor-dropdown-js" data-dropdown-position="css" data-dropdown-type="js">
<li class="editor-dropdown-list-item">
<button id="tidy-js" class="invisible-button tidy-code-button" data-editor-type="js">
Format JavaScript
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="view-compiled-js" class="invisible-button view-compiled-button" data-editor-type="js">
View Compiled JavaScript
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="analyze-js" class="invisible-button analyze-button" data-editor-type="js">
Analyze JavaScript
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="maximize-js-editor" class="invisible-button maximize-button" data-editor-type="js">
Maximize JavaScript Editor
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="minimize-js-editor" class="invisible-button minimize-button" data-editor-type="js">
Minimize JavaScript Editor
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="fold-all-js" class="invisible-button fold-all-button" data-editor-type="js">
Fold All
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="unfold-all-js" class="invisible-button unfold-all-button" data-editor-type="js">
Unfold All
</button>
</li>
</ul>
</div>
</div>
<div class="code-wrap notranslate" translate="no">
<pre id="js" class="code-box" aria-labeledby="js-editor-title">
              <code>
                
              </code>
            </pre>
<div class="error-bar" id="error-bar-js">
<span class="error-icon" data-type="js">
!
</span>
</div>
<span class="code-editor-status"></span>
</div>
<div class="react-pen-editor-imports" data-props-type="js"></div>
</div>
</div>
<div id="resizer" class="resizer"><span></span><div id="width-readout" class="width-readout">999px</div></div>
<div class="output-container">
<div class="output-sizer">
<div id="result_div" class="result">
<iframe id="result" name="CodePen" title="CodePen Preview" src="" sandbox="allow-downloads allow-forms allow-modals allow-pointer-lock allow-popups allow-presentation allow-same-origin allow-scripts allow-top-navigation-by-user-activation" allow="accelerometer; camera; encrypted-media; display-capture; geolocation; gyroscope; microphone; midi; clipboard-read; clipboard-write" scrolling="auto" allowTransparency="true" allowpaymentrequest="true" allowfullscreen="true" class="result-iframe iframe-empty" loading="lazy">
          </iframe>
<div id="loading-text" class="loading-text">
The Pen is mightier than the sword.
</div>
<div id="editor-drag-cover" class="drag-cover"></div>
</div>
<div id="box-console" class="box box-console notranslate" translate="no">
<div class="editor-resizer editor-resizer-console" title="Drag to resize. Double-click to expand."></div>
<div class="powers">
<div class="powers-drag-handle" title="Drag to resize. Double-click to expand."></div>
<div class="editor-actions-left">
<h2 class="box-title"><span class="box-title-name">Console</span></h2>
</div>
<div class="editor-actions-right">
<button class="button button-medium mini-button console-clear-button" title="Clear">
Clear
</button>
<button class="button button-medium mini-button close-editor-button" data-type="console" title="Close">
<svg class="icon-x" viewBox="0 0 100 100">
<path d="M96.8 83.7L63.1 50l33.7-33.7c3.6-3.6 3.6-9.4 0-13.1s-9.5-3.6-13.1 0L50 36.9 16.3 3.2C12.7-.4 6.9-.4 3.2 3.2s-3.6 9.5 0 13.1L36.9 50 3.2 83.7c-3.6 3.6-3.6 9.4 0 13.1s9.5 3.6 13.1 0L50 63.1l33.7 33.7c3.6 3.6 9.4 3.6 13.1 0s3.6-9.5 0-13.1z" />
</svg>
</button>
</div>
</div>
<div class="console-wrap">
<div class="console-entries short-no-scroll"></div>
<div class="console-command-line">
<span class="console-arrow forwards"></span>
<textarea class="console-command-line-input auto-expand" rows="1" data-min-rows="1"></textarea>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="asset-bin-goes-here"></div>
<footer id="react-pen-footer" class="site-footer editor-footer"></footer>
<div id="keycommands" class="modal modal-neutral">
<div class="keycommands-container">
<section class="editor-commands inline-editor-commands">
<h2>Editor Commands</h2>
<div class="key-group">
<kbd class="keycommand">
<span class="key pc_only">Ctrl</span>
<span class="key mac_only">Ctrl</span>
<span class="key">Space</span>
</kbd>
Autocomplete
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key">F</span>
</kbd>
Find
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key">G</span>
</kbd>
Find Next
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key" title="Shift">⇧</span>
<span class="key">G</span>
</kbd>
Find Previous
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key pc_only" title="Shift">⇧</span>
<span class="key mac_only">Opt</span>
<span class="key">F</span>
</kbd>
Find & Replace
</div>
<div class="key-group mac_only">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key" title="Shift">⇧</span>
<span class="key">F</span>
</kbd>
Format Code
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key">[</span>
</kbd>
Indent Code Right
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key">]</span>
</kbd>
Indent Code Left
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key" title="Shift">⇧</span>
<span class="key">Tab</span>
</kbd>
Auto Indent Code
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key">/</span>
</kbd>
Line Comment
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key pc_only" title="Shift">⇧</span>
<span class="key mac_only">Opt</span>
<span class="key">/</span>
</kbd>
Block Comment
</div>
<p class="inline-tab-triggers">Also see: <a href="https://blog.codepen.io/documentation/features/tab-triggers/" target="_blank" rel="noopener">Tab Triggers</a></p>
</section>
<section class="editor-commands">
<h2>Editor Focus</h2>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key pc_only">Alt</span>
<span class="key mac_only">Opt</span>
<span class="key">1</span>
</kbd>
HTML Editor
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key pc_only">Alt</span>
<span class="key mac_only">Opt</span>
<span class="key">2</span>
</kbd>
CSS Editor
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key pc_only">Alt</span>
<span class="key mac_only">Opt</span>
 <span class="key">3</span>
</kbd>
JS Editor
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key pc_only">Alt</span>
<span class="key mac_only">Opt</span>
<span class="key">4</span>
</kbd>
Toggle Console
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key pc_only">Alt</span>
<span class="key mac_only">Opt</span>
<span class="key">0</span>
</kbd>
Preview
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key">Esc</span>
</kbd>
Exit currently focused editor
</div>
</section>
<section class="editor-commands">
<h2>Misc</h2>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key" title="Shift">⇧</span>
<span class="key">7</span>
</kbd>
Re-run Preview
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key" title="Shift">⇧</span>
<span class="key">8</span>
</kbd>
Clear All Analyze Errors
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key" title="Shift">⇧</span>
<span class="key">9</span>
</kbd>
Open This Dialog
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key" title="Shift">⇧</span>
<span class="key">0</span>
</kbd>
Open Debug View
</div>
<h2>HTML Specific</h2>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key" title="Shift">⇧</span>
<span class="key">A</span>
</kbd>
Wrap With...
</div>
<h2>Pen Actions</h2>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key">P</span>
</kbd>
Create New Pen
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key">S</span>
</kbd>
Save
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key" title="Shift">⇧</span>
<span class="key">S</span>
</kbd>
Save As Private <span style="border-radius: 2px; padding: 1px 6px 2px 5px; color: black !important; background: var(--cp-color-yellow); white-space: nowrap; text-shadow: none; letter-spacing: 0; font-size: 71%; position: relative; top: -1px;">PRO</span>
</div>
<div class="key-group">
<kbd class="keycommand">
<span class="key -command"></span>
<span class="key">I</span>
</kbd>
Info Panel (if owned)
</div>
</section>
</div>
</div>
<div id="popup-overlay" class="overlay popup-overlay"></div>
<div id="modal-overlay" class="overlay modal-overlay"></div>
<noscript>

  <input type="checkbox" class="modal-closing-trick" id="modal-closing-trick">

  <div class="overlay noscript-overlay" style="display: block;"></div>

  <div class="modal modal-message group modal-warning">

    <div class="modal-title">CodePen requires JavaScript to render the code and preview areas in this view.</div>

    <p>Trying <a href="https://codepen.io/anon/debug/">viewing this Pen in Debug Mode</a>, which is the preview area without any iframe and does not require JavaScript. Although what the preview is of might!</p>

    <p>Need to know how to enable JavaScript? <a href="http://enable-javascript.com/" target="_blank" rel="noopener">Go here.</a></p>

    <label class="button button-medium" for="modal-closing-trick">Close this, use anyway.</label>

  </div>

</noscript>
<textarea id="init-data" style="display:none">{&quot;__browser&quot;:{&quot;device&quot;:&quot;unknown_device&quot;,&quot;mobile&quot;:false,&quot;name&quot;:&quot;chrome&quot;,&quot;platform&quot;:&quot;pc&quot;,&quot;version&quot;:&quot;97&quot;},&quot;__constants&quot;:{&quot;gridIframeSandboxAttributes&quot;:&quot;allow-forms allow-modals allow-pointer-lock allow-presentation allow-same-origin allow-scripts&quot;},&quot;__CPDATA&quot;:{&quot;domain_iframe&quot;:&quot;https://cdpn.io&quot;,&quot;environment&quot;:&quot;production&quot;,&quot;host&quot;:&quot;codepen.io&quot;,&quot;iframe_allow&quot;:&quot;accelerometer; camera; encrypted-media; display-capture; geolocation; gyroscope; microphone; midi; clipboard-read; clipboard-write&quot;,&quot;iframe_sandbox&quot;:&quot;allow-downloads allow-forms allow-modals allow-pointer-lock allow-popups allow-presentation allow-same-origin allow-scripts allow-top-navigation-by-user-activation&quot;},&quot;__user&quot;:{&quot;anon&quot;:true,&quot;base_url&quot;:&quot;/anon/&quot;,&quot;current_team_id&quot;:0,&quot;current_team_hashid&quot;:null,&quot;hashid&quot;:&quot;VoDkNZ&quot;,&quot;id&quot;:1,&quot;itemType&quot;:&quot;user&quot;,&quot;name&quot;:&quot;Captain Anonymous&quot;,&quot;paid&quot;:false,&quot;tier&quot;:0,&quot;username&quot;:&quot;anon&quot;,&quot;created_at&quot;:null,&quot;email_verified&quot;:null,&quot;collections_count&quot;:0,&quot;collections_private_count&quot;:0,&quot;followers_count&quot;:0,&quot;followings_count&quot;:0,&quot;pens_count&quot;:0,&quot;pens_private_count&quot;:0,&quot;projects_count&quot;:0,&quot;projects_private_count&quot;:0},&quot;__firebase&quot;:{&quot;config&quot;:{&quot;apiKey&quot;:&quot;AIzaSyBgLAe7N_MdFpuVofMkcQLGwwhUu5tuxls&quot;,&quot;authDomain&quot;:&quot;codepen-store-production.firebaseapp.com&quot;,&quot;databaseURL&quot;:&quot;https://codepen-store-production.firebaseio.com&quot;,&quot;disabled&quot;:false,&quot;projectId&quot;:&quot;codepen-store-production&quot;},&quot;token&quot;:&quot;eyJhbGciOiJSUzI1NiJ9.eyJhdWQiOiJodHRwczovL2lkZW50aXR5dG9vbGtpdC5nb29nbGVhcGlzLmNvbS9nb29nbGUuaWRlbnRpdHkuaWRlbnRpdHl0b29sa2l0LnYxLklkZW50aXR5VG9vbGtpdCIsImNsYWltcyI6eyJvd25lcklkIjoiVm9Ea05aIiwiYWRtaW4iOmZhbHNlfSwiZXhwIjoxNjQyOTI4MTE0LCJpYXQiOjE2NDI5MjQ1MTQsImlzcyI6ImZpcmViYXNlLWFkbWluc2RrLThva3lsQGNvZGVwZW4tc3RvcmUtcHJvZHVjdGlvbi5pYW0uZ3NlcnZpY2VhY2NvdW50LmNvbSIsInN1YiI6ImZpcmViYXNlLWFkbWluc2RrLThva3lsQGNvZGVwZW4tc3RvcmUtcHJvZHVjdGlvbi5pYW0uZ3NlcnZpY2VhY2NvdW50LmNvbSIsInVpZCI6IlZvRGtOWiJ9.1HCff0vRLfa0qJVxDWseiKrS09IlBSincOPfhCZWJlKW9eJ1LKve_PAIatHfqQjZWe8VApyhGjtUANovTbatXmuG44VdnH1lRRSdOpSsE3pR7fFDxvEit8d30ywX2C6dfsRgFlEHf3KCfMnapusFN7H1BLFUPMeVdca06Zd4lpLVrTLofQ_uZZg7fffGev64lOKnysmsi3Uus8UaDskU23gYeVjJKasSVU7q78gVYJjVxCmctE2vSftLtFUzlZ5XHDc4Rjv9kbvDWHt3RimirUJ5_tw__kd8QVYBrcrwcx8dL2eu7_w8PXIQ-RcVb_VMPlsHIX2jlD7IzjqFCm7CWw&quot;},&quot;__graphql&quot;:{&quot;data&quot;:{&quot;sessionUser&quot;:{&quot;id&quot;:&quot;VoDkNZ&quot;,&quot;name&quot;:&quot;Captain Anonymous&quot;,&quot;title&quot;:&quot;Captain Anonymous&quot;,&quot;avatar80&quot;:&quot;https://assets.codepen.io/t-1/user-default-avatar.jpg?fit=crop&amp;format=auto&amp;height=80&amp;version=0&amp;width=80&quot;,&quot;avatar512&quot;:&quot;https://assets.codepen.io/t-1/user-default-avatar.jpg?fit=crop&amp;format=auto&amp;height=512&amp;version=0&amp;width=512&quot;,&quot;currentContext&quot;:{&quot;id&quot;:&quot;VoDkNZ&quot;,&quot;baseUrl&quot;:&quot;/anon&quot;,&quot;title&quot;:&quot;Captain Anonymous&quot;,&quot;name&quot;:&quot;Captain Anonymous&quot;,&quot;avatar80&quot;:&quot;https://assets.codepen.io/t-1/user-default-avatar.jpg?fit=crop&amp;format=auto&amp;height=80&amp;version=0&amp;width=80&quot;,&quot;avatar512&quot;:&quot;https://assets.codepen.io/t-1/user-default-avatar.jpg?fit=crop&amp;format=auto&amp;height=512&amp;version=0&amp;width=512&quot;,&quot;username&quot;:&quot;anon&quot;,&quot;contextType&quot;:&quot;USER&quot;,&quot;__typename&quot;:&quot;User&quot;},&quot;currentTeamId&quot;:null,&quot;baseUrl&quot;:&quot;/anon&quot;,&quot;username&quot;:&quot;anon&quot;,&quot;admin&quot;:false,&quot;anon&quot;:true,&quot;pro&quot;:false,&quot;verified&quot;:null,&quot;teams&quot;:[],&quot;__typename&quot;:&quot;User&quot;}}},&quot;__pay_stripe_public&quot;:&quot;pk_NgCjQmQs7wXOFmfNC0LKMgEkmlThn&quot;,&quot;__pay_braintree_env&quot;:&quot;production&quot;,&quot;__boomboom&quot;:{&quot;serve_url&quot;:&quot;https://cdpn.io/cp/internal/boomboom&quot;,&quot;store_url&quot;:&quot;https://codepen.io/cp/internal/boomboom/store&quot;},&quot;__editor_config&quot;:{&quot;id&quot;:&quot;classic&quot;,&quot;editors&quot;:[{&quot;id&quot;:&quot;html&quot;,&quot;type&quot;:&quot;html&quot;,&quot;name&quot;:&quot;HTML&quot;,&quot;showEditor&quot;:true,&quot;showSettings&quot;:true,&quot;showProcessors&quot;:true,&quot;embeds&quot;:{&quot;showViewCompiled&quot;:true},&quot;settings&quot;:[{&quot;id&quot;:&quot;processor&quot;,&quot;name&quot;:&quot;HTML Preprocessor&quot;,&quot;type&quot;:&quot;select&quot;,&quot;visible&quot;:true,&quot;values&quot;:[{&quot;id&quot;:&quot;none&quot;,&quot;name&quot;:&quot;None&quot;,&quot;value&quot;:&quot;none&quot;,&quot;default&quot;:true},{&quot;id&quot;:&quot;haml&quot;,&quot;name&quot;:&quot;Haml&quot;,&quot;value&quot;:&quot;haml&quot;},{&quot;id&quot;:&quot;markdown&quot;,&quot;name&quot;:&quot;Markdown&quot;,&quot;value&quot;:&quot;markdown&quot;},{&quot;id&quot;:&quot;slim&quot;,&quot;name&quot;:&quot;Slim&quot;,&quot;value&quot;:&quot;slim&quot;},{&quot;id&quot;:&quot;pug&quot;,&quot;name&quot;:&quot;Pug&quot;,&quot;value&quot;:&quot;pug&quot;}]},{&quot;id&quot;:&quot;html_classes&quot;,&quot;name&quot;:&quot;Add Class(es) to &lt;html&gt;&quot;,&quot;type&quot;:&quot;input&quot;,&quot;placeholder&quot;:&quot;e.g. single post post-1234&quot;,&quot;visible&quot;:true},{&quot;id&quot;:&quot;head&quot;,&quot;name&quot;:&quot;Stuff for &lt;head&gt;&quot;,&quot;type&quot;:&quot;textarea&quot;,&quot;placeholder&quot;:&quot;e.g. &lt;meta&gt;, &lt;link&gt;, &lt;script&gt;&quot;,&quot;visible&quot;:true}],&quot;actions&quot;:[{&quot;id&quot;:&quot;tidy_html&quot;,&quot;type&quot;:&quot;tidy_code&quot;,&quot;name&quot;:&quot;Format HTML&quot;,&quot;disabled_processors&quot;:[&quot;haml&quot;,&quot;slim&quot;]},{&quot;id&quot;:&quot;view_compiled_html&quot;,&quot;type&quot;:&quot;view_compiled&quot;,&quot;name&quot;:&quot;View Compiled HTML&quot;,&quot;disabled_processors&quot;:[&quot;none&quot;],&quot;showInEmbeds&quot;:true},{&quot;id&quot;:&quot;analyze_html&quot;,&quot;type&quot;:&quot;analyze&quot;,&quot;name&quot;:&quot;Analyze HTML&quot;},{&quot;id&quot;:&quot;maximize_html_editor&quot;,&quot;type&quot;:&quot;maximize&quot;,&quot;name&quot;:&quot;Maximize HTML Editor&quot;},{&quot;id&quot;:&quot;minimize_html_editor&quot;,&quot;type&quot;:&quot;minimize&quot;,&quot;name&quot;:&quot;Minimize HTML Editor&quot;},{&quot;id&quot;:&quot;fold_all_html&quot;,&quot;type&quot;:&quot;fold_all&quot;,&quot;name&quot;:&quot;Fold All&quot;},{&quot;id&quot;:&quot;unfold_all_html&quot;,&quot;type&quot;:&quot;unfold_all&quot;,&quot;name&quot;:&quot;Unfold All&quot;}],&quot;processors&quot;:[{&quot;id&quot;:&quot;none&quot;,&quot;name&quot;:&quot;None&quot;},{&quot;id&quot;:&quot;haml&quot;,&quot;name&quot;:&quot;Haml&quot;},{&quot;id&quot;:&quot;markdown&quot;,&quot;name&quot;:&quot;Markdown&quot;},{&quot;id&quot;:&quot;slim&quot;,&quot;name&quot;:&quot;Slim&quot;},{&quot;id&quot;:&quot;pug&quot;,&quot;name&quot;:&quot;Pug&quot;}]},{&quot;id&quot;:&quot;css&quot;,&quot;type&quot;:&quot;css&quot;,&quot;name&quot;:&quot;CSS&quot;,&quot;showEditor&quot;:true,&quot;showSettings&quot;:true,&quot;showProcessors&quot;:true,&quot;showVendorPrefixing&quot;:true,&quot;embeds&quot;:{&quot;showViewCompiled&quot;:true},&quot;actions&quot;:[{&quot;id&quot;:&quot;tidy_css&quot;,&quot;type&quot;:&quot;tidy_code&quot;,&quot;name&quot;:&quot;Format CSS&quot;,&quot;disabled_processors&quot;:[&quot;sass&quot;,&quot;stylus&quot;]},{&quot;id&quot;:&quot;view_compiled_css&quot;,&quot;type&quot;:&quot;view_compiled&quot;,&quot;name&quot;:&quot;View Compiled CSS&quot;,&quot;disabled_processors&quot;:[&quot;none&quot;],&quot;disabled_prefixes&quot;:[&quot;neither&quot;,&quot;prefixfree&quot;]},{&quot;id&quot;:&quot;analyze_css&quot;,&quot;type&quot;:&quot;analyze&quot;,&quot;name&quot;:&quot;Analyze CSS&quot;},{&quot;id&quot;:&quot;maximize_css_editor&quot;,&quot;type&quot;:&quot;maximize&quot;,&quot;name&quot;:&quot;Maximize CSS Editor&quot;},{&quot;id&quot;:&quot;minimize_css_editor&quot;,&quot;type&quot;:&quot;minimize&quot;,&quot;name&quot;:&quot;Minimize CSS Editor&quot;},{&quot;id&quot;:&quot;fold_all_css&quot;,&quot;type&quot;:&quot;fold_all&quot;,&quot;name&quot;:&quot;Fold All&quot;,&quot;disabled_processors&quot;:[&quot;sass&quot;]},{&quot;id&quot;:&quot;unfold_all_css&quot;,&quot;type&quot;:&quot;unfold_all&quot;,&quot;name&quot;:&quot;Unfold All&quot;,&quot;disabled_processors&quot;:[&quot;sass&quot;]}],&quot;processors&quot;:[{&quot;id&quot;:&quot;none&quot;,&quot;name&quot;:&quot;None&quot;},{&quot;id&quot;:&quot;less&quot;,&quot;name&quot;:&quot;Less&quot;},{&quot;id&quot;:&quot;scss&quot;,&quot;name&quot;:&quot;SCSS&quot;},{&quot;id&quot;:&quot;sass&quot;,&quot;name&quot;:&quot;Sass&quot;},{&quot;id&quot;:&quot;stylus&quot;,&quot;name&quot;:&quot;Stylus&quot;},{&quot;id&quot;:&quot;postcss&quot;,&quot;name&quot;:&quot;PostCSS&quot;}],&quot;parSuffixes&quot;:[&quot;less&quot;,&quot;scss&quot;,&quot;sass&quot;,&quot;styl&quot;]},{&quot;id&quot;:&quot;js&quot;,&quot;type&quot;:&quot;js&quot;,&quot;name&quot;:&quot;JS&quot;,&quot;showEditor&quot;:true,&quot;showSettings&quot;:true,&quot;showProcessors&quot;:true,&quot;detectImports&quot;:true,&quot;externalResourcesHidden&quot;:false,&quot;embeds&quot;:{&quot;showViewCompiled&quot;:true},&quot;actions&quot;:[{&quot;id&quot;:&quot;tidy_js&quot;,&quot;type&quot;:&quot;tidy_code&quot;,&quot;name&quot;:&quot;Format JavaScript&quot;,&quot;disabled_processors&quot;:[&quot;coffeescript, livescript&quot;]},{&quot;id&quot;:&quot;view_compiled_js&quot;,&quot;type&quot;:&quot;view_compiled&quot;,&quot;name&quot;:&quot;View Compiled JavaScript&quot;,&quot;disabled_processors&quot;:[&quot;none&quot;]},{&quot;id&quot;:&quot;analyze_js&quot;,&quot;type&quot;:&quot;analyze&quot;,&quot;name&quot;:&quot;Analyze JavaScript&quot;},{&quot;id&quot;:&quot;maximize_js_editor&quot;,&quot;type&quot;:&quot;maximize&quot;,&quot;name&quot;:&quot;Maximize JavaScript Editor&quot;},{&quot;id&quot;:&quot;minimize_js_editor&quot;,&quot;type&quot;:&quot;minimize&quot;,&quot;name&quot;:&quot;Minimize JavaScript Editor&quot;},{&quot;id&quot;:&quot;fold_all_js&quot;,&quot;type&quot;:&quot;fold_all&quot;,&quot;name&quot;:&quot;Fold All&quot;},{&quot;id&quot;:&quot;unfold_all_js&quot;,&quot;type&quot;:&quot;unfold_all&quot;,&quot;name&quot;:&quot;Unfold All&quot;}],&quot;processors&quot;:[{&quot;id&quot;:&quot;none&quot;,&quot;name&quot;:&quot;None&quot;},{&quot;id&quot;:&quot;babel&quot;,&quot;name&quot;:&quot;Babel&quot;},{&quot;id&quot;:&quot;typescript&quot;,&quot;name&quot;:&quot;TypeScript&quot;},{&quot;id&quot;:&quot;coffeescript&quot;,&quot;name&quot;:&quot;CoffeeScript&quot;},{&quot;id&quot;:&quot;livescript&quot;,&quot;name&quot;:&quot;LiveScript&quot;}]}],&quot;formatters&quot;:[{&quot;id&quot;:&quot;classic&quot;,&quot;name&quot;:&quot;Classic&quot;,&quot;runOn&quot;:[{&quot;eventType&quot;:&quot;demand&quot;}],&quot;url&quot;:&quot;https://fi593g2v2a.execute-api.us-west-2.amazonaws.com/production/format&quot;}],&quot;layout&quot;:{&quot;default&quot;:&quot;top&quot;},&quot;linters&quot;:[{&quot;id&quot;:&quot;classic&quot;,&quot;name&quot;:&quot;Classic&quot;,&quot;runOn&quot;:[{&quot;eventType&quot;:&quot;demand&quot;}],&quot;url&quot;:&quot;https://fi593g2v2a.execute-api.us-west-2.amazonaws.com/production/lint&quot;}],&quot;preview&quot;:{&quot;intervalMaxWaitMS&quot;:3500,&quot;intervalMS&quot;:1200},&quot;settings&quot;:[{&quot;id&quot;:&quot;details&quot;,&quot;name&quot;:&quot;Pen Details&quot;,&quot;type&quot;:&quot;setting&quot;},{&quot;id&quot;:&quot;privacy&quot;,&quot;name&quot;:&quot;Privacy&quot;,&quot;pro&quot;:true,&quot;type&quot;:&quot;setting&quot;},{&quot;id&quot;:&quot;behavior&quot;,&quot;name&quot;:&quot;Behavior&quot;,&quot;type&quot;:&quot;setting&quot;},{&quot;id&quot;:&quot;editor&quot;,&quot;name&quot;:&quot;Editor&quot;,&quot;type&quot;:&quot;setting&quot;},{&quot;id&quot;:&quot;template&quot;,&quot;name&quot;:&quot;Template&quot;,&quot;type&quot;:&quot;setting&quot;},{&quot;id&quot;:&quot;screenshot&quot;,&quot;name&quot;:&quot;Screenshot&quot;,&quot;pro&quot;:true,&quot;type&quot;:&quot;setting&quot;}]},&quot;__item&quot;:&quot;{\&quot;editor_settings\&quot;:{\&quot;auto_run\&quot;:true,\&quot;auto_save\&quot;:true,\&quot;format_on_save\&quot;:false,\&quot;indent_with\&quot;:\&quot;spaces\&quot;,\&quot;tab_size\&quot;:\&quot;2\&quot;,\&quot;id\&quot;:\&quot;VoDkNZ\&quot;,\&quot;autocomplete\&quot;:false,\&quot;code_folding\&quot;:true,\&quot;css_pre_processor\&quot;:\&quot;none\&quot;,\&quot;css_prefix\&quot;:\&quot;neither\&quot;,\&quot;css_starter\&quot;:\&quot;neither\&quot;,\&quot;emmet_active\&quot;:true,\&quot;font_size\&quot;:\&quot;14\&quot;,\&quot;font_type\&quot;:\&quot;monaco\&quot;,\&quot;html_pre_processor\&quot;:\&quot;none\&quot;,\&quot;js_pre_processor\&quot;:\&quot;none\&quot;,\&quot;key_bindings\&quot;:\&quot;normal\&quot;,\&quot;line_numbers\&quot;:true,\&quot;line_wrapping\&quot;:true,\&quot;match_brackets\&quot;:true,\&quot;snippets\&quot;:{\&quot;markupSnippets\&quot;:{},\&quot;stylesheetSnippets\&quot;:{}},\&quot;theme\&quot;:\&quot;twilight\&quot;},\&quot;hashid\&quot;:null,\&quot;itemType\&quot;:\&quot;pen\&quot;,\&quot;resources\&quot;:[],\&quot;tags\&quot;:[],\&quot;id\&quot;:0,\&quot;user_id\&quot;:1,\&quot;html\&quot;:\&quot;\&quot;,\&quot;css\&quot;:\&quot;\&quot;,\&quot;parent\&quot;:0,\&quot;js\&quot;:\&quot;\&quot;,\&quot;html_pre_processor\&quot;:\&quot;none\&quot;,\&quot;css_pre_processor\&quot;:\&quot;none\&quot;,\&quot;js_pre_processor\&quot;:\&quot;none\&quot;,\&quot;html_classes\&quot;:\&quot;\&quot;,\&quot;css_starter\&quot;:\&quot;neither\&quot;,\&quot;css_prefix_free\&quot;:null,\&quot;css_external\&quot;:null,\&quot;js_library\&quot;:null,\&quot;js_modernizr\&quot;:null,\&quot;js_external\&quot;:null,\&quot;created_at\&quot;:null,\&quot;updated_at\&quot;:null,\&quot;session_hash\&quot;:null,\&quot;title\&quot;:\&quot;\&quot;,\&quot;description\&quot;:\&quot;\&quot;,\&quot;slug_hash\&quot;:\&quot;\&quot;,\&quot;head\&quot;:\&quot;\&quot;,\&quot;private\&quot;:false,\&quot;has_animation\&quot;:false,\&quot;css_pre_processor_lib\&quot;:\&quot;\&quot;,\&quot;checksum\&quot;:0,\&quot;screenshot_uuid\&quot;:null,\&quot;team_id\&quot;:0,\&quot;css_prefix\&quot;:\&quot;neither\&quot;,\&quot;template\&quot;:false,\&quot;js_module\&quot;:null,\&quot;deleted_at\&quot;:null,\&quot;deleted_by_user_id\&quot;:null,\&quot;hard_delete_at\&quot;:null,\&quot;pen_hash\&quot;:null}&quot;,&quot;__jwt&quot;:&quot;eyJhbGciOiJIUzI1NiJ9.eyJjbGFpbXMiOnsidXNlcl9pZCI6MX0sImV4cCI6MTY0MjkyODExNH0.b7axwNF6UYsd2UuPxWr9U7iBw0IwrgX2RQ_DfsrcIyI&quot;,&quot;__layoutType&quot;:&quot;top&quot;,&quot;__pageType&quot;:&quot;pen&quot;,&quot;__pen_export_url&quot;:&quot;https://bphy80o6m7.execute-api.us-west-2.amazonaws.com&quot;,&quot;__profiled&quot;:{&quot;base_url&quot;:&quot;/anon&quot;,&quot;hashid&quot;:&quot;VoDkNZ&quot;,&quot;id&quot;:1,&quot;name&quot;:&quot;Captain Anonymous&quot;,&quot;type&quot;:&quot;user&quot;,&quot;username&quot;:&quot;anon&quot;},&quot;__processorsMap&quot;:{&quot;autoprefixer&quot;:&quot;autoprefixer-10&quot;,&quot;babel&quot;:&quot;babel-7&quot;,&quot;coffeescript&quot;:&quot;coffeescript-2&quot;,&quot;format-1&quot;:&quot;format-1&quot;,&quot;flutter&quot;:&quot;flutter-1&quot;,&quot;haml&quot;:&quot;haml-4&quot;,&quot;less&quot;:&quot;less-3&quot;,&quot;lint-1&quot;:&quot;lint-1&quot;,&quot;livescript&quot;:&quot;livescript-1&quot;,&quot;markdown&quot;:&quot;markdown-11&quot;,&quot;postcss&quot;:&quot;postcss-7&quot;,&quot;pug&quot;:&quot;pug-2&quot;,&quot;sass&quot;:&quot;sass-1&quot;,&quot;scss&quot;:&quot;sass-1&quot;,&quot;sass-ruby-3&quot;:&quot;sass-ruby-3&quot;,&quot;sass-ruby-compass-3&quot;:&quot;sass-ruby-compass-3&quot;,&quot;slim&quot;:&quot;slim-3&quot;,&quot;stylus&quot;:&quot;stylus-0&quot;,&quot;typescript&quot;:&quot;typescript-4&quot;,&quot;vue&quot;:&quot;vue-2&quot;,&quot;vue3&quot;:&quot;vue-3&quot;},&quot;__rtData&quot;:&quot;{\&quot;maxMembers\&quot;:0,\&quot;roomID\&quot;:\&quot;/live\&quot;,\&quot;roomType\&quot;:\&quot;live\&quot;,\&quot;updatedAt\&quot;:0,\&quot;user\&quot;:{\&quot;id\&quot;:\&quot;VoDkNZ\&quot;,\&quot;hashid\&quot;:\&quot;VoDkNZ\&quot;,\&quot;name\&quot;:\&quot;Captain Anonymous\&quot;,\&quot;username\&quot;:\&quot;anon\&quot;,\&quot;role\&quot;:\&quot;editor\&quot;}}&quot;,&quot;__eijs&quot;:&quot;https://cpwebassets.codepen.io/assets/embed/ei.js&quot;,&quot;__favicon_mask_icon&quot;:&quot;https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg&quot;,&quot;__favicon_shortcut_icon&quot;:&quot;https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico&quot;,&quot;__path_to_iframe_console_runner&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/iframe/iframeConsoleRunner-d0f3648046d2aaca07bd0037b9e061a26c74a8a999b75672ad6a638cca641472.js&quot;,&quot;__path_to_iframe_refresh_css&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-4793b73c6332f7f14a9b6bba5d5e62748e9d1bd0b5c52d7af6376f3d1c625d7e.js&quot;,&quot;__path_to_iframe_runtime_errors&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/iframe/iframeRuntimeErrors-4f205f2c14e769b448bcf477de2938c681660d5038bc464e3700256713ebe261.js&quot;,&quot;__path_to_processor_worker&quot;:&quot;https://cpwebassets.codepen.io/assets/packs/router.js&quot;,&quot;__path_to_stop_execution_on_timeout&quot;:&quot;https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js&quot;,&quot;__pen_normalize_css_url&quot;:&quot;https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css&quot;,&quot;__pen_prefix_free_url&quot;:&quot;https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js&quot;,&quot;__pen_reset_css_url&quot;:&quot;https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css&quot;,&quot;__theme_url_twilight&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/twilight-9eb71b6edb11814ec9302f458eb8606e9eb58d14ef36cdf785d88aca31de5447.css&quot;,&quot;__theme_url_solarized_dark&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/solarized-dark-47303f934487c9ec26813a13a68903103934d971fb6277af5baab4b739d1d9f8.css&quot;,&quot;__theme_url_tomorrow_night&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/tomorrow-night-387214d7c57c5834d0e0546cdcfb4865b313e5724c0a99948f04c236e8a4df02.css&quot;,&quot;__theme_url_oceanic_dark&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/oceanic-dark-90ef22a2f76254c4ba8e1dd9504fec7359ba37202b65953c47f733e15edac212.css&quot;,&quot;__theme_url_panda&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/panda-d878f9de617aedde6af0dd0c07428d0e753ed5e7c57579ffeaf757102d4975b6.css&quot;,&quot;__theme_url_duotone_dark&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/duotone-dark-810791c19d6853901ae1e0097c1fe1f8f996351af8c67899ef48be362ee72462.css&quot;,&quot;__theme_url_highcontrast_dark&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/highcontrast-dark-a96dd4f09c13cb7b02468763b73a8309cef24034c6f96afb16a847f61dae34d7.css&quot;,&quot;__theme_url_classic&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/classic-f6cec33563a0091d991db505be1d4dff71c8b69916f403abfe987b6f15339d30.css&quot;,&quot;__theme_url_solarized_light&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/solarized-light-26c2762c35f9edbe44ffd53d347494441168d0cd8917009e7c37b9c1241bce5a.css&quot;,&quot;__theme_url_xq_light&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/xq-light-9f6f493b3451f2cec3c3e99451c7b9331c8610a5ad0d2e41dc08531f6b37f85c.css&quot;,&quot;__theme_url_oceanic_light&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/oceanic-light-aa0fc84229a11c7145012fa306d6f497bd911709dfd10b59da7b77419ef4e23f.css&quot;,&quot;__theme_url_mdn_like&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/mdn-like-91017110bde5848f9d8fda5de2e9a870e631fe4cab4f36a25b494071a0c0ba12.css&quot;,&quot;__theme_url_duotone_light&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/duotone-light-da2afab9486658abd5382b81cc746a6bddf6f5f8f468accec71063fbe187b9da.css&quot;,&quot;__theme_url_highcontrast_light&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/highcontrast-light-c85a6a802fb27ea5afb74c9aca8ecd172b5e11a2e3211e02f9e27262bf92fd49.css&quot;,&quot;__theme_url_scoped_twilight&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/scoped/twilight-55bba8b89091f20ffa4ed56e19a8349dae3166a2bbc751e649eb4b2d6dda04e8.css&quot;,&quot;__theme_url_scoped_solarized_dark&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/scoped/solarized-dark-96a5551d87d0de2d0c0e6431f7af7a7def6c328e36e487562489fb107cb1cc4f.css&quot;,&quot;__theme_url_scoped_tomorrow_night&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/scoped/tomorrow-night-ddb628b085d3b3c6d5d42ad4b4fe8a5481900ef7918fa2dec6d7bfbad4a0cd83.css&quot;,&quot;__theme_url_scoped_oceanic_dark&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/scoped/oceanic-dark-8d74952f4db1ebb6b5f2b3baa760c723b770eed4df56afd8790465b2751290b1.css&quot;,&quot;__theme_url_scoped_panda&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/scoped/panda-ec9d2691c2c1d755e786711f5bae31d69fa6c10b755f4de65128d1cc6467f040.css&quot;,&quot;__theme_url_scoped_duotone_dark&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/scoped/duotone-dark-97d592bcd031c21703758deafcfc5f2e9416014d2c292979adea8b35ac9a83c6.css&quot;,&quot;__theme_url_scoped_highcontrast_dark&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/scoped/highcontrast-dark-bf5acb40446d8eec23d3c2009a2940ff5531261ed85e5069bb3810e6b35ddd9f.css&quot;,&quot;__theme_url_scoped_classic&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/scoped/classic-6c0e8fad746c3d5de02f7e25044f31455e5fb896dd3a1f748013607475e969c6.css&quot;,&quot;__theme_url_scoped_solarized_light&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/scoped/solarized-light-5c0a39bc047b7a3b1b5b38fbab36bec28bfca1848b4b8b3103b9d097131df394.css&quot;,&quot;__theme_url_scoped_xq_light&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/scoped/xq-light-65819f9bbc7537c2c0d25dc13c6ea708c94ab70cffb37b2201e24b3f0f384b8f.css&quot;,&quot;__theme_url_scoped_oceanic_light&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/scoped/oceanic-light-137cd7c7ad66948e7e2b707142bceb6a2f38101a34cfba4958c9295bc8ebeb13.css&quot;,&quot;__theme_url_scoped_mdn_like&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/scoped/mdn-like-aec539c2f5f03cb99cb817bb50728bc9bef6382c1a008cf479aaaf7cf7eff1d5.css&quot;,&quot;__theme_url_scoped_duotone_light&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/scoped/duotone-light-4c94f41b396c20530f0a88003987727b806814c7fa97219470353cfc2ba43413.css&quot;,&quot;__theme_url_scoped_highcontrast_light&quot;:&quot;https://cpwebassets.codepen.io/assets/editor/themes/scoped/highcontrast-light-00c153702534c09dbd1d253a67b478225cb6a0624b32c6a0d79b70b54cda1582.css&quot;}</textarea>
<script src="https://cpwebassets.codepen.io/assets/common/browser_support-e442aebd85f2bb9dcd4a47cb43c7fc38efd5522ace0a675bf5e33a06413b5a28.js"></script>
<script src="https://cpwebassets.codepen.io/assets/common/everypage-f84dd91ff413b23b8d1a6f7eadc615dc53c384f74f8254e068449db735b2c8cd.js"></script>
<script src="https://cpwebassets.codepen.io/assets/common/analytics_and_notifications-afa6925cbcff840929f2b7c543587d5f9d7a461af81ee7ca80631c8e37ac42f2.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/vendor-c21379cbfb9275247984.chunk.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/referrer-tracking-180dabc5f524db1ab319.js"></script>
<script nonce="ogI0u7BWfyw=">
LUX=(function(){var a=("undefined"!==typeof(LUX)&&"undefined"!==typeof(LUX.gaMarks)?LUX.gaMarks:[]);var d=("undefined"!==typeof(LUX)&&"undefined"!==typeof(LUX.gaMeasures)?LUX.gaMeasures:[]);var j="LUX_start";var k=window.performance;var l=("undefined"!==typeof(LUX)&&LUX.ns?LUX.ns:(Date.now?Date.now():+(new Date())));if(k&&k.timing&&k.timing.navigationStart){l=k.timing.navigationStart}function f(){if(k&&k.now){return k.now()}var o=Date.now?Date.now():+(new Date());return o-l}function b(n){if(k){if(k.mark){return k.mark(n)}else{if(k.webkitMark){return k.webkitMark(n)}}}a.push({name:n,entryType:"mark",startTime:f(),duration:0});return}function m(p,t,n){if("undefined"===typeof(t)&&h(j)){t=j}if(k){if(k.measure){if(t){if(n){return k.measure(p,t,n)}else{return k.measure(p,t)}}else{return k.measure(p)}}else{if(k.webkitMeasure){return k.webkitMeasure(p,t,n)}}}var r=0,o=f();if(t){var s=h(t);if(s){r=s.startTime}else{if(k&&k.timing&&k.timing[t]){r=k.timing[t]-k.timing.navigationStart}else{return}}}if(n){var q=h(n);if(q){o=q.startTime}else{if(k&&k.timing&&k.timing[n]){o=k.timing[n]-k.timing.navigationStart}else{return}}}d.push({name:p,entryType:"measure",startTime:r,duration:(o-r)});return}function h(n){return c(n,g())}function c(p,o){for(i=o.length-1;i>=0;i--){var n=o[i];if(p===n.name){return n}}return undefined}function g(){if(k){if(k.getEntriesByType){return k.getEntriesByType("mark")}else{if(k.webkitGetEntriesByType){return k.webkitGetEntriesByType("mark")}}}return a}return{mark:b,measure:m,gaMarks:a,gaMeasures:d}})();LUX.ns=(Date.now?Date.now():+(new Date()));LUX.ac=[];LUX.cmd=function(a){LUX.ac.push(a)};LUX.init=function(){LUX.cmd(["init"])};LUX.send=function(){LUX.cmd(["send"])};LUX.addData=function(a,b){LUX.cmd(["addData",a,b])};LUX_ae=[];window.addEventListener("error",function(a){LUX_ae.push(a)});LUX_al=[];if("function"===typeof(PerformanceObserver)&&"function"===typeof(PerformanceLongTaskTiming)){var LongTaskObserver=new PerformanceObserver(function(c){var b=c.getEntries();for(var a=0;a<b.length;a++){var d=b[a];LUX_al.push(d)}});try{LongTaskObserver.observe({type:["longtask"]})}catch(e){}};
</script>
<script src="https://cdn.speedcurve.com/js/lux.js?id=410041" async defer crossorigin="anonymous"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/vendor-c21379cbfb9275247984.chunk.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/1-3b09d7e8eb170f23d877.chunk.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/everypage-7e6ebb8bb6fb4362f5f0.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/vendor-c21379cbfb9275247984.chunk.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/firebaseConnectLibs-7159a572cbd73f61dd7c.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/vendor-c21379cbfb9275247984.chunk.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/1-3b09d7e8eb170f23d877.chunk.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/processorRouter-99e144fe9da7cfcd5f86.js"></script>
<script src="https://static.filestackapi.com/filestack-js/3.x.x/filestack.min.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/global/commonLibs-9baf61da2f0b1adbfdbda1a98aa009379eddc23641e45edf6d5c41f98fe361d0.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/global/codemirror-38f6d79a9404a790a5769ae17525f1a192f3d3c9d323e1479691af1295a26d66.js"></script>
<script src="https://cpwebassets.codepen.io/assets/libs/emmet-codemirror-plugin-d52a9896e5f03371a6952975f3e92e5812c54903ca27e36f9c7b707444dc1e88.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/pen/index-8b4bdecfc2b9ade900e6539957befe4acaea475996e7da9e871ddc222d94f715.js"></script>
</body>
</html>
