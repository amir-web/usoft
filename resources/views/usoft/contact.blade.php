@extends('layouts.usoft')
@section('content')
    <section class="section intro--section ">
        <div class="container">
            <div class="intro intro--mobile">
                <div class="intro__content intro__content--mobile col-md-6 ">
                    <div class="intro__title intro__title--mobile">
                        @if(app()->getLocale() == 'ru')
                            {{$contact_content->title_ru}}
                        @elseif(app()->getLocale() == 'uz')
                            {{$contact_content->title_uz}}
                        @else
                            {{$contact_content->title_ru}}
                        @endif
                    </div>
                    <div class="intro__text intro--text--mobile col-12  ">
                        @if(app()->getLocale() == 'ru')
                            {!! $contact_content->description_ru !!}
                        @elseif(app()->getLocale() == 'uz')
                            {!! $contact_content->description_uz !!}
                        @else
                            {!! $contact_content->description_ru !!}
                        @endif
                        <p>
                            @if(app()->getLocale() == 'ru')
                                {{$contact->mode_ru}}
                            @elseif(app()->getLocale() == 'uz')
                                {{$contact->mode_uz}}
                            @else
                                {{$contact->mode_ru}}
                            @endif
                        </p>

                    </div>

                </div>
                <div class="intro__img intro__img--mobile col-6">
                    <img src="{{$contact_content->getImage()}}" alt="">
                </div>

            </div><!-- intro -->
        </div><!-- container -->
    </section>

    <section class="section__mobile">
        <div class="container">
            <div class="contacts--text" >{{__('contact.map_title')}}</div>
        </div>
    </section>

    <div class="container">
        <iframe class="contacts__maps"
                src="{{$contact->location}}"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>


@endsection
