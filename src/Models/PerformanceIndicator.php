<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getName()
 * @method null|string getType()
 * @method null|Details getDetails()
 * @method self setDetails(Details $details)
 */
final class PerformanceIndicator extends AModel
{
    public const NAME_CANCELLATIONS = 'CANCELLATIONS';
    public const NAME_FULFILMENT = 'FULFILMENT';
    public const NAME_PHONE_AVAILABILITY = 'PHONE_AVAILABILITY';
    public const NAME_RESPONSE_TIME = 'RESPONSE_TIME';
    public const NAME_CASE_ITEM_RATIO = 'CASE_ITEM_RATIO';
    public const NAME_TRACK_AND_TRACE = 'TRACK_AND_TRACE';
    public const NAME_RETURNS = 'RETURNS';
    public const NAME_REVIEWS = 'REVIEWS';
    public const TYPE_PERCENTAGE = 'PERCENTAGE';
    public const TYPE_AVERAGE = 'AVERAGE';

    /**
     * Indicator name.
     * @var string
     */
    protected string $name;

    /**
     * Interpretation of the data that applies to this measurement.
     * @var string
     */
    protected string $type;

    /** Details of the indicator. */
    protected Details $details;

    public function setName(string $name): self
    {
        $this->_checkEnumBounds($name, [
            "CANCELLATIONS",
            "FULFILMENT",
            "PHONE_AVAILABILITY",
            "RESPONSE_TIME",
            "CASE_ITEM_RATIO",
            "TRACK_AND_TRACE",
            "RETURNS",
            "REVIEWS",
        ]);
        $this->name = $name;
        return $this;
    }

    public function setType(string $type): self
    {
        $this->_checkEnumBounds($type, [
            "PERCENTAGE",
            "AVERAGE",
        ]);
        $this->type = $type;
        return $this;
    }
}
