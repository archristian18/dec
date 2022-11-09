@extends('layout.layout')
@section ('content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel tile fixed_height_300">
      <div class="x_title">
        <h2>Inventory</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="widget_summary">
          <div class="w_left w_25">
            <h2>GCASH </h2>
          </div>
          <div class="w_center w_55">
            <div class="progress">
              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
          </div>
          <div class="w_right w_20">
            <h2>100</h2>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="widget_summary">
          <div class="w_left w_25">
            <h2>LOAD WALLET</h2>
          </div>
          <div class="w_center w_55">
            <div class="progress">
              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
          </div>
          <div class="w_right w_20">
            <span>23k</span>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="widget_summary">
          <div class="w_left w_25">
            <h2>CUSTOMER</h2>
          </div>
          <div class="w_center w_55">
            <div class="progress">
              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
          </div>
          <div class="w_right w_20">
            <span>3k</span>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="widget_summary">
          <div class="w_left w_25">
            <h2>TOTAL DEBT</h2>
          </div>
          <div class="w_center w_55">
            <div class="progress">
              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
          </div>
          <div class="w_right w_20">
            <span>3k</span>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection