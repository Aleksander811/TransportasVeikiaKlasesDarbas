<?php

namespace TRANSPORT;

class Car extends Transport
{
    private $engine;
    private $kw;

    public function addEngine($engine)
    {
        $this->engine = $engine;
    }

    public function addKw($kw)
    {
        $this->kw = $kw;
    }

    public function getAllInfo()
    {
        $data = parent::getAllInfo();
        $data[] = $this->engine;
        $data[] = $this->kw;

        return $data;
    }
}
