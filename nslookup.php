<html>
	<head>
		<title>NSLOOKUP</title>
	</head>
	<body>
		<form action="" method="post">
			<p>Введите доменное имя ресурса</p>
			<input type="text" name="domain" /><br></br>
			<input type="submit" name="submit" value="Передать"><br></br>
    </form>
	<p>IP-адрес(а):</p>
	<?php
		if (isset($_POST["submit"]))
		{
			if (empty($_POST['domain']))
			{
				echo "Нет данных!";
			}
			$ips=gethostbynamel($_POST['domain']);
			foreach($ips as $ip) echo "$ip<br>";
		}
		?>
	</body>
</html>

