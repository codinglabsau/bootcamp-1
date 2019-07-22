@extends('layout')

@section('title', '{{ $actor->name }}')

@section('content')
    <div class="content">
        <div class="actor-content">
            <ul class="flex py-4 text-blue-500">
                <a class="pl-0 px-2 border-r-2">Actor</a>
            </ul>
            <div class="flex mb-8">
                <img src="{{ $actor->image }}" class="rounded">
                <div class="font-semibold mx-4">
                    <h1>{{ $actor->name }}</h1>
                    <h3>Biography</h3>
                </div>
            </div>

            <div class="overview">
                <a>Overview</a>
                <table class="details lg:max-w-6xl">
                    <tr class="flex lg:flex">
                        <th>Born:</th>
                        <td class="flex-1"><span>{{ $actor->born }}</span>
                        </td>
                    </tr>
                    <tr class="flex lg:flex">
                        <th>Birth Name:</th>
                        <td class="flex-1">{{ $actor->fullname }}</td>
                    </tr>
                    <tr class="flex lg:flex">
                        <th>Height:</th>
                        <td class="flex-1">{{ $actor->height }}</td>
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
                <a>Bio</a>
                <p>{{ $actor->bio }}</p>
            </div>
        </div>
    </div>
@endsection