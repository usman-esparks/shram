<?php
namespace MageBig\WidgetPlus\Block\Product;

/**
 * Interceptor class for @see \MageBig\WidgetPlus\Block\Product
 */
class Interceptor extends \MageBig\WidgetPlus\Block\Product implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\App\Http\Context $httpContext, \MageBig\WidgetPlus\Model\ResourceModel\Widget\CollectionFactory $collectionFactory, \Magento\Catalog\Model\Category $categoryModel, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $httpContext, $collectionFactory, $categoryModel, $data, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        if (!$pluginInfo) {
            return parent::getImage($product, $imageId, $attributes);
        } else {
            return $this->___callPlugins('getImage', func_get_args(), $pluginInfo);
        }
    }
}
