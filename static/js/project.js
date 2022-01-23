window.onload = () => {
    var preferred_theme = "material-darker";

    const input = document.querySelector('#text-editor');
    const editor = CodeMirror.fromTextArea(input, {
        value: "//write your code here...",
        mode: 'javascript',
        lineNumbers: true,
        theme: preferred_theme,
        autoCloseTags: true,
        extraKeys: {"Ctrl-Space": "autocomplete",
                    "Alt-F": "findPersistent"},
    });

    // var editorHeight = input.parentElement.clientHeight;
    // console.log(editorHeight);

    editor.setSize("100%", "100%");
    editor.setValue(
        "<!-- Write your code here  -->\n"+
`
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    
    </body>
</html>
`
    );

    let extension = document.getElementById('extension').value;
    
    editor.setOption("mode", extension);
}


function download() {
    let text=$("#text-editor").text();
    let filename = document.getElementById('file').value;
    let extension = document.getElementById('extension').value;

    if(extension == 'htmlmixed'){
        extension = '.html';
    }
    else if(extension == 'python'){
        extension = '.py';
    }
    else if(extension == 'css'){
        extension = '.css';
    }
    else if(extension == 'javascript'){
        extension = '.js';
    }
    else if(extension == 'php'){
        extension = '.php';
    }else{
        extension = '.txt';
    }

    if(filename == ''){
        filename = "file";
    }

    filename += extension;

    let element = document.createElement('a');
    if (filename.search(".html")) {
        element.setAttribute('href', 'data:html/plain;charset=utf-8,' + encodeURIComponent(text));
        
    }
    else if (filename.search(".php")) {
        element.setAttribute('href', 'data:php/plain;charset=utf-8,' + encodeURIComponent(text));
        
    }
    else {
        element.setAttribute('href', 'data:txt/plain;charset=utf-8,' + encodeURIComponent(text));
        
    }
    
    element.setAttribute('download', filename);
    element.style.display = 'none';
    document.body.appendChild(element);
    element.click();
    document.body.removeChild(element);
}