<div class="table-responsive">
    <table class="table table-hover" id="table-eskalasi">
        <thead>
            <tr>
                <th>No Insiden</th>
                <th>OPD Pelapor</th>
                <th>Nama Teknisi PJ</th>
                <th>Waktu Insiden</th>
                <th>Deskripsi Insiden</th>
                <th>Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eskalasis as $esk)
            <tr>
                <td>{{ $esk->no_insiden }}</td>
                <td>{{ $esk->nama_pelapor }}</td>
                <td>{{ $esk->teknisi->nama_teknisi }}</td>
                <td>18-05-2022</td>
                <td>{{ $esk->deskripsi }}</td>
                <td>{{ $esk->kategoris->kategori }}</td>

                    <span class="badge bg-success">Active</span>
                </td>
                <td>-</td>
                <td>-</td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
</div>