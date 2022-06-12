<div class="p2">
    <div class="form-group">
        <input type="text" name="nama_event" id="nama_event" class="form-control" value="{{ $data->nama_event }}">
    </div><br>
    <div class="form-group">
        <input type="date" name="tanggal_pelaksanaan" id="tanggal_pelaksanaan" value="{{ $data->tanggal_pelaksanaan }}" class="form-control" >
    </div><br>
    <div class="form-group">
        <input type="date" name="batas_pelaksanaan" id="batas_pelaksanaan" value="{{ $data->batas_pelaksanaan }}" class="form-control" >
    </div><br>
    <div class="form-group mt-2">
        <button class="btn btn-warning" onClick="update({{ $data->id }})">Update</button>
    </div>
</div>
