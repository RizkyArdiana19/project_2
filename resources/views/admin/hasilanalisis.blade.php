<x-admin-dashboard>
    <x-slot name="title">{{ $title }}</x-slot>

    <!-- Form pencarian -->
    <form action="" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Cari berdasarkan NIM atau Nama...">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <!-- Pesan Sukses -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Pesan Error -->
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Bagian Mahasiswa Verified -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h5 class="border-bottom pb-2 mb-3">Hasil Diagnosa</h5>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jurusan</th>
                        <th>Prodi</th>
                        <th>Diagnosa</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($user as $usr)
                        <tr>
                            <td>{{ $usr->nim }}</td>
                            <td>{{ $usr->nama }}</td>
                            <td>{{ $usr->email }}</td>
                            <td>{{ $usr->jurusan->nama_jurusan }}</td>
                            <td>{{ $usr->prodi->nama_prodi }}</td>
                            <td>{{ $usr->diagnosa }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No user data available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-admin-dashboard>
