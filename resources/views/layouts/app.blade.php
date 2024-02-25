<html lang="en">
<head>
    <title>Todo App Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="#" class="navbar-brand">AHRK- Todo App</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse"
    data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="/" class="nav-link">All Tasks</a>
            </li>
            <li class="nav-item"><a href="/tasks/create" class="nav-link">New Task</a>
            </li>
        </ul>
    </div>
</div>
<div class="container">
    @yield('content')
</div>
</body>
</html>
