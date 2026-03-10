@extends('layouts.app')

@section('title', 'Profile Saya')

@section('content')
<div class="card">
    <h1>Halo, {{ $profile['nama'] }}!</h1>
    <p><strong>Email : </strong>{{ $profile['email'] }}</p>
    <p><strong>Pekerjaan : </strong>{{ $profile['pekerjaan'] }}</p>

    {{-- <h2>Skills</h2>
    @forelse($profile['skills'] as $skill)
        <span class="badge">{{ $skill }}</span>
    @empty
        <p>Belum ada skill.</p>
    @endforelse --}}

    @unless(empty($profile['skills']))
        <h2>Skills</h2>
    @endunless

    @forelse($profile['skills'] as $skill)
        <span class="badge">{{ $skill }}</span>
    @empty
        <p>Belum ada skill.</p>
    @endforelse

    @php
        $totalSkills = count($profile['skills']);
    @endphp

    <p>Total Skills: {{ $totalSkills }}</p>


    <h2>Social Media</h2>
    <ul>
        @foreach($profile['sosmed'] as $platform => $url)
            <li><strong>{{ ucfirst($platform) }} : </strong> <a href="{{ $url }}" target="_blank">{{ $url }}</a></li>
        @endforeach
    </ul>
</div>
@endsection
