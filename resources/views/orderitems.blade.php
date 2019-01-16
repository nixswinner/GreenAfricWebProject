
  @include('includes.header')

  @include('layouts.sidebar')
  @include('includes.header')

  @include('layouts.sidebar')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Orders Items for 
      <small> Order ID {{$orderId}} </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Order Items </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Order Items </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th></th>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <th>created At</th>
                  
                                 
                </tr>
                </thead>
                <tbody>

                @if(count($data)>0)
                  @foreach ($data as $order)
                      <tr>
                      <td><img src="{{$order->image}}" width="50px" height="30px"/></td>
                          <td>{{$order->name}}</td>
                          <td>{{$order->quantity}} </td>
                          <td> {{$order->created_at}} </td>
                          <td>  </td>
                        </tr>
                  @endforeach
                 
                @endif
            
                </tbody>
                <tfoot>
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            {{-- @if(count($data)>1)
            {{$data->links()}}
           @endif --}}
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