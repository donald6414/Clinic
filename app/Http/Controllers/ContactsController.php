<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth',['except' => ['create', 'store']]);
        $this->middleware('auth')->except('index', 'store');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        return view('requests.index')->with('contact', $contact);
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
        //Filtering datas entered by user
        $data = request() -> validate([
            'category'=> 'required',
            'name'=> 'required',
            'age'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'messege'=> 'required'
        ]);

        //Saving the data to database
        $contact = new Contact;
        $contact -> category = $request -> input ('category');
        $contact -> name = $request -> input ('name');
        $contact -> age = $request -> input ('age');
        $contact -> email = $request -> input ('email');
        $contact -> phone = $request -> input ('phone');
        $contact -> messege = $request -> input ('messege');
        $contact -> save();
        return redirect()->back()->with('success', 'Request sent Succesfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('requests.show')->with('contact', $contact);
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
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('request')->with('success', 'Request Deleted!');
    }
}
