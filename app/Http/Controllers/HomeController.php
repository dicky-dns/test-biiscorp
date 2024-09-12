<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Jabatan;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{
    function index()
    {
        return view('index');
    }

    function getdata()
    {
        $data = Pegawai::with('jabatan');

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('gajinumber', function ($q) {
                return number_format($q->gaji);
            })
            ->addColumn('fotobtn', function ($q) {
                $id = encrypt($q->id);
                return '<a data-id="'.$id.'" class="action-btn fotobtn"><i class="fa fa-lg fa-image text-edit"></i></a>';
            })
            ->addColumn('action', function ($q) {
                $id = encrypt($q->id);
                return
                    '<a data-id="'.$id.'"  class="action-btn editbtn"><i class="fa fa-lg fa-edit text-edit"></i></a>
                    <a data-id="'.$id.'"  class="action-btn deletebtn"><i class="fa fa-lg fa-trash text-delete"></i></a>
                    ';
            })
            ->rawColumns(['action','fotobtn'])
            ->toJson();
        return response()->json($data);
    }

    function getdatabyid(Request $request)
    {
        $id = decrypt($request->id);
        $data = Pegawai::find($id);

        if($data){
            $jb = Jabatan::find($data->jabatan_id);
            $data->jabatan = $jb ? $jb->jabatan : '-';
            return response()->json($data);
        }else{
            return response()->json('Data tidak ditemukan', 400);
        }
    }

    function getjabatan(Request $request)
    {
        $data = Jabatan::select('id', 'jabatan');

        if ($request->has('q')) {
            $search = $request->q;
            $data = $data->where('jabatan', 'like', "%$search%");
        }

        $data = $data->paginate(10, $request->page);
        return response()->json($data);
    }

    function savedata(Request $request)
    {
        if($request->updateid == null){
            $foto = '';
            if ($image = $request->file('foto')) {
                $destinationPath = 'img/upload/';
                $foto = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $foto);
            }

            $data = new Pegawai();
            $data->nama = $request->nama;
            $data->telepon = '62'.$request->telepon;
            $data->email = $request->email;
            $data->jabatan_id = $request->jabatan;
            $data->gaji = $request->gaji;
            $data->tanggal_masuk = $request->tanggal_masuk;
            $data->foto = $foto;
            $data->save();

            return response()->json('Berhasil menyimpan data');
        }else{
            $data = Pegawai::find($request->updateid);
            $foto = $data->foto;
            if ($image = $request->file('foto')) {
                $destinationPath = 'img/upload/';
                $foto = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $old_image = $destinationPath.$data->foto;
                if (file_exists($old_image) && $data->foto != 'example.jpg') {
                    @unlink($old_image);
                }
                $image->move($destinationPath, $foto);
            }
            if($data){
                $data->nama = $request->nama;
                $data->telepon = '62'.$request->telepon;
                $data->email = $request->email;
                $data->jabatan_id = $request->jabatan;
                $data->gaji = $request->gaji;
                $data->tanggal_masuk = $request->tanggal_masuk;
                $data->foto = $foto;
                $data->save();
                return response()->json('Berhasil mengubah data');
            }
        }
        return response()->json('Gagal Menyimpan data', 400);

    }

    function deletedata(Request $request)
    {
        $id = decrypt($request->id);
        $data = Pegawai::find($id);

        if($data){
            $destinationPath = 'img/upload/';
            $old_image = $destinationPath.$data->foto;
            if (file_exists($old_image) && $data->foto != 'example.jpg') {
                @unlink($old_image);
            }

            $data->delete();
            return response()->json('Berhasil menghapus data');
        }

        return response()->json('Gagal menghapus data', 400);

    }
}
