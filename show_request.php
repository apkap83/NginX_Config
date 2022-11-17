<?php

echo 'Path: ' . $_SERVER['REQUEST_URI'] . "<br/><br/>"; // Return Request URI

function getallheaders() {
    $headers = [];
    foreach ($_SERVER as $name => $value) {
        if (substr($name, 0, 5) == 'HTTP_') {
            $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
			
			echo str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5))))) . ": " . $value . "<br/>";
        }
    }
    return $headers;
}

getallheaders() // Return request headers;


?>
