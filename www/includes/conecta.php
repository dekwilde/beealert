<?php
$conn = mysql_connect('192.185.222.93', 'web6p071_beebee', 'b33al3rt') or die( 'Erro ao se conectar com o banco: ' . mysql_error() );
mysql_select_db('web6p071_beealert', $conn) or die( 'Erro ao escolher database: ' . mysql_error() );

?>