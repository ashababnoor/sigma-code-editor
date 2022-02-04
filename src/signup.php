<?php

session_start();

$_SESSION['current_page'] = 'home.php';

if( 
    !isset($_SESSION['myemail']) ||
    empty($_SESSION['myemail'])
){
    
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

        <title> Sign Up | SigmaCodePro</title>

        <style>
            html,
            body {
            height: 100%;
            }

            main.editor-bg {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #fafafa;
            }

            .form-signin {
            width: 100%;
            max-width: 50em;
            padding: 15px;
            margin: auto;
            }

        </style>
    </head>

    <body class="bg-dark text-light">
        <!-- Header -->
        <header>
            <div class="bg-dark w-100 header-div fixed-top p-3">
                <div class="cover-container mx-auto text-center w-100">
                    <h3 class="float-md-start mb-0">SigmaCodePro</h3>
                    <nav class="nav nav-masthead justify-content-center float-md-end">
                        <a class="nav-link" aria-current="page" href="index.html#about">About</a>
                        <a class="nav-link" href="index.html#feature-1">Features</a>
                        <a class="nav-link" href="index.html#contact">Contact</a>
                        <a class="nav-link green" href="login.php">Login</a>
                    </nav>
                </div>
            </div>
        </header>
        
        
        <!-- Main Section -->
        <main class="py-5 my-5 editor-bg text-dark" style="min-height: 100vh;">
        <div class="form-signin">

        <form action="signupProcess.php" method="post" class="row g-3 needs-validation" novalidate>
            <div class="d-flex align-items-center justify-content-center mb-2" style="gap: 1em;">
                <img class="mb-2" src="../assets/images/scp-logo-full-green.svg" alt="" height="50">
            </div>

            <h1 class="h3 mb-3 fw-normal text-center">Create a new account!</h1>
            <div class="col-md-6">
                <input type="text" class="form-control" id="myfirstname" name="myfirstname" placeholder="First name" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please choose a valid first name.
                </div>
            </div>

            <div class="col-md-6">
                <input type="text" class="form-control" id="mylastname" name="mylastname" placeholder="Last name" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please choose a valid last name.
                </div>
            </div>

            <div class="col-md-6">
                <input type="email" class="form-control" id="myemail" name="myemail" placeholder="Email" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please choose a valid email.
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please choose a valid username.
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <input type="password" class="form-control" id="mypass" name="mypass" placeholder="Password" required onkeyup="checkPass()">
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please choose a valid password.
                </div>
            </div>
            <div class="col-md-6" id="mypassval-div">
                <input type="password" class="form-control" id="mypassval" placeholder="Retype password"  required onkeyup="checkPass()">
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please provide the correct password.
                </div>
            </div>

            <div class="col-12">
                <div class="input-group has-validation">
                    <span class="input-group-text">Date of Birth</span>
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of birth" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please choose a valid date.
                    </div>
                </div>
            </div>
            <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
            
            <div class="mb-3">
                <a href="login.php" class="muted-link green-on-hover">
                    Already have an account? Sign in instead!
                </a>
            </div>
                <button class="w-100 btn btn-lg btn-outline-success" type="submit">Sign up</button>
            </form>
        </div>
        </main>

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
        <script src="..\dependencies\bootstrap\js\bootstrap.bundle.min.js"></script>
        

        <script>
            function checkPass(){
                let pass = document.getElementById('mypass').value;
                let passval = document.getElementById('mypassval').value;
                let passval_field = document.getElementById('mypassval');
                let passval_div = document.getElementById('passval-div');
                // let dob = document.getElementById('dob').value;

                // console.log(dob);

                if(passval != ""){
                    if(pass != passval){
                        passval_field.classList.add('is-invalid');
                        passval_field.classList.remove('is-valid');
                    }
                    else if(pass != ""){
                        passval_field.classList.add('is-valid');
                        passval_field.classList.remove('is-invalid');
                    }
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
                    let passval_field = document.getElementById('mypassval');

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
        <script>
            alert("Please log out before going to the sign-up page!");
            location.assign("home.php"); 
        </script>
    <?php
}

?>