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

// Generating five random numbers between 0 and 10.
$chosenNumber1 = rand(0, 10);
$chosenNumber2 = rand(0, 10);
$chosenNumber3 = rand(0, 10);
$chosenNumber4 = rand(0, 10);
$chosenNumber5 = rand(0, 10);

// Printing five lucky numbers
echo ("First: $chosenNumber1 <br>");
echo ("Second: $chosenNumber2 <br>");
echo ("Third: $chosenNumber3 <br>");
echo ("Fourth: $chosenNumber4 <br>");
echo ("Fifth: $chosenNumber5 <br>");

if($chosenNumber1 === $chosenNumber2 === $chosenNumber3 === $chosenNumber4 === $chosenNumber5 ) {

    echo "Congratulations! you won a Jackpot Prixe.";
}

else {
    echo "Sorry! Try for next time.";
}

?>

</body>
</html>