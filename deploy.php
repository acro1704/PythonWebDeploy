<?php

echo shell_exec("python pythondeploy.py 2>&1"); 

echo "Page refresh after 5 seconds to the main page!";

header("refresh:5;url=index.php" );

?>
