<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getLanguage()
 * @method null|array getAttributes()
 * @method null|array getAssets()
 */
final class CreateProductContentSingleRequest extends AModel
{
	public const LANGUAGE_nl = 'nl';
	public const LANGUAGE_nl_BE = 'nl-BE';
	public const LANGUAGE_fr = 'fr';
	public const LANGUAGE_fr_BE = 'fr-BE';

	/**
	 * The language in which content is submitted.
	 * @var string
	 */
	protected string $language;

	/**
	 * A list of attributes.
	 * @var Attribute[]
	 */
	protected array $attributes = [];

	/** @var Asset[] */
	protected array $assets = [];


	public function setLanguage(string $language): self
	{
		$this->_checkEnumBounds($language, [
			"nl",
			"nl-BE",
			"fr",
			"fr-BE"
		]);
		$this->language = $language;
		return $this;
	}


	public function setAttributes(array $attributes): self
	{
		$this->_checkIfPureArray($attributes, Attribute::class);
		$this->_checkArrayBounds($attributes, 1, 150);
		$this->attributes = $attributes;
		return $this;
	}


	public function setAssets(array $assets): self
	{
		$this->_checkIfPureArray($assets, Asset::class);
		$this->_checkArrayBounds($assets, 0, 30);
		$this->assets = $assets;
		return $this;
	}
}
