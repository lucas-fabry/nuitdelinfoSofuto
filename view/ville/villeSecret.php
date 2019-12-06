<style>
    
    body{
        overflow: hidden;
    }
    
</style>


<form method="post" action="index.php?action=gagner&controller=secret">
<input name="code" type="text" placeholder="Rentrez-ici le code pour débloquer les armes">
<input type="submit" value="J'ai le code !">

</form>
<?php

$heures   = 00; 
$minutes  = 2;  
$secondes = 00; 

$annee = date("Y");  
$mois  = date("m");  
$jour  = date("d");  


$redirection = 'index.php?action=defaite&controller=secret';

$secondes = mktime(date("H") + $heures, date("i") + $minutes, date("s") + $secondes, $mois, $jour, $annee) - time();
?>

<script type="text/javascript">
var temps = <?php echo $secondes;?>;
var timer =setInterval('CompteaRebour()',1000);
function CompteaRebour(){

  temps-- ;
  j = parseInt(temps) ;
  h = parseInt(temps/3600) ;
  m = parseInt((temps%3600)/60) ;
  s = parseInt((temps%3600)%60) ;
  document.getElementById('minutes').innerHTML= (h<10 ? "0"+h : h) + '  h :  ' +
                                                (m<10 ? "0"+m : m) + ' mn : ' +
                                                (s<10 ? "0"+s : s) + ' s ';
if ((s == 0 && m ==0 && h ==0)) {
   clearInterval(timer);
   url = "<?php echo $redirection;?>"
   Redirection(url)
}
}
function Redirection(url) {
setTimeout("window.location=url", 500)
}
</script>



<body onload="timer">
<div id="minutes" style="position: absolute; font-size: 50px; font-weight: bold; color: orange; text-align: center; width: 100%;"></div></span>


<canvas id="renderCanvas" width="1400vw" height="500vh" style="margin-top: ;"></canvas>



