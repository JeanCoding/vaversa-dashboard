<?php

use RedBeanPHP\R as R;

class DataController
{
    public function returnPlantData($identifier)
    {
        $plantData = R::find('plants', 'identifier = \'' . $identifier . '\'');
        return $plantData;
    }

    public function returnAllPlants() {
        $plantData = R::findAll('plants');
        return $plantData;
    }
}
