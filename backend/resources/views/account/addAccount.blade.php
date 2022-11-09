@extends('../layout.layout')
@section ('content')

    <div class="col-md-12= col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Account</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="demo-form2" action="{{ route('account.create') }}" data-parsley-validate class="form-horizontal form-label-left" method="post">
                   @csrf

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">GCASH<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number" id="gcash" name="gcash" class="form-control" required>
                            @error('gcash')
                                <span class="text-danger">{{$message}}</span>
                            @enderror   
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">LOAD WALLET<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number" id="wallet" name="wallet" class="form-control" required>
                            @error('wallet')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                  
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button class="btn btn-primary" type="button">Cancel</button>
                         
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection