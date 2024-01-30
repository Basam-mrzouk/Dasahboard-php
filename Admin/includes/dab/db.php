
<?php 

$dsn = "mysql:host=localhost;dbname=black;";
$user ="root";
$pass ="";
$option = array(
    pdo::MYSQL_ATTR_INIT_COMMAND => ('set names utf8'),
);
try {
    $connect = new pdo($dsn,$user,$pass,$option);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "faxjhgfd" . $e->getMessage();
}


?>