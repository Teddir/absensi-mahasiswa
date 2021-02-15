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
 
        return redirect('/matakuliahs')
                        ->with('success','Matakuliah created successfully.');
    }
 
    public function show($post)
    {
        $matakuliah = matakuliah::find($post);
        return view('matakuliahs.show',compact('matakuliah'));
    }
 
    public function edit( $post)
    {
        $matakuliah = matakuliah::find($post);
        return view('matakuliahs.edit',compact('matakuliah'));
    }
 
    public function update(Request $request,  $post)
    {
        $request->validate([
            'nama_matakuliah' => 'required',
            'sks' => 'required|numeric',
        ]);
        
        $matakuliah = matakuliah::find($post);

        $dataRequest  = $request->all();
        $dataResult  = array_filter($dataRequest);
        $matakuliah->update($dataResult);
 
        return redirect('/matakuliahs')
                        ->with('success','Mahasiswa updated successfully');
    }
 
    public function destroy( $post)
    {

        $matakuliah = matakuliah::destroy($post);
        return redirect('/matakuliahs')
                        ->with('success','Mahasiswa deleted successfully');
    }
}