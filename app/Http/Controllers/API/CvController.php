<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CvController extends Controller
{
    private $filePath = 'cv/herby.pdf';

    public function show()
    {
        return response()->json([
            'cv_url' => asset($this->filePath)
        ]);
    }

    public function download()
    {
        return response()->download(public_path($this->filePath));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'cv' => 'required|mimes:pdf|max:5120'
        ]);

        $request->file('cv')->move(public_path('cv'), 'herby.pdf');

        return response()->json([
            'message' => 'CV uploaded successfully'
        ]);
    }
}