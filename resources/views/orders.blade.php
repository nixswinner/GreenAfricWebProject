
  @include('includes.header')

  @include('layouts.sidebar')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Orders
        <small>All Orders</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">All Orders</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Orders</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>       </th>
                  <th>Order ID</th>
                  <th>Date</th>
                  <th>Status</th>                
                </tr>
                </thead>
                <tbody>

                @if(count($orders)>0)
                  @foreach ($orders as $order)
                      <tr>
                          <td>{{$order->id}}</td>
                          <td>{{$order->status}} </td>
                          <td> {{$order->created_at}} </td>
                        </tr>
                  @endforeach
                 
                @endif
            
                </tbody>
                <tfoot>
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            @if(count($orders)>1)
            {{$orders->links()}}
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