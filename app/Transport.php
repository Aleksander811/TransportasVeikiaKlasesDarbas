<?php

namespace TRANSPORT;

class Transport{
    protected $id;
    protected $model;
    protected $brand;
    protected $weight;
    protected $price;
    protected $speed;
    protected $seet;
    protected $description;

    public function __construct($model, $brand){
        $this->id = rand(5,100);    
        $this->model = $model;
        $this->brand = $brand;
    }

    /*
    *Change model
    *@param string @model Transport model
    *
    */
    public function changeModel($model){
        $this-> model = $model;
    }

    public function changeBrand($brand){
        $this-> brand = $brand;
    }

    public function addWeight($weight){
        $this-> weight = $weight;
    }

    public function addPrice($price){
        $this-> price = $price;
    }


    public function addSpeed($speed){
        $this-> speed = $speed;
    }

    public function addSeet($seet){
        $this-> seet = $seet;
    }

    public function addDescription($description){
        $this-> description = $description;
    }


    /*
    *Get all info about transport
    *@return array
    *
    */

    public function getAllInfo(){
        return[
            $this->id,
            $this->model,
            $this->brand,
            $this->weight,
            $this->price,
            $this->speed,
            $this->seet,
            $this->description
        ];
    }


}