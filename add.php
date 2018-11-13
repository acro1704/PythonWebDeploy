<?php
//New Post
if ( $_POST['link'] <> "" )
{

			$handle = fopen ( "gitlinks.txt", "a" );		
		   	//write from form in stream
			fwrite ( $handle, $_POST['link']);
			//close stream
    		fclose ( $handle );	
    		$handle = fopen ( "deploypath.txt", "a" );		
		   	//write from form in stream
			fwrite ( $handle, $_POST['directory']);
			//close stream
    		fclose ( $handle );	

    echo '<h1>Inhalt gespeichert</h1>';
    // Datei wird nicht weiter ausgef?hrt
	exit;
}
?>