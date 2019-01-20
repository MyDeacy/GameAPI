<?php

namespace mydeacy\gameapi;

abstract class GameStage implements Status {

	protected $count;

	protected $stageName;

	public $status = self::WAIT;

	public function __construct(String $stageName){
		$this->stageName = $stageName;
	}

	public function tick(): void{ }

	protected function start(): void{
		$this->status = self::RUNNING;
	}

	protected function stop():void{
		$this->status = self::STOPPED;
	}

	public function getStageName(): String{
		return $this->stageName;
	}
}