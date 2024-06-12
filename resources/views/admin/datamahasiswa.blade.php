<x-admin-dashboard>
    <x-slot name="title">{{ $title }}</x-slot>

    <!-- Form pencarian -->
    <form action="{{ route('datamahasiswa.index') }}" method="GET" class="mb-3">
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
        <h5 class="border-bottom pb-2 mb-3">Mahasiswa Verified</h5>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jurusan</th>
                        <th>Prodi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($userMahasiswaVerified as $user)
                        <tr>
                            <td>{{ $user->nim }}</td>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->jurusan->nama_jurusan }}</td>
                            <td>{{ $user->prodi->nama_prodi }}</td>
                            <td>
                                <span class="badge bg-success">Verified</span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Tidak ada mahasiswa yang sudah diverifikasi.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bagian Mahasiswa Pending -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h5 class="border-bottom pb-2 mb-3">Mahasiswa Pending</h5>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jurusan</th>
                        <th>Prodi</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($userMahasiswaPending as $user)
                        <tr>
                            <td>{{ $user->nim }}</td>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->jurusan->nama_jurusan }}</td>
                            <td>{{ $user->prodi->nama_prodi }}</td>
                            <td>
                                <span class="badge bg-warning text-dark">Pending</span>
                            </td>
                            <td>
                                <form action="{{ route('aktifkan.akun', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-success"
                                        onclick="return confirm('Aktifkan akun ini?')">Aktifkan</button>
                                </form>

                                <form action="{{ route('hapus.mahasiswa', $user->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus mahasiswa ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Tidak ada mahasiswa yang masih pending.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-admin-dashboard>
