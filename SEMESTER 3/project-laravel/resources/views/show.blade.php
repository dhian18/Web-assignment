@extends('default')

@section('content')
<section>
    <div class="container mt-5">
        <h2>Form Edit Artikel</h2>
        <div class="row">
            <div class="col-lg-8">
                <form action="{{url('/update/'.$artikel->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Judul Artikel</label>
                        <input type="text" name="judul" class="form-control" placeholder="Masukkan judul artikel">
                    </div>

                    <div class="form-group">
                        <label for="nama">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" rows="15">

                        </textarea>
                       </div>
                       
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Upload</button>

                        <div class="form-group mt-2">
                        <a href="{{url('/')}}"> Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection