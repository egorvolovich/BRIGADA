@extends('layouts.app')

@section('content')
    <div>

        <div class="container">
            <div class="slider-container">
                <div class="slider-item">

                    <div class="header__content s slider-item-text">
                        <div class="header__title">МИНСК-АРЕНА<br>
                            Димаш  </div>
                        <div class="header__description">Первый сольный концерт музыкального феномена <br> Димаша Кудайбергена - всемирно-известного казахстанского <br> исполнителя и мульти-инструменталиста. </div>
                        <a  href="{{route('orderIndex',['id'=>13])}}" class="header__button">Купить </a>
                    </div>
                    <img class="slider-item-img" src="{{'img/slider/2.jpg'}}" />
                </div>
            </div>
        </div>



        <!-- Afisha 1 -->

        <section>
            <form action="/" class="event-filter-container">
                <div class="col-auto">
                    <label class="sr-only" for="selectOrderPayType">Место</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Место</div>
                        </div>
                        <select name="sort_place" class="form-control" >
                            <option value="">Выбрать</option>
                            @foreach($places as $place)
                                <option value="{{$place->id}}">{{$place->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-auto">
                    <label class="sr-only" for="inputPriceOrder">Дата</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Дата</div>
                        </div>
                        <input name="sort_date" type="date"  class="form-control" >
                    </div>
                </div>

                <input type="submit" class="btn btn-primary" value="Фильтр">

            </form>
        </section>

        <div class="section">
            <div class="container">
                <h2 class="title">Ближайшие мероприятия</h2>
                <div class="subtitle">Events</div>


                <div class="container">
                    <div class="row">
                        @isset($events)
                            @foreach($events as $event)
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card__image">
                                            <img src="img/events/{{$event->img}}" alt="product">

                                            <div class="card__hover">
                                                <a href="{{route('orderIndex',['id'=>$event->id])}}" class="card__button">Купить</a>
                                            </div>
                                        </div>
                                        <a href="#" class="card__title">
                                            {{$event->concert->title}}
                                        </a>
                                        <div class="card__date">
                                            {{$event->concert_date}}
                                        </div>
                                        <div>
                                          <p>
                                              <span style="color: #74c95c">
                                                  {{$event->count_sell}}
                                              </span>
                                              /
                                              <span style="color:red">
                                                  {{$event->limit}}
                                              </span>
                                          </p>
                                        </div>
                                        <div class="card__price">
                                            от {{$event->price}} руб.
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endisset
                    </div>
                </div>




            </div>
        </div>




        <div class="adv-wrapper">
            <div class="container adv-content-center">
                <!--    <a href="#" class="adv__button">Подробнее</a> -->
            </div>
        </div>

        <div class="container">
            <div class="row">
                @isset($eventsPopular)
                    @foreach($eventsPopular as $event)
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card__image">
                                    <img src="img/events/{{$event->img}}" alt="product">

                                    <div class="card__hover">
                                        <a href="{{route('orderIndex',['id'=>$event->id])}}" class="card__button">Забронировать</a>
                                    </div>
                                </div>
                                <a href="#" class="card__title">
                                    {{$event->concert->title}}
                                </a>
                                <div class="card__date">
                                    {{$event->concert_date}}
                                </div>
                                <div>
                                    <p>
                                              <span style="color: #74c95c">
                                                  {{$event->count_sell}}
                                              </span>
                                        /
                                        <span style="color:red">
                                                  {{$event->limit}}
                                              </span>
                                    </p>
                                </div>
                                <div class="card__price">
                                    от {{$event->price}} руб.
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>

    </div>
@endsection
