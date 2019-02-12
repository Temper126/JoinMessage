<?php

namespace JoinMessage;
 
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\TextFormat as c;
      
class Main extends PluginBase implements Listener{
     public function onEnable(){
     $this->getServer()->getPluginManager->registerEvents($this);
     $this->getLogger()->info(c::GREEN. "JoinMessage Enabled: Made by TeMp3r126");
     } 
/*
* This sends a message when the players joins the server
*/
    public function onPlayerJoin(PlayerJoinEvent $event){
     $player = $event->getPlayer();
     $name = $player->getName();
     $this->$player()->broadcastMessage(c::AQUA. "$name Has Joined ServerName!");
    }
    
    public function onDisable(){
        $this->getLogger()->info(c::RED. "JoinMessage Disabled");
    }
}
