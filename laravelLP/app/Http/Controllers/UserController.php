<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Subscriber;
use App\Customer_request;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $full_name = $request->full_name;
        $futsal_name = $request->futsal_name;
        $phone = $request->phone;
        $address = $request->address;
        $email = $request->email;

         $validator = Validator::make($request->all(), 
            [
                'full_name' => 'required|min:10|max:50',
                'futsal_name' => 'required|min:5',
                'phone' => 'required|regex:/(08)[0-9]{9}/',
                'email' => 'required|email',
                'address' => 'required|max:255|min:10',
            ]);
         if($validator->passes()){
            $customer_request = new Customer_request;
            $customer_request->name = $futsal_name;
            $customer_request->email = $email;
            $customer_request->futsal_name = $futsal_name;
            $customer_request->phone = $phone;
            $customer_request->address = $address;
            $customer_request->save();
            return response()->json(['success' => '1']);
        }
        return response()->json(['errors' => $validator->errors()]);

    }
    public function store_email(Request $request)
    {
        $email = $request->email;
        $subsriber = new Subscriber;
        $subsriber->email = $email;
        $subsriber->save();
        return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
