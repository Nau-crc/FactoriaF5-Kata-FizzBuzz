<?php
namespace App;

class FizzBuzz {
    public function DivisiblePor3($value) {
       
       if ($value % 3 == 0 && $value % 5==0) {
       return "FizzBuzz";
       }
       else if ($value % 3 == 0){
       return "Fizz";
       }
       else if ($value % 5 == 0){
       return "Buzz";
       }
       else {
           return $value;
       }
    }
    public function printNumber(){
        for($i = 1; $i <= 100; $i++){
          echo $this->DivisiblePor3 ($i);
          echo "<br>";
        }
    }
}

$laura = new FizzBuzz();
$laura->printNumber();

?>