<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $data = [
            [
                "id" => 1,
                "name" => "Budi",
                "status" => "Y"
            ],
            [
                "id" => 2,
                "name" => "Tono",
                "status" => "N"
            ]
        ];

        return response()->json([
            "status" => "success",
            "message" => "Data product berhasil diambil",
            "data" => $data
        ]);
    }

    public function show($nama) {
        return "Halo, nama saya " . $nama;
    }
}
