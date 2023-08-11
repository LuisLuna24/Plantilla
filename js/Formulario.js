getData()

        function getData(){
            let input = document.getElementById("campo").value
            let content = document.getElementById("content")
            let url="/php/load.php"
            let formaData = new FormData()
            formaData.append('campo',input)
            fetch(url,{
                method: "POST",
                body: formaData
            }).then(response => response.json())
            .then(data => {
                content.innerHTML = data
            }).catch(err => console.log(err))
        }