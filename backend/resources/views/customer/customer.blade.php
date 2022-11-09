@extends('../layout.layout')
    @section ('content')
        @extends('../error.success')
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Customer Form</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" action = "{{ route('customer.create') }}" data-parsley-validate class="form-horizontal form-label-left" method="post">
                        {!! csrf_field() !!}
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 col-xs-3 label-align" for="first-name">First Name
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" id="firstname" class="form-control " name="firstname">
                                @error('firstname')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 col-xs-3 label-align" for="first-name">Last Name
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="lastname" class="form-control " name="lastname">
                                @error('lastname')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>      
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 col-xs-3 label-align" for="details">Details
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="details" class="form-control " name="details">
                                @error('details')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>                    
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12 offset-md-3">
                                <button class="btn btn-primary" type="button">Cancel</button>
                                <button type="submit" class="btn btn-success" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection