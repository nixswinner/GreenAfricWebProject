
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
{{--                   
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
              <label for="inputEmail3" class="col-sm-2 control-label">Unit Price</label>
  
              <div class="col-sm-10">
                <input type="number" class="form-control" id="inputEmail3" placeholder="Unit Price">
              </div>
            </div>
  
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">Description</label>
  
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="Description">
              </div>
            </div>

            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">Product Image</label>
  
              <div class="col-sm-10">
                <input type="file" class="form-control" id="image" placeholder="File Image">
              </div>
            </div>
           
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">Add Product</button>
          </div>
          <!-- /.box-footer -->
        </form>
              <!-- /.box -->
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col --> --}}
            {{-- array('url' => 'api/products', 'method' => 'post','enctype'=>'multipart/form-data') --}}
            {{--  --}}

            {!! Form::open(['action' => 'ProductsController@store','method'=>'POST','enctype'=>'multipart/form-data'])!!}
 
            <div class="form-group">
              {{Form::label('name', 'Name')}}
              {{Form::text('name', '',['class'=>'form-control','placeholder'=>'Product Name'])}}
            </div>
            <div class="form-group">
              {{Form::label('price', 'Unit Price')}}
              {{Form::number('unit_price', '',['class'=>'form-control','placeholder'=>'Unit Price'])}}
            </div>
            <div class="form-group">
                {{Form::label('cat', 'Product Category')}}
               <?php $categories = App\ProductCategory::get()?>
               {!!Form::select('product_category_id', $categories->pluck('name'), $categories->pluck('id'), 
               ['class' => 'form-control'])!!}
              
            </div>
            <div class="form-group">
              {{Form::label('description', 'Descripion')}}
              {{Form::text('description', '',['class'=>'form-control','placeholder'=>'Description'])}}
            </div>

              <div class="form-group">
                  {{Form::file('image')}}
              </div>
              <div class="form-group">
              {{Form::submit('Save',['class'=>'btn btn-info pull-right'])}}
            </div>
            
            {!! Form::close() !!} 
  
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->


  @include('includes.footer')