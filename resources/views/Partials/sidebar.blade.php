<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3" style="font-size: 24px">SI SUPRAS</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">Menu</div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
            aria-expanded="f" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-circle-exclamation"></i>
            <span>Master</span> <i class="fas fa-fw fa-caret-down"></i>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                @if(!auth()->user()->isPurchasing())
                <a class="collapse-item" href="/customer/mastercustomer">Master Customer</a>
                @endif
                @if(!auth()->user()->isSales())
                <a class="collapse-item" href="/supplier/mastersupplier">Master Supplier</a>
                @endif
                @if(!auth()->user()->isPurchasing() && !auth()->user()->isSales())
                <a class="collapse-item" href="/kategori/masterkategori">Kategori</a>
                @endif
            </div>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUtilities"
            aria-expanded="false" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-boxes-stacked"></i>
            <span>Gudang</span> <i class="fas fa-fw fa-caret-down"></i>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-bs-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/stokbarang">Stok Barang</a>
                @if(!auth()->user()->isSales())
                <a class="collapse-item" href="/barangmasuk/listbarangmasuk">Laporan Barang Masuk</a>
                @endif
                @if(!auth()->user()->isPurchasing())
                <a class="collapse-item" href="/barangkeluar/listbarangkeluar">Laporan Barang Keluar</a>
                @endif
                @if(!auth()->user()->isPurchasing() && !auth()->user()->isSales())
                <a class="collapse-item" href="/stokopname">Stok Opname</a>
                @endif
            </div>
        </div>
    </li>
    @if(auth()->user()->isAdmin())
    <li class="nav-item">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Admin</span></a>
    </li>
    @endif
</ul>
