<?php


namespace SimplifiedMagento\FirstModule\Controller\Page;


use Magento\Framework\App\ResponseInterface;

class HelloWorld extends \Magento\Framework\App\Action\Action
{

    public function execute()
    {
        echo "hello world";
    }
}
