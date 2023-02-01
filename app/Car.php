<?php

namespace TRANSPORT;

class Car implements Transport
{
    protected $id;
    protected $model;
    protected $brand;
    protected $weight;
    protected $price;
    protected $speed;
    protected $seet;
    protected $description;
    private $engine;
    private $kw;

    public function __construct($model, $brand){
        $this->id = rand(5,100);    
        $this->model = $model;
        $this->brand = $brand;
    }
    public function changeBrand($brand)
    {
        // TODO: Implant changeBrand() method.
        $this->brand = $brand;
    }
    public function changeModel($model)
    {
        // TODO: Implant changeModel() method.
        $this->model = $model;
    }
    public function addEngine($engine)
    {
        $this->engine = $engine;
    }

    public function addKw($kw)
    {
        $this->kw = $kw;
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

    public function getCarInfo()
    {
        $data[] = $this->engine;
        $data[] = $this->kw;

        return $data;
    }
}
