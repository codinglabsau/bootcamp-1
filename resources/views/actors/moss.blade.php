@extends('layout')

@section('title', 'Elizabeth Moss')

@section('content')
    <div class="content">
        <div class="actor-content">
            <ul class="flex py-4 text-blue-500">
                <a class="pl-0 px-2 border-r-2">Actress</a>
                <a class="px-2">Producer</a>
            </ul>
            <div class="flex mb-8">
                <img src="/css/images/lupita.jpg" class="rounded">
                <div class="font-semibold mx-4">
                    <h1>Lupita Nyong'o</h1>
                    <h3>Biography</h3>
                </div>
            </div>

            <div class="overview">
                <a>Overview</a>
                <table class="lg:max-w-6xl">
                    <tr class="flex lg:flex">
                        <th>Born:</th>
                        <td class="flex-1"><span>March 1, 1983</span> in <span>Mexico City, Distrito Federal, Mexico</span>
                        </td>
                    </tr>
                    <tr class="flex lg:flex">
                        <th>Birth Name:</th>
                        <td class="flex-1">Lupita Amondi Nyong'o</td>
                    </tr>
                    <tr class="flex lg:flex">
                        <th>Height:</th>
                        <td class="flex-1">5' 5" (1.65 m)</td>
                    </tr>
                    <tr class="flex lg:flex">
                        <th>Movies acted in:</th>
                        <td class="flex-1 text-blue-700"></td>
                    </tr>
                </table>
            </div>

            <div class="bio">
                <a>Bio</a>
                <p>
                    Lupita Amondi Nyong'o was born March 1, 1983 in Mexico City, Mexico, to Kenyan parents, Dorothy
                    Ogada Buyu
                    and Peter Anyang' Nyong'o. Her father, a senator, was then a visiting lecturer in political science.
                    She was
                    raised in Kenya. At age 16, her parents sent her back to Mexico for seven months to learn Spanish.
                    She read
                    film studies at Hampshire College, Massachusetts and, after working as a production assistant on
                    several
                    films, graduated from the Yale School of Drama's acting program. In 2013, she impressed cinema
                    audiences in
                    her film debut, as brutalized slave Patsey in acclaimed director <span>Steve McQueen's 12 Years a Slave</span>
                    (2013). She was also the lead in MTV's award-winning drama series, <span>Shuga</span> (2009),
                    appeared in the thriller
                    <span>Non-Stop</span> (2014) and had roles in the big-budget films <span>Star Wars: Episode VII - The Force Awakens</span>
                    (2015) and <span>The Jungle Book</span> (2016).

                    Lupita's stage credits include playing "Perdita" in "The Winter's Tale", (Yale Repertory Theater),
                    "Sonya"
                    in "Uncle Vanya", "Katherine" in "The Taming of the Shrew", as well as being in the original
                    production of
                    <span>Michael Mitnick's</span> "Elijah".

                    Lupita played the female lead, Nakia, in the 2018 superhero film <span>Black Panther</span> (2018).
                </p>
            </div>
        </div>
    </div>
@endsection