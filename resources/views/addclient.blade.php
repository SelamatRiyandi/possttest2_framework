 
@extends('layouts.base')

@section('content')
<div class="container">
    <form class="form" action="/addclient/store" method="post">
        {{ csrf_field() }}
        NIK :
        <input type="text" name="NIK"><br>
        Nama :
        <input type="text" name="Nama"><br>
        Tanggal Lahir :
        <input type="date" name="Tanggal_Lahir"><br>
        Gender :
        <label>
            <input type="radio" name="Gender" value="L"> Laki-laki
        </label>
        <br>
        <label>
            <input type="radio" name="Gender" value="P"> Perempuan
        </label>

        Kategori :
        <label>
            <input type="radio" name="Kategori" value="1"> Laki-laki
        </label>
        <br>
        <label>
            <input type="radio" name="Kategori" value="2"> Perempuan
        </label>
        <br>
        <label>
            <input type="radio" name="Kategori" value="3"> Perempuan
        </label>
        
        <br>
        <br><input type="submit" value="Tambah post">
    </form>
</div>
@endsection

<!-- inheritance -->
            