<?php

    class Charactere{
        private $life;
        private $strength;
        private $defense;
        private $level;

        public function __construct($life, $strength, $defense){
            $this->life = $life;
            $this->strength = $strength;
            $this->defense = $defense;
        }

        public function getLife(){
            return $this->life;
        }

        public function getStrength(){
            return $this->strength;
        }

        public function getDefense(){
            return $this->defense;
        }

        public function getLevel(){
            return $this->level;
        }

    }