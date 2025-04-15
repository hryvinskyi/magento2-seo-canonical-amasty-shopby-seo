# Hryvinskyi SeoCanonicalAmastyShopbySeo Module

## Overview
This module provides integration between Amasty ShopbySeo module and Hryvinskyi's SEO Canonical URL functionality in Magento 2. It ensures proper canonical URL generation for category pages when using Amasty's SEO friendly URLs.

## Key Features
- Automatically generates clean canonical URLs for category pages when Amasty ShopBySeo is enabled
- Removes query parameters from URLs to improve SEO performance
- Integrates with the Hryvinskyi SEO Canonical URL framework
- Disables Amasty's default meta data plugin to prevent conflicts

## Requirements
- Magento 2.x
- Amasty ShopbySeo module
- Hryvinskyi SEO Canonical API module
- Hryvinskyi SEO Canonical Frontend module

## Installation
### Composer (recommended)
```bash
composer require hryvinskyi/module-seo-canonical-amasty-shopby-seo
bin/magento module:enable Hryvinskyi_SeoCanonicalAmastyShopbySeo
bin/magento setup:upgrade
```

### Manual
1. Download the module and upload it to the `app/code/Hryvinskyi/SeoCanonicalAmastyShopbySeo` directory
2. Run the following commands:
```bash
bin/magento module:enable Hryvinskyi_SeoCanonicalAmastyShopbySeo
bin/magento setup:upgrade
```

## How It Works
The module creates a canonical URL processor that:
1. Checks if Amasty's SEO URLs are enabled
2. Verifies if the request contains parsed parameters from Amasty ShopbySeo
3. Processes the current URL to remove query strings
4. Returns clean canonical URLs for category pages

The module also disables Amasty's default meta data plugin to prevent conflicts with canonical URL generation.

## Configuration
This module works automatically once installed. No additional configuration is required.

## Support
For issues or feature requests, contact the module author:
- Author: Volodymyr Hryvinskyi
- Email: volodymyr@hryvinskyi.com

## License
[MIT](https://opensource.org/licenses/MIT)