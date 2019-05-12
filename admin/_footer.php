<?php
if(isset($_SESSION['logged']) && !empty($_SESSION['logged'])){
?>
	<footer class="footer">
		<div class="container">
		<p class="text-muted">&copy; <?=$hsl['tahun'] ?> &middot; Tim IT <?=$hsl['sekolah'] ?></p>
		</div>
	</footer>
    
    
</body>
</html>
<?php
} else {
	header('Location: ./login.php');
}
?>