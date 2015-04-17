<?php namespace App\Http\Controllers;
use App\Song;
//use App\Lyric;
use App\Http\Requests;




/**
 * Class SongController
 * @package App\Http\Controllers
 */
class SongController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$songs = Song::all();
        // $lyrics = Lyric::all();

        return view('songs.index')->with('songs',$songs);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('songs.create');
	}

    /**
     * @param Requests\CreateSongRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
	public function store(Requests\CreateSongRequest $request)
	{
		//$input = Request::all();

        Song::create( $request->all());

        return redirect('songs');



	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$song = Song::findOrFail($id);
        //return view('song.show',compact('song'));
        return view('songs.show')->with('song',$song);

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
