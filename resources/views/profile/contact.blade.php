@extends('layouts.app')

@section('title', 'Contact Me')

@section('content')

<h2>Contact Me</h2>

<form>
    <label>Nama</label><br>
    <input type="text"><br><br>

    <label>Email</label><br>
    <input type="email"><br><br>

    <label>Pesan</label><br>
    <textarea></textarea><br><br>

    <button type="submit">Kirim</button>
</form>

@endsection
