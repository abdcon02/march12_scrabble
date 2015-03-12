<?php

    require_once "src/Scrabble.php";

    class WordTest extends PHPUnit_Framework_TestCase
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

        function test_scoreWord_1pointers()
        {
            //Arrange
            $test_Scrabble = new Word;
            // input is any one of the 1 point letters
            $input1 = "t";

            //Act
            $result = $test_Scrabble->scoreWord($input1);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_scoreWord_2letter2Points()
        {
            //Arrange
            $test_Scrabble = new Word;
            $input1 = "at";

            //Act
            $result = $test_Scrabble->scoreWord($input1);

            //Assert
            $this->assertEquals(2, $result);
        }
    }

?>
