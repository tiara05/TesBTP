<div class="p2">
    <div class="form-group">
        <div class="position-relative">
            <select class="form-control" name="id_metode" id="id_metode" >
                @foreach($metode as $kt)
                    <option value="{{$kt->id}}">{{$kt->nama_metode}}</option>
                @endforeach
            </select>
        </div>
    </div><br>
    <div class="form-group">
        <input type="text" name="nama_event" id="nama_event" class="form-control" placeholder="Nama Event">
    </div><br>
    <div class="form-group">
        <input type="date" name="tanggal_pelaksanaan" id="tanggal_pelaksanaan" class="form-control" >
    </div><br>
    <div class="form-group">
        <input type="date" name="batas_pelaksanaan" id="batas_pelaksanaan" class="form-control" >
    </div><br>
    
    <div class="form-group mt-2">
        <button class="btn btn-success" onClick="store()">Create</button>
    </div>
</div>
