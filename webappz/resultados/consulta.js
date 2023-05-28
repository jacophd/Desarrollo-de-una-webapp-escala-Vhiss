
document.getElementById("id").onclick = function(){
  analizar()
}

function analizar(){




// Realizar la solicitud al archivo PHP y obtener su contenido
fetch('/resultados/consulta.php')
  .then(response => response.text())
  .then(content => {
    // Agregar el contenido del archivo PHP al elemento 'resultado'
    document.getElementById('resultado').innerText = content;
  })
  .catch(error => console.error('Error:', error));

}