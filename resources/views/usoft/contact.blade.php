@extends('layouts.usoft')
@section('content')
    <section class="section intro--section ">
        <div class="container">
            <div class="intro intro--mobile">
                <div class="intro__content intro__content--mobile col-md-6 ">
                    <div class="intro__title intro__title--mobile">{{__('contact.title')}}</div>
                    <div class="intro__text intro--text--mobile col-12  ">
                          {{__('contact.email')}} <a
                            href="mailto:{{$contact->email}}">info@usoft.uz</a>
                        <p>
                            {{__('contact.phone')}}
                            <a href="tel:{{$contact->phone}}"> {{$contact->phone}}</a>
                        </p>
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
                    <img src="/usoft/images/cuate.svg" alt="">
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
