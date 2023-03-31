<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Userlist;



class CourceController extends Controller
{


    public function index()
    {
        //
        return view('user.courceList');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function import()
    {
        //
        return view('user.upload');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $file = $request->file('csv_file');

        if ($file->isValid() && $file->getClientOriginalExtension() == 'csv') {
            $handle = fopen($file->getRealPath(), "r");
           
            

            if ($handle !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    // Replace this with your own code to insert the data into your database table.
                    Userlist::create([
                        'firstname' => $data[0],
                        'email' => $data[1],
                        'password' => $data[2],
                        // ...
                    ]);
                }
                fclose($handle);
            }
        }

        // You can redirect back to the previous page or show a view here.
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
