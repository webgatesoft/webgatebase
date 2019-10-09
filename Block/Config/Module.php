<?php

namespace WebGate\WebGateBase\Block\Config;



use Magento\Framework\App\Config\ScopeConfigInterface;

class Module extends \Magento\Config\Block\System\Config\Form\Field
{
    const TEMPLATE = 'WebGate_WebGateBase::module.phtml';

    protected $_moduleManager;
    public $enable = 'no';

    /**
     *
     * @param \Magento\Backend\Block\Template\Context $context
     * @param ScopeConfigInterface $scopeConfig
     * @param \Magento\Framework\Module\Manager $moduleManager
     * @param \Magento\Framework\ObjectManagerInterface $objectmanager
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Framework\Module\Manager $moduleManager,
        array $data = []
    )
    {
        $this->_scopeConfig     = $scopeConfig;
        $this->_moduleManager   = $moduleManager;

        parent::__construct($context, $data);
    }


    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        return "<iframe style='width: 100%;min-height: 750px' src='https://webgatesoft.com/webgate/shop/'></iframe>

<script>
require(['jquery'],function($) {
    setTimeout(function() {
      $('iframe').contents().find('a').attr('target','_blank');
     },5000)
 
});
</script>

";
     }


}