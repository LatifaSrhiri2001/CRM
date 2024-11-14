<?php


namespace App\Controllers;
use App\Models\ClientModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $model = new ClientModel;
        $data['nombre_clients'] = $model->countAllResults();
      
        return view('dashboard', $data);
    }
 

    //interactions


}