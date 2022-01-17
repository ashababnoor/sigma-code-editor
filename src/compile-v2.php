<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodePen Clone</title>

    <script src="codemirror-5.64.0/lib/codemirror.js"></script>
    <link rel="stylesheet" href="codemirror-5.64.0/lib/codemirror.css">
    <script src="codemirror-5.64.0/mode/javascript/javascript.js"></script>
    <script src="codemirror-5.64.0/mode/css/css.js"></script>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: #333642;
}

.container {
    height: 100vh;
    width: 100vw;
    display: grid;

}

.container.view1 {
    grid-template-rows: repeat(2, 1fr);
    grid-gap: 10px;
}

.container.view2 {
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 10px;
}

.coder {
    display: grid;
    padding: 10px;
}

.coder.view1 {
    height: 100%;
    width: 100%;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
}

.coder.view2 {
    height: 100vh;
    width: 100%;
    grid-template-rows: repeat(3, 1fr);
    grid-gap: 20px;
}

.code-editor {
    height: 100%;
    width: 100%;
    
}

.code {
    background-color: #1D1E22;
    height: 100%;
    width: 100%;
    margin-block: 1em;
}

.code-type {
    font-family: 'Roboto', sans-serif;
    color: white;
    height: fit-content;
    width: 100%;
    background-color: #1A1B1F;
    padding: 10px;
    border-bottom: 1px solid #333642;
}

.ace_gutter {
    background-color: #1D1E22 !important;
}

.ace_gutter-cell.ace_gutter-active-line.ace_info {
    background-color: #1D1E22 !important;
}

.ace-nord-dark .ace_gutter-active-line {
    background-color: #1D1E22 !important;
}

.output {
    background-color: #1D1E22;
}

.virtual-iframe {
    height: 100%;
    width: 100%;
}

.change-layout {
    position: absolute;
    height: fit-content;
    width: fit-content;
    border-radius: 7px;
    background-color: #444857;
    font-family: 'Roboto', sans-serif;
    color: white;
    padding: 10px 20px;
    margin: auto;
    bottom: 15px;
    left: 15px;
    cursor: pointer;
    z-index: 20;
    user-select: none;
}


.change-layout:hover {
    background-color: #2d303a;
}
    </style>
</head>

<body>
    <div class="change-layout">Change Layout</div>
    <div class="container view2">
        <div class="coder view2">
            <div class="code-editor htmlCoder">
                <div class="code-type">HTML</div>
                <textarea class="code html" id="html"></textarea>
            </div>
            <div class="code-editor cssCoder">
                <div class="code-type">CSS</div>
                <textarea class="code css" id="css"></textarea>
            </div>
            <div class="code-editor jsCoder">
                <div class="code-type">JS</div>
                <textarea class="code js" id="javascript"></textarea>
            </div>
        </div>
        <div class="output">
            <iframe src="" class="virtual-iframe" frameborder="0"></iframe>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
    <script src="./static/js/app.js"></script>
    <script>
        const [html, css, js] = document.querySelectorAll('.code');
        
        const htmlEditor = CodeMirror.fromTextArea(html, {
            lineNumbers: true
        });
        const cssEditor = CodeMirror.fromTextArea(css, {
            lineNumbers: true,
            mode: 'css',
        });
        const jsEditor = CodeMirror.fromTextArea(js, {
            lineNumbers: true,
            mode: 'javascript',
        });
    </script>
</body>

</html>