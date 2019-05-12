<?php
if(isset($_SESSION['logged']) && !empty($_SESSION['logged'])){
	$que = mysqli_query($db_conn, "SELECT * FROM un_konfigurasi");
	$hsl = mysqli_fetch_array($que);
	$timestamp = strtotime($hsl['tgl_pengumuman']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="aplikasi sederhana untuk menampilkan pengumuman hasil ujian nasional secara online">
    <meta name="author" content="slamet.bsan@gmail.com">
    
    <title>Pengumuman Kelulusan</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/jasny-bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles down here -->
    <style type="text/css">
	/* Sticky footer styles
	-------------------------------------------------- */
	html {
	  position: relative;
	  min-height: 100%;
	}
	body {
	  /* Margin bottom by footer height */
	  margin-bottom: 60px;
	}
	.footer {
	  position: absolute;
	  bottom: 0;
	  width: 100%;
	  /* Set the fixed height of the footer here */
	  height: 60px;
	  background-color: #f5f5f5;
	}


	/* Custom page CSS
	-------------------------------------------------- */
	/* Not required for template or sticky footer method. */

	body > .container {
	  padding: 30px 15px 0;
	}
	.container .text-muted {
	  margin: 20px 0;
	}

	.footer > .container {
	  padding-right: 15px;
	  padding-left: 15px;
	}

	code {
	  font-size: 80%;
	}
    </style>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jasny-bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="./">Info Kelulusan <?=$hsl['sekolah'] ?></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
				<!--tampil setelah sukses login -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="./">Home</a></li>
					<li><a href="user.php">User</a></li>
					<li><a href="data.php">Data</a></li>
					<li><a href="konfigurasi.php">Konfigurasi</a></li>
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $_SESSION['username']; ?> <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
									<li><a href="logout.php">Logout</a></li>
							</ul>
					</li>
				</ul>
		</div><!--/.nav-collapse -->
        </div>
    </nav>
<?php
} else {
	header('Location: ./login.php');
}
?>