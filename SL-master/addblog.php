<?php
include 'includes/header.php';
?>
<style type="">
	form{
		padding-top:80px;
		text-align: center;
	}
	input{
		margin-left: 2%;
	}
	button
	{
		padding: 0px;
	}
</style>
<div class="container">
<form method="POST" action="Config/insert_in_db.php">
<label>ID:<input type="text" name="idd"></label><br>
<label>Title:<input type="text" name="titlee"></label><br>
<label>Content:<input type="text" name="contentt"></label><br>
<button class="btn btn-lg btn-outline-danger" name="submit">Create Blog</button>
</form>
</div>
<?php
include 'includes/footer.php';
?>