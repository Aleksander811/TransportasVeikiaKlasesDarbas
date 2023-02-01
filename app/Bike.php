<?php

namespace TRANSPORT;

class Bike extends Transport
{
    private $category;
    private $runners;

    public function addCategory($category)
    {
        $this->category = $category;
    }

    public function addRunners($runners)
    {
        $this->runners = $runners;
    }

    public function getAllInfo()
    {
        $data = parent::getAllInfo();
        $data[] = $this->category;
        $data[] = $this->runners;

        return $data;
    }
}
