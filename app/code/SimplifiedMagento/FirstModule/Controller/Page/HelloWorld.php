<?php


namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Vault\Api\PaymentTokenManagementInterface;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\FirstModule\Model\PencilFactory;

class HelloWorld extends \Magento\Framework\App\Action\Action
{
    protected $pencilInterface;
    protected $paymentTokenManagement;
    protected $pencilFactory;

    public function __construct(Context $context, PencilFactory $pencilFactory, PencilInterface $pencilInterface,
                                PaymentTokenManagementInterface $paymentTokenManagement)
    {
        $this->pencilFactory = $pencilFactory;
        $this->pencilInterface = $pencilInterface;
        $this->paymentTokenManagement = $paymentTokenManagement;
        parent::__construct($context);
    }

    public function execute()
    {
        $pencil = $this->pencilFactory->create(array("name" => "Bob", "school" => "International college"));
        echo '<pre>';
        var_dump($pencil);
    }
}

