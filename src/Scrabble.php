<?php
    class Word
    {
        function scoreWord($word)
        {
            $worduc = strtoupper($word);
            $letters = str_split($worduc);
            $counter = 0;
            $one_pointers = array('A', 'E', 'I', 'O', 'U', 'L','N', 'R', 'S', 'T');
            foreach($letters as $one_letter) {
                if(in_array($one_letter, $one_pointers)){
                    ++$counter;
                }
            }
            return $counter;

        }
    }


?>
