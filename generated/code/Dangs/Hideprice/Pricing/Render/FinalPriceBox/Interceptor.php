<?php
namespace Dangs\Hideprice\Pricing\Render\FinalPriceBox;

/**
 * Interceptor class for @see \Dangs\Hideprice\Pricing\Render\FinalPriceBox
 */
class Interceptor extends \Dangs\Hideprice\Pricing\Render\FinalPriceBox implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Pricing\SaleableInterface $saleableItem, \Magento\Framework\Pricing\Price\PriceInterface $price, \Magento\Framework\Pricing\Render\RendererPool $rendererPool, array $data, ?\Magento\Catalog\Model\Product\Pricing\Renderer\SalableResolverInterface $salableResolver, ?\Magento\Catalog\Pricing\Price\MinimalPriceCalculatorInterface $minimalPriceCalculator, \Dangs\Hideprice\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($context, $saleableItem, $price, $rendererPool, $data, $salableResolver, $minimalPriceCalculator, $helper);
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheKey');
        if (!$pluginInfo) {
            return parent::getCacheKey();
        } else {
            return $this->___callPlugins('getCacheKey', func_get_args(), $pluginInfo);
        }
    }
}
