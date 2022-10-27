<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getUrl()
 * @method self setUrl(string $url)
 * @method null|array getLabels()
 * @method self setLabels(array $labels)
 * @method null|string getStatus()
 * @method null|string getSubStatus()
 * @method null|string getSubStatusDescription()
 * @method self setSubStatusDescription(string $subStatusDescription)
 */
final class UploadReportAsset extends AModel
{
	public const STATUS_IN_PROGRESS = 'IN_PROGRESS';
	public const STATUS_DECLINED = 'DECLINED';
	public const STATUS_PUBLISHED = 'PUBLISHED';
	public const SUB_STATUS_DELETED = 'DELETED';
	public const SUB_STATUS_DOWNLOAD_FAILED_404 = 'DOWNLOAD_FAILED_404';
	public const SUB_STATUS_DOWNLOAD_FAILED_UNAUTHORIZED = 'DOWNLOAD_FAILED_UNAUTHORIZED';
	public const SUB_STATUS_IMAGE_FLAGGED_AS_DUPLICATE = 'IMAGE_FLAGGED_AS_DUPLICATE';
	public const SUB_STATUS_IMAGE_RATE_LIMITED = 'IMAGE_RATE_LIMITED';
	public const SUB_STATUS_IMPORT_FAILED = 'IMPORT_FAILED';
	public const SUB_STATUS_LABEL_UPDATED = 'LABEL_UPDATED';
	public const SUB_STATUS_MATCH_TO_PRODUCT_FAILED = 'MATCH_TO_PRODUCT_FAILED';
	public const SUB_STATUS_NOT_VALID_FOR_IMPORT = 'NOT_VALID_FOR_IMPORT';
	public const SUB_STATUS_PUBLISHED = 'PUBLISHED';
	public const SUB_STATUS_RECEIVED = 'RECEIVED';
	public const SUB_STATUS_SCORED_OTHER_IMAGE_WON = 'SCORED_OTHER_IMAGE_WON';
	public const SUB_STATUS_STORED = 'STORED';
	public const SUB_STATUS_SUPPLIED_FLAGGED_AS_BLACKLISTED = 'SUPPLIED_FLAGGED_AS_BLACKLISTED';
	public const SUB_STATUS_UNKNOWN = 'UNKNOWN';
	public const SUB_STATUS_UNPUBLISHED = 'UNPUBLISHED';
	public const SUB_STATUS_UNSUPPORTED_MIMETYPE = 'UNSUPPORTED_MIMETYPE';
	public const SUB_STATUS_UPLOAD_CANCELLED = 'UPLOAD_CANCELLED';
	public const SUB_STATUS_UPLOAD_DEADLINE_REACHED = 'UPLOAD_DEADLINE_REACHED';
	public const SUB_STATUS_UPLOAD_FAILED = 'UPLOAD_FAILED';
	public const SUB_STATUS_UPLOAD_REJECTED = 'UPLOAD_REJECTED';

	/**
	 * The URL of the asset.
	 * @var string
	 */
	protected string $url;

	/**
	 * The label(s) of the asset.
	 * @var array
	 */
	protected array $labels = [];

	/**
	 * The processing state of the submitted asset.
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
			"DELETED",
			"DOWNLOAD_FAILED_404",
			"DOWNLOAD_FAILED_UNAUTHORIZED",
			"IMAGE_FLAGGED_AS_DUPLICATE",
			"IMAGE_RATE_LIMITED",
			"IMPORT_FAILED",
			"LABEL_UPDATED",
			"MATCH_TO_PRODUCT_FAILED",
			"NOT_VALID_FOR_IMPORT",
			"PUBLISHED",
			"RECEIVED",
			"SCORED_OTHER_IMAGE_WON",
			"STORED",
			"SUPPLIED_FLAGGED_AS_BLACKLISTED",
			"UNKNOWN",
			"UNPUBLISHED",
			"UNSUPPORTED_MIMETYPE",
			"UPLOAD_CANCELLED",
			"UPLOAD_DEADLINE_REACHED",
			"UPLOAD_FAILED",
			"UPLOAD_REJECTED",
		]);
		$this->subStatus = $subStatus;
		return $this;
	}
}
