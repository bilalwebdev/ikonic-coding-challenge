<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserConnection;
use App\Models\CommonConnection;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * get all user data in $users, get send data in $sent_requests , get received data in $receive_requests AND get connection data in $connections.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {


        $user_id = Auth::id();

        $users = User::where('id', '!=', $user_id)->doesntHave('requestSender')->doesntHave('requestReceiver')->paginate(10);

        $receivedRequests = UserConnection::with('sender')->where('receiver_id', $user_id)->where('status', 1)->get()->map(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->sender->name,
                'email' => $user->sender->email,
            ];
        });
        $sentRequests = UserConnection::with('receiver')->where('sender_id', $user_id)->where('status', 2)->get()->map(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->receiver->name,
                'email' => $user->receiver->email,
            ];
        });


        $myConnections = UserConnection::with(['receiver', 'sender'])->where('status', 3)->where('receiver_id', $user_id)->orWhere('sender_id', $user_id)->get()->map(function ($user) {



            $commonUser = CommonConnection::with(['user1', 'user2', 'commonUser'])->where('first_user_id', Auth::id() || 'second_user_id', Auth::id())->orWhere('second_user_id', $user->id || 'first_user_id', $user->id)->first();

            //dd($commonUser);

            if ($user->receiver->id == Auth::id()) {
                $user_id = $user->sender->id;
                $user_name = $user->sender->name;
                $email = $user->sender->email;
            }
            if ($user->sender->id == Auth::id()) {
                $user_id = $user->receiver->id;
                $user_name = $user->receiver->name;
                $email = $user->receiver->email;
            }
            $commonConnection = [
                [
                    'id' => $commonUser->id,
                    'user_id' => $commonUser->commonUser->id,
                    'name' => $commonUser->commonUser->name,
                    'email' => $commonUser->commonUser->email,
                ],
            ];
            return [
                'id' => $user->id,
                'user_id' => $user_id,
                'name' => $user_name,
                'email' => $email,
                'common_connections' => $commonConnection,

            ];
        });



        return view('home', compact('users', 'sentRequests', 'receivedRequests', 'myConnections'));
    }


    /**
     * get common friends.
     *
     */
}
