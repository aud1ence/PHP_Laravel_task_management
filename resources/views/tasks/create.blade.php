<!doctype html>
<html lang="en">
<head>
    <title>Show detail</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">

</head>
<body>
<div class="container">
    <form action="{{ route('tasks.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h1 class="title is-1" style="font-weight: 150; font-size: 84px">Add new Task</h1>
        <div class="card">
            <div class="card-body">
                <div class="field">
                    <label class="label">Task title</label>
                    <div class="control">
                        <input class="input" type="text" name="title">
                    </div>
                    <label class="label">Task content</label>
                    <div class="control">
                        <textarea class="textarea" name="content_input"></textarea>
                    </div>
                    <label class="label">Due Date</label>
                    <div class="control">
                        <input class="input" type="date" name="due_date" placeholder="mm/dd/yyyy">
                    </div>
                    <label class="label">File name</label>
{{--                    <div class="d-flex justify-content-around">--}}
                    <div class="file has-name">
                        <label class="file-label">
                            <input class="file-input" type="file" name="image">
                            <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label">
        Choose a file…
      </span>
    </span>
                            <span class="file-name">
      Screen Shot 2017-07-29 at 15.54.25.png
    </span>
                        </label>
                    </div>
                    <div class="d-flex justify-content-around">
                        <div class="control">
                            <button class="button is-primary" type="submit">Submit</button>
                        </div>
                        <div class="control">
                            <button class="button is-primary" type="button">
                                <a href="{{ route('master') }}" style="color: white; text-decoration: none">Back</a> </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
{{--        </div>--}}
    </form>

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
