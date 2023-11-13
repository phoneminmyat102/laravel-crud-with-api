<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class DeviceController extends Controller
{
    //
    public function list($id=null) {
        return $id ? Device::find($id) : Device::all();
    }

    public function add(Request $request) {
        $device = new Device;
        $device->name = $request->name;
        $device->member_id = $request->member_id;
        $result = $device->save();

        if($result) {
            return ["Result"=>"Data has been saved"];
        } else {
            return ["Result"=>"Operation Fails!"];
        }
        
    }

    public function update (Request $request) {
        $device = Device::find($request->id);
        $device->name = $request->name;
        $device->member_id = $request->member_id;
        $result = $device->save();

        if($result) {
            return ["Result"=>"Data has been updated"];
        } else {
            return ["Result"=>"Operation Fails!"];
        }      
    }

    public function delete($id) {
        $result = Device::find($id)->delete();
        if($result) {
            return ["Result"=>"Data has been deleted"];
        } else {
            return ["Result"=>"Delete Operation Fails!"];
        }      
    }

    public function search($name) {
        $result = Device::where('name','like','%'.$name.'%')->get();
        return $result;
        if(count($result) > 0) {
            return $result;
        } else {
            return ["Result"=>"No Record Found"];
        }
    }
}
