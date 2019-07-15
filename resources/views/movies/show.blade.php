
@extends ('layout')

@section('title', 'Movie Detail')

@section('content')
<div class="content">
    <a class="m-4" href="/">
      <span class="mr-2">&lang;</span>
      <span class="text-blue-600 hover:text-indigo-900">Back to Index</span>
    </a>
    <div class="flex m-4 container">
          <div class="flex-1 image">
            <img class="w-full" src="{{$movie->image}}" alt="">
          </div>
          <div class="flex-1 m-4 description">
              <h1 class="text-4xl text-gray-700 title">{{$movie->title}}</h1>
                <div class="py-1 pad-vertical">
                        <div class="py-3">
                          <p class=" text-gray-800 ">{{$movie->description}}</p>
                        </div>
                </div>
                <div class="py-1 pad-vertical w-full">
                    <span class="info">
                        <ul class="flex content-around mr-2">
                          <li class="mr-2  text-center flex items-start"><span class="border-solid border-2 p-px border-black font-semibold text-black">PG</span><span class="text-black">|</span><span class="mx-2 mt-1 text-black">2019</span><span class="text-black">|</span><span class="mx-2 mt-1 text-black">2h 8min</span></li><span class="text-black">|</span>
                            <li class="mr-2 flex  text-center items-start"><img class="w-full h-auto" src="https://cfm.yidio.com/images/imdb-logo.png" alt="IMB"><span class="mx-2 mt-1 text-black">6.4/10</span></li><span class="text-black">|</span>
                          <li class="mr-2 flex text-center items-start"><img class="w-full h-auto" src="https://cfm.yidio.com/images/metacritic-rating.png" alt="M"><span class="mx-2 mt-1 text-black">0/100</span></li>
                        </ul>
                      </span>
                  </div>
                  <div class="table-auto w-full">
                          <div class="table-row">
                            <div class="table-row font-bold">Cast</div>
                              <a class="table-cell px-3" href="#">
                                <span class="text-blue-600 hover:text-indigo-900">Naomi Scott</span>
                              </a>
                              <a  class ="table-cell px-3" href="#">
                                <span class="text-blue-600 hover:text-indigo-900">Will Smith</span>
                              </a>
                            <a class ="table-cell px-3"  href="#">
                                <span class=" text-blue-600 hover:text-indigo-900">Mena Massoud</span>
                              </a>
                              <a  class ="table-cell px-3" href="#">
                                <span class=" text-blue-600 hover:text-indigo-900">Billy Magnussen</span>
                              </a>
                          </div>
                              <div class="table-row">
                                <div class="table-row font-bold">Director</div>
              <!--       bio page for director?             -->
                                <span class="table-cell px-3">Guy Ritchie</span>
                              </div>
                            <div class="table-row">
                                <div class="table-row font-bold">Language</div>
                                <span class="table-cell px-3">English</span>
                            </div>
                    </div>
                  </div>
                </div>
            </div>
      </div>
</div>
@endsection
