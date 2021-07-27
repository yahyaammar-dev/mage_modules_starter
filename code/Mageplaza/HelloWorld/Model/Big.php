<?php 

    namespace Mageplaza\HelloWorld\Model;
    use Mageplaza\HelloWorld\Api\Size;

    class Big implements  Size
    {
   
        public function getSize(){
            return "Big";
        }

    }