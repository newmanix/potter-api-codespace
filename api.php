<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if(isset($_REQUEST['spell']))
{//check to be sure data has been transmitted via GET or POST
	switch($_REQUEST['spell'])
	{//determine contents of 'cat'
        case 'patronus':
        case 'please':    
            include('data/potter.js'); //sorting to be done client side
            break;
        default:
			echo 'That is not the magic word!';
	}
}else{//if not data sent, inform calling application
	echo "Incorrect parameter sent";
}
