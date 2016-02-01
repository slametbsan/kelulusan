<?php
session_start();
if(isset($_SESSION['logged']) && !empty($_SESSION['logged'])){
include "../database.php";
include '_header.php';
?>
<div class="container">
<h2>Manajemen User <small>Tambah Baru</small></h2><hr>

<?php
if(isset($_REQUEST['submit'])){
	//proses simpan data
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	
	$simpan = mysqli_query($db_conn,"INSERT INTO un_user VALUES('','$username',md5('$password'))");
	if($simpan){
		header('Location: user.php');
	} else {
		echo 'Ada error dengan query';
	}
} else {
	//form input user baru
?>
<form class="form-horizontal" method="post">
	<div class="form-group">
		<label for="username" class="col-sm-2 control-label">Username</label>
		<div class="col-sm-3">
			<input type="text" name="username" class="form-control" id="username" placeholder="Username" required autofocus>
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-3">
			<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-3">
			<button type="submit" name="submit" class="btn btn-primary">Simpan</button>
			<a href="user.php" class="btn btn-link">Batal</a>
		</div>
	</div>
</form>
<?php
}
?>

</div>
<?php
include '_footer.php';
} else {
	header('Location: ./login.php');
}
?>