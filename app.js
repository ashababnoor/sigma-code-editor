window.onload = () => {
    const [input, output] = document.querySelectorAll('.codemirror-textarea');
    const editor = CodeMirror.fromTextArea(input, {
        lineNumbers: true
    });
    const shell = CodeMirror.fromTextArea(output, {
        lineNumbers: false
    });

    const [run, clear] = document.querySelectorAll('button');

    run.addEventListener('click', () => {
        const codeToRun = editor.getValue();
        
        shell.replaceRange('$ ' + eval(`${codeToRun}`) + '\n', CodeMirror.Pos(shell.lastLine()));
    });
    //clear.addEventListener('click', () => console.log('clearing'));

}