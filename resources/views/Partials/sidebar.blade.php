<div class="bg-white d-flex flex-column" id="sidebar-wrapper">
    <div class="sidebar-heading text-center py-4 primary-text fs-2 fw-bold text-uppercase border-bottom">
        SI SUPRAS 
    </div>
    <div class="list-group list-group-flush flex-grow-1">
        <a href="/" class="list-group-item list-group-item-action bg-transparent second-text dashboard-button fw-bold" style="text-decoration: none; color: gray;">
            <i class="fas fa-tachometer-alt me-2"></i>Dashboard
        </a>
        <div class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
            <a href="#" style="text-decoration: none; color: gray;" id="masterLink">
                <i class="fas fa-user-circle me-2"></i>Master
            </a>
            <ul class="list-group list-group-flush my-1" style="margin-left: 15px; display: none;" id="masterSubMenu">
                <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold" style="padding: 9px">
                    <a href="/customer/mastercustomer" style="text-decoration: none; color: gray;">Master Customer</a>
                </li>
                <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold" style="padding: 9px">
                    <a href="/supplier/mastersupplier" style="text-decoration: none; color: gray;">Master Supplier</a>
                </li>
                <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold" style="padding: 9px">
                    <a href="/kategori/masterkategori" style="text-decoration: none; color: gray;">Master Kategori</a>
                </li>
            </ul>
        </div>
        <div class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
            <a href="#" style="text-decoration: none; color: gray;" id="gudangLink">
                <i class="fas fa-box me-2"></i>Gudang
            </a>
            <ul class="list-group list-group-flush my-1" style="margin-left: 12px; display: none;" id="gudangSubMenu">
                <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold" style="padding: 9px">
                    <a href="/stokbarang" style="text-decoration: none; color: gray;">Stok Barang</a>
                </li>
                <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold" style="padding: 9px">
                    <a href="/barangmasuk/listbarangmasuk" style="text-decoration: none; color: gray;">Laporan Barang Masuk</a>
                </li>
                <li class="list-group-item list-group-item-action bg-transparent second-text fw-bold" style="padding: 9px">
                    <a href="/barangkeluar/listbarangkeluar" style="text-decoration: none; color: gray;">Laporan Barang Keluar</a>
                </li>
            </ul>
        </div>
        <a href="/admin" class="list-group-item list-group-item-action bg-transparent second-text dashboard-button fw-bold" style="text-decoration: none; color: gray;">
            <i class="fa-solid fa-clipboard-user fa-lg me-2"></i>Admin
        </a>
    </div>
    <form action="/logout" method="POST">@csrf <button type="submit" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-center mt-auto" style="text-decoration: none; color: red;"
        style="color: red">Logout</button>
    </form>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var masterLink = document.getElementById('masterLink');
        var masterSubMenu = document.getElementById('masterSubMenu');
        var gudangLink = document.getElementById('gudangLink');
        var gudangSubMenu = document.getElementById('gudangSubMenu');

        masterLink.addEventListener('click', function(event) {
            event.preventDefault();
            if (masterSubMenu.style.display === 'none') {
                masterSubMenu.style.display = 'block';
                gudangSubMenu.style.display = 'none'; // hide gudang submenu
            } else {
                masterSubMenu.style.display = 'none';
            }
        });

        gudangLink.addEventListener('click', function(event) {
            event.preventDefault();
            if (gudangSubMenu.style.display === 'none') {
                gudangSubMenu.style.display = 'block';
                masterSubMenu.style.display = 'none'; // hide master submenu
            } else {
                gudangSubMenu.style.display = 'none';
            }
        });
    });
</script>

