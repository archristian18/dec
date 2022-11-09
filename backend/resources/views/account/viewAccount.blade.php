@extends('../layout.layout')
  @section ('content')
    @extends('../error.success')
    <!-- start project list -->
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="recordName">
            <h3>Total Accounts</h3> 
          </div>
          <div class="x_content">
            <table id="datatable-responsive" class="table table-bordered dt-responsive nowrap jambo_table bulk_action" style="width:100%">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Gcash</th>
                  <th>Load Wallet</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($list as $item) 
                <tr>
                  <td><h5>{{ $loop->iteration }}</h5></td>
                  <td><h5>{{ $item->gcash }}</h5></td>
                  <td><h5>{{ $item->loads }}</h5></td>
                  <td><h5>{{ $item->created_at->toDateString(); }}</h5> </td>
                  <td width="15%">
                    <a href="{{ route('deleteAccount', $item->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- end project list -->
  @endsection