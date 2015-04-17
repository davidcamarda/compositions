<?php namespace App\Http\Controllers;
use App\Composer;
use App\Http\Requests;
// use App\Http\Controllers\Controller;
use Request;

class ComposerController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $composers = Composer::all();

        return view('composers.index')->with('composers',$composers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response$
     */
    public function create()
    {
        return view('composers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Request::all();

        Composer::create( $input );



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $composer = Composer::findOrFail($id);
        //return view('composer.show',compact('composer'));
        return view('composers.show')->with('composer',$composer);

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
