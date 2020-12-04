@extends('layouts.app')

@section('title','Котакты')

@section('content')

    <div class="contacts p_page">
        <div class="container">
            <div class="contacts_main_block">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-lg-6">
                        <div class="contacts_main_info">
                            <div class="title_contacts">
                                <p>БУДЬ <span class="purple_text">ВМЕСТЕ</span><br> С НАМИ</p>
                            </div>
                            <div class="contacts_mail">
                                @forelse($contacts as $contact)
                                    <p class="small_title"><img src="{{asset('dist/images/mail/svg')}}" alt=""> НАША ПОЧТА</p>
                                    <a href="{{$contact->email}}" class="purple_text">{{$contact->email}}</a>

                                    @empty
                                <p class="small_title"><img src="{{asset('dist/images/mail/svg')}}" alt=""> НАША ПОЧТА</p>
                                <a href="info@studionomad.kz" class="purple_text">info@studionomad.kz</a>
                                    @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-lg-6">
                        <div class="illustration_img">
                            <img src="{{asset('dist/images/ellipse.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="our_phone">
                <p class="small_title"><img src="{{asset('dist/images/Phone.svg')}}" alt=""> НАШИ ТЕЛЕФОНЫ</p>
                <div class="row">
                    @forelse($contacts as $contact)
                        <div class="col-xl-5 col-md-5 phone_link">
                            <a href="tel: +7(727)296-07-82">{{$contact->phone}}</a>
                        </div>
                        <div class="col-xl-5 col-md-5 phone_link">
                            <a href="tel: +7(775)000-91-31">{{$contact->secondphone}}</a>
                        </div>


                    @empty
                        <div class="col-xl-5 col-md-5 phone_link">
                        <a href="tel: +7(727)296-07-82">+7(727)296-07-82</a>
                    </div>
                    <div class="col-xl-5 col-md-5 phone_link">
                        <a href="tel: +7(775)000-91-31">+7(775)000-91-31</a>
                    </div>
                    @endforelse
                    <div class="col-xl-2 col-md-2">
                        <div class="social_link">
                            <a href="#">
                                <img src="{{asset('dist/images/wp_icon.svg')}}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{asset('dist/images/tg_icon.svg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="our_office col-xl-5 p-0">
                <p class="small_title"><img src="{{asset('dist/images/loc.svg')}}" alt="">НАШ ОФИС</p>
                <p class="dark_purple_text">
                    @forelse($contacts as $contact)
                <a href="#">
                    {{$contact->address}}
                </a>
                    @empty
                    050059, Алматы, Казахстан
                </p>
                <a href="#">
                    пр. Аль-Фараби 17/1, БЦ “Нурлы-Тау блок 5Б, 24 этаж, офис 10/2
                </a>
                @endforelse
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d46524.55995539925!2d76.8520606!3d43.2139987!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836e7d16c5cbab%3A0x3d44668fad986d76!2z0JDQu9C80LDRgtGL!5e0!3m2!1sru!2skz!4v1605099458548!5m2!1sru!2skz"
                        width="100%" height="345" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>

@endsection
