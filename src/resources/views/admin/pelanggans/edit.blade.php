@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.pelanggan.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.pelanggans.update", [$pelanggan->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="nama_pelanggan">{{ trans('cruds.pelanggan.fields.nama_pelanggan') }}</label>
                <input class="form-control {{ $errors->has('nama_pelanggan') ? 'is-invalid' : '' }}" type="text" name="nama_pelanggan" id="nama_pelanggan" value="{{ old('nama_pelanggan', $pelanggan->nama_pelanggan) }}" required>
                @if($errors->has('nama_pelanggan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama_pelanggan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.nama_pelanggan_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="jenis_kelamin">{{ trans('cruds.pelanggan.fields.jenis_kelamin') }}</label>
                <input class="form-control {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}" type="text" name="jenis_kelamin" id="jenis_kelamin" value="{{ old('jenis_kelamin', $pelanggan->jenis_kelamin) }}" required>
                @if($errors->has('jenis_kelamin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('jenis_kelamin') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.jenis_kelamin_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="waktu_transaksi">{{ trans('cruds.pelanggan.fields.waktu_transaksi') }}</label>
                <input class="form-control {{ $errors->has('waktu_transaksi') ? 'is-invalid' : '' }}" type="text" name="waktu_transaksi" id="waktu_transaksi" value="{{ old('waktu_transaksi', $pelanggan->waktu_transaksi) }}" required>
                @if($errors->has('waktu_transaksi'))
                    <div class="invalid-feedback">
                        {{ $errors->first('waktu_transaksi') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.waktu_transaksi_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection