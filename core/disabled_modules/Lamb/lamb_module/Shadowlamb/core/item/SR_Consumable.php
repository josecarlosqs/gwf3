<?php
abstract class SR_Consumable extends SR_Usable
{
	public abstract function onConsume(SR_Player $player);
	
	public function onItemUse(SR_Player $player, array $args)
	{
		$busy = $player->isFighting() ? $this->getItemUseTime() : 0;
		
//		if ($this->isBroken())
//		{
//			$player->message(sprintf('Your %s is broken and cannot get consumed.', $this->getItemName()));
//			return false;
//		}

		# Consume it
		if ($this->useAmount($player, 1))
		{
			$this->onConsume($player);
		}
		
		if ($busy > 0)
		{
			$busy = $player->busy($busy);
		}
		
		# Announce Usage
		$pname = $player->getName();
		$p = $player->getParty();
		$p->ntice('5201', array($pname, $this->getName(), $busy));
		
		if ($p->isFighting())
		{
			$ep = $p->getEnemyParty();
			$ep->ntice('5201', array($pname, $this->getName(), $busy));
		}
		
		# Announce Usage
// 		$message = $this->getConsumeMessage($busy);
// 		$p = $player->getParty();
// 		$p->message($player, $message);
// 		if ($p->isFighting()) {
// 			$player->getEnemyParty()->message($player, $message);
// 		}
	}
	
// 	public function getConsumeMessage($busy)
// 	{
// 		$busy = $busy > 0 ? sprintf(' %s busy.', GWF_Time::humanDuration($busy)) : '';
// 		return sprintf('consumed an item: %s.%s', $this->getItemName(), $busy);
// 	}
}

abstract class SR_Food extends SR_Consumable
{
	public function getItemDuration() { return 3600*24*7; } # 1 week.
	public function displayType() { return 'Food'; }
}

abstract class SR_Drink extends SR_Consumable
{
	public function getItemDuration() { return 3600*24*64; } # 64 days.
	public function displayType() { return 'Drink'; }
}

abstract class SR_Potion extends SR_Drink
{
	public function displayType() { return 'Potion'; }
	public function onItemUse(SR_Player $player, array $args)
	{
		parent::onItemUse($player, $args);
		$empty_bottle = SR_Item::createByName('EmptyBottle');
		$player->giveItems(array($empty_bottle));
	}
}
?>