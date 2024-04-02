function salvar(){
    var titulo = document.getElementById("titulo").value;
    var post_blog = document.getElementById("post_blog").value;
    var codigo = document.getElementById("codigo").value;
    var obj = {"codigo": codigo, "titulo": titulo, "post_blog": post_blog};
    localStorage.setItem(codigo, JSON.stringify(obj));
    //localStorage.setItem("post_blog", post_blog.trim() + date);
    alert("Salvo com Sucesso");
}

//salvar JSON.stringify(obj)
//get JSON.parse

function getPosts(){
    var titulo = localStorage.getItem("titulo");
    var post_blog = localStorage.getItem("post_blog");
    document.getElementById("titulo").innerHTML = titulo;
    document.getElementById("post_blog").innerHTML = post_blog;
}


function allStorage() {

    var archive = [];
    var keys = Object.keys(localStorage);    

    for (i = 1; i <= keys.length; i++) {        
        archive.push( i + '=' + localStorage.getItem(i));
    }

    return archive;
}