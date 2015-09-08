<?php
$conn = mysql_connect('127.0.0.1', 'root', 'web6p') or die( 'Erro ao se conectar com o banco: ' . mysql_error() );
mysql_select_db('beealert', $conn) or die( 'Erro ao escolher database: ' . mysql_error() );

?>