<table class="table">
    <tr>
        <th>Metode</th>
        <th>Nama Event</th>
        <th>Tanggal Dimulai</th>
        <th>Tanggal Selesai</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->nama_metode}}</td>
            <td>{{ $item->nama_event }}</td>
            <td>{{date('d/m/Y', strtotime($item->tanggal_pelaksanaan))}}</td>
            <td>{{date('d/m/Y', strtotime($item->batas_pelaksanaan))}}</td>
            @if (strtotime('now') < strtotime($item->tanggal_pelaksanaan))
                <td>Event Akan Datang</td>
            @elseif (strtotime('now') >= strtotime($item->tanggal_pelaksanaan) && strtotime('now') <= strtotime($item->batas_pelaksanaan))
                <td>Sedang Berlangsung</td>
            @else
                <td>Event Selesai</td>
            @endif
            <td>
                <button class="btn btn-warning" onClick="show({{ $item->id }})">Edit</button>
                <button class="btn btn-danger" onClick="destroy({{ $item->id }})">Delete</button>
            </td>
        </tr>
    @endforeach
</table>
