<?php

    require_once "src/Scrabble.php";

    class WordTest extends PHPUnit_FrameWork_TestCase
    {
        function test_scoreWord_1letter()
        {
            //Arrange
            $test_Scrabble = new Word;
            $input1 = "a";

            //Act
            $result = $test_Scrabble->scoreWord($input1);

            //Assert
            $this->assertEquals(1, $result);
        }
    }

?>
