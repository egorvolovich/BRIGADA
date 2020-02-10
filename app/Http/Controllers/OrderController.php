<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Orders;
use App\Models\Payments;
use App\Models\User;
use Http\Client\Exception\HttpException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $id = $request->get('id');

        $event = Event::getFull($id);

        $payTypes = Payments::all();

        return view('order')->with(['event' => $event, 'payTypes' => $payTypes]);
    }

    public function create(Request $request)
    {
        $data = $request->all();

        if ( isset($data['quantity'])
            && isset($data['event_id'])
            && isset($data['payType'])
        ) {
           $orderId =  User::createOrder($data['payType'], $data['event_id'], $data['quantity']);

        }
         return view('orderSuccess')->with(['orderId'=>$orderId]);
    }

    public function cancel(Request $request)
    {
        $orderId = $request->get('order_id');

        if( $orderId){
            $order = Orders::query()
                ->where('id',$orderId)
                ->first();

            if($orderId){
                $order->delete();
                return redirect(route('cabinet'));
            }
        }
    }
}
