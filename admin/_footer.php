<?php
if(isset($_SESSION['logged']) && !empty($_SESSION['logged'])){
?>
	<footer class="footer">
		<div class="container">
			<p class="text-muted">&copy; 2016 &middot; Nama Sekolah</p>
		</div>
	</footer>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jasny-bootstrap.min.js"></script>
</body>
</html>
<?php
} else {
	header('Location: ./login.php');
}
?>