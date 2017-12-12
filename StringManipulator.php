<?php

class StringManipulator{
    // to store the 1st letter of each word
    static private $initials = " ";
    // to store an array of the words that make up the received name
    static private $manipulatedString= " ";

    static public function firstLetters($name){
        // split the name into an array of words, all in uppercase
        self::$manipulatedString = explode(" ", ucwords($name));
        self::$initials = " "; // to make sure old data is deleted
        for($i = 0; $i < count(self::$manipulatedString); $i++){
            self::$initials = self::$initials . self::$manipulatedString[$i][0];
        }
        return self::$initials;
    }
}