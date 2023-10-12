<meta name="generator" content="Namo WebEditor(Trial)">
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<span style="font-size: 50px;">
<p align="center"><?php
    $bytes = disk_free_space(".");
    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
    $base = 1024;
    $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
    echo sprintf('%1.2f' , $bytes / pow($base,$class)) . ' ' . $si_prefix[$class] . '<br />';
   
$f = fopen("/sys/class/thermal/thermal_zone0/temp","r");
    $temp = fgets($f);
    echo 'CPU Temperatura - '.round($temp/1000);
    fclose($f);
    header('refresh: 5');

?>
</p>
