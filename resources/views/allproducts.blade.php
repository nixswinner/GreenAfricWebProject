
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
        <li><a href="#">Tables</a></li>
        <li class="active">All products</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Products</h3>
              <button class="btn btn-info pull-right" onclick="location.href = 'addproducts';">
                Add New Product</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>       </th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Unit Price</th>
                  <th>Created At</th>
                
                </tr>
                </thead>
                <tbody>

                @if(count($products)>0)
                  @foreach ($products as $product)
                      <tr>
                      <td><img src="{{$product->image}}" width="50px" height="30px"/></td>
                          <td>{{$product->name}}</td>
                          <td>{{$product->description}}</td>
                          <td>{{$product->unit_price}} </td>
                          <td> {{$product->created_at}} </td>
                        </tr>
                  @endforeach
                 
                @endif
            
                </tbody>
                <tfoot>
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            @if(count($products)>1)
            {{$products->links()}}
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