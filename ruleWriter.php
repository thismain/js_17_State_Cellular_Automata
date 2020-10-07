
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$json="";
$rulen="";
if(isset($_GET['json'])){$json=$_GET['json'];}else{$json="";}
if(isset($_GET['rulen'])){$rulen=$_GET['rulen'];}else{$rulen="0";}

if($json!=""){
file_put_contents("./ruleFiles/rule".$rulen.".txt",$json);
//echo '<BR><BR>'.$json;
}

?>

