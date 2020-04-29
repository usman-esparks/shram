<?php
namespace Bss\DeleteOrder\Controller\Adminhtml\Delete\MassInvoice;

/**
 * Interceptor class for @see \Bss\DeleteOrder\Controller\Adminhtml\Delete\MassInvoice
 */
class Interceptor extends \Bss\DeleteOrder\Controller\Adminhtml\Delete\MassInvoice implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $collectionFactory, \Magento\Sales\Api\OrderManagementInterface $orderManagement, \Magento\Sales\Model\ResourceModel\Order\Invoice\CollectionFactory $invoiceCollectionFactory, \Magento\Sales\Api\InvoiceRepositoryInterface $invoiceRepository, \Bss\DeleteOrder\Model\Invoice\Delete $delete)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory, $orderManagement, $invoiceCollectionFactory, $invoiceRepository, $delete);
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
