<html>

<head>
    <title>
        About page
    </title>
    <link href="{{ asset('css/test.css')}}" rel="stylesheet" />
</head>
<body>

<div class="header">

        <h1>QUIZ</h1>


</div>
    <img src="{{ asset('images/car.jpg')}}">

<nav>
    <a  href="">Home</a>
    <a  href="">About</a>
    <a  href="">Contact</a>
</nav>
<main>

    <fieldset>
        <legend>Mine</legend>
    <form action="/add" method="post">
        {!! csrf_field() !!}
        <label for="id">ID:</label>
        <input type="text" class="form-control" name="id"><br>
        <label for="name">NAME:</label>
        <input type="text" class="form-control" name="name"><br>
       <label for="desc">DESCRIPTION:</label>
        <input type="text" class="form-control" name="description"><br>
        <label for="price">PRICE:</label>
        <input type="text" class="form-control" name="price"><br>
        <button type="add">add</button>
    </form>

    </fieldset>
    <div>

        @yield('content')
    </div>

</main>

    <footer>
        This is the footer
    </footer>
</body>
</html>