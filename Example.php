<?php


class Example
{

    public  $name = "Ratul";
    protected  $city = "Dhaka";           //property
    private  $country = "Bangladesh";
    public $value;

    public function __construct()
    {

    }

    public function addition(){      //method
       echo 'In addition';
//        $this->division();
        echo $this->value;
}
    protected  function substraction() {
        echo 'In substraction';
}
    private  function division(){
        echo 'In devision';
}


}