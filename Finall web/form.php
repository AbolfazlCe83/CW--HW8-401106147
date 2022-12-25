<?php
 chdir('FORMLIST');
 $counter = count(glob('*.txt')) + 1;
 $file = fopen($counter.".txt","w");

echo fwrite($file,"first name & last name: ");
echo fwrite($file, $_POST['fname']);
echo fwrite($file,"\r\nEmaill Adrres: ");
echo fwrite($file, $_POST['email']);
echo fwrite($file,"\r\nMessage: ");
echo fwrite($file, $_POST['descriptions']);
fclose($file);
?>