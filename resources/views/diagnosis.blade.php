@extends('layouts.global')

@section('container')

<div class="row">
    <!-- /.col -->
    <div class="col-md-12">
        <div class="form-group">
            <label>Pilih Gejala :</label>
            <select class="select2" multiple="multiple" data-placeholder="Pilih gejala..." style="width: 100%;">
                @foreach($optionss as $option)
                    <option value="{{ $option->id }}">{{ $option->kode }} - {{ $option->nama_gejala }}</option>
                @endforeach
            </select>
        </div>
        <button type="button" class="btn btn-primary btn-lg">Mulai Diagnosa</button>
    </div>
              <!-- /.col -->
</div>

@endsection