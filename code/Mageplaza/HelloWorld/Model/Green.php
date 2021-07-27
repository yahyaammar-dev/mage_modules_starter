<?php 

    namespace Mageplaza\HelloWorld\Model;
    use Mageplaza\HelloWorld\Api\Color;
  

    class Green implements  Color
    {

   
        public function getColor(){
            return "Green";
        }

    }