@extends('default')

@section('content')

<section>
<div class="container mt-5">
    
        <div class="row">
            <div class="col-lg-8">
            <h2><center> LIST ARTIKEL </center></h2>
            </div>

            <div class="col-md-12 p-4">
        <a href="/add"><button class="btn btn-primary mb-3">Tambah Artikel</button></a>
            <table class="table table-responsive table-bordered table-hover table-stripped">


                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th width="15%">Aksi</th>
                </tr>

                @foreach($artikel as $articles)
                <tr>
                    <td>{{$articles->id}}</td>
                    <td>{{$articles->judul}}</td>
                    <td>{{$articles->deskripsi}}</td>
      
                    <td>
                        <a href="{{url('/show/'.$articles->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{url('/destroy/'.$articles->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach

                </table>
                
                </div>

</div>
            
            </div>
        </div>
   
</section>
    
@endsection