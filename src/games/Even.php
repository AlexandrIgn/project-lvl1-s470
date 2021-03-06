<?php

namespace BrainGames\games\Even;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Engine\run;

const ANNOTATION = 'Answer "yes" if number even otherwise answer "no".';

function isEven($num)
{
    return $num % 2 === 0;
}

function runEven()
{
    $getQuestionAndAnswer = function () {
        $question = rand(1, 99);
        $answer = isEven($question) ? 'yes' : 'no';
        return [$question, $answer];
    };
    run($getQuestionAndAnswer, ANNOTATION);
}
