<?php

namespace TRANSPORT;

class Motorcycle extends Transport
{
    private $wheels;
    private $kw;

    public function addWheels($wheels)
    {
        $this->wheels = $wheels;
    }

    public function addKw($kw)
    {
        $this->kw = $kw;
    }

    public function getAllInfo()
    {
        $data = parent::getAllInfo();
        $data[] = $this->wheels;
        $data[] = $this->kw;

        return $data;
    }
}
