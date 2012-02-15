<?php
final class Quest_Redmond_Alchemist1 extends SR_Quest
{
	public function getNeededAmount() { return 0; }
	public function getRewardXP() { return 5; }
	public function getRewardNuyen() { return 250; }
	public function getRewardItems() {
		return array(
			'AlchemicPotion_of_fireball:4,magic:8,intelligence:8,wisdom:8',
			'AlchemicPotion_of_fireball:4,magic:8,intelligence:8,wisdom:8',
		);
	}
	
	public function getTriggers() { return array($this->lang('solution')); }
	
	public function checkQuest(SR_NPC $npc, SR_Player $player) { return $npc->reply($this->lang('answer_us_pls')); }
	
	public function onNPCQuestTalkB(SR_TalkingNPC $npc, SR_Player $player, $word, array $args=NULL)
	{
		$plaintext = $this->lang('plaintext');
		$solution = $this->lang('solution');
		$ciphertext = GWF_PolyROT::encrypt($plaintext, 'C');
		
		switch ($word)
		{
			case 'shadowrun':
				return $npc->reply($this->lang('shadowrun'));
			
			case 'confirm': $npc->reply("");
				return $npc->reply($this->lang('confirm'));
			
			case 'yes':
				$npc->reply($this->lang('yes'));
				return $npc->reply($ciphertext);

			case 'no':
				return $npc->reply($this->lang('no'));
				break;

			case $solution:
				$npc->reply($this->lang('grats'));
				return $this->onSolve($player);

			default:
				return false;				
		}
	}
}
?>