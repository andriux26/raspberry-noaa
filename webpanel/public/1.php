

<?php


$lines = file('/home/pi/raspberry-noaa-v2/scripts/common.sh');


$substr = substr($lines[54], -11);

echo '<br>';
echo '<br>';
echo '<br>';



echo '<div style="text-align: center; font-size: 36px;">'.$substr.'</div>';

if(isset($_POST['btn1'])) {
  $content = file_get_contents($filename);
  $lines = explode("\n", $content);
  $lines[54] = 'meteoras 123';
  file_put_contents($filename, implode("\n", $lines));
}

if(isset($_POST['btn2'])) {
  $content = file_get_contents($filename);
  $lines = explode("\n", $content);
  $lines[54] = 'meteoras321';  
  file_put_contents($filename, implode("\n", $lines));
}



<div style="text-align:center;">

<form method="post">
<input type="submit" name="btn1" value="Button 1">
<input type="submit" name="btn2" value="Button 2">
</form>

</div>



php?>