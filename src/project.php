<?php

session_start();

$_SESSION['current_page'] = 'project.php';

if(
    isset($_SESSION['myemail']) &&
    !empty($_SESSION['myemail']) &&

    isset($_GET['projectId']) &&
    !empty($_GET['projectId'])
){
    //page will be shown only if user is logged in

    $userId = $_SESSION['myid'];
    $projectId = $_GET['projectId'];

    $project_exists = false;
    $current_user_is_owner = false;
    $user_has_access = false;
    $project_name = "";

    //store the data to database
    try{
        //PDO = PHP Data Object
        $conn=new PDO("mysql:host=localhost:3306;dbname=sigmacodepro_db;","root","");
        
        //setting 1 environment variable
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $myquerystring="SELECT * FROM `projects` WHERE id = $projectId";

        $returnobj = $conn->query($myquerystring);
        $returnTable = $returnobj->fetchAll();

        if($returnobj->rowCount()==1){
            $project_exists = true;
            foreach($returnTable as $row){
                $project_name = $row['name'];
            }

            $second_querystring="SELECT * FROM `projects` WHERE id = $projectId and owner_id = $userId";

            $second_returnobj = $conn->query($second_querystring);

            if($second_returnobj->rowCount()==1){
                $current_user_is_owner = true;
            }
            else if($second_returnobj->rowCount()==0){
                $third_querystring="SELECT COUNT(*) as num FROM `accesses` WHERE user_id = $myid and is_active = 1; and project_id = $projectId";

                $third_returnobj = $conn->query($third_querystring);

                if($third_returnobj->rowCount() >= 1){
                    $user_has_access = true;
                }
            }
        }
    }
    catch(PDOException $ex){
    }

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
        <script src="../dependencies/codemirror/addon/edit/continuelist.js"></script>

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


        <title>Project | SigmaCodePro</title>
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
        
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>

        <div class="project" style="height: 10vh;">
            <?php
                if($project_exists && ($current_user_is_owner || $user_has_access)){
                    ?>
                        <div class="main-container">
                            <div class=" p-3 bg-white" style="width: 280px;">
                                <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                                <span class="fs-5 fw-semibold"><?php echo $project_name ?></span>
                                </a>
                                <!-- 
                                <ul class="list-unstyled ps-0">
                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                                    Home
                                    </button>
                                    <div class="collapse show" id="home-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#" class="link-dark rounded">Overview</a></li>
                                        <li><a href="#" class="link-dark rounded">Updates</a></li>
                                        <li><a href="#" class="link-dark rounded">Reports</a></li>
                                    </ul>
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                    Dashboard
                                    </button>
                                    <div class="collapse" id="dashboard-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#" class="link-dark rounded">Overview</a></li>
                                        <li><a href="#" class="link-dark rounded">Weekly</a></li>
                                        <li><a href="#" class="link-dark rounded">Monthly</a></li>
                                        <li><a href="#" class="link-dark rounded">Annually</a></li>
                                    </ul>
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                    Orders
                                    </button>
                                    <div class="collapse" id="orders-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#" class="link-dark rounded">New</a></li>
                                        <li><a href="#" class="link-dark rounded">Processed</a></li>
                                        <li><a href="#" class="link-dark rounded">Shipped</a></li>
                                        <li><a href="#" class="link-dark rounded">Returned</a></li>
                                    </ul>
                                    </div>
                                </li>
                                <li class="border-top my-3"></li>
                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                    Account
                                    </button>
                                    <div class="collapse" id="account-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#" class="link-dark rounded">New...</a></li>
                                        <li><a href="#" class="link-dark rounded">Profile</a></li>
                                        <li><a href="#" class="link-dark rounded">Settings</a></li>
                                        <li><a href="#" class="link-dark rounded">Sign out</a></li>
                                    </ul>
                                    </div>
                                </li>
                                </ul> -->

                                <button class="btn btn-light text-dark w-100"><i class="bi bi-plus"></i> Folder</button>
                            </div>
                            <div class="code-area flex-grow-1">
                                <div class="code-area-header">
                                <div class="input-group">
                                    <span class="input-group-text">File name</span>
                                    <input type="text" class="form-control" id="file" placeholder="file name" aria-label="file name">
                                    <span class="input-group-text">Extension</span>
                                    <select class="form-select" id="extension">
                                        <option value="htmlmixed" selected>.html</option>
                                        <option value="css">.css</option>
                                        <option value="javascript">.js</option>
                                        <option value="php">.php</option>
                                        <option value="python">.py</option>
                                        <option value="text">.txt</option>
                                    </select>
                                    <button class="btn btn-success">Save</button>
                                    <button class="btn btn-warning" onclick="download()">Download</button>
                                    <button class="btn btn-primary">Share</button>
                                </div>
                                </div>
                                <textarea name="" id="text-editor"></textarea>
                            </div>
                        </div>
                    <?php
                }
                else if(!$project_exists){
                    ?>
                        <main class="container small-container bg-min-100">
                            <div class="alert alert-danger my-5" role="alert">
                                <h3><code>404 Not Found</code></h3>
                                <p>It looks like you came to a broken link. This project doesn't exist!</p>
                                <hr>
                                <p class="mb-0">Please make sure you have the correct link and come back. In the meantime, you can go back home.</p>

                                <div class="d-flex flex-row-reverse">
                                    <button class="btn btn-danger mt-3">Go Home</button>
                                </div>
                            </div>
                        </main>

                        <div class="bg-black shadow-lg">
                        <div class="container">
                            <footer class="pt-5 pb-5 mt-5">
                                <div class="row row-cols-5">
                                    <div class="col">
                                        <a href="index.html" target="_blank" rel="noopener noreferrer">
                                            <img src="../assets/images/scp-logo-green.svg" alt="" srcset="" style="width: 2.5rem;" class="mb-3">
                                        </a>
                                        <p class="text-muted">&copy; 2021</p>
                                    </div>

                                    <div class="col">

                                    </div>

                                    <div class="col">
                                    <h5>Section</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                                    </ul>
                                    </div>

                                    <div class="col">
                                    <h5>Section</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                                    </ul>
                                    </div>

                                    <div class="col">
                                    <h5>Section</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                                    </ul>
                                    </div>
                                </div>
                                <hr>
                                <div class="pt-3 text-center">
                                    <p class="fw-bold" style="font-size: 1.5rem;">SigmaCodePro</p>
                                    <p>
                                        An online versatile code editing tool built for collaboration.
                                        <br> Made with <i class="bi bi-suit-heart-fill" style="color: red;"></i> in United International University.
                                    </p>
                                </div>
                            </footer>
                        </div>
                        </div>
                    <?php
                }
                elseif(!$current_user_is_owner && !$user_has_access){
                    ?>
                        <main class="container small-container bg-min-100">
                            <div class="alert alert-warning my-5" role="alert">
                                <h3><code>403 Forbidden</code></h3>
                                <p>It looks like you don't have access to view this project. This project was not shared with you!</p>
                                <hr>
                                <p class="mb-0">Please make sure you have the proper access and come back. In the meantime, you can go back home.</p>

                                <div class="d-flex flex-row-reverse">
                                    <button class="btn btn-warning mt-3">Go Home</button>
                                </div>
                            </div>
                        </main>

                        <div class="bg-dark shadow-lg">
                        <div class="container">
                            <footer class="pt-5 pb-5 mt-5">
                                <div class="row row-cols-5">
                                    <div class="col">
                                        <a href="index.html" target="_blank" rel="noopener noreferrer">
                                            <img src="../assets/images/scp-logo-green.svg" alt="" srcset="" style="width: 2.5rem;" class="mb-3">
                                        </a>
                                        <p class="text-muted">&copy; 2021</p>
                                    </div>

                                    <div class="col">

                                    </div>

                                    <div class="col">
                                    <h5>Section</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                                    </ul>
                                    </div>

                                    <div class="col">
                                    <h5>Section</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                                    </ul>
                                    </div>

                                    <div class="col">
                                    <h5>Section</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                                    </ul>
                                    </div>
                                </div>
                                <hr>
                                <div class="pt-3 text-center">
                                    <p class="fw-bold" style="font-size: 1.5rem;">SigmaCodePro</p>
                                    <p>
                                        An online versatile code editing tool built for collaboration.
                                        <br> Made with <i class="bi bi-suit-heart-fill" style="color: red;"></i> in United International University.
                                    </p>
                                </div>
                            </footer>
                        </div>
                        </div>
                    <?php
                }
            ?>

        </div>

        <!-- Boostrap Javascript -->
        <script src="../dependencies/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="../static/js/project.js"></script>
        
        <!-- JQuery -->
        <script src="../dependencies/jquery/jquery.min.js"></script>
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