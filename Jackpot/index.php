<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jackpot</title>
</head>
<body>

<?php

// Generating five random numbers between 0 and 1.
$chosenNumber1 = rand(0, 1);
$chosenNumber2 = rand(0, 1);
$chosenNumber3 = rand(0, 1);
$chosenNumber4 = rand(0, 1);
$chosenNumber5 = rand(0, 1);

// Printing five lucky numbers

echo ("First lucky number: $chosenNumber1 <br>");
echo ("Second lucky number: $chosenNumber2 <br>");
echo ("Third lucky number: $chosenNumber3 <br>");
echo ("Fourth lucky number: $chosenNumber4 <br>");
echo ("Fifth lucky number: $chosenNumber5 <br>");



if ($chosenNumber1 === $chosenNumber2 && $chosenNumber2 === $chosenNumber3 && $chosenNumber3 === $chosenNumber4 && $chosenNumber4 === $chosenNumber5 ) {
    
    echo "Congratulations! you won a Jackpot Price.";
}

else {
    echo "Sorry! Try for next time.";
}

?>

</body>
</html>