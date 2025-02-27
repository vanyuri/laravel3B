<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Inventory</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>course</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2202196</td>
                    <td>van</td>
                    <td>computer science</td>
                </tr>
                <tr>
                    <td>2002414</td>
                    <td>yuri</td>
                    <td>computer science</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ url('/logout') }}" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
