<?php
include("fitfiles_web.php");
//include("classes/log.php");


// Tested
$params["op"]="signin";
$params["email"]="umer@citrusbits.com";
$params["password"]="user123";


/*$params["op"]="signout";
$params["user_id"]="1";*/



 //Tested
/*$params["op"]="signup";
$params["first_name"]="umer";
$params["last_name"]="sufyan";
$params["phone"]="0321-529-4004";
$params["email"]="umer@citrusbits.com";
$params["password"]="user123";*/


//$objLog = new Log();
//$objLog->add($_POST["op"],implode(":",$_POST));

$result=FitFilesRequest($params);

echo "<pre>";
print_r($result);


?>