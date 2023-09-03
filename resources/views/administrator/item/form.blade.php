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
    <input type="text" class="form-control" name="name" value="{{ $user->name ?? '' }}">
</div>
<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="text" class="form-control" name="email" value="{{ $user->email ?? '' }}">
</div>
<div class="mb-3">
    <label class="form-label">Jabatan</label>
    <input type="text" class="form-control" name="position" value="{{ $user->admin->position ?? '' }}">
</div>
<div class="mb-3">
    <label for="password" class="form-label">Password</label>
    @if ($id ?? NULL != NULL)
        <small>(kosongkan jika tidak ingin diubah)</small>
    @endif
    <input type="password" id="password" class="form-control" name="password" value="">
</div>
<button type="submit" class="btn btn-primary">Simpan</button>
