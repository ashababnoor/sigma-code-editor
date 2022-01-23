<?php

session_start();

$_SESSION['current_page'] = 'home.php';

if(
    //when the user isn't logged in  then we will take him to login page
    
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

        <title> Login | SigmaCodePro</title>

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
            max-width: 30em;
            padding: 15px;
            margin: auto;
            }

            .form-signin .checkbox {
            font-weight: 400;
            }

            .form-signin .form-floating:focus-within {
            z-index: 2;
            }

            .form-signin input[type="text"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            }

            .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
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
                        <a class="nav-link green active" href="login.php">Login</a>
                    </nav>
                </div>
            </div>
        </header>
        
        
        <!-- Main Section -->
        <main class="my-5 editor-bg text-dark text-center" style="min-height: 100vh;">

        <div class="form-signin">
        <?php
            if(isset($_SESSION['justloggedin']) && $_SESSION['justloggedin'] == true){
                $_SESSION['justloggedin'] = false;
                ?>
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </symbol>
                    </svg>

                    <div class="alert alert-success alert-dismissible fade show mb-5" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <strong>Hurray!</strong> You have successfully signed up.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
            }

        ?>

        <form action="loginProcess.php" method="post" >
            <div class="d-flex align-items-center justify-content-center mb-3" style="gap: 1em;">
                <img class="mb-2" src="../assets/images/scp-logo-full-green.svg" alt="" height="50">

            </div>
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="myemail" placeholder="name@example.com">
                <label for="floatingInput">Email address or username</label>
            </div>
            
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="mypass" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="mb-3">
                <a href="signup.php" class="muted-link green-on-hover">
                    No account? Sign up instead!
                </a>
            </div>
            <button class="w-100 btn btn-lg btn-outline-success" type="submit">Sign in</button>
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

    </body>
    </html>

    <?php
}
else{
    ?>
        <script> location.assign("home.php"); </script>
    <?php
}

?>