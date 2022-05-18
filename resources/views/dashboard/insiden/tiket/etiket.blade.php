<div class="table-responsive">
    <table class="table table-hover" id="table-tiket">
        <thead>
            <tr>
                <th>No Insiden</th>
                <th>Nama Pelapor</th>
                <th>NIP Pelapor</th>
                <th>Asal OPD</th>
                <th>Tanggal Insiden</th>
                <th>Waktu Insiden</th>
                <th>Deskripsi Insiden</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($etikets as $etiket)
                <tr>
                    <td data-sort="{{ rjust($etiket->id, 5) }}">{{ $etiket->no_insiden }}</td>
                    <td>{{ $etiket->nama_pelapor }}</td>
                    <td>{{ $etiket->nip_pelapor }}</td>
                    <td>{{ Str::Upper($etiket->opd->nama_opd) }}</td>
                    <td data-sort="{{ parseDate($etiket->created_at, False) }}"> {{ parseDate($etiket->created_at) }}</td>
                    <td data-sort="{{ parseTime($etiket->created_at, False) }}">{{ parseTime($etiket->created_at) }}</td>
                    <td>{{ $etiket->deskripsi }}</td>
                    <td>
                        <a href="/insiden/{{ $etiket->id }}/edit" class="btn btn-primary">Open</a>
                        <a href="/insiden/{{ $etiket->id }}/" class="btn btn-info">Lihat</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>