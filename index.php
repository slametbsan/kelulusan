<?php
include "database.php";
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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jasny-bootstrap.min.css" rel="stylesheet">
	<link href="css/kelulusan.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="./">Lulus 2016</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="./">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    
    <div class="container">
        <h2>Pengumuman Kelulusan</h2>
		
		<?php
		if(isset($_REQUEST['submit'])){
			//tampilkan hasil queri jika ada
			$no_ujian = $_REQUEST['nomor'];
			
			$hasil = mysqli_query($db_conn,"SELECT * FROM un_siswa WHERE no_ujian='$no_ujian'");
			if(mysqli_num_rows($hasil) > 0){
				$data = mysqli_fetch_array($hasil);
				
		?>
			<table class="table table-bordered">
				<tr><td>Nomor Ujian</td><td><?php echo $data['no_ujian']; ?></td></tr>
				<tr><td>Nama Siswa</td><td><?php echo $data['nama']; ?></td></tr>
				<tr><td>Kompetensi Keahlian</td><td><?php echo $data['komli']; ?></td></tr>
			</table>
			<table class="table table-bordered">
				<thead>
				<tr>
					<th>Bahasa Indonesia</th>
					<th>Bahasa Inggris</th>
					<th>Matematika</th>
					<th>Kejuruan</th>
				</tr>
				</thead>
				<tbody>
					<td><?php echo $data['n_bin']; ?></td>
					<td><?php echo $data['n_big']; ?></td>
					<td><?php echo $data['n_mat']; ?></td>
					<td><?php echo $data['n_kejuruan']; ?></td>
				</tbody>
			</table>
			
			<?php
			if( $data['status'] == 1 ){
				echo '<div class="alert alert-success" role="alert"><strong>SELAMAT !</strong> Anda dinyatakan LULUS.</div>';
			} else {
				echo '<div class="alert alert-danger" role="alert"><strong>MAAF !</strong> Anda dinyatakan TIDAK LULUS.</div>';
			}	
			?>
			
		<?php
			} else {
				echo 'nomor ujian yang anda inputkan tidak ditemukan! periksa kembali nomor ujian anda.';
				//tampilkan pop-up dan kembali tampilkan form
			}
		} else {
			//tampilkan form input nomor ujian
		?>
        <p>Masukkan nomor ujianmu pada form yang disediakan.</p>
        
        <form method="post">
            <div class="input-group">
                <input type="text" name="nomor" class="form-control" data-mask="23-101-999-9" placeholder="Nomor Ujian" required>
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit" name="submit">Periksa!</button>
                </span>
            </div>
        </form>
		<?php
		}
		?>
    </div><!-- /.container -->
	
	<footer class="footer">
		<div class="container">
			<p class="text-muted">&copy; 2016 &middot; Nama Sekolah</p>
		</div>
	</footer>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jasny-bootstrap.min.js"></script>
</body>
</html>