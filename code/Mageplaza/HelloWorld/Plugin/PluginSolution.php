<?php
namespace Mageplaza\HelloWorld\Plugin;

class PluginSolution
{
    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name){
        return "Before Pluin ". $name;
    }
}