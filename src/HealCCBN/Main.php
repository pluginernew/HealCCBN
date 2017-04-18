<?php

namespace HealBV;

use pocketmine\plugin\PluginBase;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\utils\TextFormat as c;

class Main extends PluginBase{

 public function onEnable(){
   $this->getLogger()->notice(c::BOLD.c::DARK_PURPLE."(|)",c::RESET.c::DARK_AQUA."healplugin Has been enabled");
 }
 
pubilc function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
 if(strtolower($cmd->getName()) == "youtube"){
    if($sender->hasPermission("yt")){
     $sender->sendMessage(c::BOLD.c::DARK_PURPLE."(|)".c::DARK_AQUA." you have been heald");
     $sender->setHealth(20.0);
    }elseif(!$sender->hasPermission("yt")){
           $sender->sendMessage(c::BOLD.c::DARK_RED."(|)".c: :RESET.c: :RED." Invalad perms");
    }
  } 
}
 
 public function onDisable(){
  $this->getLogger()->warning(c::BOLD.c::DARK_RED."(|)".c::RESET.c::RED." Healplugin Has been disabled");
  }
}
