<nav class="mt-2 bg-dark-[ight">
  <ul class="nav nav-pills nav-sidebar flex-column list-group" data-widget="treeview" role="menu" data-accordion="true">
    <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview menu-open list-group-item active">
      <a href="{{ route('category.index') }}">Category</a>
    </li>  
    <li class="nav-item has-treeview menu-open list-group-item active">
      <a href="{{ route('unit.index') }}">Unit</a>
    </li>
  <li class="nav-item has-treeview menu-open list-group-item active">
      <a href="{{ route('customer.index') }}">Customer</a>
    </li>
    </li>
  <li class="nav-item has-treeview menu-open list-group-item active">
      <a href="{{ route('product.index') }}">Product</a>
    </li>
  </ul>

</nav>