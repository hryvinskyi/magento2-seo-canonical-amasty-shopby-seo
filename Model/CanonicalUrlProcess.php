<?php
/**
 * Copyright (c) 2025. MageCloud.  All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

namespace Hryvinskyi\SeoCanonicalAmastyShopbySeo\Model;

use Amasty\ShopbySeo\Helper\Config;
use Amasty\ShopbySeo\Helper\Data;
use Hryvinskyi\SeoCanonicalFrontend\Model\AbstractCanonicalUrlProcess;
use Magento\Framework\App\HttpRequestInterface;
use Magento\Framework\UrlInterface;

class CanonicalUrlProcess extends AbstractCanonicalUrlProcess
{
    private Config $config;
    private UrlInterface $urlBuilder;

    public function __construct(Config $config, UrlInterface $urlBuilder, array $actions = [])
    {
        parent::__construct($actions);
        $this->config = $config;
        $this->urlBuilder = $urlBuilder;
    }

    /**
     * @inheritDoc
     */
    public function execute(HttpRequestInterface $request): ?string
    {
        /** @var \Magento\Framework\App\Request\Http $request */
        if ($this->config->isSeoUrlEnabled() && $request->getMetaData(Data::HAS_PARSED_PARAMS)) {
            $url = $this->urlBuilder->getCurrentUrl();

            // Remove query string
            return preg_replace('/\?.*/', '', $url);
        }

        return null;
    }
}
