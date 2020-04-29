<?php
namespace Vsourz\Imagegallery\Controller\Adminhtml\Category\Grid;

/**
 * Interceptor class for @see \Vsourz\Imagegallery\Controller\Adminhtml\Category\Grid
 */
class Interceptor extends \Vsourz\Imagegallery\Controller\Adminhtml\Category\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Vsourz\Imagegallery\Model\CategoryFactory $categoryFactory, \Vsourz\Imagegallery\Model\ImageFactory $imageFactory, \Vsourz\Imagegallery\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory, \Vsourz\Imagegallery\Model\ResourceModel\Image\CollectionFactory $imageCollectionFactory, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Backend\Helper\Js $jsHelper)
    {
        $this->___init();
        parent::__construct($context, $categoryFactory, $imageFactory, $categoryCollectionFactory, $imageCollectionFactory, $coreRegistry, $fileFactory, $resultPageFactory, $resultLayoutFactory, $resultForwardFactory, $storeManager, $jsHelper);
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
