<?php


namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Vault\Api\PaymentTokenManagementInterface;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\FirstModule\Model\PencilFactory;
use Magento\Catalog\Model\ProductFactory;


class HelloWorld extends \Magento\Framework\App\Action\Action

{
    protected $pencilInterface;
    protected $paymentTokenManagement;
    protected $pencilFactory;
    protected $productFactory;

    public function __construct(Context $context, ProductFactory $productFactory, PencilFactory $pencilFactory, PencilInterface $pencilInterface,
                                PaymentTokenManagementInterface $paymentTokenManagement)
    {
        $this->pencilFactory = $pencilFactory;
        $this->pencilInterface = $pencilInterface;
        $this->paymentTokenManagement = $paymentTokenManagement;
        $this->productFactory=$productFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $product=$this->productFactory->create()->load(1);
        $product->setName("Iphone 6");
        $productName=$product->getName();
        echo $productName;
    }
}

