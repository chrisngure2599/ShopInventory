@extends('layouts.home')

@section('content')

<section class="content-header">
  <h1>
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Add Purchase</li>
  </ol>
</section>

<!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-sm-12">
          <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Add Purchase</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <form class="form-horizontal create_purchase" role="form" method="POST" action="{{ url('/purchase/store') }}">
      
                    {{ csrf_field() }}

                    <div class="box-body">

                      <div class="box box-default">
                        <div class="box-body">
                          <div class="row">
                            <div class="col-sm-3">
                              <div class="form-group">
                                <label>Supplier Name</label>
                                <input type="text" class="form-control search_supplier_name" placeholder="Type here ..." name="supplier_name" autocomplete="off">
                                <span class="help-block search_supplier_name_empty" style="display: none;">No Results Found ...</span>
                                <input type="hidden" class="search_supplier_id" name="supplier_id">
                              </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="form-group">
                                <label>Address</label><br>
                                <input type="text" class="form-control search_supplier_address" name="supplier_address" autocomplete="off">
                              </div>
                            </div>

                            <div class="col-sm-2">
                              <div class="form-group">
                                <label>Contact</label><br>
                                <input type="text" class="form-control search_supplier_contact1" name="supplier_contact1" autocomplete="off">
                              </div>
                            </div>

                            <div class="col-sm-2">
                              <div class="form-group">
                                <label>Opening Balance</label><br>
                                <input type="text" name="opening_balance" class="form-control opening_balance" readonly="">
                              </div>
                            </div>

                            <div class="col-sm-2">
                              <div class="form-group">
                                <label>Opening Due</label><br>
                                <input type="text" name="opening_due" class="form-control opening_due" readonly="">
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                      <div class="box box-default">

                          <div class="box-body">
                            <div class="row">
                              <div class="col-md-5">
                                <div class="form-group">
                                  <label>Stock Category</label><br>

                                  <input type="text" class="form-control search_purchase_category_name" placeholder="Type here ..." name="category_name" autocomplete="off">
                                  <span class="help-block search_purchase_category_name_empty" style="display: none;">No Results Found ...</span>
                                  <input type="hidden" class="search_category_id" name="category_id">
                                  
                                  {{-- <input type="text" class="form-control search_stock_name" name="stock_name" autocomplete="off">
                                  <span class="help-block search_stock_name_empty" style="display: none;">No Results Found ...</span>
                                  <input type="hidden" class="search_stock_id" name="stock_id">
                                  <input type="hidden" class="category_id" name="category_id"> --}}
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  
                                  <label>Physical Quantity </label><br>
                                  <select class="form-control stock_id" name="stock_id">
                                    <option selected="" disabled="" value="">select</option>
                                  </select>
                                  <span class="stock_id_details help-block"></span>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>No.of.Units</label><br>
                                  <input type="text" class="form-control change_purchase_quantity" name="purchase_quantity" min="0" autocomplete="off">
                                </div>  
                              </div>
                              
                            </div>

                            <div class="row">

                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>Purchase Cost</label><br>
                                  <input type="text" class="form-control search_purchase_cost" name="purchase_cost">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>Selling Cost</label><br>
                                  <input type="text" class="form-control search_selling_cost" name="selling_cost">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>Stock Available</label><br>
                                  <input type="text" class="form-control search_stock_quantity" name="opening_stock" readonly="">
                                  <input type="hidden" name="closing_stock" class="closing_stock">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>Purchase Total</label><br>
                                  <input type="text" class="form-control purchase_total" readonly="" name="purchase_total">
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>

                      <div class="box box-default">
                        <div class="box-body">
                          <div class="row">

                            <div class="col-sm-2">
                              <div class="form-group">
                                <label>Description</label><br>
                                <textarea class="form-control" style="height: 35px;" name="description" autocomplete="off"></textarea>
                              </div>
                            </div>
                            
                            <div class="col-sm-2">
                              <div class="form-group">
                                <label>Grand Total</label><br>
                                <input type="text" class="form-control grand_total" name="grand_total" readonly="">
                              </div>
                            </div>

                            <div class="col-sm-2">
                              <div class="form-group">
                                <label>Payment</label><br>
                                <input type="text" class="form-control sales_payment" name="payment" autocomplete="off">
                              </div>
                            </div>

                            <div class="col-sm-2">
                              <div class="form-group">
                                <label>Closing Balance</label><br>
                                <input type="text" class="form-control closing_balance" name="closing_balance" readonly="">
                              </div>
                            </div>

                            <div class="col-sm-2">
                              <div class="form-group">
                                <label>Closing Due</label><br>
                                <input type="text" class="form-control closing_due" name="closing_due" readonly="">
                              </div>
                            </div>

                            <div class="col-sm-2">
                              <div class="form-group">
                                <label>Mode</label>
                                <select class="form-control" name="mode">
                                  <option value="1">Cash</option>
                                  <option value="2">Cheque</option>
                                  <option value="3">Card</option>
                                </select>
                              </div>
                            </div>

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
