<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\mahasiswa;
 
class MhsController extends Controller
{
    public function index()
    {
        $mahasiswas = mahasiswa::latest()->paginate(5);
 
        return view('mahasiswas.index',compact('mahasiswas'))
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
 
        Post::create($request->all());
 
        return redirect()->route('mahasiswas.index')
                        ->with('success','Mahasiswa created successfully.');
    }
 
    public function show(Post $post)
    {
        return view('mahasiswas.show',compact('post'));
    }
 
    public function edit(Post $post)
    {
        return view('mahasiswas.edit',compact('post'));
    }
 
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required|numeric',
            'email' => 'required',
        ]);
 
        $post->update($request->all());
 
        return redirect()->route('mahasiswas.index')
                        ->with('success','Mahasiswa updated successfully');
    }
 
    public function destroy(Post $post)
    {
        $post->delete();
 
        return redirect()->route('mahasiswas.index')
                        ->with('success','Mahasiswa deleted successfully');
    }
}