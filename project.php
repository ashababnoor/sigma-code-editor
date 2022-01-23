<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/scp-logo-green.svg" type="image/x-icon">

    <script src="assets/library/jquery.min.js"></script>
    <script src="js/script_pro.js"></script>

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
            font-size: 15px;
            line-height: 1.2em;
        }
        .file {
            width: 100%;
            padding: 8px;
            padding-left: 44px;
            box-sizing: border-box;
            background-position: 10px center;
            background-repeat: no-repeat;
            background-size: 24px 24px;
            color: #88e29d;
        }
        .file:hover {
            background-color: rgba(156, 156, 202, 0.3);
        }
        
        #save {
            position: absolute;
            /* top: 5px; */
            right: 9px;
            height: 16px;
            width: 16px;
            display: none;
            cursor: pointer;
        }
        
        /* .folder {
            width: 100%;
            padding: 8px;
            padding-left: 44px;
            box-sizing: border-box;
            background-position: 10px center;
            background-repeat: no-repeat;
            background-size: 24px 24px;
            color: #88e29d;
        } */
        #menu {
            width: 95%;
            max-width: 250px;
            position: absolute;
            border: 1px solid rgba(0,0,0,.2);
            box-shadow: 0 0 4px 4px rgba(0,0,0,.1);
            border-radius: 3px;
            background: white;
            display: none;
        }
        #menu.show {
            display: block;
        }
        #menu > div {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            font-size: 1em;
            cursor: pointer;
            transition: background .3s;
        }
        #menu > div:hover {
            background: rgba(20, 128, 255, .1);
        }
    </style> 
</head>

<body onload="load()" onmousedown="closeMenu()" oncontextmenu="event.preventDefault();event.stopPropagation();return false;">
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
        <div class="ui item">
            <img id="save" onclick="save()" src="file_img/res/save.svg"/>
        </div>
        <div class="ui item" id="file">
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
            <div class="row folder pl-5">
                <!-- <div class="col-sm">
                    <a href=createFolder.php>Folder</a>
                </div> -->
                <div class="col-sm">
                    <!-- <a href=>File</a> -->
                    <button class="btn btn-success" onclick="newFile();">New Folder / File</button>
                    <!-- <div onclick="newFile();">File</div> -->
                </div>
                
                
            </div>
            <div id="files">
                <!-- <div class="file" style="background-image: url(file_img/file.png);">test</div>                
                <div class="file" style="background-image: url(file_img/file.png);">test1</div>
                <div class="file" style="background-image: url(file_img/html.png);">test.html</div>
                <div class="file" style="background-image: url(file_img/css.png);">test.css</div>
                <div class="file" style="background-image: url(file_img/javascript.png);">test.js</div>
                <div class="file" style="background-image: url(file_img/txt.png);">test.txt</div> -->
            </div>

            <div id="menu" onmousedown="event.stopPropagation();">
                <!-- <div onclick="newFile();">New</div> -->
                <div onclick="delFile();">Delete</div>
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
        var mode, dir, doc, saved, selectedFile;
        var keys = {};
        var editor = CodeMirror.fromTextArea(myTextarea, {
            value: "<h1> Hello World! </h1>",
            mode: 'xml',
            theme: 'darcula',
            lineNumbers: true,
            autoCloseTags: true,
        });
        editor.setSize("100%", "80vh");

        // ##### edit for adding file (Jubaer) #####
        function load() {
            console.log("Yes");
            // openFolder("D:/UIU/Software/Lab/demo1/demo1");
            openFolder("..");
            window.addEventListener("keydown", function(event) {
                // console.log("click");
                keys[event.code] = true;
                console.log(event.altKey);
                if(event.ctrlKey && event.altKey) {
                    console.log("click");
                    event.preventDefault();
                    save();
                }
            });
            window.addEventListener("keyup", function(event) {delete keys[event.code];});
            document.getElementById("editor").addEventListener("keyup", checkSave);
        }
      
        function post(url,data,callback) {
            console.log(url);
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    callback(this.responseText);
                }
            };
            xhr.open("POST", url, true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            if(typeof data === "object") {
                var newObj = "";
                for(var i in data) {
                    newObj += i + '=' + data[i];
                    if(Object.keys(data).indexOf(i) !== Object.keys(data).length-1) {
                        newObj += "&";
                    }
                }
                data = newObj;
        
            }
            console.log(encodeURI(data));
            xhr.send(encodeURI(data));
        }

        function openFolder(folder) {
            console.log("Yes333");
            post("dir.php", {folder:folder}, function(data){
                dir = folder;
                document.getElementById('files').innerHTML = data;
            });
        }

        function openFile(file) {
            post("file.php", {file:file}, function(data) {
                doc = file;
                saved = data;
                document.getElementById("file").textContent = doc.split('/').pop();
                editor.setValue(data, -1);
                // setMode();
            });
        }

        function save() {
            console.log(doc);
            if(doc === undefined) {return false;}
            post("save.php", {file:doc,code: editor.getValue()}, function(data) {
                // console.log("save");
                if(data === 'true') {
                    saved = editor.getValue();
                    checkSave();
                    console.log("save");
                    // alert("saved");
                }
                else {
                    console.log(data);
                    // alert("error");
                }
            });
        }
        function checkSave() {
            if(editor.getValue() !== saved && saved !== undefined) {
                document.getElementById("save").style.display = "block";
            }
            else {
                document.getElementById("save").style.display = "none";
            }
        }
        function newFile() {
            var filename = prompt("Enter the file/folder name");

            if(filename) {
                post("newFile.php", {filename, dir}, function(data) {
                    if(data == true) {
                        openFolder(dir);
                    }
                    else {
                        console.log(data);
                    }
                    closeMenu();
                });
            }
        }
        function delFile() {
            console.log(selectedFile);
            if(selectedFile) {
                console.log("sel");
                post("delFile.php", {path:selectedFile}, function(data) {
                    if(data == true) {
                        openFolder(dir);
                    }
                    else {
                        console.log(data);
                    }
                    closeMenu();
                });
            }
        }
        function deselectAll() {
            document.querySelectorAll('.selected').forEach(function(e) {
                e.classList.remove('selected');
            });
        }
        function closeMenu() {
            document.getElementById('menu').className = '';
            deselectAll();
            selectedFile = null;
        }
        function fileMouseDown(event, file) {
            if(file && event.button === 2) {
                deselectAll();
                file.classList.add('selected');
                document.getElementById('menu').style.top = event.clientY + "px";
                document.getElementById('menu').style.left = event.clientX + "px";
                document.getElementById('menu').className = 'show';

                selectedFile = file.dataset.path;

                event.stopPropagation();
            }
        }
    </script>
</body>

</html>