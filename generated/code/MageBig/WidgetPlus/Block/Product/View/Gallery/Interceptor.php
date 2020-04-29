<?php
namespace MageBig\WidgetPlus\Block\Product\View\Gallery;

/**
 * Interceptor class for @see \MageBig\WidgetPlus\Block\Product\View\Gallery
 */
class Interceptor extends \MageBig\WidgetPlus\Block\Product\View\Gallery implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Stdlib\ArrayUtils $arrayUtils, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Catalog\Model\Product\Gallery\ReadHandler $readHandler, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $arrayUtils, $jsonEncoder, $readHandler, $data);
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
