<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();

        return view('client.index', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'image' => 'required|mimes:png,jpg|max:1024',
        ]);

        if ($request->hasFile('image') && !empty($request->image)) {
            $image_name = "client_" . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/client/'), $image_name);
            $validation['image'] = $image_name;
        }

        Client::create($validation);
        return redirect()->route('client.index')->with('success', 'Client Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'name' => 'required',
            'image' => 'mimes:png,jpg|max:1024',
        ]);

        $client = Client::findOrFail($id);

        if ($request->hasFile('image') && !empty($request->image)) {
            if ($client->image) {
                unlink(public_path('images/client/' . $client->image));
            }
            $image_name = "client_" . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/client/'), $image_name);
            $validation['image'] = $image_name;
        }else{
            $validation['image'] = $client->image;
        }

        $client->update($validation);
        return redirect()->route('client.index')->with('success', 'Client upsate Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        if ($client->image) {
            unlink(public_path('images/client/' . $client->image));
        }
        $client->delete();
        return redirect()->route('client.index');
    }
}
