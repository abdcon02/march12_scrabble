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
            foreach($letters as $one_letter) {
                if(in_array($one_letter, $one_pointers)){
                    ++$counter;
                } elseif(in_array($one_letter, $two_pointers)){
                    $counter = $counter + 2;
                }
            }
            return $counter;

        }
    }


?>
