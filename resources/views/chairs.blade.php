@include('header')
<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-2">
                    <div id="fh5co-logo"><a href="{{url('/')}}">Home</a></div>

                </div>
                <div class="col-md-6 col-xs-6 text-center menu-1">
                    <ul>

                        <li><a href="about.html">About</a></li>
                        <li><a href="">Update Stock</a></li>
                        <li><a href="contact.html">Add Stock</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
                    <ul>
                        <li class="search">
                            <div class="input-group">
                                <input type="text" placeholder="Search..">
                                <span class="input-group-btn">
						        <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
						      </span>
                            </div>
                        </li>
                        <li class="shopping-cart"><a href="#" class="cart"><span><small>0</small><i class="icon-shopping-cart"></i></span></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>
</div>

<html>
<div class="container">

    <figure>
        <img src="asset/images/sofa1.png" alt="user" width="1000" height="400">
    </figure>
</div>

<div class="container">
    <form action="{{url('/updatedPage')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="text" name="search">
        <button type="submit" name="searchbtn" class="btn-primary" formaction="{{url('/chairsSearch')}}" formenctype="multipart/form-data">Search</button>
        <button type="submit" name="view" class="btn-primary" formaction="{{url('/chairsAll')}}" formenctype="multipart/form-data">View All</button>

      @if($chairs!=null)

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Type</th>
                <th scope="col">Model</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>

@foreach($chairs as $c)
    <tr>
        <th scope="row">{{$c->id}}</th>
        <td>{{$c->type}}</td>
        <td><input type="text" name="model" value="{{$c->model}}"></td>
        <td><input type="number" step="0.01" name="price" value="{{$c->price}}"></td>
        <td><input type="number" name="stock" value="{{$c->stock}}"></td>
        <td><button class="btn btn-primary" type="submit" onclick="openForm()">BUY</button></td>
    </tr>

    @endforeach

    </tbody>
            @if(count($chairs)==1)
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="btn btn-primary" type="submit" formaction="{{url('/updatedPage')}}"name="update" >Update</button></td></tr>
                @endif

    </table>

@endif
    </form>
</div>
</html>

