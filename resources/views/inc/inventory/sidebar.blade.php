<div class="sidenav" style="float: left;">
  <div class="col-lg-6" style="padding-top: 150px; position: fixed; width: 150px;">
    <ul class="list-unstyled components">
        <li><a href="{{ route('inventory.home') }}">Inventory</a></li>
        <li><a href="{{ route('inventory.offerings') }}">Offerings</a></li>
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">BWS</a>
        <ul class="collapse" id="homeSubmenu">
            <li><a href="{{ route('bws.overview') }}">Overview</a></li>
            <li><a href="#">Beer</a></li>
            <li><a href="#">Wine</a></li>
            <li><a href="#">Sprits</a></li>
            <li><a href="#">Non Alcoholics</a></li>
            <li><a href="#">Extraneous</a></li>
        </ul>
        <li><a href="{{ route('supplier.overview') }}">Suppliers</a></li>
        <a href="#createMenu" data-toggle="collapse" aria-expanded="false">New</a>
        <ul class="collapse" id="createMenu">
            <li><a href="{{ route('bws.create') }}">BWS</a></li>
            <li><a href="{{ route('offerings.create') }}">Offering</a></li>
            <li><a href="{{ route('inventory.create') }}">Inventory</a></li>
            <li><a href="{{ route('supplier.create') }}">Supplier</a></li>
        </ul>
    </ul>
  </div>
</div>