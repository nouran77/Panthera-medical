<?php

namespace App\Http\Controllers;

use App\Settings;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function getSettings()
    {
        $settings = Settings::first();
        return view('admin.settings',compact('settings'));
    }

    public function postPriceSettings(Request $request)
    {
        $available = Settings::find(1);

        if (!$available) {
            $available = new Settings;
        }

        $available->available = $request->available;

        if(! isset( $request['available']) )
        {
            $available->available = '0';
        }

//        dd($request->all());
        $available->save();

    }
}
