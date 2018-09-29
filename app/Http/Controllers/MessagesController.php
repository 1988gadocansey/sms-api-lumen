<?php
/**
 * Created by PhpStorm.
 * User: BENJIRO
 * Date: 9/20/2018
 * Time: 10:38 AM
 */

namespace App\Http\Controllers;


use App\Http\Resources\MessagesCollection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use app\Messages;


class MessagesController extends Controller
{
    public function index()
    {
        //Display all messages
        $messages = Messages::paginate(15);
        return MessagesCollection::collection($messages);
    }

    public function show($id)
    {
        //get single message
        $message = Messages::findOrFail($id);

        //return single message as a resource
        return new MessagesCollection($message);

    }

    public function store(Request $request)
    {
        $message = $request->isMethod('put')? Messages::findOrFail($request->id): new Messages;

        $message->date = \DB::raw("NOW()");
        $message->message_body = $request->input('message_body');
        $message->phone_number = $request->input('phone_number');
        $message->status = $request->input('status');
        $message->type = $request->input('type');
        $message->sentby = $request->input('sentby');
        $message->semester = $request->input('semester');
        $message->year = $request->input('year');
        $message->name = $request->input('name');

        if($message->save()){
            return new MessagesCollection($message);
        }
    }


    public function destroy($id)
    {
        //get single message
        $message = Messages::findOrFail($id);

        //delete single message as a resource
        if($message->delete())
        {
            return new MessagesCollection($message);
        }
    }

}