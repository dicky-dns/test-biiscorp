<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Http\Resources\ApiResource;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
      /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        //get all posts
        $data = Pegawai::with('jabatan');

        if($request->has('q') && $request->q != ''){
            $data->where('nama', 'like', "%$request->q%")
            ->orWhere('email', 'like', "%$request->q%")
            ->orWhere('telepon', 'like', "%$request->q%")
            ->orWhere('tanggal_masuk', 'like', "%$request->q%");
        }
        $data = $data->get();

        return new ApiResource(true, 'List Data Pegawai', $data);
    }
}
