<html>
<head>
	<title>Penggunaan Switch - Case </title>
</head>

<body>
Hari ini :
<?php
$nama_hari = date('l');
Switch ($nama_hari)
{
	case "Sunday";
	printf("Minggu");
		print "Waktu untuk istirahat";
	break;
	case "Monday";
	printf("Senin <br>");
		print "Meeting awal minggu jam 08.00";
	break;
	case "Tuesday";
	printf ("Selasa <br>");
		print "Pembukaan Workshop Diklat";
	break;
	case "Wednesday";
	printf("Rabu");
		print "Seminar Launching Windows Vista di JCC";
	break;
	case "Thursday";
	printf ("Kamis");
		print "Pertemuan dengan Mahasiswa";
	break;
	case "Friday";
	Printf ("Jumat");
		print "Jogging Bersama";
	break;
	Default:
	Printf("Sabtu <br>");
		print "Survey harga ke Dusit, Mangga Dua";
}
?>
</body>
</html>