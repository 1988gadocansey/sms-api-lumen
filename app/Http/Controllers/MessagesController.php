<?php
/**
 * Created by PhpStorm.
 * User: BENJIRO
 * Date: 9/20/2018
 * Time: 10:38 AM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use app\Messages;


class MessagesController extends Controller
{
    public function index()
    {
        $data = Messages::all();
        return Response()->json($data);
    }

    public function create(){}

    public function store(Request $request){}


    public function show($id){}

    public function edit($id){}

    public function update(Request $request, $id){}

    public function destroy($id){}

}