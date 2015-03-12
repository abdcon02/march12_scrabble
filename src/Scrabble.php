<?php
    class Word
    {
        /* Original code, completely functional. We wanted to clean it up a bit.*/

        // function scoreWord($word)
        // {
        //     $worduc = strtoupper($word);
        //     $letters = str_split($worduc);
        //     $counter = 0;
        //
        //     $one_pointers = array('A', 'E', 'I', 'O', 'U', 'L','N', 'R', 'S', 'T');
        //     $two_pointers = array('D', 'G');
        //     $three_pointers = array('B', 'C', 'M', 'P');
        //     $four_pointers = array('F', 'H', 'V', 'W', 'Y');
        //     $five_pointers = array('K');
        //     $eight_pointers = array('J', 'X');
        //     $ten_pointers = array('Q', 'Z');
        //
        //     foreach($letters as $one_letter) {
        //         if(in_array($one_letter, $one_pointers)){
        //             ++$counter;
        //         } elseif(in_array($one_letter, $two_pointers)){
        //             $counter = $counter + 2;
        //         } elseif(in_array($one_letter, $three_pointers)){
        //             $counter = $counter + 3;
        //         } elseif(in_array($one_letter, $five_pointers)){
        //             $counter = $counter + 5;
        //         } elseif(in_array($one_letter, $eight_pointers)){
        //             $counter = $counter + 8;
        //         } elseif(in_array($one_letter, $ten_pointers)){
        //             $counter = $counter + 10;
        //         }
        //     }
        //     return $counter;
        // }


        function scoreWord($word)
        {
            $worduc = strtoupper($word);
            $letters = str_split($worduc);
            $counter = 0;

            $worth = array('A' => 1, 'E' => 1, 'I' => 1, 'O' => 1, 'U' => 1, 'L' => 1,
                            'N' => 1, 'R' => 1, 'S' => 1, 'T' => 1, 'D' => 2, 'G' => 2,
                            'B' => 3, 'C' => 3, 'M' => 3, 'P' => 3, 'F' => 4, 'H' => 4,
                            'V' => 4, 'W' => 4, 'Y' => 4, 'K' => 5, 'J' => 8, 'X' => 8,
                            'Q' => 10, 'Z' => 10
                            );

            foreach($letters as $one_letter) {

                if(array_key_exists($one_letter, $worth)) {
                    $counter = $counter + $worth[$one_letter];
                }
            }

            return $counter;
        }
    }


?>
