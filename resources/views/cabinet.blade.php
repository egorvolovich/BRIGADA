@extends('layouts.app')

@section('content')
    <div class="container">


    <div>
        <h4>Ваши покупки:</h4>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Дата покупики</th>
                <th scope="col">Мероприятие</th>
                <th scope="col">Площадка</th>
                <th scope="col">Адрес</th>
                <th scope="col">Дата</th>
                <th scope="col">Количество</th>
                <th scope="col">Стоимость</th>
                <th scope="col">Тип платежа</th>
                <th scope="col">Отменить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <th scope="row">{{$order->id}}</th>
                    <td>{{$order->created_at}}</td>
                    <td>{{$order->concert}}</td>
                    <td>{{$order->place}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->eventDate}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->eventPrice*$order->quantity}}</td>
                    <td>{{$order->paymentType}}</td>
                    <td>
                        <a href="{{route('orderCancel',['order_id'=>$order->id])}}" class="btn-danger btn">Отменить</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


    </div>
@endsection
