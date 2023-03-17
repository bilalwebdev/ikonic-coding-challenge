<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserConnection;

class UserController extends Controller
{
    // request sent

    public function requestSent(Request $request)
    {
        $user_id = Auth::id();
        UserConnection::create([
            'receiver_id' => $request->id,
            'sender_id' => $user_id,
            'status' => 2,
        ]);
        return back()->with('success', 'Request sent successfully!');
    }

    // request withdraw


    public function withdrawRequest(Request $request)
    {
        $user_id = Auth::id();
        UserConnection::where('sender_id', $user_id)->where('id', $request->id)->where('status', 2)->delete();
        return back()->with('success', 'Request deleted successfully!');
    }

    // request accepted

    public function acceptRequest(Request $request)
    {
        UserConnection::where('id', $request->id)->update([
            'status' => 3
        ]);
        return redirect('/home');
        //session()->flash('message', "Successfully accepted request");
    }

    // connection removed

    public function removeConnection(Request $request)
    {
        UserConnection::where('id', $request->id)->where('status', 3)->delete();
        return back()->with('success', 'Connection removed successfully!');
    }
}
