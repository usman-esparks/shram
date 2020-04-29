<?php
namespace MageBig\MbFrame\Controller\Adminhtml\Theme\Import;

/**
 * Interceptor class for @see \MageBig\MbFrame\Controller\Adminhtml\Theme\Import
 */
class Interceptor extends \MageBig\MbFrame\Controller\Adminhtml\Theme\Import implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \MageBig\MbFrame\Setup\Model\Page $pageSetup, \MageBig\MbFrame\Setup\Model\Block $blockSetup, \MageBig\MbFrame\Setup\Model\Widget $widgetSetup)
    {
        $this->___init();
        parent::__construct($context, $pageSetup, $blockSetup, $widgetSetup);
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
