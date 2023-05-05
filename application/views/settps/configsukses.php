<div class="container">
<h5>SUKSES</h5>

<?php

$tps = $_SESSION['tps'];


echo "TPS ID : ".$tps['ID'];
echo "</br>";
echo "IP Adress: ".$tps['Adress'];
echo "</br>";
echo "Port : ".$tps['Port'];

?>
</div>