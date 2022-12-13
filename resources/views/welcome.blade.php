@extends('layouts.header')


<body>
    <div class="box" id="heading">
        <h1>
            {{ $name }}
        </h1>
    </div>
    <div class="box">
        @foreach ($todos as $item)
        <form action="/delete" method="POST">
            @csrf
            <div class="item">
                <input type="checkbox" name="dltid" value="{{$item -> id}}" onchange="this.form.submit()">
                <p>{{$item -> title}}</p>
            </div>
        </form>
        @endforeach


        <form action="/" method="post" class="item">
            @csrf
            <input type="text" name="item"  placeholder="New Item" autofocus>
            <button type="submit" name="list" value="">+</button>
        </form>
    </div>
    @extends('layouts.footer')
</body>

</html>
