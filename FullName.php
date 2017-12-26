<?php

/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/26/2017
 * Time: 10:07 AM
 */
class FullName
{
    function makeFullName($firstName, $lastName){
        $fullname = $firstName.' '.$lastName;
        return $fullname ;
    }
    function myCalculator($data){
        echo '<pre>';
        print_r($data);
        $btn = $data['btn'];
        switch ( $btn){
            case '+':
                $result = $data ['first_number'] + $data['last_number'];
                break;
            case '-':
                $result = $data ['first_number'] - $data['last_number'];
                break;
            case '*':
                $result = $data ['first_number'] * $data['last_number'];
                break;
            case '/':
                $result = $data ['first_number'] / $data['last_number'];
                break;
            case '%':
                $result = $data ['first_number'] % $data['last_number'];
                break;

        }
        return $result;

    }

}

