<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <title>Página de consulta</title>
    <link rel="stylesheet" type="text/css"
     href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    
    <script type="text/javascript" charset="utf8" 
        src="https://code.jquery.com/jquery-3.3.1.js"></script>
    
    <script type="text/javascript" charset="utf8" 
      src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        } );
    </script>

</head>
<body>
<br><br>
<a href=inclui.php> Adicionar Pessoas</a>
<br><br>

<table id="table_id" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data</th>
            <th>Salario</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
<?php
$dsn = 'mysql:dbname=aulaphp;host=127.0.0.1';
$user = 'root'; //mysql usuario=root
$password = '';//sem senha
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
        $sql = 'SELECT * FROM exemplo1';
        foreach ($dbh->query($sql) as $row) {
        echo "<tr>";
        echo "<td>". $row['id'] . "</td>"; //$row metodo get como default
        echo "<td>". $row['nome'] . "</td>";//$row metodo get como default
        echo "<td>". date("d/m/Y", strtotime($row['data'])) . "</td>";// foi criado no date  o padrao dia/mes/ano        echo "<td>". $row['salario'] . "</td>";//$row metodo get como default
        echo "<td>". $row['salario'] . "</td>";//$row metodo get como default
echo "<td> <a href=editar.php?id=".$row['id'].">Editar</a></td>";
echo "<td> <a href=excluir.php?id=".$row['id'].">Excluir</a></td>";
        echo "</tr>";
        }
?>
    </tbody>
</table>    
</body>
</html>
