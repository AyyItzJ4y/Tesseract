<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link   http://www.pocketmine.net/
 *
 *
 */

namespace pocketmine\event\player;

use pocketmine\entity\FishingHook;
use pocketmine\event\Cancellable;
use pocketmine\item\Item;
use pocketmine\Player;

/**
 * Called when a player uses the fishing rod
 */
class PlayerFishEvent extends PlayerEvent implements Cancellable{

	public static $handlerList = null;

	/** @var Item */
	private $item;

	/** @var FishingHook */
	private $hook;

	/**
	 * @param Player $player
	 * @param Item   $item
	 * @param        $fishingHook
	 */
	public function __construct(Player $player, Item $item, $fishingHook = null){
		$this->player = $player;
		$this->item = $item;
		$this->hook = $fishingHook;
	}

	/**
	 * @return Item
	 */
	public function getItem(){
		return clone $this->item;
	}

	public function getHook(){
		return $this->hook;
	}

	/**
	 * @return EventName
	 */
	public function getEventName(){
		return "PlayerFishEvent";
	}

}
