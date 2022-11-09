@extends('../layout.layout')
@section ('content')
<!-- start project list -->
  <div class="col-md-12 col-sm-12">
    <div class="x_panel">
        <div class="x_content">
          <div class="recordName">
                <h3>Customer {{$customers->firstname}}</h3>
            </div>
            <div class="table-responsive">
              <table id="datatable-responsive"
              class="table table-striped table-bordered dt-responsive nowrap jambo_table bulk_action"
              cellspacing="0"
              width="100%">
                <thead>
                  <tr class="headings">
                    <th class="column-title"># </th>
                    <th class="column-title">Load</th>
                    <th class="column-title">Transaction Options</th>
                    <th class="column-title">Total Balance Debt</th>
                    <th class="column-title">Method</th>
                    <th class="column-title">Date </th>
                    <th class="column-title no-link last"><span class="nobr">Action</span>
                    </th>
                  </tr>
                </thead>
                <tbody>
                @if ($list !== NULL)
                  @foreach($list as $item)
                    <tr>
                      <td><h5>{{ $loop->iteration }}</h5></td>
                      <td><h5>{{ $item->loads }}</h5></td>
                      <td><h5>{{ $item->options }}</h5></td>
                      <td><h5>{{ $item->totals }}</h5></td>
                      <td><h5>{{ $item->method }}</h5></td>
                      <td><h5>{{ date('m-d-Y', strtotime($item->created_at)) }}</h5></td>
                      <td>
                        <a href="{{ route('deleteRecords', $item->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                      </td>
                    </tr>
                  @endforeach
                @endif
                </tbody>
            </table>
          </div>    
        </div>
    </div>
  </div>
<!-- end project list -->
@endsection