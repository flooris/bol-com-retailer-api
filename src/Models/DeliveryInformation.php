<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getExpectedDeliveryDate()
 * @method self setExpectedDeliveryDate(string $expectedDeliveryDate)
 * @method null|string getTransporterCode()
 * @method null|DestinationWarehouse getDestinationWarehouse()
 * @method self setDestinationWarehouse(DestinationWarehouse $destinationWarehouse)
 */
final class DeliveryInformation extends AModel
{
    public const TRANSPORTER_CODE_POSTNL = 'POSTNL';
    public const TRANSPORTER_CODE_DHL = 'DHL';
    public const TRANSPORTER_CODE_DPD = 'DPD';
    public const TRANSPORTER_CODE_GLS = 'GLS';
    public const TRANSPORTER_CODE_UPS = 'UPS';
    public const TRANSPORTER_CODE_OTHER = 'OTHER';

    /**
     * The expected delivery date of the shipment at the bol.com warehouse in ISO 8601 format.
     * @var string
     */
    protected string $expectedDeliveryDate;

    /**
     * The transporter that will pickup this replenishment.
     * @var string
     */
    protected string $transporterCode;

    protected DestinationWarehouse $destinationWarehouse;

    public function setTransporterCode(string $transporterCode): self
    {
        $this->_checkEnumBounds($transporterCode, [
            "POSTNL",
            "DHL",
            "DPD",
            "GLS",
            "UPS",
            "OTHER",
        ]);
        $this->transporterCode = $transporterCode;
        return $this;
    }
}
