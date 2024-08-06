@extends('layouts.global')

@section('container')

<div class="row">
    <div class="col-md-12">
        <form action="{{ route('submitdiagnosis') }}" method="POST">
            <div class="form-group">
                @csrf
                <label>Pilih Gejala :</label>
                <select name="gejala[]" class="select2" multiple="multiple" data-placeholder="Pilih gejala..." style="width: 100%;">
                    @foreach($optionss as $option)
                        <option value="{{ $option->id }}">{{ $option->kode }} - {{ $option->nama_gejala }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Mulai Diagnosa</button>
        </form>
    </div>
</div>

@endsection