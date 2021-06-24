<!doctype html>
<html lang="en">
<head>
    <title>Task Manager</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <style>
        .subtitle a {
            color: #718096;
            text-decoration: none;
        }

        .title {
            text-align: center;
            display: flex;
            justify-content: center;
        }

    </style>
</head>
<body>
<div class="container" style="margin-top: 10%">
    <h1 class="title is-1" style="font-weight: 150; font-size: 84px; letter-spacing: 15px">Task Management</h1>
    <div class="subtitle">
        <div class="d-flex justify-content-around" style="margin-top: 20%">
            <h2 class="subtitle is-4"><a href="{{ route('tasks.create') }}">Add new task</a></h2>

            <h2 class="subtitle is-4"><a href="{{ route('tasks.index') }}">Tasks list</a></h2>

            <h2 class="subtitle is-4"><a href="{{ route('user.logout') }}">Logout</a></h2>
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
