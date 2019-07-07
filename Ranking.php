<?php

class Ranking
{

    private $bronze;

    private $silver;

    private $gold;

    public function __construct()
    {
        $this->bronze = [];
        $this->silver = [];
        $this->gold = [];
    }

    public function register(Player $newComer)
    {
        $this->bronze[] = $newComer;
    }

    
