<?php 

    namespace Mageplaza\HelloWorld\Model;
    use Mageplaza\HelloWorld\Api\Color;


    class Yellow implements  Color
    {
  
   
        public function getColor(){
            return "Yellow";
        }

    }