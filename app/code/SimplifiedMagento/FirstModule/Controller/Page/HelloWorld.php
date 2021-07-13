<?php


namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Vault\Api\PaymentTokenManagementInterface;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\FirstModule\Model\PencilFactory;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\Event\ManagerInterface;


class HelloWorld extends \Magento\Framework\App\Action\Action

{
    protected $pencilInterface;
    protected $paymentTokenManagement;
    protected $pencilFactory;
    protected $productFactory;
    protected $_eventManager;

    public function __construct(Context $context,
                                ManagerInterface $_eventManager, ProductFactory $productFactory, PencilFactory $pencilFactory, PencilInterface $pencilInterface,
                                PaymentTokenManagementInterface $paymentTokenManagement)
    {
        $this->pencilFactory = $pencilFactory;
        $this->pencilInterface = $pencilInterface;
        $this->paymentTokenManagement = $paymentTokenManagement;
        $this->productFactory = $productFactory;
        $this->_eventManager = $_eventManager;
        parent::__construct($context);
    }

    public function execute()
    {
        $message = new \Magento\Framework\DataObject(array("greeting" => "Good afternoon"));
        $this->_eventManager->dispatch('custom_event', ['greeting' => $message]);
        echo $message->getGreeting();


    }
}

