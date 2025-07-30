@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>



<div class="page-content">
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Customer Wise Report</h4>

                 

            </div>
        </div>
    </div>
    <!-- end page title -->
    
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">

    <div class="row">
        <div class="col-md-12 text-center">
            <strong> customer Wise Credit Report</strong>
            <input type="radio" name="customer_wise_report" value="
            customer_wise_credit" class="search_value"> &nbsp;&nbsp;
          
            <strong> Customer Wise Paid Report</strong>
            <input type="radio" name="customer_wise_report" value="
            customer_wise_paid" class="search_value">
          
        </div>        
    </div> <!-- // end row -->

<!--   Customer Credit Wise -->
      <div class="show_credit" style="display:none;" >
          <form method="GET" action="{{ route('customer.wise.credit.report') }}" id="myForm" target="_blank" >
            <div class="row">
                <div class="col-sm-8 form-group">
                    <label>Customer Name</label>
                     <select name="customer_id" class="form-select select2">
                     <option value="">Select Customer</option>
                        @foreach($customers as $cus)
                        <option value="{{ $cus->id }}">{{ $cus->name }}</option>
                        @endforeach
                        </select>               
                    </div>

                    <div class="col-sm-4" style="padding-top: 28px;">
                        <button type="submit" class="btn btn-primary">Search</button>
                        
                    </div>
                
            </div>
              
          </form>
      </div>
<!-- End  Customer Credit Wise -->

       <!-- show_paid -->
      <div class="show_paid" style="display:none;" >
          <form method="GET" action="{{ route('customer.wise.paid.report') }}" id="myForm" target="_blank" >
            <div class="row">
                <div class="col-sm-8 form-group">
                    <label>Customer Name</label>
                     <select name="customer_id" class="form-select select2">
                     <option value="">Select Customer</option>
                        @foreach($customers as $cus)
                        <option value="{{ $cus->id }}">{{ $cus->name }}</option>
                        @endforeach
                        </select>               
                    </div>

                    <div class="col-sm-4" style="padding-top: 28px;">
                        <button type="submit" class="btn btn-primary">Search</button>
                        
                    </div>
                
            </div>
              
          </form>
      </div>
     <!-- End show_paid -->


      



                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

 
        
        </div> <!-- container-fluid -->
        </div>



<script type="text/javascript">
$(document).ready(function() {
    // Hide both forms initially
    $('.show_credit').hide();
    $('.show_paid').hide();

    // Change event for radio buttons
    $(document).on('change', 'input[class="search_value"]', function() {
        var search_value = $(this).val().trim();

        // Show/hide forms based on the radio button value
        if (search_value === 'customer_wise_credit') {
            $('.show_credit').show();
            $('.show_paid').hide(); // Hide the "paid" form if "credit" is selected
        } else if (search_value === 'customer_wise_paid') {
            $('.show_paid').show();
            $('.show_credit').hide(); // Hide the "credit" form if "paid" is selected
        } else {
            // Hide both if no valid selection
            $('.show_credit').hide();
            $('.show_paid').hide();
        }
    });
});
</script>  

@endsection