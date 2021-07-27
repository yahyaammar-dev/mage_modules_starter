<?php 

    namespace Mageplaza\HelloWorld\Model;
    use Mageplaza\HelloWorld\Api\Size;

    class Small implements  Size
    {
   
        public function getSize(){
            return "Small";
        }

    }