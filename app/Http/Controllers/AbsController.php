<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\absensi;
 
class AbsController extends Controller
{
    public function index()
    {
        $absensis = absensi::latest()->paginate(5);
        
        return view('absensis.index',compact('absensis'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function create()
    {
        return view('absensis.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'waktu_absen' => 'required',
            'mahasiswa_id' => 'required|numeric',
            'matakuliah_id' => 'required',
            'keterangan' => 'required',

        ]);
 
        absensi::create($request->all());
 
        return redirect('absensis')
                        ->with('success','Mahasiswa created successfully.');
    }
 
    public function show(Absensi $id)
    {
        $absensi = absensi::find($id);
        return view('absensis.show',compact('absensi'));
    }
 
    public function edit(Absensi $id)
    {
        $post = absensi::find($id);
        return view('absensis.edit',compact('post'));
    }
 
    public function update(Request $request, $id)
    {
        $request->validate([
            'waktu_absen' => 'required',
            'mahasiswa_id' => 'required|numeric',
            'matakuliah_id' => 'required',
            'keterangan' => 'required',
        ]);
 
        $absensi = absensi::find($id);

        $dataRequest  = $request->all();
        $dataResult  = array_filter($dataRequest);
        $absensi->update($dataResult);

        return redirect('absensis')
                        ->with('success','Mahasiswa updated successfully');
    }
 
    public function destroy(Absensi $post)
    {
        $absensi = absensi::destroy($post);
        return redirect('absensis')
                        ->with('success','Absensi deleted successfully');
    }
}