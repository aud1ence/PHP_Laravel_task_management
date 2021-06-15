<!doctype html>
<html lang="en">
<head>
    <title>Edit User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container a {
            color: #a0aec0;
            text-decoration: none;
        }
        .container {
            margin-top: 30px;
        }
        .card {
            width: 400px;
            border-radius: 50px;
            margin-left: 30%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit user</h5>
            <form method="post">
                <div class="form-group">
                    <label for="formGroupExampleInput">Full Name</label>
                    <input type="text" value="{{ $users[$id]['name'] }}" class="form-control" id="formGroupExampleInput" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Phone Number</label>
                    <input type="text" value="{{ $users[$id]['phone'] }}" class="form-control" id="formGroupExampleInput2" placeholder="Phone number">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Email Address</label>
                    <input type="text" value="{{ $users[$id]['email'] }}" class="form-control" id="formGroupExampleInput2" placeholder="Email address">
                </div>
                <button type="button" class="btn btn-outline-primary"><a href="/customer/index">Back List</a></button>
                <button type="submit" style="color: #a0aec0; float: right" class="btn btn-outline-primary">Submit</button>
            </form>
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
