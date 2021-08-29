<?php


namespace SimplifiedMagento\RequestFlow\Controller\Page;


use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\RouterInterface;

class Router implements RouterInterface
{

    protected $actionFactory;
    /**
     * Router constructor.
     */
    public function __construct(ActionFactory $actionFactory)
    {
        $this->actionFactory=$actionFactory;

    }

    public function match(RequestInterface $request)
    {
        // customer-account-login
        $path =trim($request->getPathInfo(),'/');
        $paths=explode('-',$path);
        $request->setModuleName($path[0]);
        $request->setControllerName($path[1]);
        $request->setActionName($paths[2]);

        return $this->actionFactory->create('Magento\Framework\App\Action\Forward',['request'=>$request]);
    }
}
