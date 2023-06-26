<div class="footer">
    <div class="footer__container container">
        <div class="footer__row row">
            <div class="footer__contacts contacts col-xl-4 col-lg-4 col-md-8 col-sm-8 col-xs-6">
                <h5 class="contacts__title footer__title">КОНТАКТЫ</h5>
                <ul class="contacts__ul">
                    <li class="contacts__item">
                        <span>A.: </span>
                        {{ $contact->address }}
                    </li>
                    <li class="contacts__item">
                        <span>Т.: </span>
                         {{ $contact->phone_number }}
                    </li>
                    <li class="contacts__item">
                        <span>П.: </span>
                       {{ $contact->email}}
                    </li>
                    <li class="contacts__item">
                        <span></span>
                    </li>
                    <li class="contacts__item contacts__item--social">
                        Найдите нас:
                        <div class="social__box">
                            <a href="{{ $contact->instagram_link }}">
                                <img src=data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAmCAYAAACoPemuAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAASbSURBVFhH7ZdrUFVVFMf/F3kMyaCAXmwmoPEiJRUGVB9SBK88vBhNidoQWkQIAaKSlSkiJS+zUXnNODUlSmZdMMkePBriHQplH8rA6IMKcmVMLk68L6/OXpxjCvfAPRcm/cDvy1p77zP3/s/ae611tuzxZZ6juA8x4e19x6wwqcwKk4rBWem90guqNf54zNUVtrY2MDEx/J26u3twtaUFVVU1+Krwa/T29vIr4kwpTC6X48MDqfDwcOdnpkdnZyf2vZeMyqpqfkY/kwqzt5fj1GfHSRzj4h+N+LG8Am1tbRgY0NHcVLDI2tnZwsPdHf5+q2FqaorR0VEkJCbh2++K+KcmIipMJpPh5IljcHN7ghMxgKT3U/B9UTG/ahyODg7IzDgEZ8ViDA4OInhjCC5fvsKv3o3oQVGu8iFRjOmIYi+4cUMw4rfHoa+vD1uiotHRoYWZmRniYmP4pyYiKmxtoIrsb79fnFak/HxXIzFhN8JfexV7E97FzZsd+PiTT2nNx9sLc+c+QP54RIW5Ln2UbHlFJVkxFi5YgPXB67Dr7Z1IStyDyIhwylwBFhkBwRd+k40VCgX54zHl7QTmzbMmy95QH+wQx8VGY1NoCMzNzfnZMeK2xqDh51+47NuP4pJS2MsXYtGDi5Cbm0frN278TZZhx5UefRhVYJmo7MzDtD1MVH9/P+rrG1BVXYPr7e30zDNPPwX1qZN42MkJx47nIS394O21kZERsgyZTL8Eo4TFRkdhxfJnyVfnn4bST4WIqBhs3RaPAFUQdu1OQE9PL0U9i8vCO7fTUCQLY3+2eVMo+WcKzyIl7QC6urpozGA1qqi4FNvffIvGTk6OeD5oLflSkCyMtSYLC3MMDw8jIyuHn50I29ra2jry/f18yUpBsjB2ZhjNzX9Re5mM8w0NZJ0cHclKQbIwoXmPjP53gMVg28qQmcjISkGysCtXW8i6LFkCa+uxkiKGJ9/4W1uvkZWCZGHVNbUYGhqiTGPZKcYyNzes8vEmv6ysnKwUJAvTarX4Qp1P/sshLyF+xzYuGSxoLOC1Yjlyso9Qn9RoNCg8+w2/YjiilX8yMjJzqO14uD+J8LBXEPziC1TpdboBPOLiAmfnsTbDatmOne/Q14lUJEeModPpEPlGLApOn6Eqzmqbn6+SGr8gqrGxCaGbw9DUdInGd8IiKSAkyHhEI/YPVzStrKxga6O/l7Eo7E9JQ+6JPPgqlVA4L4YF154019tRV3eOIij2p6zxC2i1+kuO6IdiVsZh7vCuxIULvyLs9Uh+dmbYsH4d9u3dQ0Xay8f3rs4hILqVxSUlZD09PW5n10zAtj1qSwT5tT/V6RXFEBVW+kMZLv3ZTH56ajK1ounC7hAfHc0hy85mds5RfmUik15GHBwewufcZcRm/nwanztfj/LySlzTcJeRfsMyzWTOHO6by5aKbdBzgbC0tKT51LQP8GV+Afn6mPL6xsQdOXSQysBM0N3Tg+SUdO4LZOyoiDGlMAbrj6o1AQhUBXCf3EuNuPB2o6WlFRXcXVKtLkDnrVv8ijgGCbsXGFVg/w9mhUllVpg0gH8ByQaKqoJatskAAAAASUVORK5CYII= alt=Instagram>
                            </a>
                            <a href="{{ $contact->facebook_link }}">
                                <img src=data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAmCAYAAACoPemuAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAGRSURBVFhH7ddNSwJRFAbgtxRbuFayEBJtUWl+Zb8lahNFVkYUfW77E0EI0d9IgyKkTY1my1IwMHWjG0dtMUIx44EhiPDOHcPFfeDiOWc2LzOHC474g9EvDKFR+h06IhgrEYzV0AYz9bqw2+1wOhywjdloApTLH+h0OtT1z5Rg0UgY+3u7mA/4aaJbj29DkrLU9Y/7U8ZiUSQvzn8NxYM72OnxIaxWK3Xm4Qrmcrkw7fNRp6tUqnh9K2jn08B+qbh2LBIO4eoySV3Pcz6P1bU4dcZxvbFRi4UqXblcoYqPxTk+cUZ139TPFwoGMDc7g8XYAk17mk0ZrXYLHs+UduRW+/+ui5OjA6wsL1H3t43NBB6fJOr6N/Cbv16vU8Vm8MEaDarYDDSYoijazhlhaMfU5Xe7J+HzerGT2KJpTyp9g+tUWquVbheZzINWszL0xgrFIm7v7pHLv9BEVyq9a8/UYzSUauA7ZpQIxkoEYyWCsRLBWHEFk2UZUjb341RrNXrKx9T/lWYSO8ZKBGMlgrEBvgGr3HvGgtYEwwAAAABJRU5ErkJggg== alt=Facebook>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="footer__map map col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-6">
                <h5 class="map__title footer__title">КАРТА САЙТА</h5>
                <ul class="map__ul">
                    <li class="map__item">
                        <a href="">Главная</a>
                    </li>
                       @foreach ($categories as $category)
                       <li class="map__item">
                            <a href="">{{ $category->name }}</a>
                        </li>
                       @endforeach
                    <li class="map__item">
                        <a href="">Контакты</a>
                    </li>
                </ul>
            </div>
            {{-- <div class="footer__subscribe subscribe col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <h5 class="subscribe__title footer__title">ПОДПИШИТЕСЬ НА НАШУ РАССЫЛКУ</h5>
                <form class="subscribe__box needs-validation" id="subscribeform" action="" method="" novalidate="">
                    <input class="subscribe__input" id="subscribeinput" type="email" placeholder="Напишите Вашу электронную почту">
                    <div class="invalid-feedback d-block invisible" id="invalid-feedback">Неправильный формат почты</div>
                    <button class="subscribe__button subscribe__validcheck" id="subscribe__validcheck" type="submit">ПОДПИСАТЬСЯ</button>
                    <button class=d-none id="subscribe__openmodal" data-toggle="modal" data-target="#subscribeModal"></button>
                </form>
                <div class="modal fade" id="subscribeModal">
                    <div class="modal-dialog modal-dialog-centered container" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="modal-title">
                                    <img src="{{ Storage::disk('header')->url($header->logo) }}" alt="logo"/>
                                </div>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class"=modal-body">
                                <p>Спасибо за подписку!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="subscribe__logo">
                    <img src="{{ Storage::disk('footer')->url($footer->logo) }}" alt="logo"/>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="footer__giftplatz">{{ $footer->text }}</div>
</div>
<script type="text/javascript" src="{{ asset('js/giftplatz.js') }}"></script>
