@extends('../layout.layout')
    @section ('content')
    @extends('../error.success')
    @extends('../error.fail')
    <div class="x_panel">
        <div class="x_title">
            <h2>Load  Form</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
            <form id="demo-form2" action="{{ route('customer.add') }}" data-parsley-validate class="form-horizontal form-label-left" method="post">
                @csrf
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="option">Customer Name<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                            <select class="form-control" name="id">
                                <option>Option</option> 
                                @foreach($name as $item)
                                    <option value="{{ $item->id }}">{{ $item->firstname }}</option>
                                @endforeach     
                            </select>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Amount<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="number" id="amount" name="amount" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="option">Option<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <select class="form-control" name="option">
                            <option value="debt">Debt</option>
                            <option value="paid">Paid</option>
                        </select>
                    </div>
                </div>     
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="option">Payment Method<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <select class="form-control" name="methods">
                            <option value='gcash'>Gcash</option>
                            <option value='wallet'>Load Wallet</option>
                        </select>
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
    @endsection

