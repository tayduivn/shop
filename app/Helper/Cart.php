<?php 

namespace App\Helper;

/**
 * 
 */
class Cart
{
	public $items = [];
	public $totalQty = 0;
	public $totalAmount = 0;
	function __construct()
	{
		$this->items = session('cart') ? session('cart') : [];
		$this->totalQty = $this->get_totalQty();
		$this->totalAmount = $this->get_totalAmount();
	}

	public function add($pro)
	{
		if (isset($this->items[$pro['id']])) 
		{
			$this->items[$pro['id']]['quantity'] +=1;
		}
		else
		{
			$this->items[$pro['id']] = [
				'id' => $pro['id'],
				'name' => $pro['name'],
				'image' => $pro['images'],
				'price' => $pro['sale_price'] > 0 ? $pro['sale_price'] : $pro['price'],
				'quantity' => 1,
			];
		}
		session(['cart' => $this->items]);
		return true;

	}

	public function remove($id)
	{
		if (isset($this->items[$id])) 
		{
			unset($this->items[$id]);
		}
		session(['cart' => $this->items]);

	}

	public function update($data)
	{
		for ($i = 0; $i < count($data['id']); $i++) 
		{
			if (isset($this->items[$data['id'][$i]])) 
			{
				$this->items[$data['id'][$i]]['quantity'] = $data['quantity'][$i];
			}
		}
		session(['cart' => $this->items]);
		
	}

	protected function get_totalQty()
	{
		foreach ($this->items as $item) 
		{
			$this->totalQty = $this->totalQty + $item['quantity'];
		}
		return $this->totalQty;

	}

	protected function get_totalAmount()
	{
		foreach ($this->items as $item) 
		{
			$this->totalAmount = $this->totalAmount + $item['quantity']*$item['price'];
		}
		return $this->totalAmount;

	}
}

 ?>