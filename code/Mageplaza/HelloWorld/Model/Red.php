<?php 

    namespace Mageplaza\HelloWorld\Model;
    use Mageplaza\HelloWorld\Api\Color;


    class Red implements  Color
    {

   
        public function getColor(){
            return "Red";
        }

    }
