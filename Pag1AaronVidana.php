<?php
session_start();
setcookie("deporte", "KickBoxing", time() + 3600, "/");
setcookie("comida", "Chuletón", time() + 3600, "/");
$_SESSION['username'] = "Aaron";
$_SESSION['autenticar'] = 1;
$_SESSION['guantes'] = "Leone";
$_SESSION['espinilleras'] = "SharkBoxing";
?>
<html>
<head>
    <title>Encuentra mi deporte favorito</title>
</head>
<body>
<form method="post" action="Pag2AaronVidana.php">
    <p>Escribe tu nombre:
        <input type="text" name="user" />
    </p>
    <p>Escribe tu contrasenya:
        <input type="password" name="pass" />
    </p>
    <p>
        <input type="submit" name="submit" value="Enviar" />
    </p>
</form>

</body>
</html>
<?php
echo "<br/>";
echo "La fecha y hora actual es: " . date("Y-m-d H:i:s");
?>





