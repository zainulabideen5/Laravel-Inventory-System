<div class="vertical-menu">

<div data-simplebar class="h-100">

<!-- User details -->


<!--- Sidemenu -->
<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">Menu</li>

        

        
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>Manage Supplies</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('supplier.all') }}">All Suppliers</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>Manage Customers</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('customer.all') }}">All Customers</a></li>
                <li><a href="{{ route('credit.customer') }}">Credit Customers</a></li>
                <li><a href="{{ route('paid.customer') }}">Paid Customers</a></li>
                <li><a href="{{ route('customer.wise.report') }}">Customers Wise Report </a></li>

            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>Manage Unit</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('unit.all') }}">All Unit</a></li>
            </ul>
        </li>

        
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>Manage Category</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('category.all') }}">All Category</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>Manage Product</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('product.all') }}">All Product</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>Manage Purchase</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('purchase.all') }}">All Purchase</a></li>
                <li><a href="{{ route('purchase.pending') }}">Approval Purchase</a></li>
                <li><a href="{{ route('daily.purchase.report') }}">Daily Purchase Report</a></li>
                
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>Manage Invoice</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('invoice.all') }}">All Invoice</a></li>
                <li><a href="{{ route('invoice.pending.list') }}">Approval Invoice</a></li>
                <li><a href="{{ route('print.invoice.list') }}">Print Invoice List </a></li>
                <li><a href="{{ route('daily.invoice.report') }}">Daily Invoice Report </a></li>
                
            </ul>
        </li>



        
        <li class="menu-title">Stock</li>

        <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="ri-account-circle-line"></i>
            <span>Manage Stock</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
             <li><a href="{{ route('stock.report') }}">Stock Report</a></li>
            <li><a href="{{ route('stock.supplier.wise')}}">Supplier / Product Wise</a></li>
        </ul>
    </li>

        


        
    </ul>
</div>
<!-- Sidebar -->
</div>
</div>