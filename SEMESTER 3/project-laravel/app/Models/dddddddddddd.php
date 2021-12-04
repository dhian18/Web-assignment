
use Illuminate\Http\Request;
//use App\Models\Artikel;
use Illuminate\Support\Facades\DB;
 
class ArtikelController extends Controller
{
    
        public function index()
        {
            // mengambil data dari table pegawai
            $artikel = DB::table('artikel')->get();
     
            // mengirim data pegawai ke view index
            return view('index',['artikel' => $artikel]);
     
        }
        // method untuk menampilkan view form tambah pegawai
public function add()
{
 
	// memanggil view tambah
	return view('add');
 
}
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('artikel')->insert([
		'judul' => $request->judul,
		'deskripsi' => $request->deskripsi,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/');
 
}
public function show($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$artikel = DB::table('artikel')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('show',['artikel' => $artikel]);
 
}
public function edit($id)
    {
        //
    }
public function update(Request $request)
{
	// update data pegawai
	DB::table('artikel')->where('id',$request->id)->update([
		'judul' => $request->nama,
		'deskripsi' => $request->jabatan,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/');
}

    public function destroy($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('artikel')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/');
}


 
}
