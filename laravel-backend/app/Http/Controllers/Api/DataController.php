<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Get some sample data.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // In a real application, you would fetch this data from a database
        $sampleData = [
            ['id' => 1, 'name' => 'Item 1', 'value' => 100],
            ['id' => 2, 'name' => 'Item 2', 'value' => 200],
            ['id' => 3, 'name' => 'Item 3', 'value' => 300],
        ];

        return response()->json($sampleData);
    }
}
