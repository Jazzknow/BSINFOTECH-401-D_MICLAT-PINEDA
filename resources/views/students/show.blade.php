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
    <div class="container mt-4">
        <h1><?= htmlspecialchars($student->name)?></h1>
        <p><strong>Email : </strong><?= htmlspecialchars($student->email)?></p>
        <p><strong>Age : </strong><?= htmlspecialchars($student->age)?></p>

        <a href="{{ route('students.edit', $student->id)}}" class="btn btn-warning">Edit</a>
        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>