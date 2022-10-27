<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getShippingLabelOfferId()
 * @method self setShippingLabelOfferId(string $shippingLabelOfferId)
 * @method null|bool getRecommended()
 * @method self setRecommended(bool $recommended)
 * @method null|string getValidUntilDate()
 * @method self setValidUntilDate(string $validUntilDate)
 * @method null|string getTransporterCode()
 * @method self setTransporterCode(string $transporterCode)
 * @method null|string getLabelType()
 * @method null|string getLabelDisplayName()
 * @method self setLabelDisplayName(string $labelDisplayName)
 * @method null|LabelPrice getLabelPrice()
 * @method self setLabelPrice(LabelPrice $labelPrice)
 * @method null|PackageRestrictions getPackageRestrictions()
 * @method self setPackageRestrictions(PackageRestrictions $packageRestrictions)
 * @method null|HandoverDetails getHandoverDetails()
 * @method self setHandoverDetails(HandoverDetails $handoverDetails)
 */
final class DeliveryOption extends AModel
{
    public const LABEL_TYPE_PARCEL = 'PARCEL';
    public const LABEL_TYPE_MAILBOX = 'MAILBOX';
    public const LABEL_TYPE_MAILBOX_LIGHT = 'MAILBOX_LIGHT';

    /**
     * Unique identifier for the shipping label offer.
     * @var string
     */
    protected string $shippingLabelOfferId;

    /**
     * Indicates whether this delivery option is recommended to be the best option to ship your order item(s) with.
     * @var bool
     */
    protected bool $recommended;

    /**
     * The date until the delivery option (incl total price) is valid.
     * @var string
     */
    protected ?string $validUntilDate = null;

    /**
     * A code representing the transporter which is being used for transportation.
     * @var string
     */
    protected ?string $transporterCode = null;

    /**
     * The type of the label, representing the way an item is being transported. MAILBOX is a mailbox package with
     * delivery scan. MAILBOX_LIGHT is a mailbox package without delivery scan. PARCEL is a normal package.
     * @var string
     */
    protected ?string $labelType = null;

    /**
     * The display name of the shipping label.
     * @var string
     */
    protected string $labelDisplayName;

    protected LabelPrice $labelPrice;

    protected PackageRestrictions $packageRestrictions;

    protected ?HandoverDetails $handoverDetails = null;

    public function setLabelType(string $labelType): self
    {
        $this->_checkEnumBounds($labelType, [
            "PARCEL",
            "MAILBOX",
            "MAILBOX_LIGHT",
        ]);
        $this->labelType = $labelType;
        return $this;
    }
}
