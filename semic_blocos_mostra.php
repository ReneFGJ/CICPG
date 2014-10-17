<?php
require("cab.php");
require($include.'sisdoc_debug.php');
require($include.'sisdoc_data.php');

require("_class/_class_semic_blocos.php");
$blk = new blocos;

echo '<BR><BR><BR><BR><BR><BR><BR><BR>';
echo $blk->mostra_blocos();

?>
