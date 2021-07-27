<?php 
    namespace Mageplaza\HelloWorld\Model;


    class HeavyService
    {


        public function __construct(){
            echo  "Heavy Service";
        }

        public function printHeavyServiceMessage(){
            echo  "Message from Heavy Service class";
        }

    }