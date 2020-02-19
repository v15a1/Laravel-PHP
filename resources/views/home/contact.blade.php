<html>

<head></head>

<body>
    <!-- extending to home/master -->
    @extends('./home/master')

    @section('content')
    <!-- rendering values passed down by the routing -->
    <p>Contacts Page</p>
    <p>contact details...</p>
    @endsection

    <ul>
        <!-- rendering items into the html page by passing an array by routers -->
        @foreach($contacts as $item)
        <li>{{$item}}</li>
        @endforeach
    </ul>
</body>

</html>