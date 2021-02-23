<!DOCTYPE html>
<html>

<head>
	<title>FET Restoran</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<style>
		html {
			min-height: 100%;
		}

		body {
			background-image: url("background1.jpg");
			background-size: cover;
			background-repeat: no-repeat;
			min-height: 100%;
		}

		.tablica {
			margin: 50px;
		}
	</style>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="index.html">Početna stranica</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Forma.php">Naruči</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="Pregled.php">Pregled narudžbi</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="tablica">
		<table class="table table-striped table-dark">
			<thead>
				<tr>
					<th scope="col">Ime</th>
					<th scope="col">Prezime</th>
					<th scope="col">Nardužba</th>
					<th scope="col">Adresa dostave</th>
					<th scope="col">Broj telefona</th>
					<th scope="col">Način plaćanja</th>
				</tr>
			</thead>

			<?php
			$host = "localhost";
			$username = "root";
			$password = "";
			$dbname = "fet_restoran";
			$conn = mysqli_connect($host, $username, $password, $dbname);
			$sql = "select * from narudzba";
			$rez = mysqli_query($conn, $sql);

			while ($row = mysqli_fetch_assoc($rez)) {
				echo "<tr>";
				echo "<td>" . $row["ime"] . "</td><td>" . $row["prezime"] . "</td><td>" . $row["narudzba"] . "</td><td>" . $row["adresa_dostave"] . "</td><td>" . $row["broj_telefona"] . "</td><td>" . $row["nacin_placanja"] . "</td>";
				echo "</tr>";
			}
			mysqli_close($conn);
			?>

		</table>
	</div>

</body>

</html>