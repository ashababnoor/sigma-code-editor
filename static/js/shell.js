window.onload = () => {
    var preferred_theme = "material-darker";

    const [input, output] = document.querySelectorAll('.codemirror-textarea');
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

    const shell = CodeMirror.fromTextArea(output, {
        lineNumbers: false,
        theme: preferred_theme,
    });

    shell.setSize("100%", "63vh");

    const [run, clear] = document.querySelectorAll('.execute');

    run.addEventListener('click', () => {
        const codeToRun = editor.getValue();
        
        try{
            shell.replaceRange('$ ' + eval(`${codeToRun}`) + '\n', CodeMirror.Pos(shell.lastLine()));
        }catch(error){
            shell.replaceRange('$ ' + error + '\n', CodeMirror.Pos(shell.lastLine()));
        }
        
    });
    clear.addEventListener('click', () => {
        shell.setValue("");
    });

}