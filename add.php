<?php
//New Post
if ( $_POST['link'] <> "" )
{

	$handle = fopen ( "gitlinks.txt", "a" );		
   	//write from form in stream
	fwrite ( $handle, $_POST['link']);
	fwrite ( $handle, PHP_EOL);
	//close stream
	fclose ( $handle );	
	$handle = fopen ( "deploypath.txt", "a" );		
   	//write from form in stream
	fwrite ( $handle, $_POST['directory']);
	fwrite ( $handle, PHP_EOL);
	//close stream
	fclose ( $handle );	

    header("Location: index.php");
    // Datei wird nicht weiter ausgef?hrt
	exit;
}
?>
