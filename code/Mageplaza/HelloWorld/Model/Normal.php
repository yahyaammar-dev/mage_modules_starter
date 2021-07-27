<?php 

    namespace Mageplaza\HelloWorld\Model;
    use Mageplaza\HelloWorld\Api\Size;

    class Normal implements  Size
    {
   
        public function getSize(){
            return "Normal";
        }

    }