<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User extends Model
{
    protected $table = 'users';

    public function payments(){
        return $this->hasMany(UserPayments::class);
    }

    public static function createOrder($payTypeId,$eventId,$ticketQuantity){
        $event = Event::getFull($eventId);
        if($event){
            $pay = User::createPay($payTypeId);
            if( $pay){
                $order = new Orders();
                $order->concert_places_id =  $event->id;
                $order->payment_id = $pay->id;
                $order->quantity = $ticketQuantity;
                $order->price = $ticketQuantity * $event->price;
                $event->count_sell += $ticketQuantity;
                $event->save();
                if($order->save()){
                    return $order->id;
                }
            }
        }
    }

    public static function createPay($payTypeId){
        $payType = Payments::query()
            ->where('id',$payTypeId)
            ->first();
        if($payType){
            $pay = new UserPayments();
            $pay->payment_id = $payType->id;
            $pay->user_id = Auth::id();
            $pay->save();
            return $pay;
        }
    }

    public static function getOrders(){
        return UserPayments::query()
            ->join('payments','user_payments.payment_id','payments.id')
            ->join('orders','user_payments.id','orders.payment_id')
            ->join('events','orders.concert_places_id','events.id')
            ->join('places','events.place_id','places.id')
            ->join('concerts','events.concert_id','concerts.id')
            ->select('concerts.title as concert',
                'places.name as place',
                'events.price as eventPrice',
                'events.concert_date as eventDate',
                'orders.quantity',
                'user_payments.created_at',
                'orders.id',
                'payments.name as paymentType',
                'places.address'
                )
            ->where('user_payments.user_id',Auth::id())
            ->get();
    }
}


