<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Penilaian Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
    <script src="https://kit.fontawesome.com/abe7da9dbb.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 align="center" class="py-4 mt-4">Data Penilaian Karyawan</h1>
    <div class="card" style="width:70%;margin:0px auto;padding:20px; margin-bottom:40px;">
            <ul style="padding:0px;">
            <a href="{{ route('karyawan.create') }}"><button class="btn btn-primary">Tambah Data Karyawan</button></a>
            <a href="{{ route('divisi.create') }}"><button class="btn btn-primary">Tambah Divisi</button></a>
            <a href="{{ route('kompetensi.create') }}"><button class="btn btn-primary">Tambah Kompetensi</button></a>
            <a href="{{ route('penilaian.create') }}"><button class="btn btn-primary">Tambah Penilaian</button></a>
            </ul>
        <div class="tabel">
        <table id="data" class="table table-striped table-bordered" width="100%" align="center">
            <thead>
                <td>ID</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Kompetensi</td>
                <td>Nilai</td>
                <td>Aksi</td>
            </thead>
            <tbody>
            @php $i = 1; @endphp
            @foreach ($penilaian as $p)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $p->karyawan->nama_karyawan }}</td>
                <td>{{ $p->karyawan->alamat }}</td>
                <td>{{ $p->kompetensi->kompetensi }}</td>
                <td>{{ $p->nilai }}</td>
                <td>
                    <a href="{{ route('penilaian.edit',['penilaian'=> $p->id]) }}"><button class="btn btn-success">Edit</button></a>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus.{{ $p->id }}">Hapus</button>
                </td>
            

            <!-- Modal Hapus -->
            <div class="modal fade" id="hapus.{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Anda yakin ingin menghapus data "{{ $p->karyawan->nama_karyawan }}"   ?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('penilaian.destroy', ['penilaian'=> $p->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Ya, Hapus</button>
                    </form>
                    
                </div>
                </div>
            </div>
            </div>
            <!-- End Modal -->
            </tr>
            @endforeach
            </tbody>
            
        </table>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
    $('#data').DataTable();
    });
    </script>
</body>
</html>