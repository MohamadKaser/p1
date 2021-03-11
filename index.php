<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="text-align: center;font-size:30px;">
    <?php
        
        $drawCount = 0;
        $playerAcount = 0;
        $playerBcount = 0;
        $choosefrom = ['Rock', 'Paper', "Scissors"];
        
        for($i = 1; $i < 11; $i++){
            $choiceA = rand(0,2);
            $choiceB = rand(0,2);
            $PlayerA[$i] = $choosefrom[$choiceA];
            $playerB[$i] = $choosefrom[$choiceB];
            echo '<h3>Round '.$i.':</h3>';
            echo '<br>';
            echo 'PlayerA: '.$PlayerA[$i].'';
            echo '<br>';
            echo 'PlayerB: '.$playerB[$i].'';
            echo '<br>';
            if($PlayerA[$i] == $playerB[$i]){
                echo 'Same choice: It is a draw...';
                $drawCount++;
            }
            elseif ($PlayerA[$i] == "Rock" && $playerB[$i] == "Scissors"){
                echo 'Player A wins...';
                $playerAcount++;
            }
            elseif ($PlayerA[$i] == "Scissors" && $playerB[$i] == "Paper"){
                echo 'Player A wins...';
                $playerAcount++;
            }
            elseif ($PlayerA[$i] == "Paper" && $playerB[$i] == "Rock"){
                echo 'Player A wins...';
                $playerAcount++;
            }
            else{
                echo 'Player B wins...';
                $playerBcount++;
            }
            echo '<br>';
            echo '<br>';
        }

        echo '<h3>Results :</h3>';
        echo 'Player A: '.$playerAcount.' wins';
        echo '<br>';echo '<br>';
        echo 'Player B: '.$playerBcount.' wins';
        echo '<br>';echo '<br>';
        echo ''.$drawCount.' Games were a draw.';

    ?>
</div>
</body>
</html>