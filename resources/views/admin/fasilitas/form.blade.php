<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($fasilita->nama) ? $fasilita->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('artikel') ? 'has-error' : ''}}">
    <label for="artikel" class="control-label">{{ 'Artikel' }}</label>
    <textarea class="form-control" rows="5" name="artikel" type="textarea" id="artikel" >{{ isset($fasilita->artikel) ? $fasilita->artikel : ''}}</textarea>
    {!! $errors->first('artikel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('gambar') ? 'has-error' : ''}}">
    <label for="gambar" class="control-label">{{ 'Gambar' }}</label>
    <input type="file" name="gambar" class="form-control" placeholder="gambar" id="gambar" value="{{ isset($fasilita->gambar) ? $fasilita->gambar : ''}}" >
    {!! $errors->first('gambar', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
