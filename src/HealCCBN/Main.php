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
   $this->getLogger()->notice(c: :BOLD.c::DARK_PURPLE."
