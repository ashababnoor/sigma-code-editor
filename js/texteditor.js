function post(url,data,callback) {
    var xdr = new XMLHttpRequest();
    xdr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            callback(this.responseText);
        }
    };
    xdr.open("POST", 'php/' + url, true);
    xdr.setRequestHeader("Content-type0", "application/x-www-from-urlencoded");
    if(typeof data === "object") {
        var newObj = "";
        for(var i in data) {
            newObj += i + '=' + data[i];
            if(Object.keys(data).indexOf(i) !== Object.keys(data).length-1) {
                newObj += '&';
            }
        }
        data = newObj;
    }
    xdr.send(data);
}

function openFolder(folder) {
    post("dir.php", {folder:folder}, function(data){
        document.getElementById('files').innerHTML = data;
    });
}