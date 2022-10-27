<?php

namespace HarmSmits\BolComClient\Models;

use DateTime;

/**
 * @method null|string getState()
 * @method null|DateTime getStateDateTime()
 */
final class StateTransition extends AModel
{
    public const STATE_DRAFT = 'DRAFT';
    public const STATE_ANNOUNCED = 'ANNOUNCED';
    public const STATE_IN_TRANSIT = 'IN_TRANSIT';
    public const STATE_ARRIVED_AT_WH = 'ARRIVED_AT_WH';
    public const STATE_IN_PROGRESS_AT_WH = 'IN_PROGRESS_AT_WH';
    public const STATE_CANCELLED = 'CANCELLED';
    public const STATE_DONE = 'DONE';

    /**
     * Indicates the state of this replenishment order.
     * @var string
     */
    protected string $state;

    /**
     * The date and time in ISO 8601 format that indicates when this states was updated for this replenishment.
     * @var DateTime
     */
    protected DateTime $stateDateTime;

    public function setState(string $state): self
    {
        $this->_checkEnumBounds($state, [
            "DRAFT",
            "ANNOUNCED",
            "IN_TRANSIT",
            "ARRIVED_AT_WH",
            "IN_PROGRESS_AT_WH",
            "CANCELLED",
            "DONE",
        ]);
        $this->state = $state;
        return $this;
    }

    /**
     * @param DateTime|int|string $stateDateTime
     *
     * @return $this
     */
    public function setStateDateTime($stateDateTime): self
    {
        $stateDateTime       = $this->_parseDate($stateDateTime);
        $this->stateDateTime = $stateDateTime;
        return $this;
    }
}
