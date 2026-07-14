<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LEGER NILAI</title>

    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 11px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #000;
            padding: 4px;
            text-align: center;
        }
        .header {
            text-align: center;
            margin-bottom: 15px;
        }
        .school-info {
            text-align: center;
            margin-bottom: 10px;
        }
        .mapel-header {
            background: #eee;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="header">
        <img src="{{ public_path('logo_temp.png') }}" height="70"><br>
        <strong>LEGER NILAI PESERTA DIDIK</strong><br>
        <strong>SMK Negeri 71 Jakarta</strong><br>
    </div>

    <div class="school-info">
        <div>Jl. Dr. KRT Radjiman Widyodiningrat Jl. Kp. Pulo Jahe, Jatinegara, Cakung, Jakarta Timur</div>
        <div>Kontak: 0856-8555-672 — https://smkn71jakarta.sch.id</div>
        <div><strong>Rombel: {{ $rombel->nama }}</strong></div>
    </div>

    <table>
        <thead>
            <tr class="mapel-header">
                <th rowspan="2">No</th>
                <th rowspan="2">Nama Siswa</th>

                @foreach($mapel as $m)
                    <th colspan="1">{{ $m->nama }}</th>
                @endforeach

                <th rowspan="2">Rata-rata</th>
            </tr>
            <tr class="mapel-header">
                @foreach($mapel as $m)
                    <th>Nilai</th>
                @endforeach
            </tr>
        </thead>

        <tbody>
            @foreach ($rombel->siswa as $index => $s)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td style="text-align: left;">{{ $s->nama }}</td>

                    @php
                        $total = 0;
                        $count = 0;
                    @endphp

                    @foreach($mapel as $m)
                        @php
                            $nilai = $rekap[$s->id][$m->id] ?? '-';
                        @endphp

                        <td>{{ $nilai }}</td>

                        @if (is_numeric($nilai))
                            @php
                                $total += $nilai;
                                $count++;
                            @endphp
                        @endif
                    @endforeach

                    <td>
                        @if($count > 0)
                            {{ number_format($total / $count, 2) }}
                        @else
                            -
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
