<?php
namespace MageBig\MbFrame\Controller\Adminhtml\Config\Edit;

/**
 * Interceptor class for @see \MageBig\MbFrame\Controller\Adminhtml\Config\Edit
 */
class Interceptor extends \MageBig\MbFrame\Controller\Adminhtml\Config\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \MageBig\MbFrame\Model\Config\Structure $configStructure, \MageBig\MbFrame\Model\Config $backendConfig, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Registry $registry, \Magento\Theme\Model\Theme $themeModel, \Magento\Config\Model\Config $config, \Magento\Theme\Model\ResourceModel\Design\Collection $collectionDesign)
    {
        $this->___init();
        parent::__construct($context, $configStructure, $backendConfig, $resultPageFactory, $registry, $themeModel, $config, $collectionDesign);
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
