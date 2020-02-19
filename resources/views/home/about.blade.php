<html>

<head></head>

<body>
    <!-- extending to home/master -->
    @extends('./home/master')

    <!-- <h1>Informatics Institute of Technology</h1>
        <h5>7, Ramakrishna Road, Colombo 06, Sri Lanka</h5> -->

    @section('content')

    <!-- rendering values passed down by the routing -->
    <p>{{$title}}</p>
    <p>about details...</p>
    @endSection
    <!-- <p><b>email : iit@iit.ac.lk</b></p> -->
</body>

</html>