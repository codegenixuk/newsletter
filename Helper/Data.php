<?php

namespace Codegenixuk\Newsletter\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Framework\App\Helper\Context $context
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    public function getTitle()
    {
        $title = $this->scopeConfig->getValue(
            'codegenixuk_newsletter/cg_newsletter/footerTitle',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );

        return !empty($title) ? '<h3>' . __($title) . '</h3>' : '';
    }

    public function getIntro()
    {
        $intro = $this->scopeConfig->getValue(
            'codegenixuk_newsletter/cg_newsletter/footerIntro',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );

        return !empty($intro) ? __($intro) : '';
    }
}
