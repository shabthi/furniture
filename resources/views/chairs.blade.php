@include('header')
<html>
<div>

    <figure>
        <img src="asset/images/sofa1.png" alt="user" width="1000" height="400">
    </figure>
</div>

<div>
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
        <td>{{$c->model}}</td>
        <td>{{$c->price}}</td>
        <td>{{$c->stock}}</td>
        <td><button class="btn btn-primary" type="submit" onclick="openForm()">BUY</button></td>
    </tr>
    @endforeach
    </tbody>
    </table>

    </div>

<div class="form-popup" id="myForm">
    <form action="/action_page.php" class="form-container">
        <h1>Login</h1>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit" class="btn">Login</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
</div>
</html>
<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>
