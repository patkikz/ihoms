<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
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
                <a href="#">Payment Management</a>
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