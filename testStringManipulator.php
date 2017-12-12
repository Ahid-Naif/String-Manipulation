<?php
include "StringManipulator.php";
$manipulator = new StringManipulator;

$testSentence = "S3leem Murhaf 1haddad";
$manipulator->displayInitials($manipulator->firstLetters($testSentence));

// once again to make sure there's no old data stored in the variable $initials
$testSentence = " International islamic university Malaysia";
$manipulator->displayInitials($manipulator->firstLetters($testSentence));

$testSentence = "Ahid Naif alqaud";
$manipulator->displayInitials($manipulator->firstLetters($testSentence));

$testSentence = "?Hello 1    World";
$manipulator->displayInitials($manipulator->firstLetters($testSentence));

//print $manipulator->removeNonAlpha(" Hello World Hi me");
