<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="/">
                <img class="img-fluid" src="{{ asset('assets/images/logo1.png') }}">
            </a>
        </li>
        @can('isAdmin')
            <li class="list-a"><a href="/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li class="list-a"><a href="/tenants"><i class="fas fa-users"></i> HO Masterfile</a></li>
            <li class="list-a">
                <a href="#" class="pt-2 pb-2" style="color: #444444;">Payment Management</a>
                <div class="dropdown-container">
                    <a href="/dues"><i class="fas fa-calendar-alt"></i> Monthly Dues</a>
                    <a href="/car-stickers"><i class="fas fa-car"></i> Car Stickers</a>
                    <a href="/reservations"><i class="fas fa-home"></i> Club House Reservation</a>
                    <a href="/arrears"><i class="fas fa-money-bill"></i> Arrears</a>
                </div>
            </li>
            <li class="list-a"><a href="/expenses"><i class="fas fa-sticky-note"></i> Expenses</a></li>
            <li class="list-a">
                <a href="#" class="pt-2 pb-2" style="color: #444444;">File Management</a>
                <div class="list-a2">
                    <a href="/purposes"><i class="fas fa-edit"></i>Expenses Purposes</a>
                </div>
            </li>
        @endcan

        @can('isUser')
            <li class="list-a">
                <a href="#" class="pt-2 pb-2" style="color: #444444;">HOMEOWNER </a>
            </li>
            <li class="list-a"><a href="/posts"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li class="list-a"><a href="/profile"><i class="fas fa-user"></i> Profile</a></li>
            <li class="list-a"><a href="/family-members"><i class="fas fa-users"></i> My Family</a></li>
            <li class="list-a2 list-a"><a href="/tenants/"><i class="fas fa-history"></i> History</a></li>
        @endcan
    </ul>
</div>
<!-- /#sidebar-wrapper -->