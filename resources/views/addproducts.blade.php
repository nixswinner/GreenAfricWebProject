
  @include('includes.header')

  @include('layouts.sidebar')

      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Products
            <small>All Products</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Products</a></li>
            <li class="active">New Product</li>
          </ol>
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">New Product</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  
                     <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Add New Product</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
  
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
              </div>
            </div>
  
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Quantity</label>
  
              <div class="col-sm-10">
                <input type="number" class="form-control" id="inputEmail3" placeholder="Quantity">
              </div>
            </div>
  
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">Description</label>
  
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="Description">
              </div>
            </div>
            <div class="form-group">
          
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">Sign in</button>
          </div>
          <!-- /.box-footer -->
        </form>
              <!-- /.box -->
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->


  @include('includes.footer')