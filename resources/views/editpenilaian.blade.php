<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <script src="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"></script>
    </head>
    <body class="mx-auto my-4 w-75">
        <h1 class="text-center">Edit Penilaian</h1>
        <a class="btn btn-secondary my-2" href="{{ route('penilaian.index') }}" role="button">Kembali</a>
        <div class="card mt-1 mb-4">
        <form action="{{ route('penilaian.update', ['penilaian' => $penilaian->id]) }}" class="card-body" method=POST>
            @csrf
            @method('PUT')
            <div class="row my-2">
                <div class="col">
                    <label for="formInputKaryawan" class="form-label">Nama Karyawan</label><br>
                    <select name="karyawan" id="karyawan">
                        @foreach ($karyawan as $p)
                        <option value="{{ $p->id }}" @if ($p->id == $penilaian->karyawan_id) selected @endif >{{ $p->nama_karyawan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row my-2">
                <div class="col">
                    <label for="formInputKompetensi" class="form-label">Jenis Kompetensi</label><br>
                    <select name="kompetensi" id="kompetensi">
                        @foreach ($kompetensi as $k)
                        <option value="{{ $k->id }}" @if ($k->id == $penilaian->kompetensi_id) selected @endif >{{ $k->kompetensi }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row my-2">
                <div class="col">
                    <label for="formInputNilai" class="form-label">Nilai</label>
                    <input name="nilai" type="text" class="form-control" id="formInputNilai" placeholder="Masukkan Nilai" value="{{ $penilaian->nilai }}" required>
                </div>
            </div>
            
            <div class="mt-4 mb-2">
                <button type="submit" class="btn btn-primary w-25">Edit</button>
            </div>
        </form>
        </div>
    </body>
</html>