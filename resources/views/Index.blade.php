<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-dark table-hover text-white">
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Subject</th>
                    <th>Qualification</th>
                    <th>Salary</th>
                </tr>

                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->name}}</td>
                        <td>{{$d->age}}</td>
                        <td>{{$d->subject}}</td>
                        <td>{{$d->qualification}}</td>
                        <td>{{$d->salary}}</td>
                       <td>
                           <a href="{{route('edit',['id'=>$d])}}">edit</a>
                           <a href="{{route('delete',['teacher'=>$d->id])}}" class="btn btn-danger">delete</a>
                       </td>
                    </tr>

                    @endforeach



            </table>
        </div>

    </div>
</div>


</body>
</html>
