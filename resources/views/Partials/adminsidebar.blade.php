<div class="bg-white d-flex flex-column" id="sidebar-wrapper">
    <div class="sidebar-heading text-center py-4 primary-text fs-2 fw-bold text-uppercase border-bottom">
        SI SUPRAS 
    </div>
    <div class="list-group list-group-flush flex-grow-1">
        <a href="/" class="list-group-item list-group-item-action bg-transparent second-text dashboard-button fw-bold" style="text-decoration: none; color: gray;">
            <i class="fas fa-tachometer-alt me-2"></i>Dashboard
        </a>
    </div>
    <form action="/logout" method="POST">@csrf <button type="submit" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-center mt-auto" style="text-decoration: none; color: red;"
        style="color: red">Logout</button>
    </form>
</div>
