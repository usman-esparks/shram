<?php
namespace Vsourz\Imagegallery\Controller\Adminhtml\Image\Categorys;

/**
 * Interceptor class for @see \Vsourz\Imagegallery\Controller\Adminhtml\Image\Categorys
 */
class Interceptor extends \Vsourz\Imagegallery\Controller\Adminhtml\Image\Categorys implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory)
    {
        $this->___init();
        parent::__construct($context, $resultLayoutFactory);
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
