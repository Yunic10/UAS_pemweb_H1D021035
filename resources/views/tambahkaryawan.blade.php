<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Manajemen Tugas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <script src="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"></script>
    </head>
    <body class="mx-auto my-4 w-75">
        <h1 class="text-center">Tambah Karyawan</h1>
        <a class="btn btn-secondary my-2" href="{{ route('penilaian.index') }}" role="button">Kembali</a>
        <div class="card mt-1 mb-4">
        <form action="{{ route('karyawan.store') }}" class="card-body" method=POST>
            @csrf
            <div class="row my-2">
                <div class="col">
                    <label for="formInputKaryawan" class="form-label">Nama</label>
                    <input name="karyawan" type="text" class="form-control" id="formInputKaryawan" placeholder="Masukkan Nama Karyawan" required>
                </div>
            </div>
            <div class="row my-2">
                <div class="col">
                    <label for="formInputAlamat" class="form-label">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="formInputAlamat" placeholder="Tulis Alamat" required>
                </div>
            </div>
            <div class="row my-2">
                <div class="col">
                    <label for="formInputDivisi" class="form-label">Divisi</label>
                    <select name="divisi" id="divisi">
                        @foreach ($karyawan as $k)
                        <option value="{{ $k->id }}">{{ $k->nama_divisi }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mt-4 mb-2">
                <button type="submit" class="btn btn-primary w-25">Tambah</button>
            </div>
        </form>
        </div>
    </body>
</html>