<?php
namespace Mageplaza\HelloWorld\Controller\Index;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\Action\Context;
use Mageplaza\HelloWorld\Api\PencilInterface2;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\Request\Http;

class Display extends \Magento\Framework\App\Action\Action
{

	protected $pencilInterface;
	protected $productRepository;
	protected $http;
	public function  __construct(Context $context, PencilInterface2 $pencilInterface, ProductRepositoryInterface $productRepository, Http $http){
		$this->pencilInterface = $pencilInterface;
		$this->productRepository = $productRepository;
		$this->productRepository = $productRepository;
		$this->http = $http;
		parent::__construct($context);

	}

	public function execute()
	{
		if($id == 1){
			$this->heavyService->printHeaveServiceMessage();
		}else{
			echo "Heavy service not used";
		}
	}
}