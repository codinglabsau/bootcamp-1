@extends('layout')

@section('title', $director->name)

@section('content')
    <div class="content">
        <div class="actor-content">
            <ul class="flex py-4 text-blue-500">
                <h2 class="pl-0 px-2 border-r-2">Director</h2>
            </ul>
            <div class="flex mb-8">
                <img src="{{ $director->image }}" class="rounded">
                <div class="font-semibold mx-4">
                    <h1>{{ $director->name }}</h1>
                    <h3>Biography</h3>
                </div>
            </div>

            <div class="overview">
                <h2>Overview</h2>
                <table class="details lg:max-w-6xl">
                    <tr class="flex lg:flex">
                        <th>Born:</th>
                        <td class="flex-1"><span>{{ $director->born }}</span>
                        </td>
                    </tr>
                    <tr class="flex lg:flex">
                        <th>Birth Name:</th>
                        <td class="flex-1">{{ $director->fullname }}</td>
                    </tr>
                    <tr class="flex lg:flex">
                        <th>Height:</th>
                        <td class="flex-1">{{ $director->height }}</td>
                    </tr>
                    <tr class="flex lg:flex">
                        <th>Movies acted in:</th>
                        @foreach($movies as $movie)
                            <td class="flex-1">
                                <a href="{{ route('movies.show', $movie) }}">
                                    {{ $movie->title}}
                                </a>
                            </td>
                        @endforeach
                    </tr>
                </table>
            </div>

            <div class="bio">
                <h2>Bio</h2>
                <p>{{ $director->bio }}</p>
            </div>
        </div>
    </div>
@endsection