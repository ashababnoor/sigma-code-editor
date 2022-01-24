//takes user to given url

function goTo(url){
    location.assign(url)
}

function downloadBase(text, filename, extension) {

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
    else if (filename.search(".css")) {
        element.setAttribute('href', 'data:css/plain;charset=utf-8,' + encodeURIComponent(text));
    }
    else if (filename.search(".js")) {
        element.setAttribute('href', 'data:js/plain;charset=utf-8,' + encodeURIComponent(text));
    }
    else if (filename.search(".php")) {
        element.setAttribute('href', 'data:php/plain;charset=utf-8,' + encodeURIComponent(text));
    }
    else if (filename.search(".py")) {
        element.setAttribute('href', 'data:py/plain;charset=utf-8,' + encodeURIComponent(text));
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

function deletefn(id, table) {
    var result = confirm("Are you sure you want to delete?");
    if (result) {
        location.assign('deleteProcess.php?id=' + id + '&table=' + table);
    }
}