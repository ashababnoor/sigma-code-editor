let editor;
let height = "63vh";
let width = "100%";

window.onload = () => {
    var preferred_theme = "material-darker";

    const [input, output] = document.querySelectorAll('.codemirror-textarea');
    editor = CodeMirror.fromTextArea(input, {
        value: "//write your code here...",
        mode: 'javascript',
        lineNumbers: true,
        theme: preferred_theme,
        extraKeys: {"Ctrl-Space": "autocomplete"},
    });

    // var editorHeight = input.parentElement.clientHeight;
    // console.log(editorHeight);

    editor.setSize(width, height);
    editor.setValue(
        "//Write your code here\n\n"+
        "function hello(){\n"+
        "\treturn \"Hello World!\";\n"+
        "}"
    );

    const shell = CodeMirror.fromTextArea(output, {
        lineNumbers: false,
        theme: preferred_theme,
        mode: 'text/plain',
    });

    shell.setSize(width, height);

    const [run, clear] = document.querySelectorAll('.execute');

    run.addEventListener('click', () => {
        const codeToRun = editor.getValue();
        
        try{
            shell.replaceRange('sigmaCodePro ~/shell \n' + '$ ' + eval(`${codeToRun}`) + '\n\n', CodeMirror.Pos(shell.lastLine()));
        }catch(error){
            shell.replaceRange('sigmaCodePro ~/shell \n' + '$ ' + error + '\n\n', CodeMirror.Pos(shell.lastLine()));
        }
        
    });
    clear.addEventListener('click', () => {
        shell.setValue("");
    });

}

function download(){
    let text = editor.getValue();

    downloadBase(text, 'script', 'javascript');
}