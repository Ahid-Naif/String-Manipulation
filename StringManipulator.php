<?php

class StringManipulator{
    // to store the 1st letter of each word
    static private $initials = " ";
    // to store an array of the words that make up the received name
    static private $manipulatedString= " ";
    // to store the input name with letters only
    static private $onlyAlpha= " ";

    static public function firstLetters($name){
        // remove everything but letters, a new cleaned string will be returned
        $name = self::removeNonAlpha($name);
        // split the name into an array of words, all in uppercase
        self::$manipulatedString = explode(" ", ucwords($name));
        self::$initials = " "; // to make sure old data is deleted
        for($i = 0; $i < count(self::$manipulatedString); $i++){
            self::$initials = self::$initials . self::$manipulatedString[$i][0];
        }
        return self::$initials;
    }
    static public function removeNonAlpha($input){
        self::$onlyAlpha = "a"; // to make sure old data is deleted
        // to follow up with onlyAlpha index
        $alphaIdx = 0;
        // to make sure only 1 space is among letters
        $isSpace = true;
        for ($i = 0; $i < strlen($input); $i++) {
            if (ctype_alpha($input[$i]) || ( (ctype_space($input[$i])) && !$isSpace ) ) {
                self::$onlyAlpha[$alphaIdx] = $input[$i];
                $alphaIdx++;
                if(ctype_space($input[$i]))
                    $isSpace = true;
                else
                    $isSpace = false;
            }
        }
        return self::$onlyAlpha;
    }
    static public function displayInitials($output){
        print $output;
        print "\n";
    }
}