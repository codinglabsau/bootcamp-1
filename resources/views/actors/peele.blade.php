@extends('layout')

@section('title', 'Lupita Nyongos')

@section('content')
    <div class="content">
        <div class="actor-content">
            <ul class="flex py-4 text-blue-500">
                <a class="pl-0 px-2 border-r-2">Actor</a>
                <a class="px-2 border-r-2">Writer</a>
                <a class="px-2">Producer</a>
            </ul>
            <div class="flex mb-8">
                <img src="public/assets/image/jordanHaworth.jpg" class="rounded">
                <div class="font-semibold mx-4">
                    <h1>Jordan Peele</h1>
                    <h3>Biography</h3>
                </div>
            </div>

            <div class="overview">
                <a>Overview</a>
                <table>
                    <tr class="flex lg:flex">
                        <th>Born:</th>
                        <td><span>February 21, 1979</span> in <span>New York City, New York, USA</span></td>
                    </tr>
                    <tr class="flex lg:flex">
                        <th>Height:</th>
                        <td>5' 7½" (1.71 m)</td>
                    </tr>
                </table>
            </div>

            <div class="bio">
                <a>Bio</a>
                <p>
                    Jordan Haworth Peele attended Sarah Lawrence College as a member of the class of 2001. His mother is white
                    and his father is black. Jordan is married to comedian <span>Chelsea Peretti</span>, with whom he has a son.

                    He is known for co-writing and starring in the comedy
                    <spann>Keanu</spann>
                    (2016), opposite his close friend <span>Keegan-MichaelKey</span>, for writing and directing the horror film
                    <span>Get Out</span> (2017), which was nominated for Best Picture, lead Actor, Screenplay (winning the
                    prize), and Director at the Academy Awards, and for writing-directing-plus duties on <span>Us</span> (2019),
                    a horror film that had one of the highest live action non-franchise
                    openings of all
                </p>
            </div>
        </div>
    </div>

@endsection