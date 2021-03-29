

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Number Count</title>
  </head>
  <body>
  <?php

  /*
  // Displaying numbers from 1 to 100
  $counter = 0;

  while(true) {
    $counter = $counter + 1;
    echo "$counter <br>";
    if ($counter === 100) {
      break;
    }
  }
  echo "The loop is finally stopped."
  */

 
/**
 * 1. Randomize a number between the range of 1 - 100
 * 2. Determine the range of the number
 * 0 <= x <= 10
 * 10 < x <= 19 
 * 100 sata
 * 20 <= x < 99
 * Read out that number in Finnish
 */

$myNumber = rand(0, 100);
$result;

if (0 <= $myNumber && $myNumber <= 10) {
    switch($myNumber){
        case 0:
            $result = "nolla";
            break;
        case 1:
            $result = "yksi";
            break;
        case 2:
            $result = "kaksi";
            break;
        case 3:
            $result = "kolme";
            break;
        case 4:
              $result = "neljä";
              break;
        case 5:
              $result = "viisi";
              break;
        case 6:
              $result = "kuusi";
              break;
        case 7:
              $result = "seitsemän";
              break;
        case 8:
              $result = "kahdeksan";
              break;
        case 9:
              $result = "yhdeksän";
              break;
        case 10:
            $result = "kymmenen";
            break;
        default:
            break;
    }

} 

elseif (10 < $myNumber && $myNumber <= 19) {
    $remainer = $myNumber - 10;
    switch($remainer){
        case 1:
            $result = "yksi";
            break;
        case 2:
            $result = "kaksi";
            break;
        case 3:
            $result = "kolme";
            break;
        case 4:
              $result = "neljä";
              break;
        case 5:
              $result = "viisi";
              break;
        case 6:
              $result = "kuusi";
              break;
        case 7:
              $result = "seitsemän";
              break;
        case 8:
              $result = "kahdeksan";
              break;
        case 9:
              $result = "yhdeksän";
              break;
              
        default:
            break;
    }
    
    $result = "$result toistä";

} 

elseif (20 <= $myNumber && $myNumber <= 99) {
    $module = floor($myNumber / 10);
    $remainder = $myNumber % 10;
    
    switch($module){
        case 1:
            $result = "yksi";
            break;
        case 2:
            $result = "kaksi";
            break;
        case 3:
            $result = "kolme";
            break;
        case 4:
              $result = "neljä";
              break;
        case 5:
              $result = "viisi";
              break;
        case 6:
              $result = "kuusi";
              break;
        case 7:
              $result = "seitsemän";
              break;
        case 8:
              $result = "kahdeksan";
              break;
        case 9:
              $result = "yhdeksän";
              break;
              
        default:
            break;
    }
      

      $result = "$result kymmentä";

    switch($remainder) {
        case 1:
            $result = "$result yksi";
            break;
          case 2:
            $result = "$result kaksi";
            break;
          case 3:
            $result = "$result kolme";
            break;
          case 4:
            $result = "$result neljä";
              break;
          case 5:
            $result = "$result viisi";
              break;
          case 6:
            $result = "$result kuusi";
              break;
          case 7:
            $result = "$result seitsemän";
              break;
          case 8:
            $result = "$result kahdeksan";
              break;
          case 9:
            $result = "$result yhdeksän";
              break;
            default:
                break;
    }

} 

else {
    echo "sata";
}
 echo("$myNumber: $result");

  ?>
   
  </body>
</html>

