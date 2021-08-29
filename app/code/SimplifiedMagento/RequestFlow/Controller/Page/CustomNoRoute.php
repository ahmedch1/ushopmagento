<?php
namespace SimplifiedMagento\RequestFlow\Controller\Page;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;

class CustomNoRoute implements ActionInterface
{

    public function execute()
    {
        echo "this is our custom 404";
    }
}
