@php
    $menu = [
        [
            'url' => route('dashboard.home'),
            'icon'  => 'home',
            'id' => 'home',
            'title' => 'Home',
            'slug' => ['dashboard.home'],
            'roles' => ['owner', 'admin', 'waiter', 'chef', 'delivery']
        ], [
            'url' => route('dashboard.employees.index'),
            'icon'  => 'user',
            'id' => 'employees',
            'title' => 'Employees',
            'slug' => ['dashboard.employees.index', 'dashboard.employees.create', 'dashboard.employees.edit', 'dashboard.employees.show'],
            'roles' => ['owner']
        ], [
            'url' => route('dashboard.users.index'),
            'icon'  => 'user',
            'id' => 'users',
            'title' => 'Users',
            'slug' => ['dashboard.users.index', 'dashboard.users.create', 'dashboard.users.edit', 'dashboard.users.show'],
            'roles' => ['owner']
        ], [
            'url' => route('dashboard.categories.index'),
            'icon'  => 'user',
            'id' => 'categories',
            'title' => 'Categories',
            'slug' => ['dashboard.categories.index', 'dashboard.categories.create', 'dashboard.categories.edit', 'dashboard.categories.show'],
            'roles' => ['owner', 'admin']
        ], [
            'url' => route('dashboard.ingredients.index'),
            'icon'  => 'user',
            'id' => 'ingredients',
            'title' => 'Ingredients',
            'slug' => ['dashboard.ingredients.index', 'dashboard.ingredients.create', 'dashboard.ingredients.edit', 'dashboard.ingredients.show'],
            'roles' => ['owner', 'admin']
        ], [
            'url' => route('dashboard.meals.index'),
            'icon'  => 'user',
            'id' => 'meals',
            'title' => 'Meals',
            'slug' => ['dashboard.meals.index', 'dashboard.meals.create', 'dashboard.meals.edit', 'dashboard.meals.show'],
            'roles' => ['owner', 'admin']
        ], [
            'url' => route('dashboard.suppliers.index'),
            'icon'  => 'user',
            'id' => 'suppliers',
            'title' => 'Suppliers',
            'slug' => ['dashboard.suppliers.index', 'dashboard.suppliers.create', 'dashboard.suppliers.edit', 'dashboard.suppliers.show'],
            'roles' => ['owner']
        ],[
            'url' => route('dashboard.supplier-orders.index'),
            'icon'  => 'user',
            'id' => 'supplier-orders',
            'title' => 'Supplier Orders',
            'slug' => ['dashboard.supplier-orders.index', 'dashboard.supplier-orders.create', 'dashboard.supplier-orders.edit', 'dashboard.supplier-orders.show'],
            'roles' => ['owner']
        ], [
            'url' => route('dashboard.tables.index'),
            'icon'  => 'user',
            'id' => 'tables',
            'title' => 'Tables',
            'slug' => ['dashboard.tables.index', 'dashboard.tables.create', 'dashboard.tables.edit'],
            'roles' => ['owner','admin']
        ],[
            'url' => route('dashboard.table-orders.index'),
            'icon'  => 'user',
            'id' => 'table-orders',
            'title' => 'Table Orders',
            'slug' => ['dashboard.table-orders.index', 'invoice.tableorder'],
            'roles' => ['owner','admin']
        ],[
            'url' => route('dashboard.tables.index'),
            'icon'  => 'user',
            'id' => 'tables',
            'title' => 'Tables',
            'slug' => ['dashboard.tables.index', 'dashboard.table-orders.create'],
            'roles' => ['waiter']
        ], [
            'url' => route('dashboard.chefs.orders'),
            'icon'  => 'user',
            'id' => 'orders',
            'title' => 'Orders',
            'slug' => ['dashboard.chefs.orders', 'dashboard.chefs.store', 'dashboard.chefs.update'],
            'roles' => ['chef']
        ], [
            'url' => route('dashboard.delivery'),
            'icon'  => 'user',
            'id' => 'orders',
            'title' => 'Orders',
            'slug' => ['dashboard.delivery', 'dashboard.delivery.store'],
            'roles' => ['delivery']
        ],
    ];
@endphp

<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ route('dashboard.users.index') }}">
                    <h2 class="brand-text">MAT3AMI</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>

    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            @foreach($menu as $item)
                @if(in_array(auth()->user()->role, $item['roles']))
                    <li
                        class="nav-item {{ in_array(Route::currentRouteName(), $item['slug']) ? 'active' : '' }}"
                        id="{{ $item['id'] }}"
                    >
                        <a class="d-flex align-items-center" href="{{ $item['url'] }}">
                            <i data-feather="{{ $item['icon'] }}"></i>
                            <span class="menu-title text-truncate">{{ $item['title'] }}</span>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
