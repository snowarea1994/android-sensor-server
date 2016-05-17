<?php

namespace App\Http\Controllers;

use App\Health;
use App\Location;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;

class userDataController extends Controller
{
    protected function data(Request $request){
        $file = $request->file("sensor");
        $fileName = $file->getClientOriginalName();

        Storage::put($fileName,file_get_contents($file->getRealPath()));
    }

    protected function location(Request $request){
        Location::create([
            'uid' => $request['uid'],
            'longitude' => $request['longitude'],
            'latitude' => $request['latitude'],
            'floor' => $request['floor']
        ]);
    }

    protected function Health(Request $request){
        Health::create([
            'uid' => $request['uid'],
            'steps' => $request['steps'],
            'date' => $request['date']
        ]);
    }

    protected function getLocation($id){
        return Location::where('uid','=',$id)->get();
    }

    protected function getHealth($id){
        return Health::where('uid','=',$id)->get();
    }
}
