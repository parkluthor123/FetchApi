<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Api</title>
    <link rel="stylesheet" href="./style.css" />
</head>
<body>
<div class="container mt-5">
    <h1>Lista de comentários</h1>
</div>
<br>
<section class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titulo</th>
                <th scope="col">Corpo</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</section>
<script>
    const lista = document.querySelector(".table tbody");
    fetch("https://jsonplaceholder.typicode.com/posts",{
        method: "GET",
        headers:{
            'content-type': 'application/json',
        }
    })
    .then((response)=>response.json())
    .then((responseJson) =>{
        console.log(responseJson)

        // Iteramos
        Object.values(responseJson).map(data=> (
            // lista.innerHTML += "<li>"+data.title+" | "+data.body+"</li>"
            lista.innerHTML += `
                <tr>
                    <th scope="row">${data.id}</th>
                    <td>${data.title}</td>
                    <td>${data.body}</td>
                </tr>
            `
        ))
        //Iteramos 
    })
</script>
</body>
</html>