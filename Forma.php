<!DOCTYPE html>
<html>

<head>
	<title>FET Restoran</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

		h1 {
			color: white;
			text-align: center;
			margin-top: 50px;
			font-size: 30px;
		}

		h4 {
			color: white
		}

		.narudzba {
			margin: 50px 200px;
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
						<a class="nav-link active" href="Forma.php">Naruči</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Pregled.php">Pregled narudžbi</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<h1>Molimo popunite podatke narudžbe</h2>
		<script>
			$(function() {
				$("#forma").submit(function() {
					if ($("#ime").val() == '') {
						alert('Nisi upisao ime');
						return false;
					};

					if ($("#prezime").val() == '') {
						alert('Nisi upisao prezime');
						return false;
					};


					if ($("#adresa_dostave").val() == '') {
						alert('Nisi upisao adresu dostave');
						return false;
					};

					if ($("#broj_telefona").val() == '') {
						alert('Nisi upisao broj telefona');
						return false;
					};

				});
			});
		</script>


		<div class="narudzba">
			<form id="forma" method="POST" action="Forma.php">
				<div class="form-row">
					<div class="col">
						<input class="form-control form-control-lg" type="text" placeholder="Ime" name="ime" id="ime">
					</div>
					<div class="col">
						<input class="form-control form-control-lg" type="text" placeholder="Prezime" name="prezime" id="prezime">
					</div>
				</div>

				<br>
				<h4>Odaberi jelo</h4>
				<select class="form-control form-control-lg" name="narudzba">
					<option value="Pizza">Pizza</option>
					<option value="Piletina na žaru">Piletina na žaru</option>
					<option value="Pržene lignje">Pržene lignje</option>
					<option value="Tjestenina bolognese">Tjestenina bolognese</option>
					<option value="Burger">Burger</option>
				</select>

				<br><br>

				<div class="form-row">
					<div class="col">
						<input class="form-control form-control-lg" type="text" placeholder="Adresa dostave" name="adresa_dostave" id="adresa_dostave">
					</div>
					<div class="col">
						<input class="form-control form-control-lg" type="text" placeholder="Broj telefona" name="broj_telefona" id="broj_telefona">
					</div>
				</div>

				<br>
				<h4>Način plaćanja</h4>
				<select class="form-control form-control-lg" name="nacin_placanja">
					<option value="Gotovina">Gotovina</option>
					<option value="Kartica">Kartica</option>
					<option value="Predračun">Predračun</option>
				</select>

				<br><br>

				<button type="submit" class="btn btn-primary btn-lg btn-block">NARUČI</button>
			</form>
		</div>


		<?php



		$host = "localhost";
		$username = "root";
		$password = "";
		$dbname = "fet_restoran";
		$conn = mysqli_connect($host, $username, $password, $dbname);
		if (isset($_POST['ime'])) {
			$ime = $_POST["ime"];
			$prezime = $_POST["prezime"];
			$narudzba = $_POST["narudzba"];
			$adresa_dostave = $_POST["adresa_dostave"];
			$broj_telefona = $_POST["broj_telefona"];
			$nacin_placanja = $_POST["nacin_placanja"];
			$sql = "insert into narudzba(ime,prezime,narudzba,adresa_dostave,broj_telefona,nacin_placanja)values('$ime','$prezime','$narudzba','$adresa_dostave','$broj_telefona','$nacin_placanja')";
			mysqli_query($conn, $sql);
		}


		?>

</body>

</html>