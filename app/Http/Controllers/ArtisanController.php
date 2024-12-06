<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ArtisanController extends Controller
{
    public function view()
    {
        return view('artisan');
    }

    public function runCommand(Request $request)
    {
        $command = $request->input('command');
        try {
            Artisan::call($command);
            $output = Artisan::output();
            return response()->json([
                'success' => true,
                'message' => $output
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
