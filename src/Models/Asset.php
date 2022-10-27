<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getUrl()
 * @method self setUrl(string $url)
 * @method null|array getLabels()
 */
final class Asset extends AModel
{
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


	public function setLabels(array $labels): self
	{
		$this->_checkArrayBounds($labels, 1, 2);
		$this->labels = $labels;
		return $this;
	}
}
