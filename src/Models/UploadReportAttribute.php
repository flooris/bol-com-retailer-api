<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getId()
 * @method self setId(string $id)
 * @method null|array getValues()
 * @method null|string getStatus()
 * @method null|string getSubStatus()
 * @method null|string getSubStatusDescription()
 * @method self setSubStatusDescription(string $subStatusDescription)
 */
final class UploadReportAttribute extends AModel
{
	public const STATUS_IN_PROGRESS = 'IN_PROGRESS';
	public const STATUS_DECLINED = 'DECLINED';
	public const STATUS_PUBLISHED = 'PUBLISHED';
	public const SUB_STATUS_BLOCKED_BY_RATE_LIMITER = 'BLOCKED_BY_RATE_LIMITER';
	public const SUB_STATUS_CREATED = 'CREATED';
	public const SUB_STATUS_DEPRECATED = 'DEPRECATED';
	public const SUB_STATUS_IDENTICAL_VALUE_AS_BEFORE = 'IDENTICAL_VALUE_AS_BEFORE';
	public const SUB_STATUS_MATCH_TO_PRODUCT_FAILED = 'MATCH_TO_PRODUCT_FAILED';
	public const SUB_STATUS_NOT_CHANGED = 'NOT_CHANGED';
	public const SUB_STATUS_NOT_RECENT = 'NOT_RECENT';
	public const SUB_STATUS_PROCESSING_STARTED = 'PROCESSING_STARTED';
	public const SUB_STATUS_RECEIVED = 'RECEIVED';
	public const SUB_STATUS_REJECTED = 'REJECTED';
	public const SUB_STATUS_REJECTED_BY_BRAND_AUTHORITY = 'REJECTED_BY_BRAND_AUTHORITY';
	public const SUB_STATUS_REJECTED_BY_LOGISTIC = 'REJECTED_BY_LOGISTIC';
	public const SUB_STATUS_REJECTED_NO_DATA = 'REJECTED_NO_DATA';
	public const SUB_STATUS_REJECTED_UNPROCESSABLE = 'REJECTED_UNPROCESSABLE';
	public const SUB_STATUS_SELECTED = 'SELECTED';
	public const SUB_STATUS_SELECTED_BY_BRAND_AUTHORITY = 'SELECTED_BY_BRAND_AUTHORITY';
	public const SUB_STATUS_SELECTED_BY_LOGISTIC = 'SELECTED_BY_LOGISTIC';
	public const SUB_STATUS_SELECTION_DELETED = 'SELECTION_DELETED';
	public const SUB_STATUS_SELECTION_MERGED = 'SELECTION_MERGED';
	public const SUB_STATUS_TIMED_OUT = 'TIMED_OUT';
	public const SUB_STATUS_UPDATED = 'UPDATED';
	public const SUB_STATUS_UPLOADED = 'UPLOADED';
	public const SUB_STATUS_UNKNOWN = 'UNKNOWN';
	public const SUB_STATUS_VALID_EAN = 'VALID_EAN';
	public const SUB_STATUS_VALIDATED = 'VALIDATED';
	public const SUB_STATUS_VALIDATION_FAILED = 'VALIDATION_FAILED';
	public const SUB_STATUS_VALIDATION_FAILED_DISABLED_GPC_CODE = 'VALIDATION_FAILED_DISABLED_GPC_CODE';
	public const SUB_STATUS_VALIDATION_FAILED_DOES_NOT_EXIST = 'VALIDATION_FAILED_DOES_NOT_EXIST';
	public const SUB_STATUS_VALIDATION_FAILED_INVALID_DATE = 'VALIDATION_FAILED_INVALID_DATE';
	public const SUB_STATUS_VALIDATION_FAILED_INVALID_EAN = 'VALIDATION_FAILED_INVALID_EAN';
	public const SUB_STATUS_VALIDATION_FAILED_INVALID_FRACTION = 'VALIDATION_FAILED_INVALID_FRACTION';
	public const SUB_STATUS_VALIDATION_FAILED_INVALID_GPC_CODE = 'VALIDATION_FAILED_INVALID_GPC_CODE';
	public const SUB_STATUS_VALIDATION_FAILED_INVALID_INTEGER = 'VALIDATION_FAILED_INVALID_INTEGER';
	public const SUB_STATUS_VALIDATION_FAILED_INVALID_ISODATE = 'VALIDATION_FAILED_INVALID_ISODATE';
	public const SUB_STATUS_VALIDATION_FAILED_INVALID_ISODATETIME = 'VALIDATION_FAILED_INVALID_ISODATETIME';
	public const SUB_STATUS_VALIDATION_FAILED_INVALID_LOV_VALUE = 'VALIDATION_FAILED_INVALID_LOV_VALUE';
	public const SUB_STATUS_VALIDATION_FAILED_INVALID_MULTIPLE_VALUES = 'VALIDATION_FAILED_INVALID_MULTIPLE_VALUES';
	public const SUB_STATUS_VALIDATION_FAILED_INVALID_NO_VALUES = 'VALIDATION_FAILED_INVALID_NO_VALUES';
	public const SUB_STATUS_VALIDATION_FAILED_INVALID_NUMBER = 'VALIDATION_FAILED_INVALID_NUMBER';
	public const SUB_STATUS_VALIDATION_FAILED_INVALID_NUMERIC_TEXT = 'VALIDATION_FAILED_INVALID_NUMERIC_TEXT';
	public const SUB_STATUS_VALIDATION_FAILED_INVALID_TEXT = 'VALIDATION_FAILED_INVALID_TEXT';
	public const SUB_STATUS_VALIDATION_FAILED_INVALID_UNIT = 'VALIDATION_FAILED_INVALID_UNIT';
	public const SUB_STATUS_VALIDATION_FAILED_INVALID_URL = 'VALIDATION_FAILED_INVALID_URL';
	public const SUB_STATUS_VALIDATION_FAILED_INVALID_VALUES = 'VALIDATION_FAILED_INVALID_VALUES';
	public const SUB_STATUS_VALIDATION_FAILED_NOT_ALLOWED = 'VALIDATION_FAILED_NOT_ALLOWED';
	public const SUB_STATUS_VALIDATION_FAILED_UNKNOWN_BASETYPE = 'VALIDATION_FAILED_UNKNOWN_BASETYPE';
	public const SUB_STATUS_WAITING_FOR_GLOBAL_ID = 'WAITING_FOR_GLOBAL_ID';

