<?php

namespace App\Http\Controllers;
use App\Models\DynamoDB\device_data;
use Illuminate\Http\Request;


class Device_dataController extends Controller
{
    function show(){
        return device_data::all();
    }
}
