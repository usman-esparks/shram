<?php
namespace MageBig\QuickView\Controller\View\Index;

/**
 * Interceptor class for @see \MageBig\QuickView\Controller\View\Index
 */
class Interceptor extends \MageBig\QuickView\Controller\View\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Catalog\Helper\Product\View $productHelper, \Magento\Framework\View\Result\PageFactory $resultPage, \Magento\Framework\Controller\Result\ForwardFactory $resultForward)
    {
        $this->___init();
        parent::__construct($context, $productHelper, $resultPage, $resultForward);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
