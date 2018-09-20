<?php

namespace Ranks;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class Main extends PluginBase implements listener{
  public function onEnable(){
    $this->getLogger()->info("Ranks Enabled");
    $this->getServer()->getPluginManager()->registerEvents($this ,$this);
  }
  
  public function setRank(Player $player){
		$ranksyml = new Config($this->getDataFolder()."/ranks.yml", Config::YAML);
		$rank = $ranksyml->get($player->getName());
		$regular = $ranksyml->get("RegularPlayerTitle");
		if($rank == "Owner"){
			$player->setNameTag(C::DARK_PURPLE."Owner".C::GRAY." | ".C::AQUA. $player->getName());
		}
		if($rank == "Co-Owner"){
			$player->setNameTag(C::GREEN."Co-Owner".C::GRAY." | ".C::AQUA. $player->getName());
		}
		if($rank == "Admin"){
			$player->setNameTag(C::DARK_BLUE."Admin".C::GRAY." | ".C::AQUA. $player->getName());
		}
		if($rank == "Builder"){
			$player->setNameTag(C::YELLOW."Helper".C::GRAY." | ".C::AQUA. $player->getName());
		}
		if($rank == "Zeus"){
			$player->setNameTag(C::GOLD."Zeus".C::GRAY." | ".C::AQUA. $player->getName());
		}else{
			$player->setNameTag($regular.C::GRAY." | ".C::AQUA.$player->getName());
		}
	}
	
  public function onDisable(){
		$this->saveResource("/ranks.yml");
		$this->getLogger()->info(C::RED."Ranks Disabled!");
	}
}
