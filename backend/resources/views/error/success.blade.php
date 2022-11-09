@section ('success')
  @if (session('success'))
    <div class="x_content bs-example-popovers">
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <strong>Successfully {{ session('success') }}!</strong>  
      </div>
    </div>
  @endif
@endsection