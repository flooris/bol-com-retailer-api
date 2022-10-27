<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getMethod()
 * @method null|string getDeliveryCode()
 */
final class Fulfilment extends AModel
{
    public const METHOD_FBR = 'FBR';
    public const METHOD_FBB = 'FBB';
    public const DELIVERY_CODE_24HOUR_23 = '24uurs-23';
    public const DELIVERY_CODE_24HOUR_22 = '24uurs-22';
    public const DELIVERY_CODE_24HOUR_21 = '24uurs-21';
    public const DELIVERY_CODE_24HOUR_20 = '24uurs-20';
    public const DELIVERY_CODE_24HOUR_19 = '24uurs-19';
    public const DELIVERY_CODE_24HOUR_18 = '24uurs-18';
    public const DELIVERY_CODE_24HOUR_17 = '24uurs-17';
    public const DELIVERY_CODE_24HOUR_16 = '24uurs-16';
    public const DELIVERY_CODE_24HOUR_15 = '24uurs-15';
    public const DELIVERY_CODE_24HOUR_14 = '24uurs-14';
    public const DELIVERY_CODE_24HOUR_13 = '24uurs-13';
    public const DELIVERY_CODE_24HOUR_12 = '24uurs-12';
    public const DELIVERY_CODE_1_2_DAY = '1-2d';
    public const DELIVERY_CODE_2_3_DAY = '2-3d';
    public const DELIVERY_CODE_3_5_DAY = '3-5d';
    public const DELIVERY_CODE_4_8_DAY = '4-8d';
    public const DELIVERY_CODE_1_8_DAY = '1-8d';
    public const DELIVERY_CODE_MY_DELIVERY_PROMISE = 'MijnLeverbelofte';
    public const DELIVERY_CODE_VVB = 'VVB';

    /**
     * Specifies whether this shipment has been fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     * Defaults to FBR.
     * @var string
     */
    protected string $method;

    /**
     * The delivery promise that applies to this offer. This value will only be used in combination with
     * fulfilmentMethod 'FBR'.
     * @var string
     */
    protected ?string $deliveryCode = null;

    public function setMethod(string $method): self
    {
        $this->_checkEnumBounds($method, [
            "FBR",
            "FBB",
        ]);
        $this->method = $method;
        return $this;
    }

    public function setDeliveryCode(string $deliveryCode): self
    {
        $this->_checkEnumBounds($deliveryCode, [
            "24uurs-23",
            "24uurs-22",
            "24uurs-21",
            "24uurs-20",
            "24uurs-19",
            "24uurs-18",
            "24uurs-17",
            "24uurs-16",
            "24uurs-15",
            "24uurs-14",
            "24uurs-13",
            "24uurs-12",
            "1-2d",
            "2-3d",
            "3-5d",
            "4-8d",
            "1-8d",
            "MijnLeverbelofte",
            "VVB",
        ]);
        $this->deliveryCode = $deliveryCode;
        return $this;
    }
}
