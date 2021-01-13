<?php

namespace App\Http\Controllers;

use App\Models\createkey;
use Illuminate\Http\Request;

class key extends Controller
{
    public function store()
    {
        $store = createkey::create([
            'key' => random_int(1, 5000)
        ]);
        return response()->json([
            'res' => $store,
            'message' => 'create key succes',
            'status' => 200,
        ]);
    }

    public function delete(Request $request)
    {

        $del = createkey::find($request->id)->delete();
        return response()->json([
            'res' => $del,
            'message' => 'delete key succes',
            'status' => 200,
        ]);
    }
}