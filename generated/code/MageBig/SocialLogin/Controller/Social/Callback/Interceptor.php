<?php
namespace MageBig\SocialLogin\Controller\Social\Callback;

/**
 * Interceptor class for @see \MageBig\SocialLogin\Controller\Social\Callback
 */
class Interceptor extends \MageBig\SocialLogin\Controller\Social\Callback implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Api\AccountManagementInterface $accountManager, \MageBig\SocialLogin\Helper\Social $apiHelper, \MageBig\SocialLogin\Model\Social $apiObject, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Model\Account\Redirect $accountRedirect, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $accountManager, $apiHelper, $apiObject, $customerSession, $accountRedirect, $resultRawFactory);
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
