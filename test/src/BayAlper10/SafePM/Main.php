<?php

namespace BayAlper10\SafePM;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use BayAlper10\SafePM\safepm;
use pocketmine\scheduler\Task;

class Main extends PluginBase{

  private static $instance;

  public static function getInstance(): Main{
    return self::$instance;
  }

  public function onLoad(){
    self::$instance = $this;
  }

  public function onEnable(): void{
    safepm::enableMessage("enabled");

    //Create repeating task
    safepm::repeatingTask("task", 20);
  }

  public function onDisable(): void{
    safepm::disableMessage("disabled");
  }
}

class task extends Task{

  public function __construct(Main $plugin){
    $this->p = $plugin;
  }

  public function onRun($tick){
    var_dump("test task");
  }
}
