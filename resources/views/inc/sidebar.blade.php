<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="/">
                <img class="img-fluid" src="{{ asset('assets/images/logo2.png') }}">
            </a>
        </li>
        <li>
            @can('isAdmin')
                <a href="/dashboard">Dashboard</a>
            @endcan 

            @can('isUser')
                <a href="/dashboard">Dashboard</a>    
            @endcan
        </li>
        
        <li>
            @can('isAdmin')
                <a href="/tenants">HO Masterfile</a>
            @endcan 
            
        </li>
        <li>
            @can('isAdmin')
                <a href="#" class="dropdown-btn">Payment Management <i class="fa fa-caret-down"></i></a>
                <div class="dropdown-container">
                    <a href="/dues">Monthly Dues</a>
                    <a href="/car-stickers">Car Stickers</a>
                    <a href="/reservations">Club House Reservation</a>
                </div>
            @endcan 
        </li>
        <li>
            @can('isAdmin')
                <a href="/expenses">Expenses</a>
            @endcan 
        </li>
        <li>
            @can('isAdmin')
                <a href="/purposes">Purposes</a>
            @endcan 
        </li>
        <li>
            @can('isAdmin')
                <a href="#">File Management</a>
            @endcan 
        </li>
    </ul>
</div>