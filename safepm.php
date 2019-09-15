<?php

namespace BayAlper10\SafePM;

use pocketmine\{Player, Server};
use BayAlper10\SafePM\Main;

class safepm
{

  public static function enableMessage($message){
    return Main::getInstance()->getLogger()->info($message);
  }

  public static function disableMessage($message){
    return Main::getInstance()->getLogger()->info($message);
  }

  public static function repeatingTask($name, $time){
    Main::getInstance()->getScheduler()->scheduleRepeatingTask(new $name, $time);
  }
}
