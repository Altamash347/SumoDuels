<?php

declare(strict_types=1);

namespace jack\sumo\event;

use pocketmine\event\plugin\PluginEvent;
use pocketmine\Player;
use jack\sumo\arena\Arena;
use jack\sumo\Sumo;

/**
 * Class PlayerArenaWinEvent
 * @package onevsone\event
 */
class PlayerArenaWinEvent extends PluginEvent {

    /** @var null $handlerList */
    public static $handlerList = \null;

    /** @var Player $player */
    protected $player;

    /** @var Arena $arena */
    protected $arena;

    /**
     * PlayerArenaWinEvent constructor.
     * @param OneVsOne $plugin
     * @param Player $player
     * @param Arena $arena
     */
    public function __construct(Sumo $plugin, Player $player, Arena $arena) {
        $this->player = $player;
        $this->arena = $arena;
        parent::__construct($plugin);
    }

    /**
     * @return Player $player
     */
    public function getPlayer(): Player {
        return $this->player;
    }

    /**
     * @return Arena $arena
     */
    public function getArena(): Arena {
        return $this->arena;
    }
}