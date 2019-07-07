<?php

class Game
{
    private $scoreboard;

    public function __construct(
      Player $player1,
      Player $player2,
      Player $player3,
      Player $player4
    ) {
        $players = [$player1, $player2, $player3, $player4];
        shuffle($players);

        $this->scoreboard = $players;
    }

    public function getScoreboard(): array
    {
        return $this->scoreboard;
    }
}
