<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\StudentPromotionRepositoryInterface;

class PromotionController extends Controller
{

    protected $Promotion;
    public function __construct(StudentPromotionRepositoryInterface $Promotion)
    {
        $this->Promotion = $Promotion;
    }


    public function index()
    {
        return $this->Promotion->index_Promotion();
    }

   
    public function create()
    {
        return $this->Promotion->create_promotion();
    }

  
    public function store(Request $request)
    {
        return $this->Promotion->Store_Promotion($request);
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy(Request $request)
    {
        return $this->Promotion->destroy_promotion($request);
    }
}
