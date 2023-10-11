 
@extends('layouts.base')

@section('content')
<div class="container">
    <form class="form" action="/tambahpost/store" method="post">
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
        
        <br>
        <br><input type="submit" value="Tambah post">
    </form>
</div>
@endsection

<!-- inheritance -->
            