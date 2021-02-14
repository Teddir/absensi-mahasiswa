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
 
        return redirect()->route('absensis.index')
                        ->with('success','Mahasiswa created successfully.');
    }
 
    public function show(Absensi $post)
    {
        return view('absensis.show',compact('post'));
    }
 
    public function edit(Absensi $post)
    {
        return view('absensis.edit',compact('post'));
    }
 
    public function update(Request $request, Absensi $post)
    {
        $request->validate([
            'waktu_absen' => 'required',
            'mahasiswa_id' => 'required|numeric',
            'matakuliah_id' => 'required',
            'keterangan' => 'required',
        ]);
 
        $post->update($request->all());
 dd($post);
        return redirect()->route('absensis.index')
                        ->with('success','Mahasiswa updated successfully');
    }
 
    public function destroy(Absensi $post)
    {
        $post->delete();
 
        return redirect()->route('absensis.index')
                        ->with('success','Mahasiswa deleted successfully');
    }
}