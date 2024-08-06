<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <h1 class="text-info w-50 mt-5 m-auto"> {{$student->name}} Data</h1>
<table class="table w-75 m-auto table-bordered mt-5">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">gender</th>
            <th scope="col">Picture</th>
            <th scope="col">email</th>
            <th scope="col">grade</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>

        {{-- @dd($student) --}}


            <tr>
                {{-- @dd($student) --}}
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->image }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->grade }}</td>
                <td>
                   <a href="{{route('students.index')}}">
                     <button class="btn btn-warning">Back</button>
                    </a>
                </td>
            </tr>


    </tbody>
</table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>
