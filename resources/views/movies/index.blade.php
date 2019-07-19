@extends ('layout')

@section('title', 'Home')

@section('content')
<div class="content">
    <h1>Find movies online</h1>
    <!--
    <div class="flex">
        <ul class="flex">
            <li class="alphabetSorter">
                <button href="/">All</button>
            </li>
            <li class="alphabetSorter">
                <button href="/">#</button>
            </li>
            <li class="alphabetSorter">
                <button href="/">A</button>
            </li>
            <li class="alphabetSorter">B </li>
            <li class="alphabetSorter">C </li>
            <li class="alphabetSorter">D </li>
            <li class="alphabetSorter">E </li>
            <li class="alphabetSorter">F </li>
            <li class="alphabetSorter">G </li>
            <li class="alphabetSorter">H </li>
            <li class="alphabetSorter">I </li>
            <li class="alphabetSorter">J </li>
            <li class="alphabetSorter">K </li>
            <li class="alphabetSorter">L </li>
            <li class="alphabetSorter">M </li>
            <li class="alphabetSorter">N </li>
            <li class="alphabetSorter">O </li>
            <li class="alphabetSorter">P </li>
            <li class="alphabetSorter">Q </li>
            <li class="alphabetSorter">R </li>
            <li class="alphabetSorter">S </li>
            <li class="alphabetSorter">T </li>
            <li class="alphabetSorter">U </li>
            <li class="alphabetSorter">V </li>
            <li class="alphabetSorter">W </li>
            <li class="alphabetSorter">X </li>
            <li class="alphabetSorter">Y </li>
            <li class="alphabetSorter">Z </li>
        </ul>
    <div> -->

    <?php
        echo "<ul class=\"flex\">";
            echo "<li class=\"alphabetSorter\">"."All";
            echo "</li>";
            echo "<li class=\"alphabetSorter\">"."#";
            echo "</li>";
            $i = 65;
            $c = chr($i);
            while ($i < 91)
            {
                $c = chr($i);
                echo "<li class=\"alphabetSorter\">".$c;
                echo "</li>";
                $i += 1;
            }
        echo "</ul>";
    ?>
    <div class="flex mb-4">
        @foreach($movies as $movie)
        <div class="movie">
            <a href="{{ route('movies.show', $movie) }}"><img src="{{ $movie -> image }}" alt="{{ $movie -> title}}"></a>
            <a href="{{ route('movies.show', $movie) }}">{{ $movie -> title }}</a>
        </div>
        @endforeach
    </div>
</div>

@endsection
