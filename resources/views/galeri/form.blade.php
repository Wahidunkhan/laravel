@csrf

<div class="form-group row">
    <label for="nama" class="col-md-2 col form-label text-md-right">{{__('nama')}}</label>

    <div class="col-md-10">
    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autofocus>

    @error('nama')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $massege }}</strong>

    </span>
    @enderror
    </div>
</div>

<div class="form-group row">
    <label for="keterangan" class="col-md-2 col form-label text-md-right">{{__('Keterangan')}}</label>

    <div class="col-md-10">
    <input id="path" type="keterangan" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" required autofocus>

    @error('keterangan')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    </div>
</div>

<div class="form-group row">
    <label for="path" class="col-md-2 col form-label text-md-right">{{__('Path')}}</label>

    <div class="col-md-10">
    <input id="path" type="text" class="form-control @error('path') is-invalid @enderror" name="path" value="{{ old('path') }}" required autofocus>
   
    @error('path')

    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    </div>
</div>

<div class="form-group row">
    <label for="kategori_galeri_id" class="col-md-2 col form-label text-md-right">{{__('Kategori Galeri')}}</label>

    <div class="col-md-10">
    {!!Form::select('kategori_galeri_id',$kategori_galeri, null,["class"=>"form-control", "required"]) !!}
    @error('Isi')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $messege }}</strong>
    </span>
    @enderror
    </div>
</div>

<input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Simpan') }}
        </button>
        <a herf="{!! route('galeri.index') !!}" class="btn btn-danger">
            {{ __('Batal') }}
        </a>
    </div>
</div>    