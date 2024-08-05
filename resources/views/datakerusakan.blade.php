@extends('layouts.admin')

@section('container')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th style="width: 150px">Kode Kerusakan</th>
                      <th>Nama Kerusakan</th>
                      <th>Nama Gejala</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($penyakits as $p)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $p->kode }}</td>
                      <td>{{ $p->nama_penyakit }}</td>
                      <td>
                      	<ul>
                      		@foreach($p->gejalas as $g)
                      		<li>{{ $g->kode }} - {{ $g->nama_gejala }}</li>
                      		@endforeach
                      	</ul>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>

@endsection