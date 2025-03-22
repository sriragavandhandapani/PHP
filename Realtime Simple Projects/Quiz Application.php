
<?php

// Define quiz questions as an associative array
$questions = [
    [
        "question" => "What does PHP stand for?",
        "options" => ["A) Personal Home Page", "B) Preprocessor Hypertext", "C) PHP: Hypertext Preprocessor", "D) Private Hosting Platform"],
        "answer" => "C"
    ],
    
    [
        "question" => "Which function is used to output data in PHP?",
        "options" => ["A) echo", "B) write", "C) printData", "D) show"],
        "answer" => "A"
    ],
    [
        "question" => "Which superglobal is used to collect form data?",
        "options" => ["A) \$_REQUEST", "B) \$_POST", "C) \$_GET", "D) All of the above"],
        "answer" => "D"
    ]
];

// Function to run the quiz
function runQuiz($questions) {
    $score = 0;

    foreach ($questions as $index => $q) {
        echo "\n" . ($index + 1) . ". " . $q["question"] . "\n";

        // Display options
        foreach ($q["options"] as $option) {
            echo "   $option\n";
        }

        // Get user input
        echo "Your answer: ";
        $userAnswer = strtoupper(trim(fgets(STDIN)));  // Convert to uppercase & remove whitespace

        // Check answer
        if ($userAnswer == $q["answer"]) {
            echo "Correct!\n";
            $score++;
        } else {
            echo "Incorrect! The correct answer is: " . $q["answer"] . "\n";
        }
    }

    return $score;
}

// Function to display final result
function showResult($score, $total) {
    echo "Quiz Completed!\n";
    echo "Your Final Score: $score / $total\n";

}


$totalQuestions = count($questions);
$finalScore = runQuiz($questions);
showResult($finalScore, $totalQuestions);

?>
    
