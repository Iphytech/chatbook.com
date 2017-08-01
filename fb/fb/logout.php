<?php 
//www.freestudentprojects.com
session_start();

  
  
		@session_unregister('log');
		@session_unset();

  
 echo '<meta http-equiv="refresh" content="2;url=index.php">';
 echo'<span class="itext">Logging out please wait!...............</span>';?>
