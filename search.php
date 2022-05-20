<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Search Patrol Car</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
	<div class="container" style="width: 80%">
		<?php require_once 'nav.php' ?>
		<section style="margin-top: 20px">
			<form action="update.php" method="post">

			<div class="form-group row">
				<label for="patrolCarId" class="col-lg-4 col-form-label">Enter Patrol Car's Number</label>
				<div class="col-lg-8">
					<input type="text" name="patrolCarId" class="form-control" id="patrolCarId">
				</div>
			</div>

			<br>

			<div class="form-group row">
				<div class="col-lg-4"></div>
				<div class="col-lg-8">
					<input class="btn btn-primary" type="submit" name="btnSearch" value="Search">
				</div>
			</div>

			</form>
		</section>
		<footer class="page-footer font-small blue pt-4 footer-copyright text-center py-3">
			&copy;2021 Copyright
			<a href="www.ite.edu.sg">ITE</a>
			
		</footer>
	</div>
	<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-3.5.0.min.js"></script>

</body>
</html>