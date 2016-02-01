<?php
session_start();
if(isset($_SESSION['logged']) && !empty($_SESSION['logged'])){
include "../database.php";
include '_header.php';
?>
<div class="container">
<h2>Manajemen User <small>Edit</small></h2><hr>

<?php
$uid = $_REQUEST['uid'];

if(isset($_REQUEST['submit'])){
	//proses simpan data
	$username = $_REQUEST['username'];
	if(isset($_REQUEST['password'])){
		$password = $_REQUEST['password'];
		$sql = "UPDATE un_user SET username='$username', password=md5('$password') WHERE UID='$uid'";
	} else {
		$sql = "UPDATE un_user SET username='$username' WHERE UID='$uid'";
	}
	
	$simpan = mysqli_query($db_conn,$sql);
	if($simpan){
		header('Location: user.php');
	} else {
		echo 'Ada error dengan query';
	}
} else {
	//form edit user
	$qUser = mysqli_query($db_conn,"SELECT * FROM un_user WHERE UID='$uid'");
	$data = mysqli_fetch_array($qUser);
?>
<form class="form-horizontal" method="post">
	<div class="form-group">
		<label for="username" class="col-sm-2 control-label">Username</label>
		<div class="col-sm-3">
			<input type="text" name="username" class="form-control" id="username" placeholder="Username" value="<?php echo $data['username']; ?>" required autofocus>
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-3">
			<input type="password" name="password" class="form-control" id="password" placeholder="Password">
			<span id="helpBlock" class="help-block">Biarkan kosong jika tidak ingin merubah password.</span>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-3">
			<button type="submit" name="submit" class="btn btn-primary">Update</button>
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