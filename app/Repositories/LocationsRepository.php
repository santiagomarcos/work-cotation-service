<?php


namespace App\Repositories;


use App\Models\Location;

class LocationsRepository extends Repository
{
    /**
     * @return Location
     */
    public function getModel()
    {
        return (new Location());
    }

}