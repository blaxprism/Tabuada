<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<link rel="stylesheet" type="text/css" href="style/style.css"/>
		<title>Laços de repetição</title>
	</head>
	<body>
		<!--começar a partir daqui-->
		<?php
			$num=$_POST["num"];
			$cont=0;
			$res;
			if (is_numeric($num)) {
				echo "<center><h1>Tabuada do $num</h1></center><hr color='#038700'/>";
				//while
				echo "<h2>While</h2> <hr color='blue'/>";
				while ($cont< 10) {
					$cont=$cont+1;
					$res=$num*$cont;
					echo "$cont * $num = $res <hr color='blue'/>";
				}
				$cont=0;

				//do while
				echo "<br/><h2>Do While</h2> <hr color='tourmaline'/>";
				do {
					$cont=$cont+1;
					$res=$num*$cont;
					echo "$cont * $num = $res <hr color='tourmaline'/>";
				} while ($cont < 10);
				$cont=0;

				//for
				echo "<br/><h2>For</h2> <hr color='cyan'/>";
				for ($cont=1; $cont <= 10; $cont++) { 
					
					$res=$num*$cont;
					echo "$cont * $num = $res <hr color='cyan'/>";
				
				}	
			}else{
				echo "Insira um valor válido";
			}
			
		?>
	</body>
</html>