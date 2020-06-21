<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entreprises;
use App\Contacts;
use App\Demandes;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }
}
