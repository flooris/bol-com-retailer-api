<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getOrderItemId()
 * @method self setOrderItemId(string $orderItemId)
 * @method null|string getReasonCode()
 */
final class OrderItemCancellation extends AModel
{
    public const REASON_CODE_OUT_OF_STOCK = 'OUT_OF_STOCK';
    public const REASON_CODE_REQUESTED_BY_CUSTOMER = 'REQUESTED_BY_CUSTOMER';
    public const REASON_CODE_BAD_CONDITION = 'BAD_CONDITION';
    public const REASON_CODE_HIGHER_SHIPCOST = 'HIGHER_SHIPCOST';
    public const REASON_CODE_INCORRECT_PRICE = 'INCORRECT_PRICE';
    public const REASON_CODE_NOT_AVAIL_IN_TIME = 'NOT_AVAIL_IN_TIME';
    public const REASON_CODE_NO_BOL_GUARANTEE = 'NO_BOL_GUARANTEE';
    public const REASON_CODE_ORDERED_TWICE = 'ORDERED_TWICE';
    public const REASON_CODE_RETAIN_ITEM = 'RETAIN_ITEM';
    public const REASON_CODE_TECH_ISSUE = 'TECH_ISSUE';
    public const REASON_CODE_UNFINDABLE_ITEM = 'UNFINDABLE_ITEM';
    public const REASON_CODE_OTHER = 'OTHER';

    /**
     * The id for the order item (1 order can have multiple order items).
     * @var string
     */
    protected string $orderItemId;

    /**
     * The code representing the reason for cancellation of this item.
     * @var string
     */
    protected string $reasonCode;

    public function setReasonCode(string $reasonCode): self
    {
        $this->_checkEnumBounds($reasonCode, [
            "OUT_OF_STOCK",
            "REQUESTED_BY_CUSTOMER",
            "BAD_CONDITION",
            "HIGHER_SHIPCOST",
            "INCORRECT_PRICE",
            "NOT_AVAIL_IN_TIME",
            "NO_BOL_GUARANTEE",
            "ORDERED_TWICE",
            "RETAIN_ITEM",
            "TECH_ISSUE",
            "UNFINDABLE_ITEM",
            "OTHER",
        ]);
        $this->reasonCode = $reasonCode;
        return $this;
    }
}
