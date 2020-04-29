<?php
namespace MageBig\SmartMenu\Model\Category\DataProvider;

/**
 * Interceptor class for @see \MageBig\SmartMenu\Model\Category\DataProvider
 */
class Interceptor extends \MageBig\SmartMenu\Model\Category\DataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\Ui\DataProvider\EavValidationRules $eavValidationRules, \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Registry $registry, \Magento\Eav\Model\Config $eavConfig, \Magento\Framework\App\RequestInterface $request, \Magento\Catalog\Model\CategoryFactory $categoryFactory, array $meta = [], array $data = [], ?\Magento\Ui\DataProvider\Modifier\PoolInterface $pool = null, ?\Magento\Framework\AuthorizationInterface $auth = null, ?\Magento\Framework\Stdlib\ArrayUtils $arrayUtils = null)
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $eavValidationRules, $categoryCollectionFactory, $storeManager, $registry, $eavConfig, $request, $categoryFactory, $meta, $data, $pool, $auth, $arrayUtils);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareMeta($meta)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareMeta');
        if (!$pluginInfo) {
            return parent::prepareMeta($meta);
        } else {
            return $this->___callPlugins('prepareMeta', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributesMeta(\Magento\Eav\Model\Entity\Type $entityType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributesMeta');
        if (!$pluginInfo) {
            return parent::getAttributesMeta($entityType);
        } else {
            return $this->___callPlugins('getAttributesMeta', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultMetaData($result)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultMetaData');
        if (!$pluginInfo) {
            return parent::getDefaultMetaData($result);
        } else {
            return $this->___callPlugins('getDefaultMetaData', func_get_args(), $pluginInfo);
        }
    }
}
