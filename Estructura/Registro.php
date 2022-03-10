<?php include('Cabecera.php')?>
<h2>Ingresa tus datos</h2>
<form action="">
    <input type="text" placeholder="Nombre"><br>
    <input type="text" placeholder="Apellido Paterno"><br>
    <input type="text" placeholder="Apellido Materno"><br>
    <input type="tel" placeholder="Teléfono" maxlength="10"><br>
    <input type="email" placeholder="Correo electronico"><br>
    <input type="password" placeholder="Contraseña"><br>
    <input type="button" value="Registrarse"><br>
</form>
<p>¿Ya tienes cuenta? <a href="Login.php">Inicia sesión</a></p><br>
<form action=""><input type="button" value="Atras" onclick = "history.back()"></form>
<?php include('Pie.php')?>