<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getEan()
 * @method self setEan(string $ean)
 * @method null|string getCondition()
 * @method null|float getUnitPrice()
 */
final class BulkCommissionQuery extends AModel
{
    public const CONDITION_NEW = 'NEW';
    public const CONDITION_AS_NEW = 'AS_NEW';
    public const CONDITION_GOOD = 'GOOD';
    public const CONDITION_REASONABLE = 'REASONABLE';
    public const CONDITION_MODERATE = 'MODERATE';

    /**
     * The EAN number associated with this product.
     * @var string
     */
    protected string $ean;

    /**
     * The condition of the offer.
     * @var string
     */
    protected ?string $condition = null;

    /**
     * The price of the product with a period as a decimal separator. The price should
     * always have two decimals precision.
     * @var float
     */
    protected float $unitPrice;

    public function setCondition(string $condition): self
    {
        $this->_checkEnumBounds($condition, [
            "NEW",
            "AS_NEW",
            "GOOD",
            "REASONABLE",
            "MODERATE",
        ]);
        $this->condition = $condition;
        return $this;
    }

    public function setUnitPrice(float $unitPrice): self
    {
        $this->_checkFloatBounds($unitPrice, 0, 9999);
        $this->unitPrice = $unitPrice;
        return $this;
    }
}
