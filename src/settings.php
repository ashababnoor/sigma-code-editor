<?php

session_start();

$_SESSION['current_page'] = 'settings.php';
$is_admin = $_SESSION['is_admin'];
$myid = $_SESSION['myid'];

try{
    //PDO = PHP Data Object
    $conn=new PDO("mysql:host=localhost:3306;dbname=sigmacodepro_db;","root","");
    
    //setting 1 environment variable
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $myquerystring="SELECT * FROM `users` WHERE id = $myid and is_active = 1;";
    
    $returnObj = $conn->query($myquerystring);

    if($returnObj->rowCount()==1){
        foreach($returnObj as $row){
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $username = $row['username'];
            $email = $row['email'];
            $dob = $row['dob'];

            $dob = strtotime($dob);
        }
    }
}
catch(PDOException $ex){
    
}

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

        <title>Settings | SigmaCodePro</title>

        <style>
            .instruction-list{
                list-style-type: '- ';
            }
        </style>
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
                <a class="nav-link muted-link" href="shell.php">Shell</a>
                <a class="nav-link muted-link" href="playground.php">Playground</a>
                <a class="nav-link muted-link" href="templates.php">Templates</a>
                
            </div>
        </nav>
        <!-- Navbar End -->

        <main class="bg-white-100">
            <div class="container-xl p-5 pb-0">
                <div class="d-flex align-items-center p-3 text-white bg-project rounded shadow-sm">
                    <img class="me-3" src="../assets/images/scp-logo-white.svg" alt="" width="48" height="38">
                    <div class="lh-1">
                    <h1 class="h6 mb-0 text-white lh-1">General Settings</h1>
                    </div>
                </div>

                <form action="saveChanges.php" method="post" class="row my-3 g-3 needs-validation" novalidate id="settings-form">
                    <div class="col-md-4">
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">First Name</span>
                            <input type="text" class="form-control" id="myfirstname" name="myfirstname" placeholder="First name" required value="<?php echo $first_name; ?>">
                            <div class="invalid-feedback">
                                Please choose a valid first name.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">Last Name</span>
                            <input type="text" class="form-control" id="mylastname" name="mylastname" placeholder="Last name" required value="<?php echo $last_name; ?>">
                            <div class="invalid-feedback">
                                Please choose a valid last name.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required value="<?php echo $username; ?>">
                            <div class="invalid-feedback">
                                Please choose a valid username.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">Email</span>
                            <input type="email" class="form-control" id="myemail" name="myemail" placeholder="Email" required value="<?php echo $email; ?>">
                            <div class="invalid-feedback">
                                Please choose a valid email.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group has-validation">
                            <span class="input-group-text">Current Password</span>
                            <input type="password" class="form-control" id="old_mypass" name="old_mypass" placeholder="Current password" required>
                            <div class="invalid-feedback">
                                Please enter your current password.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group has-validation" id="pass_div">
                            <span class="input-group-text">New Password</span>
                            <input type="password" class="form-control" id="mypass" name="mypass" placeholder="New password" onkeyup="checkPass()">
                            
                            <div class="invalid-feedback">
                                Please choose a valid password.
                            </div> 
                            
                        </div>
                    </div>
                    <div class="col-md-6" id="mypassval-div">
                        <div class="input-group " id="repass_div">
                            <span class="input-group-text">Re-type Password</span>
                            <input type="password" class="form-control" id="mypassval" placeholder="Re-type new password" onkeyup="checkPass()">
                            
                            <div class="invalid-feedback">
                                Please provide the correct password.
                            </div> 
                            
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group has-validation">
                            <span class="input-group-text">Date of Birth</span>
                            <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of birth" required value="<?php echo date('Y-m-d', $dob); ?>">
                            <div class="invalid-feedback">
                                Please choose a valid date.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button class="w-100 btn btn-outline-warning" type="submit">Save Changes</button>                                          
                    </div>
                </form>

                <div class="alert alert-warning mt-5 mb-0" role="alert">
                    <h4><code>Instructions:</code></h4>
                    <hr>
                    <ul class="instruction-list">
                        <li> <samp> Enter current password to save changes.</samp> </li>
                        <li> <samp> Leave <em>New Password</em> and <em>Re-type Password</em> fields empty if you don't wish to change password. </samp> </li>
                        <li> <samp> Both <em>New Password</em> and <em>Re-type Password</em> fields must have the same value for password to be updated. </samp> </li>
                    </ul>
                </div>
            </div>

            <?php 
            if($is_admin){
                ?>
                    <div class="container-xl p-5">
                        <div class="d-flex align-items-center p-3 text-white bg-project rounded shadow-sm">
                            <img class="me-3" src="../assets/images/scp-logo-white.svg" alt="" width="48" height="38">
                            <div class="lh-1">
                            <h1 class="h6 mb-0 text-white lh-1">Admin Settings</h1>
                            </div>
                        </div>

                        <div class="home pill-container mt-4 mb-5">
                            <div class="row">
                                <div class="pill-group col col-lg-3">
                                    <div class="icon-section" onclick="goTo('userList.php')">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="text-section">User Management</div>
                                </div>

                                <div class="pill-group col col-lg-3">
                                    <div class="icon-section" onclick="goTo('publicTemplates.php')">
                                        <i class="bi bi-body-text"></i>
                                    </div>
                                    <div class="text-section">Public Templates</div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            }
            ?>
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

        <script>
            let pass_div = document.getElementById('pass_div');
            let repass_div = document.getElementById('repass_div');

            let old_passdiv_content = pass_div.innerHTML;
            let old_repassdiv_content = repass_div.innerHTML;

            function checkPass(){
                let pass = document.getElementById('mypass').value;
                let passval = document.getElementById('mypassval').value;

                let pass_field = document.getElementById('mypass');
                let passval_field = document.getElementById('mypassval');

                let form = document.getElementById('settings-form');

                if(passval != "" || true){
                    // pass_div.innerHTML += `
                    //     <div class="valid-feedback">
                    //         Looks good!
                    //     </div>
                    //     <div class="invalid-feedback">
                    //         Please choose a valid password.
                    //     </div>
                    // `;
                    // repass_div.innerHTML += `
                    //     <div class="valid-feedback">
                    //         Looks good!
                    //     </div>
                    //     <div class="invalid-feedback">
                    //         Please provide the correct password.
                    //     </div> 
                    // `;

                    if(pass != passval){
                        form.classList.remove('was-validated');

                        if(pass == ''){
                            pass_field.classList.add('is-invalid');
                            pass_field.classList.remove('is-valid');
                        }
                        
                        passval_field.classList.add('is-invalid');
                        passval_field.classList.remove('is-valid');
                    }
                    else if(pass != "" || (pass == '' && passval  == '')){
                        form.classList.remove('was-validated');

                        pass_field.classList.add('is-valid');
                        pass_field.classList.remove('is-invalid');

                        passval_field.classList.add('is-valid');
                        passval_field.classList.remove('is-invalid');

                        if (pass == '' && passval  == ''){
                            form.classList.remove('was-validated');
                        }
                    }
                }
                else{
                    // pass_div.innerHTML = old_passdiv_content;
                    // repass_div.innerHTML = old_repassdiv_content;
                }
            }
            // Starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    let pass = document.getElementById('mypass').value;
                    let passval = document.getElementById('mypassval').value;

                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add('was-validated');
                }, false);
                });
            }, false);
            })();
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