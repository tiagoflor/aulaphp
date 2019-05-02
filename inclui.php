<!DOCTYPE html>
<html>
<head>
    <meta charset=utf8>
    <title>Inclusão de novos usuários</title>
</head>
<body>
<form action=salvar.php>   <!-- problema era um form abrindo e ferando na linha 17 --> 
<p>Nome</p>
<input type=text name=nome>
<p>Data</p>
<input type=date name=data>
<br><br>
<p>Salario</p>
<input type=number name=salario> 
<br><br>  
<input type=submit value=Salvar>
</form> 
<br><br>
<a href=index.php>Voltar</a>   
</body>
</html>
