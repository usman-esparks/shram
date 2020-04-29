<?php

$success = mail('313a063e-6086-4127-8a22-2b8f00f4ed2d', 'My Subject', 'testing');
if (!$success) {
    $errorMessage = error_get_last()['message'];
}else{
	$errorMessage ="none 12";
}
print_r($errorMessage);
?>