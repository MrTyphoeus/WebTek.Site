<meta charset="utf-8">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<title>Admin panel</title> </head>
	<form method="post" action="gelenVeriler.php">
		
			<table border="5px">
			           <th>İsim: </th>
                        <td><?php echo $_POST["isim"]; ?></td>
                        </tr>
                        <tr>
                        <th>Soyisim: </th>
                        <td><?php echo $_POST["soyisim"]; ?></td>
                        </tr>
                        <tr>
                        <th>E-Mail: </th>
                        <td><?php echo $_POST["email"]; ?></td>
                        </tr>
                        <tr>
                        <th>Konu: </th>
                        <td> <?php echo"".$_POST["konu"]?></td>
                        </tr>
                        <tr>
                        <th>Mesaj: </th>
                        <td> <?php echo"".$_POST["mesaj"]?></td>
                        </tr>
			</table>
		</form>
		<a class="btn btn-primary" href="about.html">Ana Sayfaya Dönüş</a>
