@extends('layouts.home')

@section('content')

<script type="text/javascript" src="/js/moment.min.js"></script>

<script type="text/javascript">

  function createdFormatter(value, row, index) {

      return [ moment(row['created_at']).format('Do MMM YYYY, h:mm A') ];
      
  }

  function actionFormatter(value, row, index) {

      // <a href="/stock/show/'+row['id']+'" data-toggle="tooltip" title="View"> <i class="fa fa-eye"></i> </a> &nbsp;&nbsp;
      
      return [ '<a href="/stock/edit/'+row['stock_id']+'" data-toggle="tooltip" title="Edit"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;<a href="/stock/destroy/'+row['stock_id']+'" data-toggle="tooltip" title="Delete"><i class="fa fa-times"></i></a>' ];

  }

</script>

<section class="content-header">
  <h1>
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Add Stock / Product</li>
  </ol>
</section>

<!-- Main content -->
    <section class="content">

    @if(Session::has('message'))
    <div class="row">'
    <div class="col-xs-12">
      <div class="alert @if(Session::get('messageType') == 1) alert-success @else alert-danger @endif">
        {{ Session::get('message') }}
      </div>
    </div>
    </div>
    @endif

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
          <div class="box-header with-bstock">
            <h3 class="box-title">View Stocks</h3>
          </div>
          <div class="box-body">

            <div class="row" style="width:99%;margin-left:5px">
                      <div class="col-xs-12">
                        <table id="table" class="table table-responsive" 
                               data-toggle="table"
                               data-advanced-search="true"
                               data-id-table="advancedTable" 
                               data-url="{{ url('/stock/index') }}"
                               data-pagination="true"
                               data-side-pagination="server"
                               data-page-list="[10, 20, 30 , 40 , 50, 100, 200]"
                               data-search="true"
                               data-show-refresh="true"
                               data-show-toggle="true"
                               data-show-columns="true"
                               data-sort-name="stock_id"
                               data-sort-order="desc">
                            <thead>
                            <tr>
                                <th data-field="stock_id" data-align="center" data-sortable="true">Stock ID</th>
                                <th data-field="category_name" data-align="center" data-sortable="true">Stock Category</th>
                                <th data-field="stock_name" data-align="center" data-sortable="true">Physical Quantity</th>
                                <th data-field="purchase_cost" data-align="center" data-sortable="true">Purchase Cost</th>
                                <th data-field="selling_cost" data-align="center" data-sortable="true">Selling Cost</th>
                                <th data-field="supplier_name" data-align="center" data-sortable="true">Supplier</th>
                                <th data-field="stock_quantity" data-align="center" data-sortable="true">Stock Available</th>
                                <th data-align="center" data-formatter="actionFormatter" data-events="actionEvents" width="200px"> Action </th>
                            </tr>
                            </thead>
                        </table>
                      </div>
            </div>

          </div> 
          </div>
          <!-- /.box-body -->
          </div>
        </div>  
      </div>  
    </section>
    <!-- /.content -->
@endsection
