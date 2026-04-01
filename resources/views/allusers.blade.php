<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="coontainer">
        <div class="row">
            <div class="col-6">
                <h1>All Users Lists</h1>
                <table class="table table-bordered table-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>View</th>
                </tr>
                    @foreach ($data as $id => $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->age }}</td>
                            <td>{{ $user->city }}</td>
                            <td><a href="{{ route('view.user',$user->id) }}" class="btn btn-primary btn-sm">View</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>

</html>