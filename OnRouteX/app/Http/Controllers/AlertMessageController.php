<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;

class AlertMessageController extends Controller
{
    //
    public function sendAlert(Request $request)
    {
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        \Log::info($request->all()); // Add this line
        $message = $request->input('message');
        $alert = new Alert;
        $alert->message = $message;
        if ($alert->save()) {
            \Log::info('Data saved successfully');
        } else {
            \Log::info('Data not saved');
        }
    }

    public function getAlerts()
    {
        $alerts = Alert::all();
        return response()->json($alerts);
    }
}
