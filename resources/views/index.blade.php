<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Laravel Index</title>
</head>

<body>

    <div class="container p-5 m-5 mx-auto">
        <div class="row">
            <div class="col">
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
                <table class="table table-bordered">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Age</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($student)>0)
                        @foreach ($student as $student)
                        <tr>
                            <th scope="row">{{$student->id}}</th>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->age}}</td>
                        </tr>
                        @endforeach
                        @endif

                    </tbody>
                </table>

                <form method="POST" action="/newstudent">
                    @csrf
                    <label for="name" class="fw-bold">Name</label>
                    <div class="input-group">
                        <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name" required>
                    </div>
                    <label for="name" class="fw-bold">Email</label>
                    <div class="input-group">
                        <input name="email" type="text" class="form-control" id="name" placeholder="Enter your email" required>
                    </div>
                    <label for="name" class="fw-bold">Age</label>
                    <div class="input-group">
                        <input name="age" type="text" class="form-control" id="name" placeholder="Enter your age" required>
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </form>

                
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>