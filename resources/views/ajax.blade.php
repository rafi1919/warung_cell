@foreach($ajax_barang as $d)

    <div class="form-group id">
        <span class="text">Harga</span>
        <input type="text" class="form-control" name="harga" id="harga" value="{{ $d->harga }}" readonly required>
    </div>

@endforeach