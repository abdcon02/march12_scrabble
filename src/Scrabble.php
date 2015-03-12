<?php
    class Word
    {
        function scoreWord($word)
        {
            $worduc = strtoupper($word);
            $letters = str_split($worduc);
            $counter = 0;
            $one_pointers = array('A', 'E', 'I', 'O', 'U', 'L','N', 'R', 'S', 'T');
            $two_pointers = array('D', 'G');
            $three_pointers = array('B', 'C', 'M', 'P');
            $four_pointers = array('F', 'H', 'V', 'W', 'Y');
            $five_pointers = array('K');
            $eight_pointers = array('J', 'X');
            $ten_pointers = array('Q', 'Z');
            foreach($letters as $one_letter) {
                if(in_array($one_letter, $one_pointers)){
                    ++$counter;
                } elseif(in_array($one_letter, $two_pointers)){
                    $counter = $counter + 2;
                } elseif(in_array($one_letter, $three_pointers)){
                    $counter = $counter + 3;
                } elseif(in_array($one_letter, $five_pointers)){
                    $counter = $counter + 5;
                } elseif(in_array($one_letter, $eight_pointers)){
                    $counter = $counter + 8;
                } elseif(in_array($one_letter, $ten_pointers)){
                    $counter = $counter + 10;
                }
            }
            return $counter;

        }
    }


?>