	/**
	 * The identifier of the attribute for which the value has changed.
	 * @var string
	 */
	protected string $id;

	/** @var UploadReportValue[] */
	protected array $values = [];

	/**
	 * The processing state of the submitted attribute.
	 * @var string
	 */
	protected string $status;

	/**
	 * The reason code explaining why the value was rejected.
	 * @var string
	 */
	protected ?string $subStatus = null;

	/**
	 * The reason explaining why the value was rejected.
	 * @var string
	 */
	protected ?string $subStatusDescription = null;


	public function setValues(array $values): self
	{
		$this->_checkIfPureArray($values, \HarmSmits\BolComClient\Models\UploadReportValue::class);
		$this->values = $values;
		return $this;
	}


	public function setStatus(string $status): self
	{
		$this->_checkEnumBounds($status, [
			"IN_PROGRESS",
			"DECLINED",
			"PUBLISHED"
		]);
		$this->status = $status;
		return $this;
	}


	public function setSubStatus(string $subStatus): self
	{
		$this->_checkEnumBounds($subStatus, [
			"BLOCKED_BY_RATE_LIMITER",
			"CREATED",
			"DEPRECATED",
			"IDENTICAL_VALUE_AS_BEFORE",
			"MATCH_TO_PRODUCT_FAILED",
			"NOT_CHANGED",
			"NOT_RECENT",
			"PROCESSING_STARTED",
			"RECEIVED",
			"REJECTED",
			"REJECTED_BY_BRAND_AUTHORITY",
			"REJECTED_BY_LOGISTIC",
			"REJECTED_NO_DATA",
			"REJECTED_UNPROCESSABLE",
			"SELECTED",
			"SELECTED_BY_BRAND_AUTHORITY",
			"SELECTED_BY_LOGISTIC",
			"SELECTION_DELETED",
			"SELECTION_MERGED",
			"TIMED_OUT",
			"UPDATED",
			"UPLOADED",
			"UNKNOWN",
			"VALID_EAN",
			"VALIDATED",
			"VALIDATION_FAILED",
			"VALIDATION_FAILED_DISABLED_GPC_CODE",
			"VALIDATION_FAILED_DOES_NOT_EXIST",
			"VALIDATION_FAILED_INVALID_DATE",
			"VALIDATION_FAILED_INVALID_EAN",
			"VALIDATION_FAILED_INVALID_FRACTION",
			"VALIDATION_FAILED_INVALID_GPC_CODE",
			"VALIDATION_FAILED_INVALID_INTEGER",
			"VALIDATION_FAILED_INVALID_ISODATE",
			"VALIDATION_FAILED_INVALID_ISODATETIME",
			"VALIDATION_FAILED_INVALID_LOV_VALUE",
			"VALIDATION_FAILED_INVALID_MULTIPLE_VALUES",
			"VALIDATION_FAILED_INVALID_NO_VALUES",
			"VALIDATION_FAILED_INVALID_NUMBER",
			"VALIDATION_FAILED_INVALID_NUMERIC_TEXT",
			"VALIDATION_FAILED_INVALID_TEXT",
			"VALIDATION_FAILED_INVALID_UNIT",
			"VALIDATION_FAILED_INVALID_URL",
			"VALIDATION_FAILED_INVALID_VALUES",
			"VALIDATION_FAILED_NOT_ALLOWED",
			"VALIDATION_FAILED_UNKNOWN_BASETYPE",
			"WAITING_FOR_GLOBAL_ID",
		]);
		$this->subStatus = $subStatus;
		return $this;
	}
}
