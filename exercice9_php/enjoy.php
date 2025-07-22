<?php
  $choices = $_POST["box"] ?? [];
  
if(count($choices)>=2){
    foreach($choices as $choice){
   echo "<ul>
   <li>$choice</li>
   </ul>";
    } 
} else {
    echo "2 choix minimum.";
}
    
?>