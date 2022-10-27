<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getUploadId()
 * @method self setUploadId(string $uploadId)
 * @method null|string getLanguage()
 * @method null|string getStatus()
 * @method null|array getAttributes()
 * @method null|array getAssets()
 */
final class UploadReportResponse extends AModel
{
	public const LANGUAGE_NL = 'nl';
	public const LANGUAGE_NL_BE = 'nl-BE';
	public const LANGUAGE_FR = 'fr';
	public const LANGUAGE_FR_BE = 'fr-BE';
	public const STATUS_IN_PROGRESS = 'IN_PROGRESS';
	public const STATUS_COMPLETED = 'COMPLETED';

	/**
	 * The identifier of the upload report.
	 * @var string
	 */
	protected string $uploadId;

	/**
	 * The language in which content is submitted.
	 * @var string
	 */
	protected string $language;

	/**
	 * The current status of the upload report.
	 * @var string
	 */
	protected string $status;

	/** @var UploadReportAttribute[] */
	protected array $attributes = [];

	/** @var UploadReportAsset[] */
	protected array $assets = [];


	public function setLanguage(string $language): self
	{
		$this->_checkEnumBounds($language, [
			"nl",
			"nl-BE",
			"fr",
			"fr-BE",
		]);
		$this->language = $language;
		return $this;
	}


	public function setStatus(string $status): self
	{
		$this->_checkEnumBounds($status, [
			"IN_PROGRESS",
			"COMPLETED",
		]);
		$this->status = $status;
		return $this;
	}


	public function setAttributes(array $attributes): self
	{
		$this->_checkIfPureArray($attributes, UploadReportAttribute::class);
		$this->attributes = $attributes;
		return $this;
	}


	public function setAssets(array $assets): self
	{
		$this->_checkIfPureArray($assets, UploadReportAsset::class);
		$this->assets = $assets;
		return $this;
	}
}
