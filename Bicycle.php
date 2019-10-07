<?php

class Bicycle
{
    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $nbWheels;

    /**
     * @var integer
     */
    private $nbSeats;

    /**
     * @var integer
     */
    private $currentSpeed;

    public function __construct(string $color, int $nbSeats){
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function forward():void
    {
        $this->currentSpeed = 15;

    }

    public function brake(): void
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
    }

    //set and get color
    private function setColor(string $currentColor){
        return $this->color = $currentColor;
    }
    private function getColor():string{
        return $this->color;
    }

    //set and get nbWheels
    private function setNbWheels(int $currentNbWheels){
        return $this->nbWheels = $currentNbWheels;
    }
    private function getNbWheels():int{
        return $this->nbWheels;
    }

    //set and get nbSeats
    private function setNbSeats(int $currentNbSeats){
        return $this->nbSeats = $currentNbSeats;
    }
    private function getNbSeats():int{
        return $this->nbSeats;
    }

    //set and get currentSpeed
    private function setCurrentSpeed(int $speed){
        return $this->currentSpeed = $speed;
    }
    private function getCurrentSpeed():int{
        return $this->currentSpeed;
    }

}

class Car
{
    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $nbWheels;

    /**
     * @var integer
     */
    private $nbSeats;

    /**
     * @var integer
     */
    private $currentSpeed;
    /**
     * @var string
     */
    private $energyType;
    /**
     * @var integer
     */
    private $energyLevel;


    public function __construct(string $color, int $nbSeats, string $energyType){
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energyType = $energyType;
    }

    public function forward():void
    {
        $this->currentSpeed = 15;

    }

    public function brake(): void
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
    }
    public function start(): string
    {
        return "Et zé parti, ça demarre !";
    }

    //set and get color
    private function setColor(string $currentColor){
        return $this->color = $currentColor;
    }
    private function getColor():string{
        return $this->color;
    }

    //set and get nbWheels
    private function setNbWheels(int $currentNbWheels){
        return $this->nbWheels = $currentNbWheels;
    }
    private function getNbWheels():int{
        return $this->nbWheels;
    }

    //set and get nbSeats
    private function setNbSeats(int $currentNbSeats){
        return $this->nbSeats = $currentNbSeats;
    }
    private function getNbSeats():int{
        return $this->nbSeats;
    }

    //set and get currentSpeed
    private function setCurrentSpeed(int $speed){
        return $this->currentSpeed = $speed;
    }
    private function getCurrentSpeed():int{
        return $this->currentSpeed;
    }
    //set and get energyType
    private function setEnergyType(string $currentEnergyType){
        return $this->energyType = $currentEnergyType;
    }
    private function getEnergyType():string{
        return $this->energyType;
    }
    //set and get energyLevel
    private function setEnergyLevel(int $currentEnergyLevel){
        return $this->energyLevel = $currentEnergyLevel;
    }
    private function getEnergyLevel():int{
        return $this->energyLevel;
    }

}