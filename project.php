<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/scp-logo-green.svg" type="image/x-icon">

    <script src="assets/library/jquery.min.js"></script>

    <script src="codemirror-5.64.0/lib/codemirror.js"></script>
    <script src="codemirror-5.64.0/mode/xml/xml.js"></script>

    <link rel="stylesheet" href="codemirror-5.64.0/lib/codemirror.css">
    <link rel="stylesheet" href="codemirror-5.64.0/theme/darcula.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <script src="codemirror-5.64.0/mode/javascript/javascript.js"></script>

    <script src="codemirror-5.64.0/addon/edit/closetag.js"></script>

    <link rel="stylesheet" href="bootstrap-4.1.3/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <title>Home | SigmaCodePro</title>

    <style>
        .navbar-brand-image{
            height: 1.5em;
            padding-right: 0.1em;
            margin: auto;
            padding-bottom: 0.1em;
        }

        .nav{
            margin-bottom: -2em;
        }

        #app-nav{
            margin-top: -0.2em;
        }
        body{
            background: #343a40;
        }

        /* sidebar file create */

        #sidebar {
            position: absolute;
            left: 0;
            top: 0;
            width: 18%;
            height: 100vh;
        }
        #editor {
            position: absolute;
            left: 18%;
            top: 0;
            width: 82%;
            height: 100vh;
        }
        .file {
            width: 100%;
            padding: 10px;
            padding: 29px;
            box-sizing: border-box;
            background-position: 5px center;
            background-repeat: no-repeat;
            background-size: 24px 24px;
            color: #67e685;
            
        }
    </style>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="home.php" class="navbar-brand"> <img src="images/scp-logo-green.svg" alt="SigmaCodePro" class="navbar-brand-image"> SigmaCodePro</a>
        
        <div class="navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" id="dropDownForLogOut" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 1em;">
                        Account
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropDownForLogOut">
                        <a href="settings.php" class="dropdown-item"> Settings </a>
                        <div class="dropdown-divider"></div>
                        <a href="logoutProcess.php" class="dropdown-item"> Log Out </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar End -->
    <div class="ui inverted top attached menu" id="app-nav">
        <div class="ui dropdown icon item">
            <i class="wrench icon"></i>
            <div class="menu">
                <div class="item">
                    <i class="dropdown icon"></i>
                    <span class="text">New</span>
                    <div class="menu">
                        <div class="item">Document</div>
                        <div class="item">Image</div>
                    </div>
                </div>
                <div class="item">
                    Open...
                </div>
                <div class="item">
                    Save...
                </div>
                <div class="item">Edit Permissions</div>
                <div class="divider"></div>
                <div class="header">
                    Export
                </div>
                <div class="item">
                    Share...
                </div>
            </div>
            
        </div>
        <div class="ui item">
            File
        </div>
        <div class="ui item">
            View
        </div>
        <div class="ui item">
            Settings
        </div>
        <div class="right menu">
            <div class="ui right aligned category search item">
                <div class="ui transparent icon input">
                    <input class="prompt" type="text" placeholder="Search project...">
                    <i class="search link icon"></i>
                </div>
                <div class="results"></div>
            </div>
        </div>
    </div>
    
    <div class="ui bottom attached segment">
        <div id="sidebar">
            <div id="files">
                <div class="file" style="background-image: url(file_img/html.png);">test.html</div>
                <div class="file" style="background-image: url(file_img/css.png);">test.css</div>
                <div class="file" style="background-image: url(file_img/javascript.png);">test.js</div>
                <div class="file" style="background-image: url(file_img/txt.png);">test.txt</div>
            </div>
        </div>
        <div id="editor">
            <textarea name="" id="myTextarea" cols="30" rows="10">I am jubaer</textarea>
        </div>
    </div>
    
    <script src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>

    <script>
        //let myTextarea = document.getElementById('myTextArea');
        // var editor = CodeMirror.fromTextArea(myTextarea, {
        //     value: "<h1> Hello World! </h1>",
        //     lineNumbers: true,
        //     mode: "htmlmixed"
        // });
        var editor = CodeMirror.fromTextArea(myTextarea, {
            value: "<h1> Hello World! </h1>",
            mode: 'xml',
            theme: 'darcula',
            lineNumbers: true,
            autoCloseTags: true,
        });
        editor.setSize("100%", "80vh")
    </script>
</body>

</html>