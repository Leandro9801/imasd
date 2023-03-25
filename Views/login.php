<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../Public/Assets/css/style-login.css">
</head>
<body>
  <div class="principal">
    <div class="contenedor-izq">
      <div class="centrado">
        <img class="imagen-login" src="../Public/Assets/img/login/Login.png" alt="">
      </div>
    </div>
    
    <div class="contenedor-der">
      <div class="logo">
      <a href="index.php"><img src="../Public/Assets/img/login/imasd.svg" alt="logo" width="100" height="100"></a>
        
      </div>
      <p class="bienvenido">Bienvenido</p>
      <br>
      <p >Inicie sesión por favor</p>
      <br>
      <form id="login-form" action="../Models/autentificarModel.php" method="POST">
        <label class="letras" for="email">CORREO:</label>
        <br>
        <input class="entrada" type="email" id="email" name="correo" required>
        <br> <br>
        <label class="letras" for="password">CONTRASEÑA:</label>
        <br>
        <input class="entrada" type="password" id="password" name="contrasena" required>
        <br><br>
        <button id="boton" type="submit">Iniciar sesión</button>

            <script>
              const form = document.getElementById('login-form');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');

            form.addEventListener('submit', (event) => {
              if (!isValidEmail(emailInput.value)) {
                alert('Ingrese una dirección de correo electrónico válida');
                event.preventDefault();
              }

              if (!isValidPassword(passwordInput.value)) {
                alert('Ingrese una contraseña válida (al menos 4 caracteres)');
                event.preventDefault();
              }
            });

            function isValidEmail(email) {
              // Expresión regular para verificar que la dirección de correo electrónico sea válida
              const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
              return emailPattern.test(email);
            }

            function isValidPassword(password) {
              return password.length >= 4;
            }
            </script>


      </form>
    </div>


  </div>

</body>
</html>