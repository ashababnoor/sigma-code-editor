<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compilation Mode</title>

    <script src="../dependencies/codemirror/lib/codemirror.js"></script>
    <link rel="stylesheet" href="../dependencies/codemirror/lib/codemirror.css">
    <script src="../dependencies/codemirror/mode/javascript/javascript.js"></script>

    <script src="../static/js/app.js"></script>
    <link rel="stylesheet" href="../static/css/app.css">
</head>
<body>
    <div class="grid-container">
        <div class="code-area">
            <div class="code-area-header">
                <h1>Editor</h1>
                <button>Run</button>
            </div>
            <textarea class="codemirror-textarea"></textarea>
        </div>
        <div class="code-area">
            <div class="code-area-header">
                <h1>Shell</h1>
                <button>Clear</button>
            </div>
            <textarea class="codemirror-textarea"></textarea>
        </div>
    </div>
    
</body>
</html>