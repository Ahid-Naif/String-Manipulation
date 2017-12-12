<?php
include "StringManipulator.php";
$manipulator = new StringManipulator;
$testSentence = "International islamic university Malaysia";
var_dump($manipulator->firstLetters($testSentence));

// once again to make sure there's no old data stored in the variable $initials
$testSentence = "Ahid Naif alqaud";
var_dump($manipulator->firstLetters($testSentence));
