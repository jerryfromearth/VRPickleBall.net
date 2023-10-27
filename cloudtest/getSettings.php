<?php
$userId = $_GET["userId"];
if(!is_numeric($userId)){
  print("{}");
  return;
}
$fileName = "";
if(isset($_GET['fileName'])){
  $fileName = $_GET['fileName'];
}
$type = $_GET["type"];
$environment = $_GET["environment"];


$url="";
switch($type){
  case "paddleSettings":
    $url="http://elevenlogcollector-env.js6z6tixhb.us-west-2.elasticbeanstalk.com/listSettingsFileihrge0i98wug2gu9wioqjj2ugw89io?settingsName=PaddleSettings&environment=".$environment."&userId=".$userId;
    break;
  case "paddleSetting":
    $url="http://elevenlogcollector-env.js6z6tixhb.us-west-2.elasticbeanstalk.com/getSettingsFile9g8ygyvh1bj2ir3g9eu87wy23h4gir9u8ywg3?settingsName=PaddleSettings&environment=".$environment."&userId=".$userId."&fileName=".$fileName;
    break;
  case "ballMachines":
    $url="http://elevenlogcollector-env.js6z6tixhb.us-west-2.elasticbeanstalk.com/listSettingsFileihrge0i98wug2gu9wioqjj2ugw89io?settingsName=BallMachineSettings&environment=".$environment."&userId=".$userId;
    break;
  case "ballMachine":
    $url="http://elevenlogcollector-env.js6z6tixhb.us-west-2.elasticbeanstalk.com/getSettingsFile9g8ygyvh1bj2ir3g9eu87wy23h4gir9u8ywg3?settingsName=BallMachineSettings&environment=".$environment."&userId=".$userId."&fileName=".$fileName;
    break;
  default:
    print("{}");
    return;
}
$content=file_get_contents($url);
print($content);
?>