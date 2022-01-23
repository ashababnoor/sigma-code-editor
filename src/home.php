<?php

session_start();

$_SESSION['current_page'] = 'home.php';

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

        <title>Home | SigmaCodePro</title>
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
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
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
        <nav class="navbar navbar-expand-lg bg-light text-dark shadow-sm">
            <div class="nav nav-underline container-xl d-flex justify-content-start">
                <a class="nav-link muted-link" aria-current="page" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Create</a>
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
                <a class="nav-link muted-link" href="shell.php">Shell</a>
                <a class="nav-link muted-link" href="playground.php">Playground</a>
                <a class="nav-link muted-link" href="templates.php">Templates</a>
                
            </div>
        </nav>
        <!-- Navbar End -->

        <main class="bg-white-100">
            <div class="container-xl p-5">
                <div class="d-flex align-items-center p-3 text-white bg-project rounded shadow-sm">
                    <img class="me-3" src="../assets/images/scp-logo-white.svg" alt="" width="48" height="38">
                    <div class="lh-1">
                    <h1 class="h6 mb-0 text-white lh-1">SigmaCodePro</h1>
                    <small>Since 2021</small>
                    </div>
                </div>

                <div class="home pill-container mt-4">
                    <div class="row">
                        <div class="pill-group col col-lg-3">
                            <div class="icon-section" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="bi bi-plus-circle"></i>
                            </div>
                            <div class="text-section">Create New Project</div>
                        </div>

                        <div class="pill-group col col-lg-3">
                            <div class="icon-section">
                                <i class="bi bi-folder"></i>
                            </div>
                            <div class="text-section">My Projects</div>
                        </div>

                        <div class="pill-group col col-lg-3">
                            <div class="icon-section">
                                <i class="bi bi-folder-symlink"></i>
                            </div>
                            <div class="text-section">Shared By Others</div>
                        </div>

                        <div class="pill-group col col-lg-3">
                            <div class="icon-section" onclick="goTo('shell.php')">
                                <i class="bi bi-terminal"></i>
                            </div>
                            <div class="text-section">JavaScript Shell</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="pill-group col col-lg-3">
                            <div class="icon-section">
                                <i class="bi bi-code-slash"></i>
                            </div>
                            <div class="text-section">Code Playground</div>
                        </div>

                        <div class="pill-group col col-lg-3">
                            <div class="icon-section" onclick="goTo('templates.php')">
                                <i class="bi bi-body-text"></i>
                            </div>
                            <div class="text-section">Templates</div>
                        </div>

                        <div class="pill-group col col-lg-3">
                            <div class="icon-section" onclick="goTo('settings.php')">
                                <i class="bi bi-sliders"></i>
                            </div>
                            <div class="text-section">Settings</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        
        <!-- Modal for creating project -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered text-dark">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create New Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="" id="">
                    
                    <div class="form-group" style="margin-bottom: 2rem;">
                        <label for="name" class="col-form-label">Project Name</label>
                        <input type="text" class="form-control" id="name" name="name" autocomplete="off" placeholder="Enter project name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" onclick="createProject()">Create</button>
                </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        


        <!-- Footer Start -->
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
        <!-- Footer End -->


        <!-- Boostrap Javascript -->
        <script src="../dependencies/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script>
            function createProject(){
                let name = document.getElementById('name').value;
                let location_string = 'createProject.php?name=' + name;
                location.assign(location_string);
            }
        </script>
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