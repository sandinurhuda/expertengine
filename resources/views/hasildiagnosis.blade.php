@extends('layouts.global')

@section('container')

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label>Hasil Diagnosis:</label>
            @foreach($namaKerusakan as $nk)
                <h1><strong>{{ $nk }}</strong></h1>
            @endforeach
        </div>
        <a href="/diagnosis" class="btn btn-block btn-default">Kembali ke Halaman Diagnosis</a>
    </div>
</div>

@endsection