<?php
$nome = $_GET['nome'];   // tabelas para salvar nome, data e salario
$data = $_GET['data'];
$salario = $_GET['salario'];

$dsn = 'mysql:dbname=aulaphp;host=127.0.0.1';
$user = 'root'; //root
$password = '';//senha no mysql = vazio
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$sql = "insert into exemplo1(nome, data, salario)  
values('$nome', '$data', '$salario') ";
echo $sql; //mudança efetuada nas linhas 14,15,16
$count = $dbh->exec($sql);
echo "<p>$count registro foi incluído</p>";
echo "<br><br><a href=index.php>Voltar</a>  ";
?>
