<?php
define('HOST', 'login.mysql.database.azure.com');
define('USUARIO', 'php@login');
define('SENHA', 'Adm*2@1@');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
