<?php
final class Quest_NySoft_Andrew2 extends SR_Quest
{
	public function getRewardXP() { return 5; }
	public function getRewardNuyen() { return 3000; }
	public function getQuestName() { return 'Suprises'; }
	
	public function getNeededAmount() { return 30; }
	
	public function getQuestDescription() { return sprintf('Bring %d/%d ID4Cards to Mr.Northwood, NySoft.', $this->getAmount(), $this->getNeededAmount()); }
	
	public function checkQuest(SR_NPC $npc, SR_Player $player)
	{
		$have_before = $this->getAmount();
		$need = $this->getNeededAmount();
		$have_after = $this->giveQuesties($player, $npc, 'ID4Card', $have_before, $need);
		$given = $have_after - $have_before;
		if ($given > 0)
		{
			$player->message(sprintf('You hand %d ID4Cards to Mr.Northwood...', $given));
		}
		
		if ($have_after > $need)
		{
			$npc->reply('Well done chummer... take this little reward...');
			$this->onSolve($player);
		}
		else
		{
			$npc->reply(sprintf('Yes, we still need at least %d ID4Cards.', $need-$have_after));
		}
		return true;
	}
	
	public function onNPCQuestTalkB(SR_TalkingNPC $npc, SR_Player $player, $word, array $args=NULL)
	{
		$need = $this->getNeededAmount();
		switch ($word)
		{
			case 'shadowrun':
				$npc->reply("You will laugh your ass of ... we surely need ID4Cards too ... suprise suprise haha!");
				$npc->reply('You can organize them too, can you?');
				break;
			case 'confirm':
				$npc->reply("So?");
				break;
			case 'yes':
				$npc->reply('Great!');
				break;
			case 'no':
				$npc->reply('Have a nice day.');
				break;
		}
		return true;
	}
}
?>