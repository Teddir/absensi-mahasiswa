<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
 
class MhsController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::latest()->paginate(5);
 
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
 
        Mahasiswa::create($request->all());
 
        return redirect('/')
                        ->with('success','Mahasiswa created successfully.');
    }
 
    public function show(int $id)
    {
        
        $mahasiswa = Mahasiswa::findOrFail($id); 
        return view('mahasiswas.show',['mahasiswa' => $mahasiswa]);
    }
 
    public function edit(int $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id); 
        return view('mahasiswas.edit',['mahasiswa' => $mahasiswa]);
    }
 
    public function update(Request $request, Mahasiswa $post)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required|numeric',
            'email' => 'required',
        ]);
 
        $post->update($request->all());
 
        return redirect('/')
                        ->with('success','Mahasiswa updated successfully');
    }
 
    public function destroy($id)
    {
        $mahasiswa = mahasiswa :: where ('id',$id)->first();
        if($mahasiswa){
            return $mahasiswa -> delete();
                with('success','Mahasiswa deleted successfully');
        }
    }
}