<?php

//$output = shell_exec('version.sh'); 
//echo $output;

$files = array(
  "1_1.md", 
  "1_2.md", 
  "1_3.md", 
  "2.md", 
  "2_1.md", 
  "2_2.md", 
  "3.md", 
  "3_1.md", 
  "3_2.md",
  "3_2_1.md",
  "3_2_2.md",
  "3_2_3.md",
  "3_2_4.md",
  "3_2_5.md",
  "3_2_6.md",
  "3_3_1.md",
  "3_3_2.md",
  "4_1.md",
  "4_2_1.md",
  "4_2_2.md",
  "4_2_3.md",
  "4_2_4.md",
  "4_2_5.md",
  "4_2_6.md",
  "5_1.md",
  "5_2_1.md",
  "5_2_2.md",
  "5_3.md",
  "5_4.md",
  "5_5.md",
  "5_6.md",
  "6.md",
  "README.md",
  "_navbar.md",
  "_sidebar.md",
  "custom-theme.css",
  "index.html",
  "list-of-abbreviations.md",
  "list-of-boxes.md",
  "list-of-figures.md",
  "list-of-tables.md",
  "table-of-contents.md"
);

$file_compare = '_timecheck.txt';
$line = "This is a time check\n";

$a = "0";

foreach ($files as $value) {
  if ( file_exists($value) && filemtime($value) > filemtime($file_compare) ){
    file_put_contents($file_compare, $line, FILE_APPEND | LOCK_EX);
    $a = "1";
    break;
  }
}

unset($value);
echo "done";
?>
