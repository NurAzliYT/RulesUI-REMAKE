<?php

namespace NurAzliYT\Rules;

use pocketmine\plugin\PluginBase;
use pocketmine\server\Server;
use pocketmine\player\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use jojoe77777\FormAPI\SimpleForm;

class Main extends PluginBase implements Listener{
  public function onEnable(){
    $this->getLogger()->info("Rules-Remake On Enable");
  }
  public function onCommand (CommandSender $sender, Command $cmd, String $label, Array $args):boll{
    switch($cmd->getName()){
      case "rules":
      if($sender instanceof Player){
        $this->openMyForm($sender);
      }
      else{
        $sender->sendMessage("Use Command In The Game");
      }
      break;
    }
    return true;
    public function openMyForm($sender){
      $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
      $form = $api->createSimpleForm(function(Player $sender, int $data
}
