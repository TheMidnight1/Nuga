<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CMS')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar styling */
        .sidebar {
            min-width: 250px;
            max-width: 250px;
            background-color: #343a40;
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            z-index: 1030;
            display: flex;
            flex-direction: column;
            overflow-y: auto;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
            text-decoration: none;
        }

        /* Content styling */
        .content {
            flex-grow: 1;
            padding: 20px;
            margin-left: 250px;
            width: 100%;
        }

        /* Adjust layout for smaller screens */
        @media (max-width: 768px) {
            .sidebar {
                position: absolute;
                transform: translateX(-250px);
                transition: transform 0.3s ease;
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .content {
                margin-left: 0;
                padding-top: 70px;
            }

            .toggle-sidebar-btn {
                position: fixed;
                top: 15px;
                left: 15px;
                z-index: 1050;
                background-color: #343a40;
                color: #fff;
                border: none;
                padding: 10px 15px;
                border-radius: 5px;
            }

            .toggle-sidebar-btn:hover {
                background-color: #495057;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <!-- Toggle Sidebar Button for Small Screens -->
    <button class="toggle-sidebar-btn d-md-none">
        ☰ Menu
    </button>

    <!-- Sidebar -->
    <nav class="sidebar d-flex flex-column p-3">
        <h3 class="text-center">CMS Panel</h3>
        <hr>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('posts.index') }}" class="nav-link">📄 Posts</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('posts.index') }}" class="nav-link">➕ Posts</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('posts.create') }}" class="nav-link">➕ Create Post</a>
            </li>

        </ul>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('categories.index') }}" class="nav-link">🏷️  Categories</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('categories.index') }}" class="nav-link">➕ Categories</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('categories.create') }}" class="nav-link">➕ Create Category</a>
            </li>

        </ul>
        
        <hr>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger mt-auto w-100">Logout</button>
        </form>
    </nav>

    <!-- Main Content -->
    <div class="content">
        <nav class="navbar navbar-light bg-light mb-3">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Welcome, {{ Auth::user()->name ?? 'User' }}</span>
            </div>
        </nav>
        @yield('content')
    </div>

    <script>
        // Toggle Sidebar for smaller screens
        const toggleButton = document.querySelector('.toggle-sidebar-btn');
        const sidebar = document.querySelector('.sidebar');

        toggleButton.addEventListener('click', function () {
            sidebar.classList.toggle('active');
            
            // Change button text/icon based on sidebar state
            if (sidebar.classList.contains('active')) {
                toggleButton.innerHTML = '✕ Close';
            } else {
                toggleButton.innerHTML = '☰ Menu';
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
