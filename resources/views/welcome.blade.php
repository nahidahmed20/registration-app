<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>

    <div class="container">
        <div class="row mt-4">
            <div class="card col-md-8 mx-auto">
                <div class="card-header">
                    <h1>Show Input Data</h1>
                </div>
                <div class="card-body ">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
