<!DOCTYPE html>
<html>
<head>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

		<meta charset="UTF-8" />
		<meta name="AlphaTech" content="Software for Deploy Webapps from Git" />
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

	<div class="container">
		
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="https://github.com/valplusplusle/PythonWebDeploy">GitHub</a></li>
				<li class="breadcrumb-item"><a href="https://github.com/valplusplusle/PythonWebDeploy">Debug-Log</a></li>
			</ol>
		</nav>
		
		<?php
		$gitListArray = explode("\n",file_get_contents("gitlinks.txt"));
		$gitListArray2 = explode("\n",file_get_contents("deploypath.txt"));
		$counter = 0;
		foreach ($gitListArray as $gitListArrayItem) {
			echo "<a href='" . $gitListArray2[$counter] . "'>";
			echo "<p class='list-group-item'>";
			echo $gitListArrayItem;
			echo "</p>";
			echo "</a>";
			$counter ++;
		}
		?>
		<form action="deploy.php" method="post" align="center">
			<input class="btn btn-dark btn-lg btn-block" type="Submit" name="" value="Deploy now!">
		</form>
		<hr />
		<h1>ADD Repository to Deploy-List</h1>
		<form action="add.php" method="post" align="center">
 
			<p>	GIT-LINK:<br />
			<input class="form-control" type="Text" name="link"></p>
	 		<br />
	 
			<p>DEPLOY-DIR:<br />
			<input class="form-control" type="Text" name="directory"></p>
	 		<br />
	 		
			<input class="btn btn-dark btn-lg btn-block" type="Submit" name="" value="ADD">
		</form>
	
	
	</div>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	
</body>
</html>