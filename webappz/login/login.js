document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
  
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
  
    // Aquí puedes hacer una solicitud al servidor para verificar las credenciales
    // y realizar el proceso de autenticación
  
    if (username === 'admin' && password === 'admin123') {
      // Login exitoso, redirigir a la página de inicio
      window.location.href = '/resultados/results.html';
    } else {
      // Credenciales inválidas, mostrar mensaje de error
      alert('Credenciales inválidas');
    }
  });