<?php
final class Seattle_Alchemist extends SR_Store
{
	public function getNPCS(SR_Player $player) { return array('talk' => 'Seattle_Alchemist_NPC'); }
	public function getFoundPercentage() { return 80.00; }
	
// 	public function getFoundText(SR_Player $player) { return 'In a sidestreet you found a store for alchemic utils.'; }
// 	public function getEnterText(SR_Player $player) { return 'You enter the alchemistic store. The salesman greets you as you walk to the counter.'; }
// 	public function getHelpText(SR_Player $player) { $c = Shadowrun4::SR_SHORTCUT; return "In stores you can use {$c}view, {$c}buy and {$c}sell. Use {$c}talk to talk to the salesman."; }
	
	public function getFoundText(SR_Player $player) { return $this->lang($player, 'found'); }
	public function getEnterText(SR_Player $player) { return $this->lang($player, 'enter'); }
	public function getHelpText(SR_Player $player) { return $this->lang($player, 'help'); }
	
	public function getStoreItems(SR_Player $player)
	{
		return array(
			array('Ether', 100.0, 1750),
			array('NinjaPotion', 100.0, 450),
			array('StrengthPotion', 100.0, 350),
			array('QuicknessPotion', 100.0, 400),
			array('AimWater', 100.0, 500),
			array('Stimpatch', 100.0, 1200),
			array('ScrollOfWisdom', 100.0, 1000),
			array('ElvenStaff', 100.0, 5000),
			array('Mandrake', 100.0, 3000),
		);
	}
}
?>