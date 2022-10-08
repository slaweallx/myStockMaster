<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;

class BrandsController extends Controller
{
    public function index()
    {
        if (! Gate::allows('brand_access')) {
            return abort(401);
        }

        return view('admin.brands.index');
    }

}
