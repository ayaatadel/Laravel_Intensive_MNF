<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Tracks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
{{-- @dd($track->students) --}}
<h1 class="text-info w-50 mt-5 m-auto"> {{$track->name}} Data</h1>
<table class="table w-75 m-auto table-bordered mt-5">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">about</th>
            <th scope="col">logo</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
            <tr>

                <td>{{ $track->id }}</td>
                <td>{{ $track->name }}</td>
                <td>{{ $track->about }}</td>
                <td><img src="{{$track->logo}}" alt="{{ $track->name }}"  class="w-50 h-50 rounded-circle"></td>
                <td>
                   <a href="{{url()->previous()}}"> <button class="btn btn-success">Back</button></a>

                </td>
            </tr>





    </tbody>
</table>

  {{-- Track Students --}}
  @if(count($track->students)>0)    {{-- Task if it has not any student table of studen't doesn't appeared--}}
<h2 class="text-info mt-5 mb-2">All {{$track->name}} Students</h2>
<table class="table w-75 m-auto table-bordered mt-5">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">age</th>
            <th scope="col">gender</th>

            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($track->students as $std)
        <tr>

            <td>{{ $std->id }}</td>
            <td>{{ $std->name }}</td>
            <td>{{ $std->age }}</td>
            <td>{{ $std->gender }}</td>
            <td>
               <a href="{{url()->previous()}}"> <button class="btn btn-success">Back to previous Page</button></a>
               <a href="{{url('/')}}"> <button class="btn btn-success">Back to Home Page</button></a>

            </td>
        </tr>
        @endforeach





    </tbody>
</table>
@endif




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>
