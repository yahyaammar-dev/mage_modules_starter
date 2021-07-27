<?php 

    namespace Mageplaza\HelloWorld\Model;
    use Mageplaza\HelloWorld\Api\PencilInterface2;
    use Mageplaza\HelloWorld\Api\Color;
    use Mageplaza\HelloWorld\Api\Size;

    class Pencil implements  PencilInterface2
    {

        protected $color;
        protected $size;
        protected $name;

        public function __construct(Color $color, Size $size, $name= null){
            $this->color = $color;
            $this->size = $size;
            $this->name = $name;
        }

        
        public function getPencilType(){
            return "Our Pencil has " . $this->color->getColor() . " and Size " . $this->size->getSize();
        }

    }