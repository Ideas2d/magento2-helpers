<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Ideas2d\Helpers\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;

class Customer extends AbstractHelper
{
    /**
     * @param Context $context
     */
    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }
}
