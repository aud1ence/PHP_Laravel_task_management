<!doctype html>
<html lang="en">
<head>
    <title>Show task</title>
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
<div class="container" style="margin-top: 4%">
    <h1 class="title is-1" style="font-weight: 150; font-size: 84px">Tasks List</h1>
    <div class="subtitle">

        @if(!isset($tasks))
            <h4 class="subtitle is-4">Not data</h4>
        @else
            <h2 class="subtitle is-4"><a class="is-primary" href="{{ route('master') }}"> < Back</a></h2>

            <div class="card">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($tasks as $key => $task)
                        <tr>
                            <td scope="row">{{ ++$key }}</td>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->content }}</td>
                            <td>{{ $task->due_date }}</td>
                            <td><img src="{{asset("storage/uploads/$task->image")}}" alt="" width="80" height="80"></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5"><h4 class="subtitle is-4">Not tasks here!</h4></td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        @endif
{{--            <div class="d-flex justify-content-around" style="margin-top: 20%">--}}

{{--                <h2 class="subtitle is-4"><a href="">Tasks list</a></h2>--}}
{{--            </div>--}}
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
