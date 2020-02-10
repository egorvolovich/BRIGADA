@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-md-6 event">
                <div class="card">
                    <div class="card__image">
                        <img src="img/events/{{$event->img}}" alt="product">
                    </div>
                    <a href="#" class="card__title">
                        {{$event->concert->title}}
                    </a>
                    <div class="card__date">
                        {{$event->concert_date}}
                    </div>
                    <div class="card__price">
                        Стоимость : {{$event->price}} руб.
                    </div>
                </div>
            </div>

            <div class="col-md-4 order">
                <form id="orderForm" action="{{route('orderCreate')}}" method="GET">
                    <div class="col-auto">
                        <label class="sr-only" for="inputNameEvent">Мироприятие</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Мироприятие</div>
                            </div>
                            <input type="text" readonly class="form-control" id="inputNameEvent"
                                   value=" {{$event->concert->title}}">
                        </div>
                    </div>

                    <div class="col-auto">
                        <label class="sr-only" for="inputPlaceEvent">Площадка</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Площадка</div>
                            </div>
                            <input type="text" readonly class="form-control" id="inputPlaceEvent"
                                   value="{{$event->place->name}}">
                        </div>
                    </div>

                    <div class="col-auto">
                        <label class="sr-only" for="inputAddressEvent">Адрес</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Адрес</div>
                            </div>
                            <input type="text" readonly class="form-control" id="inputAddressEvent"
                                   value="{{$event->place->address}}">
                        </div>
                    </div>

                    <div class="col-auto">
                        <label class="sr-only" for="inputDateEvent">Дата</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Дата</div>
                            </div>
                            <input type="text" readonly class="form-control" id="inputDateEvent"
                                   value="{{$event->concert_date}}">
                        </div>
                    </div>

                    <div class="col-auto">
                        <label class="sr-only" for="inputPriceEvent">Цена за билет</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Цена за билет</div>
                            </div>
                            <input type="text" readonly class="form-control" id="inputPriceEvent"
                                   value="{{$event->price}}">
                        </div>
                    </div>

                    <div class="col-auto">
                        <label class="sr-only" for="inputAvailableOrder">Доступно билетов</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Доступно билетов</div>
                            </div>
                            <input min="1" type="number" readonly class="form-control" id="inputAvailableOrder" value="{{$event->limit - $event->count_sell}}">
                        </div>
                    </div>

                    <div class="col-auto">
                        <label class="sr-only" for="inputQuantityOrder">Количесвто</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Количесвто</div>
                            </div>
                            <input name="quantity" max="{{$event->limit - $event->count_sell}}" min="1" type="number" class="form-control" id="inputQuantityOrder" value="1">
                        </div>
                    </div>
                    <div class="col-auto">
                        <label class="sr-only" for="inputPriceOrder">Стоимость</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Стоимость</div>
                            </div>
                            <input type="text" readonly class="form-control" id="inputPriceOrder"
                                   value="{{$event->price}}">
                        </div>
                    </div>

                    <div class="col-auto">
                        <label class="sr-only" for="selectOrderPayType">Тип оплаты</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Тип оплаты</div>
                            </div>
                            <select name="payType" class="form-control" id="selectOrderPayType">
                                @foreach($payTypes as $payType)
                                    <option value="{{$payType->id}}">{{$payType->name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <input type="number" name="event_id" hidden value="{{$event->id}}">
                    <input type="submit" class="btn btn-success order-submit" value="Забронировать"/>
                </form>
            </div>

        </div>
    </div>
@endsection

