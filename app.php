<?php

declare(strict_types = 1);

require_once(__DIR__ . '/Game.php');
require_once(__DIR__ . '/Player.php');

/*
$listeJoueursNonClasse = [
    'ludo' => new Player('ludo'),
    'yami' => new Player('yami'),
    'bizoux' => new Player('bizoux'),
    'hazu' => new Player('hazu'),
    'kouik' => new Player('kouik'),
    'stark' => new Player('stark'),
    'pedro' => new Player('pedro'),
    'ade' => new Player('ade'),
    'karen' => new Player('karen'),
    'azyazy' => new Player('azyazy')
];


$ladder = new Ranking();

foreach ($listeJoueursNonClasse as $player) {
    $ladder->register($player);
}*/

// enlever de silver
// rajouter dans gold

$silver= [
    new Player('ludo'),
    new Player('yami'),
    new Player('bizoux'),
    new Player('hazu'),
    new Player('kouik'),
    new Player('stark'),
    new Player('pedro'),
    new Player('ade'),
    new Player('karen'),
    new Player('azyazy')
];

$gold = [];

function findPositionForPlayer(array $tableauQueJeDonne, string $nickname): int {
    foreach ($tableauQueJeDonne as $position => $player) {
        if ($nickname === $player->getName()) {
            return $position;
        }
    }
}

function removeAndOrganize(array $tab,string $nickname): array {
    unset($tab[findPositionForPlayer($tab, $nickname)]);
    $tab = array_values($tab);
    return $tab;
}

function deplaceLeJoueur(array $oldRank, string $nickname, array $newRank): array {
    $player = $oldRank[findPositionForPlayer($oldRank, $nickname)];
    $newRank[] = $player;
    return $newRank;
}

var_dump(deplaceLeJoueur($silver, 'ade',$gold));
var_dump(removeAndOrganize($silver,'ade'));
