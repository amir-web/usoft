@foreach($mob_items as $web)
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
        <div class="portfolio__inner">
            <div class="portfolio__img">
                <img class="pi" src="{{$web->getImage()}}" alt="">
            </div>
            <div class="portfolio__text">
                <a href="{{route('show_portfolio', $web->id)}}">
                    @if(app()->getLocale() == 'ru')
                        {{$web->title_ru}}
                    @elseif(app()->getLocale() == 'uz')
                        {{$web->title_uz}}
                    @else
                        {{$web->title_ru}}
                    @endif
                </a>
            </div>
        </div>
    </div>
@endforeach
