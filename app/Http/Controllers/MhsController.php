<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MhsController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::latest()->paginate(5);

        return view('/', compact('mahasiswas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('mahasiswas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required|numeric',
            'email' => 'required',

        ]);

        Mahasiswa::create($request->all());

        return redirect('/')
            ->with('success', 'Mahasiswa created successfully.');
    }

    public function show(int $id)
    {

        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswas.show', ['mahasiswa' => $mahasiswa]);
    }

    public function edit(int $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswas.edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required|numeric',
            'email' => 'required',
        ]);

        $mahasiswa = Mahasiswa::find($id);

        $dataRequest  = $request->all();
        $dataResult  = array_filter($dataRequest);
        $mahasiswa->update($dataResult);

        return redirect('/')
            ->with('success', 'Mahasiswa updated successfully');
    }

    public function destroy($id)
    {
        $mahasiswa = mahasiswa::destroy($id);
        return redirect('/')
            ->with('success', 'Mahasiswa Delete successfully');
    }
}
