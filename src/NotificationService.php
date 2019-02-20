<?php
/**
 * Diglin GmbH - Switzerland
 *
 * @author      Sylvain Rayé <support at diglin.com>
 * @category    Diglin
 * @package     swisspost
 * @copyright   Copyright (c) Diglin (http://www.diglin.com)
 */

namespace Diglin\Swisspost;

class NotificationService
{
    const ORDER_CONFIRMATION              = 1;
    const DELIVERY_INFORMATION            = 2;
    const COLLECTION_INFORMATION          = 4;
    const REMINDER_RECIPIENT              = 32;
    const HANDOVER_STATUS                 = 64;
    const EXCHANGE_RETURN                 = 128;
    const SATURDAY_DELIVERY               = 256;
    CONST EVENING_DELIVERY_FOLLOWING_DAYS = 257;
    CONST EVENING_DELIVERY_SAME_DAY       = 258;
}