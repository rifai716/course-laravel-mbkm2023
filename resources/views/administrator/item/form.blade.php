@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" class="form-control" name="name" value="{{ $item->name ?? '' }}">
</div>
<div class="mb-3">
    <label class="form-label">Jenis</label>
    <input type="text" class="form-control" name="type" value="{{ $item->type ?? '' }}">
</div>
<div class="mb-3">
    <label class="form-label">Kondisi</label>
    <input type="text" class="form-control" name="condition" value="{{ $item->condition ?? '' }}">
</div>
<div class="mb-3">
    <label class="form-label">Kuantitas</label>
    <input type="text" class="form-control" name="quantity" value="{{ $item->quantity ?? '' }}">
</div>
<button type="submit" class="btn btn-primary">Simpan</button>
