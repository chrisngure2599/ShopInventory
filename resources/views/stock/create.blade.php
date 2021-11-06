@extends('layouts.home')

@section('content')

<section class="content-header">
  <h1>
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Add Stock</li>
  </ol>
</section>

<!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Add Stock / Product</h3>
          </div>
          <div class="box-body">
            <form class="form-horizontal create_stock" role="form" method="POST" action="{{ url('/stock/store') }}">
      
                    {{ csrf_field() }}

                    <div class="box-body">

                      <div class="row">
                        
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Stock Category</label>
                            <input type="text" class="form-control search_category_name" placeholder="Books" name="category_name" autocomplete="off">
                            <span class="help-block search_category_name_empty" style="display: none;">No Results Found ...</span>
                            <input type="hidden" class="search_category_id" name="category_id">
                          </div>
                        </div>


                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Stock / Product Name</label>
                            <input type="text" class="form-control search_stock_name" placeholder="Counter Books" name="stock_name" autocomplete="off" id="stock_name" disabled>
                            <span id="stock_name_error" class="text-danger" hidden>Error duplicate name</span>
                          </div>
                        </div>

                      </div> 


                      <div class="row">

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Purchase Cost / Unit</label><br>
                            <input type="text" class="form-control" name="purchase_cost" placeholder="0.00">
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Selling Cost / Unit</label>
                            <input type="text" class="form-control" name="selling_cost" placeholder="0.00">
                          </div>
                        </div>

                      </div>

                      <div class="row">
                        
                        

                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Supplier Name</label><br>
                            <select class="form-control change_supplier_name" name="supplier_id">
                            <option selected="" disabled="" value=""> Select </option>
                              <option value="0">- Multiple suppliers -</option>
                              @foreach($supplier_details as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                              @endforeach
                            </select>
                            <input type="hidden" name="supplier_name" class="supplier_name">
                          </div>
                        </div>

                        

                      </div>


                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="reset" class="btn btn-danger pull-left">Reset</button>
                      <button type="submit" class="btn btn-primary pull-right form_submit"><i class="fa fa-plus"></i> Add</button>
                    </div>
            </form>
          </div>
          <!-- /.box-body -->
          </div>
        </div>  
      </div>  
    </section>
    <!-- /.content -->
@endsection
