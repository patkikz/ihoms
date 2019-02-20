<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        {{-- <li class="sidebar-brand">
            <a href="/">
                <img class="img-fluid ewanko" src="{{ asset('img/all-blue.png') }}">
            </a>
        </li> --}}
        @can('isAdmin')
            <li class="list-a"><a href="/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li class="list-a"><a href="/tenants"><i class="fas fa-users"></i> HO Masterfile</a></li>
            <li class="list-a"><a href="/board-resolutions/create"><i class="fas fa-file"></i> Board Resolutions</a></li>
            <li class="list-a"><a href="/dues"><i class="fas fa-calendar-alt"></i> Monthly Dues</a></li>
            <li class="list-a"><a href="/car-stickers"><i class="fas fa-car"></i> Car Stickers</a></li>
            <li class="list-a"><a href="/reservations"><i class="fas fa-home"></i> Club House Reservation</a></li>
            <li class="list-a"><a href="/arrears"><i class="fas fa-money-bill"></i> Arrears</a></li>
            <li class="list-a"><a href="/reports/member-dues"><i class="fas fa-file"></i> Member Dues</a></li>
            <li class="list-a"><a href="/expenses"><i class="fas fa-sticky-note"></i> Expenses</a></li>
            <li class="list-a"><a href="/purposes"><i class="fas fa-edit"></i> Expenses Managament</a></li>
            <li class="list-a"><a href="/payment-managements"><i class="fas fa-credit-card"></i> Payments Management</a></li>
            <li class="list-a"><a href="/relationships"><i class="fas fa-heart"></i> Relationships Management</a></li>
            <li class="list-a"><a href="/reservation-types"><i class="fas fa-calendar-plus"></i> Reservation Types</a></li>
            <li class="list-a"><a href="/vehicle-types"><i class="fas fa-truck"></i> Vehicle Types Managament</a></li>
            

        @endcan

        @can('isUser')
            <li class="list-a"><a href="/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li class="list-a"><a href="/profile"><i class="fas fa-user"></i> Profile</a></li>
            <li class="list-a">
                <a href="#" class="pt-2 pb-2" style="color: #444444;">Homeowner's Family </a>
            </li>
            <li class="list-a"><a href="/family-members"><i class="fas fa-users"></i> My Family</a></li>
            <li class="list-a">
                <a href="#" class="pt-2 pb-2" style="color: #444444;">Payment History </a>
            </li>
            <li class="list-a2 list-a"><a href="/history/"><i class="fas fa-history"></i> History</a></li>
        @endcan
    </ul>   
</div>
<!-- /#sidebar-wrapper -->