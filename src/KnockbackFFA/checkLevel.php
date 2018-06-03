<?php

namespace KnockBackFFA;

use pocketmine\scheduler\PluginTask;
use KnockBackFFA\KnockBackFFA;

class checkLevel extends PluginTask {
	
	public function __construct(KnockIt $plugin){
		parent::__construct($plugin);
		$this->plugin = $plugin;
	}
	
	public function onRun(int $currentTick){
		$this->plugin->checkLevelTask();
	}
}
