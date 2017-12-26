<?php
require_once 'Example.php';

class Demo extends Example

{
    public  $age=22;
    protected $location = 'Firmgate';
    private $mobile = '011111111';

    public function newOne(){
//        echo 'This is new one';
        $this->substraction();
    }
    protected function newTwo(){
        echo 'This is new two';
    }
    private function newThree(){
        echo 'This is new three';
    }

}