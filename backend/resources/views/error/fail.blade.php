@section ('fail')
  @if (session('fail'))
    <div class="x_content bs-example-popovers">
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <strong>NotSuccessfully, {{ session('fail') }}</strong>
      </div>
    </div>
  @endif
@endsection