<?php
$A = 123; //variabel global
function test() {
global $A;//variabel lokal
echo "Nilai A dalam fungsi = $A \n";
}

Test();
echo "Nilai A luar fungsi = $A \n";
?>