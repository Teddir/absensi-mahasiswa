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
            'waktu_absen' => 'required|time',
            'mahasiswa_id' => 'required|numeric',
            'matakuliah_id' => 'required',
            'keterangan' => 'required',

        ]);
 
        Post::create($request->all());
 
        return redirect()->route('absensis.index')
                        ->with('success','Mahasiswa created successfully.');
    }
 
    public function show(Post $post)
    {
        return view('absensis.show',compact('post'));
    }
 
    public function edit(Post $post)
    {
        return view('absensis.edit',compact('post'));
    }
 
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'waktu_absen' => 'required|time',
            'mahasiswa_id' => 'required|numeric',
            'matakuliah_id' => 'required',
            'keterangan' => 'required',
        ]);
 
        $post->update($request->all());
 
        return redirect()->route('absensis.index')
                        ->with('success','Mahasiswa updated successfully');
    }
 
    public function destroy(Post $post)
    {
        $post->delete();
 
        return redirect()->route('absensis.index')
                        ->with('success','Mahasiswa deleted successfully');
    }
}