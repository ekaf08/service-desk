<div class='table-responsive'>
    <table class="table table-hover" id="table-open">
        <thead>
            <tr>
                <th>No Insiden</th>
                <th>Nama Operator</th>
                <th>Nama Pelapor</th>
                <th>Tanggal Insiden</th>
                <th>Waktu Insiden</th>
                <th>Deskripsi Insiden</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($opentickets as $openticket)
                <tr>
                    <td data-sort="{{ rjust($openticket->id, 5) }}">{{ $openticket->no_insiden }}</td>
                    <td>{{ $openticket->operator->nama }}</td>
                    <td>{{ $openticket->nama_pelapor }}</td>
                    <td data-sort="{{ parseDate($openticket->created_at, False)}}"> {{ parseDate($openticket->created_at) }}</td>
                    <td data-sort="{{ parseTime($openticket->created_at, False)}}">{{ parseTime($openticket->created_at) }}</td>
                    <td>{{ $openticket->deskripsi }}</td>
                    <td>
                        <a href="/insiden/{{ $openticket->id }}/edit" class="btn btn-primary">Proses</a>
                        <a href="/insiden/{{ $openticket->id }}" class="btn btn-info">Lihat</a>
                    </td>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>