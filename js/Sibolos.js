const contraseñaInput =document.querySelector("#contraseña");

contraseñaInput.addEventListener("keypress", function(e){

    if(!checkChar(e)){
        e.preventDefault();
    }

});
function checkChar(e){

    const char = String.fromCharCode(e.keyCode);

    const pattern = '[a-zA-Z0-9.,-_*+#$%&@?¡¿]'

    if(char.match(pattern)){
        return true;
    }

}

const correoInput =document.querySelector("#correo");

correoInput.addEventListener("keypress", function(e){

    if(!checkChar(e)){
        e.preventDefault();
    }

});
function checkChar(e){

    const char = String.fromCharCode(e.keyCode);

    const pattern = '[a-zA-Z0-9.,-_*+#$%&@]'

    if(char.match(pattern)){
        return true;
    }

}