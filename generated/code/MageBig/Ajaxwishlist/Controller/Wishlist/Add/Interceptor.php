<?php
namespace MageBig\Ajaxwishlist\Controller\Wishlist\Add;

/**
 * Interceptor class for @see \MageBig\Ajaxwishlist\Controller\Wishlist\Add
 */
class Interceptor extends \MageBig\Ajaxwishlist\Controller\Wishlist\Add implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Wishlist\Controller\WishlistProviderInterface $wishlistProvider, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Framework\Json\Helper\Data $jsonEncode, \MageBig\Ajaxwishlist\Helper\Data $wishlistHelper, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $wishlistProvider, $productRepository, $jsonEncode, $wishlistHelper, $registry);
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
