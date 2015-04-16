<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about () {
        return 'Dood, I\'ll kick your fucking ass';
    }

    public function generic () {

        // ARRAY METHOD

        $name = [];
        $name['first']      = 'David';
        $name['last']       = 'Camarda';

        return view ('pages.generic',$name);

    }



    public function tool () {

        // WITH METHOD

        $tool = 'Here are a bunch of tools';

        return view ('pages.tool')->with('tool',$tool);

    }



    public function contact () {

        // PHP COMPACT METHOD

        $address = '16205 SW Audubon Unit 203<br />Beaverton, OR';
        $phone = '503.730.7200';

        return view ('pages.contact', compact('address','phone'));
    }

    public function shred () {

        // ARRAY METHOD

        $name = [
            'first'     => 'David',
            'last'      => 'Camarda',
        ];


        return view ('pages.shred',$name);

    }



}
