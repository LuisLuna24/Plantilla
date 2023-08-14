let paginaActual = 1

getData(paginaActual)

document.getElementById("campo").addEventListener("keyup", getData)
document.getElementById("num_registros").addEventListener("change", function(){
    getData(paginaActual)
}, false)


function getData(pagina){
    let input = document.getElementById("campo").value
    let num_Registros = document.getElementById("num_registros").value
    
    let content = document.getElementById("content")
    let url="./php/load.php"
    let formaData = new FormData()
    formaData.append('campo',input)
    formaData.append('registros',num_Registros)
    formaData.append('pagina',pagina)

    fetch(url,{
        method: "POST",
        body: formaData
    }).then(response => response.json())
    .then(data => {
        content.innerHTML = data.data
    }).catch(err => console.log(err))
}