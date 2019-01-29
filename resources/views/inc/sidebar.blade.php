<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="/">
                <img class="img-fluid" src="{{ asset('assets/images/logo2.png') }}">
            </a>
        </li>
        @can('isAdmin')
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/tenants">HO Masterfile</a></li>
            <li>
                <a href="#" class="dropdown-btn">Payment Management <i class="fa fa-caret-down"></i></a>
                <div class="dropdown-container">
                    <a href="/dues">Monthly Dues</a>
                    <a href="/car-stickers">Car Stickers</a>
                    <a href="/reservations">Club House Reservation</a>
                </div>
            </li>
            <li><a href="/expenses">Expenses</a></li>
            <li>
                <a href="#" class="dropdown-btn">File Management <i class="fa fa-caret-down"></i></a>
                <div class="dropdown-container">
                    
                    <a href="/purposes">Purposes</a>
                </div>
            </li>
        @endcan

        @can('isUser')
            <li><a href="/posts">Dashboard</a></li>
            <li><a href="/tenants/family-members">My Family Members</a></li>
        @endcan
    </ul>
</div>