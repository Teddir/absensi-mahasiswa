<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\matakuliah;
 
class MtkController extends Controller
{
    public function index()
    {
        $matakuliahs = matakuliah::latest()->paginate(5);
 
        return view('matakuliahs.index',compact('matakuliahs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function create()
    {
        return view('matakuliahs.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'nama_matakuliah' => 'required',
            'sks' => 'required|numeric',

        ]);
 
        matakuliah::create($request->all());
 
        return redirect()->route('matakuliahs.index')
                        ->with('success','Matakuliah created successfully.');
    }
 
    public function show(Post $post)
    {
        return view('matakuliahs.show',compact('post'));
    }
 
    public function edit(Post $post)
    {
        return view('matakuliahs.edit',compact('post'));
    }
 
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'nama_matakuliah' => 'required',
            'sks' => 'required|numeric',
        ]);
 
        $post->update($request->all());
 
        return redirect()->route('matakuliahs.index')
                        ->with('success','Mahasiswa updated successfully');
    }
 
    public function destroy(Post $post)
    {
        $post->delete();
 
        return redirect()->route('matakuliahs.index')
                        ->with('success','Mahasiswa deleted successfully');
    }
}