<?php
final class Shadowcmd_gm extends Shadowcmd
{
	public static function execute(SR_Player $player, array $args)
	{
		$bot = Shadowrap::instance($player);
		if (count($args) !== 3) {
			$bot->reply(Shadowhelp::getHelp($player, 'gm'));
			return false;
		}
		
		$server = $player->getUser()->getServer();
		
		if (false === ($user = $server->getUserByNickname($args[0]))) {
			$bot->reply(sprintf('The user %s is unknown.', $args[0]));
			return false;
		}
		
		if (false === ($target = Shadowrun4::getPlayerForUser($user, false))) {
			$bot->reply(sprintf('The player %s is unknown.', $args[0]));
			return false;
		}

		if (false !== ($error = self::checkCreated($target))) {
			$bot->reply(sprintf('The player %s has not started a game yet.', $args[0]));
			return false;
		}
		
		$var = $args[1];
		if (!$target->hasVar('sr4pl_'.$var)) {
			$bot->reply(sprintf('The var %s does not exist.', $var));
			return false;
		}
		
		$old = $target->getVar('sr4pl_'.$var);
		$new = $args[2];
		
		$target->updateField($var, $new);
		$target->modify();
		$bot->reply(sprintf('Set %s`s %s from %s to %s.', $target->getUser()->getName(), $var, $old, $new));
		return true;
	}
}
?>
