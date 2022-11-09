@section('tbodyTable')
    <tbody>
    @foreach($list as $item) 
        <tr>
        <td>{{ $loop->iteration }}</td> 
        <td><h5>{{ $item->firstname }}</h5></td>
        <td><h5>{{ $item->details }}</h5></td>
        <td><h5>{{ date('m-d-Y', strtotime($item->created_at)) }}</h5></td>
        <td><a href="{{  route('customer.show', $item->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Records </a></td>
        </tr>
    @endforeach
    </tbody>
@endsection