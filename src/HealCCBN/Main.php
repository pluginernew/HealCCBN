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
   $this->getLogger()->notice(c::BOLD.c::DARK_PURPLE."(!)",c::RESET.c::DARK_AQUA."healplugin Has been enabled");
 }
 
pubilc function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
 if(!($sender instanceof Player)){
   $sender->sendMessage(c::BOLD.c::DARK_RED."(!).c::RESET.c::RED." Only Player can run this command");
   }elseif($sender instanceof Player){
           if($cmd->getName() == "yt"){
             if(!(isset($args[0]))){
               if($sender->hasPermission("yt")){
                 $sender->sendMessage(c::DARK_PURBLE."/yt".c::DARK_AQUA." heal, feed");
               }
              }elseif(!($sender->hasPermission("yt"))){
                     $sender->sendMessage(c::BOLD.c::DARK_RED."(!)".c::RESET.c::RED." Invald perms");
              }
              if($args[0] == "heal"){
                if($sender->hasPermssion("yt.heal")){
                  $sender->sendMessage(c::)
                
              
    
  

      }
 
 public function onDisable(){
  $this->getLogger()->warning(c::BOLD.c::DARK_RED."(!)".c::RESET.c::RED." Healplugin Has been disabled");
  }
}
