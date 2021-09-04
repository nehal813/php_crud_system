<?php

//session stsrt 

session_start();

session_unset();

session_destroy();

header('location: form.php');
exit();


?>