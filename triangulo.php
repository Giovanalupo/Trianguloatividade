<html>
	<head>
		<title>Triangulo</title>
	</head>
	<body>
<pre>
Dados os trˆs lados de um triˆngulo, escrever uma mensagem informando se é um triâgulo equilátero,
isósceles e ascaleno. Lembre-se que os lados só formam um triângulo se o comprimento de um lado for
sempre menor do que a soma dos outros dois (o programa deve exibir uma mensagem de erro caso essa
propriedade não seja satisfeita)
</pre><p>&nbsp;</p>
		<form method="post" action="#">
			<label>V1: </label>
			<input type="text"  name="V1" /><br />

			<label>V2: </label>
			<input type="text"  name="V2" /><br />

			<label>V3: </label>
			<input type="text"  name="V3" /><br />
			<input type="submit" value="OK" />
		</form>

		<?php
		if($_POST["V1"]!="" and $_POST["V2"]!="" and $_POST["V3"]!=""){
			#echo "all ok";

			

			if ($_POST["V1"]==$_POST["V2"] and $_POST["V2"]==$_POST["V3"]) {
				echo "<br>Equilatero";
			}elseif ($_POST["V1"]!=$_POST["V3"] and $_POST["V1"]!=$_POST["V2"] and $_POST["V2"]!=$_POST["V3"]){
					echo "<br>Escaleno";
			}else{
				echo "<br>Isosceles";
			}

		}else{
			echo "digite um valor";
		}
		?>
	</body>
</html>