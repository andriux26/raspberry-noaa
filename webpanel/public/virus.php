
<?php

// Path to log file 
$logfile = '/var/log/clamav/clamav.log';



// Check if file exists
if(file_exists($logfile)){

  // Open file
  $handle = fopen($logfile, 'r');

  // Read full contents
  $contents = fread($handle, filesize($logfile));

  // Close file
  fclose($handle);

  // Display contents
  echo '<div class="log-frame">';
  echo '<pre>' . nl2br($contents) . '</pre>';
  echo '</div>';

} else {

  // Show error
 echo '<div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 50px; font-weight: bold;">Failas Nerastas</div>';
}

?>
<style>
.log-frame {
  border: 10px solid #ccc;
  padding: 20px;
  width: 80%;
  margin: 0 auto; 
}

.error {
  text-align: center;
  font-size: 24px;
  font-weight: bold;
}
</style>