<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<style type="text/CSS">
    span{
        font-size: 7rem;
    }
    
</style>
<body>
    <h1>¡Piedra, Papel, Tijera!</h1>
    <table>
    <tr>
        <th>Jugador 1</th>
        <th>Jugador 2</th>
    </tr> 
    <tr><td>
<?php
  $jug1 = random_int  (1,3);
  $jug2 = random_int  (1,3);
  switch($jug1){
    case 1:
        ?><span> &#x1F91C; </span>
        <?php break;
    case 2:
        ?><span>&#x1F91A; </span>
        <?php break;
    case 3:
        ?><span>&#x1F596;</span>
        <?php break;
      
  }
  
?></td>
<td>
<?php
  switch($jug2){
    case 1:
        ?><span> &#x1F91B; </span>
        <?php break;
    case 2:
        ?><span>&#x1F91A; </span>
        <?php break;
    case 3:
        ?><span>&#x1F596;</span>
        <?php break;
      
  }
  
?>
</td>
</tr>
<tr>
<?php 
    switch ($jug1){
    case 1 :
         switch($jug2){
         case 1:
             ?><th colspan="2">¡Empate!</th>
            <?php break;
        case 2:
             ?><th colspan="2">¡Ha ganado el jugador 2!</th>
            <?php break;
        case 3:
            ?><th colspan="2">¡Ha ganado el jugador 1!</th>
            <?php break;
        }
    break;
    
    case 2 :
         switch($jug2){
         case 1:
            ?><th colspan="2">¡Ha ganado el jugador 1!</th>
            <?php break;
        case 2:
            ?><th colspan="2">¡Empate!</th>
            <?php break;
        case 3:
            ?><th colspan="2">¡Ha ganado el jugador 2!</th>
            <?php break;
        }
    break;
    
    case 3 :
         switch($jug2){
         case 1:
            ?><th colspan="2">¡Ha ganado el jugador 1!</th>
            <?php break;
        case 2:
            ?><th colspan="2">¡Ha ganado el jugador 2!</th>
            <?php break;
        case 3:
            ?><th colspan="2">¡Empate!</th>
            <?php break;
        }
    break;
    }
?>
</tr>    
    </table>
</body>   
</html>
