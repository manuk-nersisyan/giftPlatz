@extends('layouts.app')
@section('content')
<div class="pagelinks" id="pagelinks">
    <div class="container">
       <div class="row">
          <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная </a><span>&gt; </span></li>
                <li class="breadcrumb-item active" aria-current="page">Контакты</li>
             </ol>
          </nav>
       </div>
    </div>
 </div>
 <div id="contacts_page">
    <div class="contacts">
       <div class="contacts_box container">
          <div class="titlebox" id="titlebox">
             <div class="titlebox__wrapper">
                <h2 class="titlebox__title">КОНТАКТЫ</h2>
                <div class="titlebox__border"></div>
             </div>
          </div>
          <ul class="contacts__list row">
             <li class="contacts__item"><span>A.: </span>{{ $contact->address }}</li>
             <li class="contacts__item"><span>Т.: </span>{{ $contact->phone_number }}</li>
             <li class="contacts__item"> <span>П.: </span>{{ $contact->email }}</li>
             <li class="contacts__item contacts__item--social">
                <span>С.: </span>
                <div class="social__box">
                   <a href="{{ $contact->instagram_link }}">
                      <!--?xml version="1.0" encoding="iso-8859-1"?-->
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 364 364" style="enable-background:new 0 0 364 364" xml:space="preserve">
                         <g>
                            <path style="fill-rule:evenodd;clip-rule:evenodd" d="M244.424,83.438H119.577c-19.925,0-36.139,16.213-36.139,36.139v124.846
                               c0,19.929,16.214,36.143,36.139,36.143h124.847c19.928,0,36.142-16.214,36.142-36.143V119.577
                               C280.566,99.652,264.352,83.438,244.424,83.438z M181.998,246.894c-35.779,0-64.892-29.113-64.892-64.896
                               c0-35.779,29.113-64.892,64.892-64.892c35.783,0,64.896,29.113,64.896,64.892C246.894,217.781,217.781,246.894,181.998,246.894z
                               M248.982,130.525c-8.471,0-15.359-6.888-15.359-15.354c0-8.467,6.888-15.355,15.359-15.355c8.466,0,15.354,6.888,15.354,15.355
                               C264.336,123.638,257.448,130.525,248.982,130.525z"></path>
                            <path style="fill-rule:evenodd;clip-rule:evenodd" d="M181.998,144.531c-20.655,0-37.475,16.812-37.475,37.467
                               c0,20.663,16.82,37.479,37.475,37.479c20.663,0,37.471-16.816,37.471-37.479C219.469,161.343,202.661,144.531,181.998,144.531z"></path>
                            <path style="fill-rule:evenodd;clip-rule:evenodd" d="M0,0v364h364V0H0z M307.984,244.423c0,35.053-28.508,63.561-63.56,63.561
                               H119.577c-35.049,0-63.561-28.508-63.561-63.561V119.577c0-35.049,28.512-63.561,63.561-63.561h124.847
                               c35.052,0,63.56,28.512,63.56,63.561V244.423z"></path>
                         </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                      </svg>
                   </a>
                   <a href="{{ $contact->facebook_link }}">
                      <!--?xml version="1.0" encoding="iso-8859-1"?-->
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455.73 455.73" style="enable-background:new 0 0 455.73 455.73" xml:space="preserve">
                         <path d="M0,0v455.73h242.704V279.691h-59.33v-71.864h59.33v-60.353c0-43.893,35.582-79.475,79.475-79.475h62.025v64.622h-44.382
                            c-13.947,0-25.254,11.307-25.254,25.254v49.953h68.521l-9.47,71.864h-59.051V455.73H455.73V0H0z"></path>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                         <g> </g>
                      </svg>
                   </a>
                </div>
             </li>
          </ul>
       </div>
    </div>
    {{-- <div class="touch">
       <div class="touch_box container">
          <div class="titlebox" id="titlebox">
             <div class="titlebox__wrapper">
                <h2 class="titlebox__title">ОСТАВЬТЕ СООБЩЕНИЕ</h2>
                <div class="titlebox__border"></div>
             </div>
          </div>
          <form class="touch__wrapper needs-validation row" id="contactform" action="{{ route('sendmail') }}" method="post" novalidate="">
            @csrf
             <div class="touch__left col-lg-6 col-xl-6">
                <div class="input__group">
                   <input name="name" class="touch__input touch__name form-control" id="touch__name" type="text" placeholder="Как Вас зовут" required>
                    @error('name')
                        <div class="invalid-feedback d-block visible">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="input__group">
                   <input name="phone_number" class="touch__input touch__phone form-control" id="touch__phone" type="tel" placeholder="Введите номер телефона" required>
                    @error('phone_number')
                        <div class="invalid-feedback d-block visible">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="input__group">
                   <input name="email" class="touch__input touch__mail form-control" id="touch__mail" type="email" placeholder="Эл. почта" required>
                    @error('description')
                        <div class="invalid-feedback d-block visible">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
             </div>
             <div class="touch__right col-lg-6 col-xl-6">
                <div class="input__group">
                   <textarea name="description" class="touch__input touch__textarea touch__text form-control" id="textarea" type="text" cols="30" rows="6" maxlength="350" placeholder="Оставьте Ваше сообщение" required=""></textarea>
                   @error('description')
                        <div class="invalid-feedback invalid-feedback--textarea d-block visible">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <button class="d-none" id="modalopenbutton" data-toggle="modal" data-target="#sendmessageModal"></button> <button id="mainformsubmit" type="submit">Отправьте сообщение</button>
             </div>
          </form>
          <div class="modal fade show" id="successModal" aria-modal="true">
             <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                   <div class="modal-header">
                      <div class="modal-title"><img src="images/logo_top.svg" alt=""></div>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">× </span></button>
                   </div>
                   <div class="modal-body">
                      <p>Спасибо за ваше сообщение.</p>
                      <p>Наши менеджеры свяжутся с вами.</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div> --}}
    <div id="map"></div>
</div>
@endsection
@push('js')
<script src="{{ asset('js/jquery.3.7.0.min.js') }}"></script>
<script>
    @if(Session::has('success'))
        $('#successModal').addClass("d-block");
        $( ".close" ).on( "click", function() {
            $('#successModal').removeClass("d-block");
        });
    @endif
    var lat = {!!  json_encode($contact->lat) !!}
    var long = {!!  json_encode($contact->long) !!}
</script>
<script src="https://api-maps.yandex.ru/2.0/?load=package.standard&amp;lang=ru-RU&amp;apikey=018dc802-b400-4a6d-acc3-d43d78956d7b" type="text/javascript"></script>
<script src="{{ asset('js/yandexMap.js') }}"></script>
@endpush
