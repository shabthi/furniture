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
    <form  method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="text" name="search">
        <button type="submit" name="searchbtn" class="btn-primary" formaction="{{url('/chairsSearch')}}" formenctype="multipart/form-data">Search</button>
        <button type="submit" name="view" class="btn-primary" formaction="{{url('/chairsAll')}}" formenctype="multipart/form-data">View All</button>
</form>
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
        <td><input type="number" step="0.01" id="price" name="price" value="{{$c->price}}"></td>
        <td><input type="number" id="stock" name="stock" value="{{$c->stock}}"></td>
        
    </tr>

   

    </tbody>
    
            @if(count($chairs)==1)
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="btn btn-primary" name="buy" id="openReciept">BUY</button><button class="btn btn-primary" type="submit" formaction="{{url('/updatedPage')}}"name="update" >Update</button></td></tr>
            
           @endif

    </table>


    
</div>
<div id="recieptModal" class="modal" >
<div class="modal-content">
<div class="container">
<span class="close">&times;</span>
<h3>Payment Reciept</h3>
<form action="{{url('/buyUpdate')}}" method="post">
{{ csrf_field() }}
<table class="table">
<tr>
<td><label for="model">MODEL</td><td><input type="text" name="model" value="{{$c->model}}"></td>
</tr>
<tr>
<td><label for="number">Quantity</td><td><input type="text" name="quantity" oninput="setQuantity()" id="quantity"></td>
</tr>
<tr>
<td><label for="amount">Total Amount</td><td><input type="text" name="amount" id="amount"></td>
</tr>
<tr><td></td><td><input type="submit" name="reciept" ></td></tr>
</table>
</form>
</div>
</div>
</div>

@endforeach
@endif
</html>

<script>
// Get the modal
var modal = document.getElementById("recieptModal");

// Get the button that opens the modal
var btn = document.getElementById("openReciept");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function setQuantity(){
    var x = document.getElementById("quantity").value;
    var price = document.getElementById("price").value;
    var total=x*price;
    document.getElementById("amount").value = "Rs." + total;
}
function buy(){
    var buyingQuantity = document.getElementById("quantity").value;
    var oldQuantity = document.getElementById("stock").value;
    var newQuantity = oldQuantity - buyingQuantity;
    document.getElementById("stock").value = newQuantity;
}

</script>
