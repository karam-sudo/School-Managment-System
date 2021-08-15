<?php


namespace App\Repository;


interface StudentPromotionRepositoryInterface
{
    //index promotion parameter(Grades)
    public function index_Promotion();

    //Stor and update promotion
    public function Store_Promotion($request);

    //manage student promotion
    public function create_promotion();


    //back all students has promotion
    public function destroy_promotion($request);

}