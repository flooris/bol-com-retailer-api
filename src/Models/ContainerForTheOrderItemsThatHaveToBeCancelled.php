<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|array getOrderItems()
 */
final class ContainerForTheOrderItemsThatHaveToBeCancelled extends AModel
{
	/**
	 * List of order items to cancel. Order item id's must belong to the same order.
	 * @var OrderItemCancellation[]
	 */
	protected array $orderItems = [];


	public function setOrderItems(array $orderItems): self
	{
		$this->_checkIfPureArray($orderItems, OrderItemCancellation::class);
		$this->_checkArrayBounds($orderItems, 1, 1);
		$this->orderItems = $orderItems;
		return $this;
	}
}
