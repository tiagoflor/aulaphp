<?php
$id=$_GET['id'];
$dsn = 'mysql:dbname=aulaphp;host=127.0.0.1';
$user = 'root'; //mysql usuario=root
$password = '';//sem senha
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$count = $dbh->exec("delete from  exemplo1 
                   where id=$id ");
echo "<p>$count registro foi excluído</p>";
echo "<br><br>
<a href=index.php>Voltar</a> ";
