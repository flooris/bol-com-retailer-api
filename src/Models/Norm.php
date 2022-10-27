<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getCondition()
 * @method null|float getValue()
 * @method self setValue(float $value)
 */
final class Norm extends AModel
{
    public const CONDITION__ = '>=';

    /**
     * Condition norm for this indicator.
     * @var string
     */
    protected string $condition;

    /**
     * Service norm for this indicator.
     * @var float
     */
    protected float $value;

    public function setCondition(string $condition): self
    {
        $this->_checkEnumBounds($condition, [
            "<=",
            ">=",
        ]);
        $this->condition = $condition;
        return $this;
    }
}
