<?php
class Shadowcmd_givekp extends Shadowcmd
{
	public static function execute(SR_Player $player, array $args)
	{
		if ($player->isFighting())
		{
			$player->msg('1036');
// 			$player->message('This does not work in combat');
			return false;
		}
		
		$argc = count($args);
		
		if ( ($argc < 1) || ($argc > 2) )
		{
			$player->message(Shadowhelp::getHelp($player, 'givekp'));
			return false;
		}
		
		if ($argc === 2)
		{
			
			if (false === ($target = Shadowfunc::getFriendlyTarget($player, $args[0])))
			{
				$player->msg('1028', array($args[0]));
	// 			$player->message(sprintf('%s is not here or the name is ambigous.', $args[0]));
				return false;
			}
			$place = $args[1];
			$targets = array($target);
		}
		else
		{
			$place = $args[0];
			$targets = $player->getParty()->getMembers();
		}
		
		if (false === ($tlc = Shadowcmd_goto::getTLCByArgMulticity($player, $place)))
		{
			$player->msg('1023');
			return false;
		}
		
		return self::giveKnow($player, $targets, 'places', $tlc);
	}
	
	public static function giveKnow(SR_Player $player, array $targets, $what, $which)
	{
		foreach ($targets as $target)
		{
			self::giveKnowB($player, $target, $what, $which);
		}
	}
	
	private static function giveKnowB(SR_Player $player, SR_Player $target, $what, $which)
	{
		if (false === $target->hasKnowledge($what, $which))
		{
			$target->giveKnowledge($what, $which);
			$player->getParty()->ntice('5117', array($player->getName(), $target->getName(), $which));
// 			$player->getParty()->message($player, sprintf(' told %s about %s.', $target->getName(), $which));
		}
		
		return true;
	}
}
?>
