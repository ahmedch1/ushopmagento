<?php


namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Vault\Api\PaymentTokenManagementInterface;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use \Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\ResponseInterface;

class HelloWorld extends \Magento\Framework\App\Action\Action
{
    protected $pencilInterface;
    protected $paymentTokenManagement;

    public function __construct(Context $context, PencilInterface $pencilInterface,
                                PaymentTokenManagementInterface $paymentTokenManagement)
    {
        $this->pencilInterface = $pencilInterface;
        $this->paymentTokenManagement = $paymentTokenManagement;
        parent::__construct($context);
    }

    public function execute()
    {
        //echo $this->pencilInterface->getPencilType();
        // echo get_class($this->productRepository);
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $book = $objectManager->create('SimplifiedMagento\FirstModule\Model\Book');
        echo '<pre>';
        var_dump($book);
    }
}

