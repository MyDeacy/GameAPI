<?php

namespace mydeacy\gameapi;

use pocketmine\scheduler\Task;

class TimerTask extends Task {

	private $api;

	public function __construct(GameAPI $api){
		$this->api = $api;
	}

	public function onRun(int $tick){
		$stages = $this->api->getStages();
		foreach($stages as $stage){
			$stage->tick();
		}
	}

}