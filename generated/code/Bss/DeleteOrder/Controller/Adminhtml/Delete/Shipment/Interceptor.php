<?php
namespace Bss\DeleteOrder\Controller\Adminhtml\Delete\Shipment;

/**
 * Interceptor class for @see \Bss\DeleteOrder\Controller\Adminhtml\Delete\Shipment
 */
class Interceptor extends \Bss\DeleteOrder\Controller\Adminhtml\Delete\Shipment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Sales\Model\Order\Shipment $shipment, \Bss\DeleteOrder\Model\Shipment\Delete $delete)
    {
        $this->___init();
        parent::__construct($context, $shipment, $delete);
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
