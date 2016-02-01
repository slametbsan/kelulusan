<?php
session_start();
if(isset($_SESSION['logged']) && !empty($_SESSION['logged'])){
include "../database.php";
include '_header.php';
?>
<div class="container">
<h2>Manajemen User</h2><hr>
<div class="alert alert-warning"><strong>Peringatan !</strong><br>Hak akses user pada aplikasi ini sangat sederhana, siapapun user yang memiliki hak akses dapat melakukan perubahan konten database. Meskipun aplikasi ini telah dilengkapi enkripsi untuk password, <strong>jangan</strong> menggunakan kata-kata yang umum sebagai password admin.</div>
<?php
		
	$qUser = mysqli_query($db_conn,"SELECT * FROM un_user ORDER BY username");

	echo '<div class="row">';
	echo '<div class="col-md-6">';
	echo '<table class="table table-bordered">';
	echo '<thead><tr><th>#</th><th>Username</th><th><a href="user_add.php" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</a></th></tr></thead>';
	echo '<tbody>';
	
	$no = 1;
	while($data = mysqli_fetch_array($qUser)){
		echo '<tr>';
		echo '<td>'.$no.'</td>';
		echo '<td>'.$data['username'].'</td>';
		echo '<td><a href="user_edit.php?uid='.$data['UID'].'" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a> ';
		echo '<a href="user_del.php?uid='.$data['UID'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin akan menghapus user ini?\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a></td>';
		echo '</tr>';
		$no++;
	}
	
	echo '</tbody></table></div></div>';
?>
</div>
<?php
include '_footer.php';
} else {
	header('Location: ./login.php');
}
?>