<?php
final class Harbor_Exit extends SR_Exit
{
	public function getEnterText(SR_Player $player) { return 'You enter the Seattle_Harbor.'; }
	public function getExitLocation() { return 'Seattle_Harbor'; }
}
?>