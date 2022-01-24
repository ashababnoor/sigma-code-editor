<?php

session_start();

$_SESSION['current_page'] = 'shell.php';

if(
    isset($_SESSION['myemail']) &&
    !empty($_SESSION['myemail'])
){
    //page will be shown only if user is logged in
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

        <!-- Codemirror Code Dependencies -->
        <script src="../dependencies/codemirror/lib/codemirror.js"></script>
        <link rel="stylesheet" href="../dependencies/codemirror/lib/codemirror.css">

        <!-- Codemirror Modes -->
        <script src="../dependencies/codemirror/mode/javascript/javascript.js"></script>
        <script src="../dependencies/codemirror/mode/powershell/powershell.js"></script>
        <script src="../dependencies/codemirror/mode/css/css.js"></script>
        <script src="../dependencies/codemirror/mode/xml/xml.js"></script>
        <script src="../dependencies/codemirror/mode/python/python.js"></script>
        <script src="../dependencies/codemirror/mode/php/php.js"></script>
        <script src="../dependencies/codemirror/mode/htmlmixed/htmlmixed.js"></script>

        <!-- Codemirror Add-Ons -->
        <script src="../dependencies/codemirror/addon/edit/closetag.js"></script>
        <script src="../dependencies/codemirror/addon/edit/closebrackets.js"></script>
        <script src="../dependencies/codemirror/addon/edit/matchbrackets.js"></script>
        <script src="../dependencies/codemirror/addon/edit/matchtags.js"></script>
        <script src="../dependencies/codemirror/addon/edit/trailingspace.js"></script>

        <script src="../dependencies/codemirror/addon/dialog/dialog.js"></script>
        <script src="../dependencies/codemirror/addon/search/searchcursor.js"></script>
        <script src="../dependencies/codemirror/addon/search/search.js"></script>
        <script src="../dependencies/codemirror/addon/scroll/annotatescrollbar.js"></script>
        <script src="../dependencies/codemirror/addon/search/matchesonscrollbar.js"></script>
        <script src="../dependencies/codemirror/addon/search/jump-to-line.js"></script>
        <link rel="stylesheet" href="../dependencies/codemirror/addon/dialog/dialog.css">
        <link rel="stylesheet" href="../dependencies/codemirror/addon/search/matchesonscrollbar.css">

        <script src="../dependencies/codemirror/addon/hint/show-hint.js"></script>
        <script src="../dependencies/codemirror/addon/hint/javascript-hint.js"></script>
        <script src="../dependencies/codemirror/addon/hint/html-hint.js"></script>
        <script src="../dependencies/codemirror/addon/hint/css-hint.js"></script>
        <script src="../dependencies/codemirror/addon/hint/css-hint.js"></script>
        
        <!-- Codemirror Theme -->
        <link rel="stylesheet" href="../dependencies/codemirror/theme/3024-day.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/3024-night.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/abbott.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/abcdef.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/ambiance.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/ayu-dark.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/ayu-mirage.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/base16-dark.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/bespin.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/base16-light.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/blackboard.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/cobalt.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/colorforth.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/dracula.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/duotone-dark.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/duotone-light.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/eclipse.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/elegant.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/erlang-dark.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/gruvbox-dark.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/hopscotch.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/icecoder.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/isotope.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/juejin.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/lesser-dark.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/liquibyte.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/lucario.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/material.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/material-darker.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/material-palenight.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/material-ocean.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/mbo.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/mdn-like.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/midnight.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/monokai.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/moxer.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/neat.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/neo.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/night.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/nord.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/oceanic-next.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/panda-syntax.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/paraiso-dark.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/paraiso-light.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/pastel-on-dark.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/railscasts.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/rubyblue.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/seti.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/shadowfox.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/solarized.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/the-matrix.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/tomorrow-night-bright.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/tomorrow-night-eighties.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/ttcn.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/twilight.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/vibrant-ink.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/xq-dark.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/xq-light.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/yeti.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/idea.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/darcula.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/yonce.css">
        <link rel="stylesheet" href="../dependencies/codemirror/theme/zenburn.css">


        <title>Interactive Shell | SigmaCodePro</title>
    </head>

    <body class="bg-dark text-light">
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

                                $myquerystring="SELECT COUNT(*) as num FROM `projects` WHERE owner_id = $myid and is_active = 1;";
                                
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
            </div>
            
        </nav>
        <!-- Navbar End -->

        <main class="shell">
            <div class="main-container">
                <div class="row">
                    <div class="col col-lg-6 col-md-12">
                        <div class="code-area">
                            <div class="code-area-header">
                                <h2 class="flex-grow-1">JavaScript Editor</h2>
                                <button class="btn btn-outline-secondary" onclick="download()">Download</button>
                                <button class="btn btn-success execute">Run</button>
                            </div>
                            <textarea class="codemirror-textarea"></textarea>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-12">
                        <div class="code-area">
                            <div class="code-area-header">
                                <h2>Shell</h2>
                                <button class="btn btn-success execute">Clear</button>
                            </div>
                            <textarea class="codemirror-textarea"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Boostrap Javascript -->
        <script src="../dependencies/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="../static/js/shell.js"></script>
    </body>
    </html>

    <?php

}
else{
    ?>
        <script> location.assign("login.php") </script>
    <?php
}

?>