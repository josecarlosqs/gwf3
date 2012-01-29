<?php
final class Shadowcmd_known_places extends Shadowcmd
{
	public static function execute(SR_Player $player, array $args)
	{
		$bot = Shadowrap::instance($player);
		$party = $player->getParty();
		$city = false;
		if (count($args) === 1)
		{
			$city = Shadowrun4::getCityByAbbrev($args[0]);
		}
		
		if ($city === false)
		{
			$city = $party->getCityClass();
		}
		
		if ($city === false)
		{
			return self::reply($player, 'Error: Cannot get city class for your party!');
		}
		
		$cityname = $city->getName();
		$bot->reply(Shadowrun4::lang('5007', array($cityname, Shadowfunc::getKnownPlaces($player, $cityname))));
// 		$bot->reply(sprintf('Known Places in %s: %s.', $cityname, Shadowfunc::getKnownPlaces($player, $cityname)));
		return true;
	}
}
?>
