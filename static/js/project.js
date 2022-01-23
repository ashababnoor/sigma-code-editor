window.onload = () => {
    var preferred_theme = "material-darker";

    const input = document.querySelector('#text-editor');
    const editor = CodeMirror.fromTextArea(input, {
        value: "//write your code here...",
        mode: 'javascript',
        lineNumbers: true,
        theme: preferred_theme,
    });

    // var editorHeight = input.parentElement.clientHeight;
    // console.log(editorHeight);

    editor.setSize("100%", "63vh");
    editor.setValue(
        "//Write your code here\n\n"+
        "function hello(){\n"+
        "\treturn \"Hello World!\";\n"+
        "}"
    );

    let extension = document.getElementById('extension').value;
    
    editor.setOption("mode", extension);
}


var mode, dir, doc, saved, selectedFile;
var keys = {};

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