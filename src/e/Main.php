<?php

namespace e;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as Color;

 class Main extends PluginBase{
 
  public function onEnable(){
   $this->getServer()->getLogger()->info(Color::GREEN."EasyCommand plugin has been enabled ");
    }
    
   public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    switch($cmd->getName()){
     case 'hl':
     if($sender->isOp()){
     $sender->setHealth(20);
     $sender->sendMessage(Color::GREEN."Done Your Health Now 20");
      }else{
      $sender->sendMessage(Color::RED."You don't have permission to use this !");
      }
      break;
      case 'gm1':
       if($sender->isOp()){
        $sender->setGamemode(1);
        $sender->sendMessage(Color::PURPLE."done you now gamemode 1");
        }else{
        $sender->sendMessage(Color::RED."you don't have permission to use this !");
         }
         break;
         case 'gm0':
         if($sender->isOp()){
          $sender->setGamemode(0);
          $sender->sendMessage(Color::GREEN."you now Gamemode 0");
           }else{
           $sender->sendMessage(Color::RED."you don't have permission to use this !");
           }
           break;
           case 'f':
           if($sender->isOp()){
           $sender->setAllowFlight(true);
           $sender->sendMessage(Color::AQUA."Done you now can fly !");
           }else{
           $sender->sendMessage(Color::RED."you don't have permission to use this !");
            }
            break;
            case 'f2':
            if($sender->isOp()){
            $sender->setAllowFlight(false);
            $sender->sendMessage(Color::BLUE."done you now can't fly");
            }else{
            $sender->sendMessage(Color::RED."you don't have permssion to use this !");
            }
            break;
       }
     }
   }
 }            
