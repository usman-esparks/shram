<?php
namespace MageBig\MbFrame\Controller\Adminhtml\Config\Save;

/**
 * Interceptor class for @see \MageBig\MbFrame\Controller\Adminhtml\Config\Save
 */
class Interceptor extends \MageBig\MbFrame\Controller\Adminhtml\Config\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \MageBig\MbFrame\Model\Config\Structure $configStructure, \Magento\Config\Controller\Adminhtml\System\ConfigSectionChecker $sectionChecker, \MageBig\MbFrame\Model\Config\Factory $configFactory, \Magento\Framework\Config\CacheInterface $cache, \Magento\Framework\Stdlib\StringUtils $string, \Magento\Framework\App\Config\ScopeConfigInterface $themeConfig, \Magento\Framework\Filesystem\Driver\File $file, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, \Magento\Framework\Locale\Resolver $localeResolver)
    {
        $this->___init();
        parent::__construct($context, $configStructure, $sectionChecker, $configFactory, $cache, $string, $themeConfig, $file, $directoryList, $localeResolver);
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
