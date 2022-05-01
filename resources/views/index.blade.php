@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Blog posts about all the new trending phones!
                </h1>
                <a 
                    href="/blog"
                    class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full">
                    View blogs
                </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-solid">
      <div>
          <img src="https://cdn.thewirecutter.com/wp-content/media/2021/08/budget-android-phone-2048px-3x2-1.jpg?auto=webp&quality=60&crop=1.91:1&width=1200" width="700" alt="">
      </div>

      <div class="m-auto sm:m-auto text-left w-4/5 block bg-clip-border p-6 border-4  border-solid">
          <h2 class="text-3xl font-extrabold text-purple-600">
              Struggling to pick a new phone?
          </h2>

          <p class="font-extrabold text-purple-600 text-s pb-9">
              People are sharing their thoughts on phones here, make an account and try for yourself!
          </p>

          <a 
              href="/blog"
              class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full md:shadow-lg">
              View blogs
          </a>
      </div>
  </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Different phones
        </span>

        <h2 class="text-4xl font-bold py-10">
            Have a look at some of these modern phones
        </h2>

    </div>

    <div class="sm:grid grid-cols-1 w-25 m-auto">
        <div class="flex bg-white text-gray-100 pt-10 ">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/iphone13.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Iphone 13</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/newNokia.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Nokia 10</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/SamsungNote10.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Samsung Note 10</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
        </div>
@endsection