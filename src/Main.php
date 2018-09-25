<?php

namespace JoinMessage;
 
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\TextFormat;
      
class Main extends PluginBase implements Listener{
     public function onEnable(){
     $this->getServer()->getPluginManager()->registerEvents($this, $this);
     $this->getLogger()->info("JoinMessage enabled!");
     } 

    public function onPlayerJoin(PlayerJoinEvent $event){
     $player = $event->getPlayer();
     $name = $player->getName();
     $this->$player()->broadcastMessage(TextFormat::AQUA. "$name Has Joined RefluxNetwork!");
	}
}
