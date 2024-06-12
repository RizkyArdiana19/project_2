<?php

namespace App\Http\Controllers;

use App\Models\DataAdmin;
use Illuminate\Http\Request;

class DataAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->get('katakunci');
        $jumlahbaris = 4;

        if (strlen($katakunci)) {
            $validateData = DataAdmin::where('nama', 'like', "%$katakunci%")
                ->orWhere('email', 'like', "%$katakunci%")
                ->orWhere('jurusan', 'like', "%$katakunci%")
                ->paginate($jumlahbaris);
        } else {
            $validateData = DataAdmin::orderBy('nama', 'desc')->paginate($jumlahbaris);
        }

        $data = [
            'title' => 'Data Admin',
        ];
        return view('superadmin.dataadmin', $data)->with('validateData', $validateData);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Create Admin'
        ];
        return view('superadmin.createadmin', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|string|max:100|unique:data_mahasiswas,nama',
            'email' => 'required|email|max:100|unique:data_mahasiswas,email',
            'jurusan' => 'required|string|max:100',
        ]);

        DataAdmin::create($validateData);

        return redirect()->route('dataadmin.index')->with('success', 'Admin created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $validateData = DataAdmin::where('nama', $id)->first();

        $data = [
            'title' => 'Edit Admin'
        ];
        return view('superadmin.editadmin', $data)->with('validateData', $validateData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama' => 'required|string|max:100|unique:data_mahasiswas,nama',
            'email' => 'required|email|max:100|unique:data_mahasiswas,email',
            'jurusan' => 'required|string|max:100',
        ]);

        DataAdmin::where('nama',$id)->update($validateData);

        return redirect()->route('dataadmin.index')->with('success', 'Admin update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    DataAdmin::where('nama', $id)->delete();
    return redirect()->to('dataadmin')->with('success', 'Admin deleted successfully.');
    }

}
