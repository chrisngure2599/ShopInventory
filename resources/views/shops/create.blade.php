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
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/shops/store') }}">
      
                    {{ csrf_field() }}

                    <div class="box-body">

                      <div class="box box-default">
                        <div class="box-body">
                          <div class="row">
                            <div class="col-sm-3">
                              <div class="form-group">
                                <label>Shop / Branch  Name</label>
                                <input type="text" class="form-control" placeholder="Type here ..." name="shop_name">
                              </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="form-group">
                                <label>Shop / Location</label><br>
                                <input type="text" class="form-control search_customer_address" name="location">
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                        </div>
                      </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="reset" class="btn btn-danger pull-left">Reset</button>
                      <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add</button>
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
