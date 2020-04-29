<?php
namespace Magento\AdminAnalytics\Controller\Adminhtml\Config\EnableAdminUsage;

/**
 * Interceptor class for @see \Magento\AdminAnalytics\Controller\Adminhtml\Config\EnableAdminUsage
 */
class Interceptor extends \Magento\AdminAnalytics\Controller\Adminhtml\Config\EnableAdminUsage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\ProductMetadataInterface $productMetadata, \Magento\AdminAnalytics\Model\ResourceModel\Viewer\Logger $notificationLogger, \Magento\Config\Model\Config\Factory $configFactory)
    {
        $this->___init();
        parent::__construct($context, $productMetadata, $notificationLogger, $configFactory);
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
