<?php

function speichern ($datei,$wert)
  {
   $filepointer= fopen ($datei,"a");
   fputs ($filepointer,$wert);
   fclose ($filepointer);
  }

$datum=date("d.m.Y");
$uhrzeit= date("H.i"); 
$remote= $_SERVER['REMOTE_ADDR']; 

$datei="/data/BILDUNGWISS/personal/jacobs/daten/konzentration/gu_neu.dat";
  $wert="$datum\t $uhrzeit\t $remote \n";
  speichern ($datei,$wert);

  
  
 

?>
<script>
  location.href="gu_neu.zip"
</script>
