<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 4/17/15
 * Time: 1:17 PM
 */

@if ($errors->any())
    <div class="">
        <ul class="alert alert-danger">
            @foreach ($errors->all() AS $error)
                <li>{{$error}}</li>
            @endforeach

        </ul>
    </div>
@endif