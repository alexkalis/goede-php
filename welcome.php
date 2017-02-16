<?php
function welcome(){
 
   if(date("H") > 6 && date ("H") < 12){
 
     echo "<img src='morning.png' <h1>Goede morgen</h1>";
 
   }elseif(date("H") > 12 && date("H") < 18){
 
     echo "<img src='afternoon.png' <h1>Goede middag</h1> ";
 
   }elseif(date("H") > 18 && date("H") < 24 ){
 
     echo "<img src='evening.png' <h1>Goede avond</h1>";
 
   }
	elseif(date("H") > 0 && date("H") < 6 ){
 
     echo "<img src='night.png' <h1>Goede nacht</h1>";
   }
 
}  