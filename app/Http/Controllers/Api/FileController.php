<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload(Request $request){
        $request->validate([
            'file' => 'required'
        ]);
        $file = time() . '_' . random_int(1000000, 9999999) . '_' . random_int(1000000, 9999999) . '.' . $request->file->extension();
        $request->file->move(public_path('data_file'), $file);
        return response()->json([
            'code' => 201,
            'message' => 'Lấy ảnh thành công',
            'data' => $file
        ], 201);
    }
}
