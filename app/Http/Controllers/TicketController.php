<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Department;
use Auth;
class TicketController extends Controller
{
    public function createTicket(Request $request)
    {
        $user_id = Auth::user()->id;
        $order = Order::where('user_id', $user_id)->get();
        if($request->ajax()){
            $data = Department::findOrFail($request->department_id);
// return unserialize($data->departments);
            return json_decode($data->departments);

        }
        return view('user.createTicket', compact('order'));
    }
}
