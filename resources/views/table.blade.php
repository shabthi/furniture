@include('header')
<html>
<div class="container">

    <figure>
        <img src="asset/images/sofa1.png" alt="user" width="1000" height="400">
    </figure>
</div>

<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Type</th>
            <th scope="col">Model</th>
            <th scope="col">Price</th>
            <th scope="col">Stock</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tables as $t)
            <tr>
                <th scope="row">{{$t->id}}</th>
                <td>{{$t->type}}</td>
                <td>{{$t->model}}</td>
                <td>{{$t->price}}</td>
                <td>{{$t->stock}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Shabith
 * Date: 3/11/2019
 * Time: 3:31 PM
 */