<?php


namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function getProfile()
    {
        $users = DB::table('users')->where('id', '1')->get();

        return view('profile',['users' => $users]);
    }

    public function postProfile(Request $request)
    {
        DB::table('users')->where('id', '1')
            ->update([
            'firstname' => $request->input('firstname'),
            'surname' => $request->input('surname'),
            'phoneNum' => $request->input('phone'),
            'address' => $request->input('address')
        ]);
        $users = DB::table('users')->where('id', '1')->get();
        return view('profile',['users' => $users]);
    }

    public function getCart()
    {
        $total = 0;
        $cart = Order::find('1')->products()->get();

        foreach ($cart as $item) {
            $total += (int)$item->price;
        }

        return view('cart', ['cart' => $cart, 'total' => $total]);
    }

}
