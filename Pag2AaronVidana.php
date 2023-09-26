<?php
session_start();

if (isset($_POST['user']) && isset($_POST['pass'])) {
    $_SESSION['username'] = $_POST['user'];
    $_SESSION['userpass'] = $_POST['pass'];
    $_SESSION['authuser'] = 0;

    // Check username and password information
    if (($_SESSION['username'] == 'Aaron') and ($_SESSION['userpass'] == '12345')) {
        $_SESSION['autenticar'] = 1;
    } else {
        echo 'Lo siento pero no tienes permiso para ver esta página!';
        exit();
    }
} 
?>
<html>
<head>
    <title>Mi Deporte <?php echo $_GET['mideporte']; ?></title>
</head>
<body>
<?php
echo "Bienvenido a mi página, ";
echo $_SESSION["username"];
echo "! <br/>";

echo " My deporte favorito es ";
echo $_GET['mideporte'] ?? 'Sin especificar';
echo " <br/>";
echo " Mis guantes son de la marca :";
echo $_SESSION["guantes"];
echo " <br/>";
echo " Mis espinilleras son de la marca :";
echo $_SESSION["espinilleras"];
$nota = 10;
echo "<br/>";
echo " My peleador favorito es ";
echo $_GET['mideporte2'] ?? 'Sin especificar';
echo "<br/>";
echo " Mi nota para mi deporte es : ";
echo $nota;

$mideporte = urlencode("KickBoxing");
echo "<a href='Pag2AaronVidana.php?mideporte=$mideporte'>";
echo "<br/>";
echo "<br/>";
echo "Clica aqui para mostrar mi deporte favorito";
echo "</a>";
echo "<br/>";
echo "<br/>";
$mideporte2 = urlencode("César Córdoba");
echo "<a href='Pag2AaronVidana.php?mideporte2=$mideporte2'>";
echo "Clica aqui para mostrar mi peleador favorito";
echo "</a>";

// Enlace para volver a la misma página
echo "<br/>";
echo "<br/>";
echo "<a href='Pag1AaronVidana.php?mideporte=" . urlencode("KickBoxing") . "'>Volver</a>";
echo "<br/>";
echo "La fecha y hora actual es: " . date("Y-m-d H:i:s");
echo "<br/>";
echo "Cookie Deporte: " . $_COOKIE['deporte'];
echo "<br/>";
echo "Cookie Comida favorita: " . $_COOKIE['comida'];
?>
</body>
</html>






