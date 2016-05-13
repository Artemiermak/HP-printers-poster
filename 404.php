<?php
$page_title = '404 Error :-(';

require_once("header.php");
?>

<!-- ************ CSS style ************ -->
<style>
	section.Error404 {
		text-align: center;
		font-family: Oxygen, Arial, sans-serif;
	}

	section.Error404 img {
		display: block;
		margin: 3% auto;
		width: 10%;
	}

	section.Error404 h2 {
		display: inline-block;
	}

	section.Error404 p {
		font-size: 130%;
	}
</style>

<!-- ********** HTML ************ -->
<section class="Error404">
	<img src="images/Erorr.ico" alt="Error photo" />
	<!-- image credit: http://www.iconarchive.com/show/popo-emotions-icons-by-rokey/too-sad-icon.html-->
	<h2>Unfortunately I can't find this page...</h2>
	<p>Could you please try another page or link?</p>
</section>

<?php
require_once("footer.php");
?>
