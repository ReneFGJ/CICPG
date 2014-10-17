<?
global $cnn;

$base = "pgsql";
$base_user=$vars['base_user'];
$base_port = '8130';
$base_host="10.100.1.131";
$base_name="ojsbr";
if (strlen($base_user)==0) { $base_user="ojsbr"; }
$base_pass="ojsbr-2006";

$base = "mysql";
$base_user='root';
$base_host="localhost";
$base_name="semic";
$base_pass="root";

$ok = db_connect();		
?>
