<?php
namespace Dotdigitalgroup\Chat\Controller\Adminhtml\Studio\Index;

/**
 * Interceptor class for @see \Dotdigitalgroup\Chat\Controller\Adminhtml\Studio\Index
 */
class Interceptor extends \Dotdigitalgroup\Chat\Controller\Adminhtml\Studio\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Dotdigitalgroup\Email\Helper\Data $helper, \Dotdigitalgroup\Chat\Model\Config $config)
    {
        $this->___init();
        parent::__construct($context, $helper, $config);
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
