<?php
final class Item_PA_Ring extends SR_Ring
{
	public function getItemLevel() { return 52; }
	public function getItemPrice() { return 9000; }
	public function getItemDropChance() { return 2; }
	public function getItemDescription() { return 'A magical ring. The origin is unknown and a mystery'; }
	
	public function getItemModifiersA(SR_Player $player)
	{
		$back = array();
		switch($player->getRace())
		{
			default:
				$back['attack'] = 15.0;
				$back['wisdom'] = 1.5;
				$back['intelligence'] = 2.0;
		}
		return $back;
	}

	public function getItemModifiersB()
	{
		$mods = parent::getItemModifiersB();
		foreach ($mods as $k => $v)
		{
			$mods[$k] = floor($mods[$k]*2);
		}
		return $mods;
	}
}
?>