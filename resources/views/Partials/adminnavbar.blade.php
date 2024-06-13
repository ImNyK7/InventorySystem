<nav class="navbar navbar-expand-lg navbar-light bg-white py-2 px-4">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" style="width: 150px"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user me-2"></i>{{ auth()->user()->username }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/">Dashboard Page</a></li>
                    <hr class="dropdown-divider">
                    <li>
                        <form action="/logout" method="POST">@csrf <button type="submit" class="dropdown-item"
                                style="color: red">Logout</button></form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>