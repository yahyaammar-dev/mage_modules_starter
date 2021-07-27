<?php 

    namespace Mageplaza\HelloWorld\Model;
    use Magento\Catalog\Api\ProductRepositoryInterface;

    class CustomImplementation implements  ProductRepositoryInterface
    {
        public function get($sku, $editMode = false, $storeId = null, $forceReload = false){
            echo "get";
            return;
        }

        public function getById($productId, $editMode = false, $storeId = null, $forceReload = false){
            echo "getByID";
            return;
        }
    
        public function delete(\Magento\Catalog\Api\Data\ProductInterface $product){
            echo "delete";
            return;
        }
    
        public function deleteById($sku){
            echo "deleteById";
            return;
        }
    
        public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria){
            echo "getList";
            return;
        }

        public function save(\Magento\Catalog\Api\Data\ProductInterface $product, $saveOptions = false){
            echo "save";
            return;            
        }

    }