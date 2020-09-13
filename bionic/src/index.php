<?php
echo 'Testando conexão <br /><br />';
$host = '192.168.15.51';
$user = 'phpuser';
$pass = 'pass';

$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die('Conexão falhou:' . $conn->connect_error);
}
echo "Conectado com sucesso!";
?>