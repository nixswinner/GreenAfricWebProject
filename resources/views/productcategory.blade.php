
  @include('includes.header')

  @include('layouts.sidebar')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Products 
        <small>All Products Category</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">All products Category</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Products  Categories</h3>
              <button class="btn btn-info pull-right" onclick="location.href = 'addproductcategory';">
                Add New Product Category</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>       </th>
                  <th>Name</th>
                  
                
                </tr>
                </thead>
                <tbody>

                @if(count($product_category)>0)
                  @foreach ($product_category as $product)
                      <tr>
                          <td>{{$product->name}}</td>
                          <td> {{$product->created_at}} </td>
                        </tr>
                  @endforeach
                 @else
                    <h3>No Product Categories Present</h3>
                @endif 
            
                </tbody>
                <tfoot>
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            @if(count($product_category)>1)
            {{$product_category->links()}}
           @endif 
          </div>
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