<?php
    class Word
    {
        function scoreWord($letters)
        {
            $one_pointers = array('A', 'E', 'I', 'O', 'U', 'L','N', 'R', 'S', 'T');
            if(in_array(strtoupper($letters), $one_pointers)){
                return 1;
            }
        }
    }


?>
