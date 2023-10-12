
<?php

// Path to log file 
$logfile = '/var/log/raspberry-noaa-v2/output.log';

// Check if file exists
if(file_exists($logfile)){

  // Open file
  $handle = fopen($logfile, 'r');
  
  // Read contents
  $contents = fread($handle, filesize($logfile));

  // Output contents
  echo nl2br($contents);

  // Close file
  fclose($handle);

} else {
  echo '<div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 50px; font-weight: bold;">Failas Nerastas</div>';
}

?>