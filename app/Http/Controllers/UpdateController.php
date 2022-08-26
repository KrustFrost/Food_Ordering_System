<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\CreateUpdateProfileController;
class UpdateController extends Controller
{
    public function index(){
        return view('updates');
    }
}