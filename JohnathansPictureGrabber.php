<?php
$UseThisPicture='';
$AltText='';
$files_found_counter=0;
$the_directory = opendir($WebPage12_random_pictures);
$array=array();
while($every_file = readdir($the_directory)){
  $file_name_including_extension = preg_split("/\./",$every_file);
  if(sizeof($file_name_including_extension) == 2) {
    $file_name_excluding_the_extension = $file_name_including_extension[0];
    $file_extension = strtoupper($file_name_including_extension[1]);
  } else {
    $file_extension = "SkipThisFile";
  }
  if(strtolower($file_extension) == "jpg"){
    $files_found_counter=$files_found_counter+1;
    $array[$files_found_counter]=$every_file;
  }
}
if($array[$files_found_counter]<>''){
  $UseThisPicture=$array[rand(1,$files_found_counter)];
  $AltText=$UseThisPicture;
  $AltText=str_replace('_',' ',$AltText); // replace underscores with spaces
  $AltText=substr($AltText,0,-4); // remove the file extension
}
?>