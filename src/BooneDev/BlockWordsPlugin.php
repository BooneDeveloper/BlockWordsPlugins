<?php

namespace BooneDev;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class BlockWordsPlugin extends PluginBase implements Listener {

    /** @var array */
    private array $blockedWords;

    public function onEnable(): void {
        $this->saveDefaultConfig();
        $this->blockedWords = $this->getConfig()->get("blocked-words", []);
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onChat(PlayerChatEvent $event): void {
        $message = $event->getMessage();
        $blocked = $this->containsBlockedWords($message);

        if ($blocked) {
            $event->cancel();
            $event->getPlayer()->sendMessage(TextFormat::RED."¡Tu mensaje contiene palabras bloqueadas!");
        }
    }

    private function containsBlockedWords(string $message): bool {
        foreach ($this->blockedWords as $blockedWord) {
            if (stripos($message, $blockedWord) !== false) {
                return true;
            }
        }

        return false;
    }

}