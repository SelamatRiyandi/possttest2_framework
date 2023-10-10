@extends('layouts.base')


@section('content')
<div class="container-text">
    <h3>Klien</h3>
    <p>Kami terus berkomitmen untuk memberikan layanan terbaik kepada setiap klien kami, dan daftar klien ini adalah bukti nyata dari keberhasilan kami dalam menjalankan komitmen tersebut. Teruslah bersama kami dalam perjalanan kesehatan yang penuh kepercayaan dan keamanan.
        Kami ingin mengucapkan terima kasih yang tulus kepada semua klien kami yang telah memilih Ionix sebagai mitra dalam menjaga kesehatan mereka. Setiap nama dalam daftar ini adalah cerminan dari kepercayaan yang diberikan kepada kami untuk memberikan perlindungan kesehatan yang berkualitas tinggi, pelayanan yang berorientasi pada kebutuhan, dan komitmen kami untuk selalu berada di samping Anda dalam setiap langkah perjalanan kesehatan Anda.
    </p>
</div>
    {{-- <table class="ctable">
        <thead style="border-radius: 10px">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Kategori</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">2109116064</th>
                <td>Riyandi</td>
                <td>26/06/03</td>
                <td>Kategori I</td>
            </tr>
            <tr>
                <th scope="row">2109116084</th>
                <td>Indra</td>
                <td>07/03/03</td>
                <td>Kategori II</td>
            </tr>
            <tr>
                <th scope="row">2109116059</th>
                <td>Raya</td>
                <td>27/06/03</td>
                <td>Kategori III</td>
            </tr>
            <tr>
                <th scope="row">2109116068</th>
                <td>Wahyu</td>
                <td>25/08/03</td>
                <td>Kategori II</td>
            </tr>
            <tr>
                <th scope="row">2109116038</th>
                <td>Daiva</td>
                <td>22/07/04</td>
                <td>Kategori I</td>
            </tr>
            <tr>
                <th scope="row">2109116058</th>
                <td>Firzian</td>
                <td>13/06/03</td>
                <td>Kategori II</td>
            </tr>
            <tr>
                <th scope="row">2109116045</th>
                <td>Wibi</td>
                <td>09/09/03</td>
                <td>Kategori III</td>
            </tr>
        </tbody>

    </table> --}}
    <table class="ctable">
    <thead style="border-radius: 10px">
        <tr>
            <th></th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tanggal_Lahir</th>
            <th>Gender</th>
            <th>Opsi AKsi</th>
        </tr>
    </thead>
    @foreach ($posting as $p)
    <tbody>
        <tr>
            <td>{{ $p -> NIK}}</td>
            <td>{{ $p -> Nama}}</td>
            <td>{{ $p -> Tanggal_Lahir}}</td>
            <td>{{ $p -> Gender}}</td>
            <td>
                <a href="">Edit</a>
                <a href="">Hapus</a>
            </td>

        </tr>
    </tbody>
    {{-- </div> --}}
@endsection