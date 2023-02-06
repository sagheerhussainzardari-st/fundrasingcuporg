<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">@lang('translation.Menu')</li>

                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">@lang('translation.Dashboards')</span>
                    </a>
                </li>

                @can('user_management_access')
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-user"></i>
                            <span>User management</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            @can('permission_access')
                                <li><a href="{{ route('admin.permissions.index') }}" key="t-products">Permissions</a></li>
                            @endcan
                            @can('role_access')
                                <li><a href="{{ route('admin.roles.index') }}" key="t-product-detail">Roles</a></li>
                            @endcan
                            @can('user_access')
                                <li><a href="{{ route('admin.users.index') }}" key="t-product-detail">Users</a></li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('category_access')
                    <li>
                        <a href="{{ route('admin.categories.index') }}" class="waves-effect">
                            <i class="bx bx-user"></i>
                            <span>Categories</span>
                        </a>
                    </li>
                @endcan
                @can('fund_access')
                    <li>
                        <a href="{{ route('admin.funds.index') }}" class="waves-effect">
                            <i class="bx bx-user"></i>
                            <span>Funds</span>
                        </a>
                    </li>
                @endcan
                @can('order_access')
                    <li>
                        <a href="{{ route('admin.orders.index') }}" class="waves-effect">
                            <i class="bx bx-user"></i>
                            <span>Donations</span>
                        </a>
                    </li>
                @endcan
                @can('payment_access')
                    <li>
                        <a href="{{ route('admin.payments.index') }}" class="waves-effect">
                            <i class="bx bx-user"></i>
                            <span>Stripe Payments</span>
                        </a>
                    </li>
                @endcan
                @can('setting_edit')
                    <li>
                        <a href="{{ route('admin.settings.edit',$setting->id) }}" class="waves-effect">
                            <i class="bx bx-cog"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                @endcan
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
