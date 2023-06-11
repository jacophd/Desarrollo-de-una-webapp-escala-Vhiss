document.getElementById("btn-consultar").onclick = function(){
    mostrarMensaje();
    consultarPHP();
}

function mostrarMensaje() {
    var mensajeContainer = document.getElementById("mensaje");
    mensajeContainer.textContent = "Consulta exitosa";
}

function consultarPHP() {
    var id = document.getElementById("id1").value;
    var url = 'http://localhost/webappz/assets/server/consulta.php?id=' + id;
    
    var iframe = document.getElementById("resultado-iframe");
    iframe.src = url;
}

document.getElementById("btn-imprimir").onclick = function() {
print()
};

