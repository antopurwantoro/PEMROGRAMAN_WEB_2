<?php
$A=123; // variabel global

function test() {
$A="Test"; //variabel lokal

echo "Nilai A dalam fungsi = $A \n";
}
test();
echo "Nilai A luar fungsi = $A \n";
?>