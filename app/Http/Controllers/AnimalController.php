<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use DataTables;
use Dflydev\DotAccessData\Data;
use Yajra\DataTables\DataTables as DataTablesDataTables;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;

class AnimalController extends Controller
{
    public function index()
    {

        return view('Animal.index');
    }

    public function login()
    {

        return view('Animal.login');
    }

    public function form()
    {

        return view('Animal.createAnimal');
    }

    public function main(Request $request)
    {
      /*   if ($request->ajax()) {
            $animals = DB::query("SELECT * FROM Animals");
            return datatables()::of($animals)
                ->addColumn('action', function ($animals) {
                    $acciones = '<a href="#" class=""> Editar </a>';
                    $acciones .= '<a href="#" class=""> Eliminar </a>';
                    return $acciones;
                    })
                ->rawColumn(['action'])
                ->make(true);
        } */
        return view('Animal.mainAnimal'); 

        
    }
    public function list (Request $request) {
        $animals = DB::table("Animals")->get();
        return response()->json(['animals' => $animals]);
    }
}
