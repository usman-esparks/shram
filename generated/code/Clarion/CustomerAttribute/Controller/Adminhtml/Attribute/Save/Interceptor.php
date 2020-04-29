<?php
namespace Clarion\CustomerAttribute\Controller\Adminhtml\Attribute\Save;

/**
 * Interceptor class for @see \Clarion\CustomerAttribute\Controller\Adminhtml\Attribute\Save
 */
class Interceptor extends \Clarion\CustomerAttribute\Controller\Adminhtml\Attribute\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Eav\Model\Adminhtml\System\Config\Source\Inputtype\ValidatorFactory $validatorFactory, \Magento\Eav\Model\ResourceModel\Entity\Attribute\Group\CollectionFactory $groupCollectionFactory, \Clarion\CustomerAttribute\Helper\Data $customerAttributeHelper, \Magento\Framework\View\LayoutFactory $layoutFactory)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $resultPageFactory, $validatorFactory, $groupCollectionFactory, $customerAttributeHelper, $layoutFactory);
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
