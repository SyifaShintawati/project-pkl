<?php

session_start();

if ( !isset($_SESSION["login"])) {
	header("location: login.php");
	exit;
}

?>
<!DOCTYPE html>
<html>
	<head><title>home</title></head>
	<style>
	body{
		background-color: #eee;
		font-family: Tahoma;
		text-align: center;
		color:  black;
		margin-top: 15%;
		background: url(logo.jpg);
		background-repeat: repeat;
		background-position: center center;
	}
	
	table {
		border: 2px solid black;
		text-align: center;
		width: 40%;
		height: 40%;
		font-size: 25px;
		background-color: white;
	}
	
	a {
		text-decoration: none;
		color : black;
		font-family: hobo std;
	}
	
	a:hover {
		text-decoration: none;
		color : blue;
	}
	
	h1 {
		font-family: times new roman;
		background-color: white;
	}
	</style>
	<body>
		<header>
			<h1>Pendaftaran Siswa Baru<br>SMK Negeri 1 Katapang</h1>
		</header>

			<center><table>
			<tr><td>Menu</td></tr>
					<tr>
						<td><a href="daftar.php">Daftar Baru</a></td>
					</tr>
					<tr>
						<td><a href="list.php">Pendaftar</a></td>
					</tr>
				</table></center>
				
	<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>