<?php

$user = Auth::user();

$score = new Score;
$score->score = Input::get('score');
$score->save();