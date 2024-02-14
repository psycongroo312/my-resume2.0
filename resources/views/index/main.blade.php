@extends('layouts.index')
@section('content')

<section class="bg-blue">
    <div class="wrapper">
        <div class="content">
        <div class="text">
            <h1 class="text__title">Меня зовут Дени</h1>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus numquam qui vel.
        </div>
        <div><img class="content__img" src="{{ Vite::asset('resources/images/screen1.png')}}"></div> 
    </div>
    </div>              
   </section> 

   <section>
    <div class="wrapper">
        <h1 id="portfolio" class="wrapper__title">Портфолио</h1>
        
        @foreach ($projects as $project)
        <div class="portfolio__arrows">
            <img class="portfolio__arrow-one" src="{{ Vite::asset('resources/images/arrow 2.svg')}}" alt="">
            <img class="portfolio__arrow-two" src="{{ Vite::asset('resources/images/arrow 3.svg')}}" alt="">
        </div>

        <div class="portfolio">
            <h3 class="portfolio__subtitle">{{$project->name}}</h3>
           
        </div>
        {{-- AI DIGITAL CORPORATE PRESENTATION TEMPLATE --}}
        <div class="portfolio-content">
            <img class="portfolio__img" src="{{$project->image_url}}">
            <div class="portfolio__list">
                @foreach($project->technologies as $technology)
                    <p class="portfolio__line">{{$technology->name}}</p>
                @endforeach

                {{-- <p class="portfolio__line">ux / ui design</p>
                <p class="portfolio__line">development</p>
                <p class="portfolio__line">adaptives for tablet and phone</p>
                <p class="portfolio__line">animation support</p> --}}

            <button class="portfolio__button">Посмотреть</button>
            </div>
        </div>
        @endforeach
        
    
    </div>
   </section>
   <section class="bg-blue">
    <div class="wrapper">
        
            <div class="about">
            <div class="info">
                <h1 id="about" class="info__title">Обо мне</h1>
                <p class="info__subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <img class="about__image" src="{{ Vite::asset('resources/images/screen2.png')}}">
        </div>
        
    </div>
</section> 
@endsection