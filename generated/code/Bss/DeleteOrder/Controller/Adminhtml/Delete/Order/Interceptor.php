<?php
namespace Bss\DeleteOrder\Controller\Adminhtml\Delete\Order;

/**
 * Interceptor class for @see \Bss\DeleteOrder\Controller\Adminhtml\Delete\Order
 */
class Interceptor extends \Bss\DeleteOrder\Controller\Adminhtml\Delete\Order implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Sales\Model\Order $order, \Bss\DeleteOrder\Model\Order\Delete $delete)
    {
        $this->___init();
        parent::__construct($context, $order, $delete);
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
