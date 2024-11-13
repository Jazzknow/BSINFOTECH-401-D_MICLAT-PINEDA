<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="nav-container">
        <div class="logo-container">
            <h3>LOGO</h3>
        </div>
        <div class="nav-links">
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Contact</a>
            <a href="">Service</a>
        </div>
        <div class="nav-login">
            <a href="">Login</a>
        </div>
    </div>
    <div class="container">
        <h1>Student List</h1>
        <div class="btn-container">
            <a href="{{ route('students.create') }}" class="btn btn-success">Add new student</a>
        </div>
        <br>
        <?php if (session('success')): ?>
        <div class="alert alert-success"><?= htmlspecialchars(session('success')) ?></div>
        <?php endif; ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($student as $students): ?>
                <tr>
                    <td>{{ $students->name }}</td>
                    <td>{{ $students->email }}</td>
                    <td>{{ $students->age }}</td>
                    <td>
                        <a href="{{ route('students.show', $students->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('students.edit', $students->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('students.destroy', $students->id) }}" method="POST"
                            style="display:inline;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="footer">
        <span>2024 @Copyright</span>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        background-color: #f1f1f1;
    }

    table {
        border: 1px solid black;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    td,
    th {
        text-align: center;
    }

    .btn-container {
        display: flex;
        justify-content: start;
    }

    .container {
        margin: 60px auto;
    }

    .nav-container {
        display: flex;
        align-items: center;
        padding: 20px 30px;
        justify-content: space-between;
        background-color: navy;
    }

    .nav-links a,
    h3 {
        text-decoration: none;
        color: #fff;
        margin-right: 50px;
        transition: 0.3s;
        font-weight: bold;
    }

    .nav-login a {
        text-decoration: none;
        color: #fff;
        transition: 0.3s;
        font-weight: bold;
    }

    .nav-links a:hover {
        color: gold;
    }

    .nav-login a:hover {
        color: gold
    }

    .footer {
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        bottom: 0;
        background-color: lightgray;
        padding: 20px;
        width: 100%;
    }
</style>