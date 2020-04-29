<?php
namespace MageBig\MbFrame\Controller\Adminhtml\Export\Index;

/**
 * Interceptor class for @see \MageBig\MbFrame\Controller\Adminhtml\Export\Index
 */
class Interceptor extends \MageBig\MbFrame\Controller\Adminhtml\Export\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Cms\Model\ResourceModel\Page\Collection $pageCollection, \Magento\Cms\Model\ResourceModel\Block\Collection $blockCollection, \Magento\Cms\Model\Block $block, \Magento\Widget\Model\ResourceModel\Widget\Instance\Collection $widgetCollection, \Magento\Widget\Model\Widget\InstanceFactory $widgetFactory, \MageBig\MbFrame\Setup\Model\Page $pageSetup, \MageBig\MbFrame\Setup\Model\Block $blockSetup, \MageBig\MbFrame\Setup\Model\Widget $widgetSetup)
    {
        $this->___init();
        parent::__construct($context, $pageCollection, $blockCollection, $block, $widgetCollection, $widgetFactory, $pageSetup, $blockSetup, $widgetSetup);
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
