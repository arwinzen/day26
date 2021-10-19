<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
 <title>Day 7 Assignment</title>
 <link rel="stylesheet" href="">
 <style>
        *{ 
            padding: 0; 
            margin: 0; 
        }
        html {
            box-sizing: border-box;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Helvetica Neue", "Arial", sans-serif; 
            font-size: calc(1.5vh + 1vw + 1%); 
            line-height: 1.5;
        }
        body{ 
            overflow: auto; 
            min-height: 100vh; 
            width: 100%; 
            padding: 0.5rem 1rem;   
        }
        main,
        header{
            padding: 0.5rem 2rem;
        }
    </style>
</head>
<body>
    <h1>PHP Day 7 Assignment (Arwin Goo Zen)</h1>
    <?php
        // Question 1
        // a. List out stars in a 5 * 5 triangular pattern
        echo "<h2>Question 1</h2>\n";

        // declare variable for height of triangle
        $height = 5;

        // initialise loop, set $i to "*" and concatenate an extra "*" each time through the loop
        for ($i = "*"; strlen($i) <= $height; $i .= "*"){
            // display $i (concatenated stars) followed by a newline
            echo "${i}"."<br>";
        }

        // Question 1
        // b. list out a reverse pattern of question 1a

        // initialise loop, set $i to height, decrease $i each time through the loop
        for ($i = $height; $i >= 0; $i--){
            // display "*" multiplied by the the value of $i --> 5,4,3,2,1
            echo str_repeat("*", $i)."<br>";
        }

        // Question 2
        // Create a script using a for loop to add all the integers between 0 and 30 and display the total.
        echo "<h2>Question 2</h2>\n";

        $sum = 0;
        $start_val = 30;
        for ($i = 1; $i <= $start_val; $i++){
            $sum += $i;
        }
        echo "The sum of all numbers between 0 and 30 is $sum".".<br>";
        echo "<br>";

        //Question 3
        // Create a loop that reads numbers 30 to 50, sum up all numbers which are of odd numbers.
        echo "<h2>Question 3</h2>\n";

        $sum_odd = 0;
        $end_val = 50;
        echo "Numbers between 30 and 50 : ";

        for ($i = $start_val; $i <= $end_val; $i++){
            if ($i === $end_val){
                echo "$i"."."."<br>";
            } else {
                echo "$i".", ";
            }
            // add $i to sum if $i is odd
            if ($i % 2 !== 0){
                $sum_odd += $i;
            }
        }
        echo "<br>";
        echo "The sum of odd numbers between 30 and 50 is ". "$sum_odd".".<br>";
        echo "<br>";

        // Question 4 
        // Assign the string "Hello there my name is Kevin" to a variable. Read each string and replace spaces with %. Do a count to get the number of % replaced in this statement.
        echo "<h2>Question 4</h2>\n";
        $greeting = "Hello there, my name is Kevin.";
        $mod_greeting = "";
        $replacements = 0;

        // loop through each character in $greeting
        for ($i = 0; $i < strlen($greeting); $i++){
            // save each character to a variable
            $char = $greeting[$i];
            // if $char is a space, replace it with a "%" and concatenate to modified greeting
            if ($char === " "){
                $mod_greeting .= str_replace(" ", "%", $char);
                // increase the count for $replacements
                $replacements++;
            // if $char is not a space, concatenate it directly to the modified greeting
            } else {
                $mod_greeting .= $char;
            }
        }
        echo $mod_greeting."<br>";
        echo "The number of replacements is $replacements".".<br>";
    ?>
</body>
</html>