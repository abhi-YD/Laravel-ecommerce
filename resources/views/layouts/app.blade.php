<!DOCTYPE html>
<html>
<head>
    <title>My E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark text-white p-3">
        <a href="/" class="navbar-brand">Home</a>
        <a href="/cart" class="btn btn-light">Cart</a>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
