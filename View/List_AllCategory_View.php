<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>List All Category</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>
	<body>
			<nav class="navbar navbar-expand-sm bg-light">

				<!-- Links -->
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="../index.php">Nsh.edu.vn</a>
					</li>
		
				</ul>

			</nav>
		<div class="container">
			<div class="text-center">
				<h3 class="display-3">List All Category</h3>
			</div>
			
		</div>
		<div class="container">
			<div class="row">
				<table class="table table-hover">
 				<thead>
 					<tr>
 						<th>CategoryID</th>
 						<th>CategoryName</th>
 						<th>View details</th>
 					</tr>
 				</thead>
 				<tbody><?php foreach ($categorys as $category): ?>
 					<tr>
 						<td><?= $category['categoryID'] ?></td>
 						<td><?= $category['categoryName'] ?></td>
 						<td><a href="?action=view_detail&categoryID=<?php echo $category['categoryID'] ?>" title="">ViewDetails</a></td>
 					</tr><?php endforeach ?>
 				</tbody>
 			</table>
			</div>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>