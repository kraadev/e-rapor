<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rapor Siswa</title>

    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }

        .kop {
            text-align: center;
            border-bottom: 3px solid #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .kop img {
            width: 80px;
            position: absolute;
            left: 50px;
            top: 20px;
        }

        .kop h2, .kop h3 {
            margin: 2px 0;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table th, table td {
            border: 1px solid #000;
            padding: 6px;
            font-size: 12px;
        }

        .judul {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            margin-top: 15px;
            margin-bottom: 20px;
        }

        .info {
            margin-bottom: 10px;
            font-size: 13px;
        }
    </style>
</head>
<body>

    <!-- KOP SEKOLAH -->
    <div class="kop">
        <img src="{{ public_path('logo-sekolah.png') }}" alt="Logo Sekolah">
        <h2>SMK Negeri 71 Jakarta</h2>
        <h3>Jl. Dr. KRT Radjiman Widyodiningrat Jl. Kp. Pulo Jahe, Jatinegara,</h3>
        <h3>Kec. Cakung, Jakarta Timur, DKI Jakarta 13930</h3>
        <h4>Telp: 0856-8555-672 • https://smkn71jakarta.sch.id</h4>
    </div>

    <!-- JUDUL -->
    <div class="judul">RAPOR PESERTA DIDIK</div>

    <!-- INFORMASI SISWA -->
    <div class="info">
        <strong>Nama:</strong> {{ $rapor->siswa->nama }} <br>
        <strong>NISN:</strong> {{ $rapor->siswa->nisn }} <br>
        <strong>Rombel:</strong> {{ $rapor->siswa->rombel->nama }} <br>
        <strong>Semester:</strong> {{ $rapor->semester }} <br>
        <strong>Tahun Ajaran:</strong> {{ $rapor->tahun_ajaran }} <br>
    </div>

    <!-- TABEL NILAI -->
    <table>
        <thead>
            <tr>
                <th style="width: 5%">No</th>
                <th style="width: 30%">Mata Pelajaran</th>
                <th style="width: 10%">Nilai</th>
                <th style="width: 10%">Predikat</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rapor->nilai as $i => $row)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $row->mapel->nama }}</td>
                <td>{{ $row->nilai_angka }}</td>
                <td>{{ $row->predikat }}</td>
                <td>{{ $row->deskripsi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br><br>

    <!-- TTD -->
    <table style="border: none;">
        <tr style="border: none;">
            <td style="text-align: left; border: none;">
                <br>
                Wali Kelas <br><br><br><br>
                ________________________
            </td>
            <td style="text-align: right; border: none;">
                Jakarta, ____________________ <br>
                Kepala Sekolah <br><br><br><br>
                _____________________________
            </td>
        </tr>
    </table>

</body>
</html>
