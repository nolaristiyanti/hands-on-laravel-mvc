@extends('layouts.app')

@section('title', 'Portofolio')

@section('content')
<div class="card">
    <h1>Portofolio Saya</h1>

    <ul>
        @foreach($projects as $project)

            @if($loop->first)
                <p><strong>Project pertama:</strong></p>
                <li>
                    {{ $project['nama'] }} - {{ $project['deskripsi'] }}
                </li>
            @endif

            @if($loop->last)
                <p><strong>Project terakhir:</strong></p>
                <li>
                    {{ $project['nama'] }} - {{ $project['deskripsi'] }}
                </li>
            @endif

        @endforeach
    </ul>

    @foreach($projects as $project)
        <div class="project">
            <h2>{{ $project['nama'] }}</h2>
            <p>{{ $project['deskripsi'] }}</p>

            <p><strong>Teknologi:</strong></p>
            @foreach($project['teknologi'] as $tech)
                <span class="badge">{{$tech }}</span>
            @endforeach

            <p style="margin-top: 0.5rem;">
                <strong>Status:</strong>
                @if($project['status'] === 'Selesai')
                    <span class="badge success">{{ $project['status'] }}</span>
                @else
                    <span class="badge warning">{{ $project['status'] }}</span>
                @endif
            </p>
        </div>
    @endforeach
    <p>Total Projects: <strong>{{ count($projects) }}</strong></p>
</div>
@endsection
