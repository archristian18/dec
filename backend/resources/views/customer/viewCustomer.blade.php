@extends('../layout.layout')
@section ('content')
@extends('../error.success')
<!-- start project list -->
  <div class="col-md-12 col-sm-12">
    <div class="x_panel">
        <div class="recordName">
          <h3>Customers</h3>
        </div>
        <table id="datatable-responsive"
        class="table table-striped table-bordered dt-responsive nowrap jambo_table bulk_action"
        cellspacing="1"
        width="100%" class="style.css">
          <thead>
            <tr>
              <th>#</th>
              <th>Customer Name</th>
              <th>Details</th>
              <th>Debt</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($customers as $item)
            <tr>
              <td><h5>{{ $loop->iteration }}</h5></td> 
              <td><h5>{{ $item->firstname }}</h5></td>
              <td><h5>{{ $item->details }}</h5></td>
              <td><h5>{{ $item->details }}</h5></td>
              <td><h5>{{ date('m-d-Y', strtotime($item->created_at)) }}</h5></td>
              <td width="15%"><a href="{{  route('customer.record', $item->id) }}" class="btn btn-primary btn-xs">
                  <i class="fa fa-folder"></i> Records
                  </a>
                  <a href="{{  route('deleteCustomer', $item->id) }}" class="btn btn-danger btn-xs">
                    <i class="fa fa-trash"></i> Delete
                  </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
<!-- end project list -->
@endsection