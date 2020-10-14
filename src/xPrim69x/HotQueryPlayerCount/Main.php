<?php

namespace xPrim69x\HotQueryPlayerCount;

use pocketmine\plugin\PluginBase;
use pocketmine\event\server\QueryRegenerateEvent;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onQuery(QueryRegenerateEvent $event){
		$event->setPlayerCount(6969);
	}

}
