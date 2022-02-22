<?php

require_once 'vendor/autoload.php';

use App\Question;
use App\Quiz;

        $quiz = new Quiz();
        $quiz->addQuestion(new Question('What is 2 + 2?', 4));

        var_dump($quiz->getQuestions());