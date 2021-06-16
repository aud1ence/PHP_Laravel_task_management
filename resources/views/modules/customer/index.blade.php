
<!doctype html>
<html lang="en">
<head>
    <title>Index</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="card" style="margin-top: 40px">
        <label for="card-title"><h3>List Customer</h3></label>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                <tr class="col-sm">
                    <th>No.</th>
                    <th>Full name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>

                @forelse($users as $key=>$value)
                    <tr class="col-sm">
                        <td>{{$value['id']}}</td>
                        <td>{{ $value['name'] }}</td>
                        <td>{{ $value['phone'] }}</td>
                        <td>{{ $value['email'] }}</td>
                        <td><a href="{{ route('user.show', ['id' => $value['id']])}}">Detail</a>
                            | <a href="{{ route('user.create') }}">Add</a>
                            | <a href="#">Delete</a></td>
                    </tr>
                    @empty
                        <p>No data</p>
                @endforelse
            </table>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
