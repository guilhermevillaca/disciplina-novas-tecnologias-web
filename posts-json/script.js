function buscaPosts(){
    //https://jsonplaceholder.typicode.com/posts
    var url = 'https://jsonplaceholder.typicode.com/posts';

    var table = document.querySelector('#tablebody');
    
    fetch(`${url}`)
     .then((response) => response.json())
     .then((data) => {
        /*"userId", "id": 1, "title", "body*/               
        data.forEach(post => {            
            table.innerHTML += '<tr><td>' + post.userId + '</td><td>' + post.id + '</td><td>' + post.title + '</td><td>' + post.body + '</td></tr>';            
        });
        
     })
     .catch((error) => {alert('houve um erro na requisição')});
}