<!DOCTYPE html>
<html>
<head>

		<meta charset="UTF-8" />
		<meta name="AlphaTech" content="Software for Deploy Webapps from Git" />
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="Text/CSS">
	#Werte
	{
		margin:auto;
		width:300px;
		padding-bottom: 20px;
		padding-left:20px;
		padding-top:10px;
		padding-right:20px;
		background-color:grey;
	}
	
</style>

</head>
<body>

	<div id="Werte">
	<center>
		<h1>ADD REPOSITORY</h1>
		<form action="add.php" method="post" align="center">
 
		<p>	GIT-LINK:<br />
		<input type="Text" name="link"></p>
 		<br />
 
		<p>DEPLOY-DIR:<br />
		<input type="Text" name="directory"></p>
 		<br />
 		
		<input type="Submit" name="" value="ADD">
	</center>	
	</form>
	
	
	</div>
	
	<div id="Werte">
	<center>
		<h1>Start Deploy</h1>
		<form action="deploy.php" method="post" align="center">
		<input type="Submit" name="" value="Deploy now!">
	</center>	
	</form>
	
	
	</div>

</body>
</html>