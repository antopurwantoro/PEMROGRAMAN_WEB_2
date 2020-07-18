<html>
<head>
	<title>contoh Penggunaan IF</title>
</head>

<body>

	<form> Besar Pembelian : 
		<input type=text value=total_beli><br><br>
		<input type=submit value="Tentukan Diskon">
	
	
<?php
	$total_beli = 150000;
	if (isset($total_beli))
	{
		$total_beli=intval($total_beli);
		$diskon=0;
		
		if($total_beli>=200000)
			$diskon=0.1;
		
		elseif ($total_beli>=100000)
			$diskon=0.05;
		
		else 
			$diskon=0.01;
		
		$diskon=$diskon * intval($total_beli);
 printf("\nBesar Pembelian = %s<br>\n",$total_beli);
 printf("Diskon = %s <br>\n", $diskon);
printf("Pembayaran = %s <br>\n", $total_beli-$diskon) ; 
	}
?>

</body>
</html>