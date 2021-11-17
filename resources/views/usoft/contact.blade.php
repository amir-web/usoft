@extends('layouts.usoft')
@section('content')
    <section class="section intro--section ">
        <div class="container">
            <div class="intro intro--mobile">
                <div class="intro__content intro__content--mobile col-md-6 ">
                    <div class="intro__title intro__title--mobile">{{__('contact.title')}}</div>
                    <div class="intro__text intro--text--mobile col-12  ">
                        {{__('contact.facebook')}} <a href="{{$contact->facebook}}">facebook </a> {{__('contact.email')}} <a
                            href="mailto:{{$contact->email}}">info@usoft.uz</a>
                        <p>
                            {{__('contact.phone')}}
                            <a href="tel:{{$contact->phone}}"> {{$contact->phone}}</a>
                        </p>
                        <p>
                            {{__('contact.mode')}}
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
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d95918.7325604639!2d69.20303225431053!3d41.29884703217332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8bb57e24d1c9%3A0xf548ddd800cca44f!2zVXNvZnQgLSDQoNCw0LfRgNCw0LHQvtGC0LrQsCDRgdCw0LnRgtC-0LIg0Lgg0JzQvtCx0LjQu9GM0L3Ri9GFINC_0YDQuNC70L7QttC10L3QuNC5INCyINCi0LDRiNC60LXQvdGC0LU!5e0!3m2!1sru!2s!4v1635745725614!5m2!1sru!2s"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>


@endsection
