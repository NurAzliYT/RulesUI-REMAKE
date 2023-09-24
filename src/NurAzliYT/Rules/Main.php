<?php

namespace NurAzliYT\Rules;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\server\Server;
use pocketmine\player\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use jojoe77777\FormAPI\SimpleForm;

class Main extends PluginBase implements Listener{
	public $Content;

	public function onEnable() : void {
		$this->getLogger()->info("Rules-Remake On Enable");
		$this->getCommands("rules");
		$this->Content = new Config($this->getDataFolder() . "config.yml", Config::YAML);
		self::$instance = $this;
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
  }

    public function openMyForm($sender){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function(Player $sender, int $data = null) {
            $result = $data;
            if($result == null){
                return true;
            }
            switch($result){
                case 0:
                    
                break;    
                
            }
        });
        $form->setTitle("RulesUI");
        $form->setContent("1. Edit config.yml on Your File Manager");
        $form->setContent("2. Edit");
        $form->setContent("3. Edit");
        $form->setContent("4. Edit");
        $form->setContent("5. Edit");
        $form->addButton("Ok");
        $form->addButton("Cancel");
        $form->sendToPlayer($sender);
        return $form;
    } 
    public function onDisable() : void {
		$this->Content->save();
    }
}        
        
