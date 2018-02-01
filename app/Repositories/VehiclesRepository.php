<?php


namespace App\Repositories;


use App\Models\Vehicle;

class VehiclesRepository extends Repository
{
    /**
     * @return Vehicle
     */
    public function getModel()
    {
       return (new Vehicle());
    }

}