<?php

namespace App\Controllers;
// use App/Models/UserModel;
use App\Models\UserModel;

class AdminDashboardController extends BaseController
{
    public function index()
    {
         echo " <h1><strong> Welcome to admin dashboard<strong></h1>";
        // $model= new UserModel();
        //  $users=$model->findAll();
        //  return view('admin_dashboard/dashboard');
    }
}