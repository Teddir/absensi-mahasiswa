<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [ 'nama_mahasiswa', 'alamat','no_tlp','email',];
}
