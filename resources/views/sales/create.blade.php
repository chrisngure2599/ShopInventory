@extends('layouts.home')

@section('content')

<section class="content-header">
  <h1>
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Add Sales</li>
  </ol>
</section>

<!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-sm-12">
          <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Add Sales</h3>
          </div>
          <div class="box-body">
            <form class="form-horizontal create_sales" role="form" method="POST" action="{{ url('/sales/store') }}">
      
                    {{ csrf_field() }}

                    <div class="box-body">

                      <div class="box box-default">
                        <div class="box-body">
                          <div class="row">
                            <div class="col-sm-3">
                              <div class="form-group">
                                <label>Customer Name</label>
                                <input type="text" class="form-control search_customer_name" placeholder="Type here ..." name="customer_name">
                                <span class="help-block search_customer_name_empty" style="display: none;">No Results Found ...</span>

                                <span class="help-block search_purchase_category_name_empty" style="display: none;">No Results Found ...</span>
                                <input type="hidden" class="search_customer_id" name="customer_id">
                              </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="form-group">
                                <label>Address</label><br>
                                <input type="text" class="form-control search_customer_address" name="customer_address">
                              </div>
                            </div>

                            <div class="col-sm-2">
                              <div class="form-group">
                                <label>Contact</label><br>
                                <input type="text" class="form-control search_customer_contact1" name="customer_contact1">
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
                            
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>Stock Catagory</th>
                                  <th>Physical Quantity</th>
                                  <th>Purchase cost / Unit</th>
                                  <th>Selling cost / Unit</th>
                                  <th>No.of.Units</th>
                                  <th>Total</th>
                                </tr>
                              </thead>
                              <tbody class="sales_container">
                                <tr>
                                  <td>
                                    <input type="text" class="form-control search_purchase_category_name" placeholder="Type here ..." name="category_name[]" autocomplete="off">
                                    <span class="help-block search_purchase_category_name_empty glyphicon" style="display: none;"> No Results Found </span>
                                    <input type="hidden" class="search_category_id" name="category_id[]">
                                  </td>
                                  <td width="250px">
                                    <select class="form-control stock_id" name="stock_id[]">
                                      <option selected="" disabled="" value="">select</option>
                                    </select>
                                    <span class="search_stock_quantity"></span>
                                  </td>
                                  <td width="200px">
                                    <input type="text" class="form-control search_purchase_cost" name="purchase_cost[]" readonly="">
                                  </td>
                                  <td width="150px">
                                    <input type="text" class="form-control search_selling_cost" name="selling_cost[]" >
                                  </td>
                                  
                                  <td width="50px">
                                    <input type="hidden" class="search_stock_quantity" name="opening_stock[]">
                                    <input type="hidden" class="closing_stock" name="closing_stock[]">

                                    <input type="number" class="form-control change_sales_quantity" name="sales_quantity[]" min="1">
                                    <small class="help-block max_stock" style="display: none;">Insufficient Stock</small>
                                  </td>

                                  <td width="100px">
                                    <input type="text" class="form-control stock_total" name="sub_total[]"  readonly="">
                                  </td>

                                  <td><button type="button" class="btn btn-danger remove_tr">&times;</button></td>
                                </tr>
                              </tbody>
                              <tfoot>
                                <tr>
                                  <td colspan="3">
                                    <button type="button" class="btn btn-primary add_sales_product"><i class="fa fa-plus"></i> Add More</button>
                                  </td>
                                  <td></td>
                                </tr>
                              </tfoot>
                            </table>

                            <div class="row">
                              <div class="col-md-offset-8 col-md-4">
                                <div class="form-group">
                                  <label>Sales total</label><br>
                                  <input type="text" class="form-control sales_total" readonly="" name="sales_total">
                                </div>
                              </div>
                            </div>

                      </div>

                      <div class="box box-default">
                        <div class="box-body">
                          <div class="row">

                            <div class="col-sm-2">
                              <div class="form-group">
                                <label>Sales Description</label><br>
                                <textarea class="form-control" style="height: 35px;" name="sales_description"></textarea>
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
                                <input type="text" class="form-control purchase_payment" name="payment">
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
