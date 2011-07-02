<?php
final class Quest_Delaware_Ares_I extends SR_Quest
{
	const REWARD_XP = 2;
	const REWARD_NUYEN = 500;
	
	public function getQuestName() { return 'Pistols'; }
	public function getQuestDescription() { return sprintf('Bring an AresViper11 to the Ares salesman in Delaware.'); }
	public function getNeededAmount() { return 1; }
	
	public function checkQuest(SR_NPC $npc, SR_Player $player)
	{
		if (1 === $this->giveQuesties($player, $npc, 'AresViper11', $have_before, $need))
		{
			$npc->reply('Thank you chummer. This will totally fit in my collection.');
			return $this->onSolve($player);
		}
		else
		{
			return $npc->reply('Bring me the gun so i can give it to Mr... err put it in my collection.');
		}
	}
	
	public function onNPCQuestTalkB(SR_TalkingNPC $npc, SR_Player $player, $word)
	{
		$need = $this->getNeededAmount();
		switch ($word)
		{
			case 'shadowrun':
				$npc->reply("You are looking for a job? Well ...");
				$npc->reply("I am a collector of fireweapons, and i still need an AresViper eleven.");
				$npc->reply(sprintf("If you bring me one and i will pay you %s.", $this->displayRewardNuyen()));
				break;
			case 'confirm':
				$npc->reply("If i get one gun from some runners we should find the right gun.");
				break;
			case 'yes':
				$npc->reply('Yeah?');
				break;
			case 'no':
				$npc->reply('Ok.');
				break;
		}
		return true;
	}
}
?>

