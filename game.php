<style>
    .roundResult {
        color: green;
    }

    .choice {
        color: red;
    }

    .underline {
        text-decoration: underline;
    }
</style>
<?php
$choices = array("rock", "paper", "scissor");
$verbs = array("crushes", "covers", "cuts");

$p1_score = 0;
$p2_score = 0;
$draws = 0;

for ($i = 0; $i < 10; $i++) {

    echo nl2br("<b>" . "Round " . $i . "\r\n" . "</b>");

    $p1_choice = rand(1, 3);
    $p2_choice = rand(1, 3);
    $p1 = $p1_choice;
    $p2 = $p2_choice;

    echo nl2br("Player A: " . "<span class='choice'>" . $choices[$p1 - 1] . "\r\n" . "</span>");
    echo nl2br("Player B: " . "<span class='choice'>" . $choices[$p2 - 1] . "\r\n" . "</span>");

    $result;
    $winner = 0;

    if ($p1 == 1) {    //rock
        if ($p2 == 2) {    //paper
            $result = "Player B wins!";
            $winner = 2;
            $p2_score++;
        } else if ($p2 == 3) {    //scissor
            $result = "Player A wins!";
            $winner = 1;
            $p1_score++;
        } else        //both are rock
        {
            $result = "it's a draw..";
            $draws++;
        }
    } else if ($p1 == 2) {   //paper
        if ($p2 == 3) {    //scissor
            $result = "Player B wins!";
            $winner = 2;
            $p2_score++;
        } else if ($p2 == 1) {   //rock
            $result = "Player A wins!";
            $winner = 1;
            $p1_score++;
        } else {
            $result = "it's a draw..";
            $draws++;
        }
    } else if ($p1 == 3) {   //scissor
        if ($p2 == 1) {    //rock
            $result = "Player B wins!";
            $winner = 2;
            $p2_score++;
        } else if ($p2 == 2) {   //paper
            $result = "Player A wins!";
            $winner = 1;
            $p1_score++;
        } else {
            $result = "it's a draw..";
            $draws++;
        }
    }

    // Display result in [matter][verb][matter] format
    echo ("<span class='roundResult'>");
    if ($winner == 1) {
        echo nl2br($choices[$p1 - 1] . " " . $verbs[$p1 - 1] . " " . $choices[$p2 - 1] . "\r\n");
    } else if ($winner == 2) {
        echo nl2br($choices[$p2 - 1] . " " . $verbs[$p2 - 1] . " " . $choices[$p1 - 1] . "\r\n");
    } else {
        echo nl2br("Same choice" . "\r\n");
    }
    // Display result
    echo "</span>";
    echo ("<span class='underline'>");
    echo nl2br($result . "\r\n" . "</span>");
    echo nl2br("\r\n");
    echo nl2br("\r\n");
}

// Display summary of the game
echo nl2br("Player A: " . $p1_score . " wins" . "\r\n");
echo nl2br("Player B: " . $p2_score . " wins" . "\r\n");
echo nl2br($draws . " games were a draw.");
echo nl2br("\r\n");
echo nl2br("\r\n");
echo "GAME OVER!";
?>