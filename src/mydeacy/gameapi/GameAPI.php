<?php

namespace mydeacy\gameapi;

use pocketmine\plugin\PluginBase;

class GameAPI extends PluginBase {

	private $stages = [];

	public function onEnable(){
		$this->getScheduler()->scheduleRepeatingTask(new TimerTask($this), 20);
	}

	public function registerStages(GameStage ...$stages): void{
		foreach($stages as $stage){
			$this->stages[$stage->getStageName()] = $stage;
		}
	}

	public function unRegisterStage(String $stageName): void{
		unset($this->stages[$stageName]);
	}

	public function getStages(): array{
		return $this->stages;
	}
}