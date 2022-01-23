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