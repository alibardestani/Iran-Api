<?php
namespace App\Services;
class CityService{
    public function getCities($data){
        return getCities($data);
    }

    public function creatCity($data){
        return addCity($data);
    }

    public function updateCityName($city_id, $name){
        return changeCityName($city_id, $name);
    }

    public function deleteCity($city_id){
        return deleteCity($city_id);
    }


}
