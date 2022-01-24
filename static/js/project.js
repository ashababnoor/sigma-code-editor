let input, editor;

let htmlExample = 
`<!-- Write your HTML code here  -->

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

let cssExample = 
`/* Write your CSS code here */

* {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
}
  
:root {
    font-family: Arial, Helvetica, sans-serif;
}

--clr-primary: #008e98;
--clr-secondary: #0fd0b3; 
`

let jsExample = 
`//Write your Javascript code here

let text = "Hello world!";

function hello(){
	return text;
}

console.log(text);
`

let textExample =
`You can write any text you want in this editor.
`

let phpExample =
`<?php

//Write your PHP code here

echo "Hello world!";

?>
`

let pythonExample = 
`#Write your Python code here

def hello():
    print("Hello world!")


hello()
`


window.onload = () => {
    var preferred_theme = "material-darker";

    input = document.querySelector('#text-editor');
    editor = CodeMirror.fromTextArea(input, {
        value: "//write your code here...",
        mode: 'htmlmixed',
        lineNumbers: true,
        theme: preferred_theme,
        autoCloseTags: true,
        extraKeys: {"Ctrl-Space": "autocomplete",
                    "Alt-F": "findPersistent"},
    });

    // var editorHeight = input.parentElement.clientHeight;
    // console.log(editorHeight);

    editor.setSize("100%", "100%");
    editor.setValue(htmlExample);
}

function changeMode(){
    let extension = document.getElementById('extension').value;
    editor.setOption("mode", extension);
    
    let example = '';
    if(extension == 'htmlmixed'){
        example = htmlExample;
    }
    else if(extension == 'python'){
        example = pythonExample;
    }
    else if(extension == 'css'){
        example = cssExample;
    }
    else if(extension == 'javascript'){
        example = jsExample;
    }
    else if(extension == 'php'){
        example = phpExample;
    }else{
        example = textExample;
    }

    if(filename == ''){
        filename = "file";
    }

    editor.setValue(example);
    CodeMirror.autoLoadMode(editor, mode);
}

function download(){
    let text = editor.getValue();
    
    let filename = document.getElementById('file').value;
    let extension = document.getElementById('extension').value;

    downloadBase(text, filename, extension);
}