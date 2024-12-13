<?php

$questions = [
  
  ["question" => 'what is 2 + 2?', 'correct' => '4'],
  ["question" => 'what is the capital of france?', 'correct' => 'Paris'],
  ["question" => 'who wrote "hamlet"?', 'correct' => 'Shakespeare'],
];

$answers =[];
foreach($questions as $index=>$questions){
  echo ($index+1). ".". $questions['questions']."\n";
  $answers[]= Trin(readline("your answer: "));

}

// evaluate function
function evaluateQuiz(array $questions,array $answers): int{
  $score = 0;
  
  foreach($questions as $index => $questions){
    if($answers[$index] === $questions['correct']){
      $score++;

    }

  }
  return $score;

}

// calculate score
$score = evaluateQuiz($questions, $answers);

echo "\nyou scored X out of Y " , count($questions) . ".\n";

if($score === count($questions)){
  echo "Excellent Job! \n";

}elseif($score > 1){
  echo "Good Effort! \n";

}else{
  echo "Better luck next time! \n";
}