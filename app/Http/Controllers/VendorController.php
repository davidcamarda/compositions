<?php namespace App\Http\Controllers;
use App\Vendor;
use App\Http\Requests;
use Request;

class VendorController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $vendors = Vendor::all();

        return view('vendors.index')->with('vendors',$vendors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('vendors.create');
    }


    /**
     * @param Requests\Request $request
     */
    public function store(Requests\Request $request)

    {
        $this->validate($request, [

            'name' => 'required'

        ]);

        Vendor::create( $request->all() );

    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $vendor = Vendor::findOrFail($id);
        //return view('vendor.show',compact('vendor'));
        return view('vendors.show')->with('vendor',$vendor);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
