<?php
namespace MageBig\MbFrame\Controller\Adminhtml\Theme\Save;

/**
 * Interceptor class for @see \MageBig\MbFrame\Controller\Adminhtml\Theme\Save
 */
class Interceptor extends \MageBig\MbFrame\Controller\Adminhtml\Theme\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Config\Model\ResourceModel\Config $config, \Magento\Framework\Indexer\IndexerRegistry $indexer, \Magento\Framework\App\Config\ReinitableConfigInterface $reinitableConfig, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \MageBig\MbFrame\Framework\App\Config\Initial $initial, \Magento\Framework\Config\CacheInterface $cache, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\Framework\Filesystem\Driver\File $file, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, \Magento\Framework\Locale\Resolver $localeResolver)
    {
        $this->___init();
        parent::__construct($context, $config, $indexer, $reinitableConfig, $scopeConfig, $initial, $cache, $cacheTypeList, $file, $directoryList, $localeResolver);
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
