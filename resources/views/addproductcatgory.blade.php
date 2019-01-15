
  @include('includes.header')

  @include('layouts.sidebar')

      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Products Category
            <small>New Product Category</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="productscategory">Product Category</a></li>
            <li class="active">New Product Category</li>
          </ol>
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">New Product Category</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

            {!! Form::open(['action' => 'Api\ProductCategoryController@store','method'=>'POST'])!!}
 
            <div class="form-group">
              {{Form::label('name', 'Name')}}
              {{Form::text('name', '',['class'=>'form-control','placeholder'=>'Product Name'])}}
            </div>
          
              <div class="form-group">
              {{Form::submit('Save',['class'=>'btn btn-info pull-left'])}}
            </div>
            
            {!! Form::close() !!} 
  
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->


  @include('includes.footer')