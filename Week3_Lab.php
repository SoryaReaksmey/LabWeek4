<?php
    
    echo " Name: Reaksmey Sorya<br><hr>";
    // Task1
    echo "Task 1:<br>";
    echo "Reverse of word [ !PHP ot emocleW ] to [ Welcome to PHP! ] <br><br>";
    $string = "!PHP ot emocleW";
    echo " Results: ".strrev($string);
 ?>

<?php
    // Task2
    echo "<br><hr> Task 2:<br>";

    //function to filter even number
    function even($var)
    {
        //input as even number
        return (!($var&1));
    }
    //follow structure teacher given
    $arr = array(2, 3, 4, 6, 7, 9, 11, 20);

    echo "we have array [2, 3, 4, 6, 7, 9, 11, 20] ";
    echo "<br><br>";
    echo "below is the even number after filter:";
    echo "<br><br>";
    echo "even number:<br>";
    print_r(array_filter($arr, "even"));

?>
<?php
    //Task3
    echo "<br><hr> Task 3:<br>";
      
    $arr1 = array(2,3);
    $arr2 = array(2, 3, 4);
    $arr3 = array(2, 3, 4, 5);
        
    echo "<pre>";
            echo "Results of Array: <br>";
            echo " Total array(2, 3) = ".array_sum($arr1);
            echo "<br>";
            echo " Total array(2, 3, 4) = ".array_sum($arr2);
            echo "<br>";
            echo " Total array(2, 3, 4, 5) = ".array_sum($arr3);

   
    ?>



        