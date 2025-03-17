{{-- Extends layout --}}
@extends('templatec.layout.default')



{{-- Content --}}
@section('content')
            <!-- row -->
<div class="container-fluid">
  <div class="form-head mb-4">
    <h2 class="text-black font-w600 mb-0">Dashboard Cecasem</h2>
  </div>
  <div class="row">
    <div class="col-xl-6">
      <div class="row">
        <div class="col-xl-8 col-lg-6 col-md-7 col-sm-8">
          <div class="card-bx stacked">
            <img src="images/card/card.png" alt="" class="mw-100">
            <div class="card-info text-white">
              <p class="mb-1">Main Balance</p>
              <h2 class="fs-36 text-white mb-sm-4 mb-3">$673,412.66</h2>
              <div class="d-flex align-items-center justify-content-between mb-sm-5 mb-3">
                <img src="images/dual-dot.png" alt="" class="dot-img">
                <h4 class="fs-20 text-white mb-0">**** **** **** 1234</h4>
              </div>
              <div class="d-flex">
                <div class="mr-5">
                  <p class="fs-14 mb-1 op6">VALID THRU</p>
                  <span>08/21</span>
                </div>
                <div>
                  <p class="fs-14 mb-1 op6">CARD HOLDER</p>
                  <span>Franklin Jr.</span>
                </div>
              </div>
            </div>
            <a href="cards-center.html"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-5 col-sm-4">
          <div class="card bgl-primary card-body overflow-hidden p-0 d-flex rounded">
            <div class="p-0 text-center mt-3">
              <span class="text-black">Limit</span>
              <h3 class="text-black fs-20 mb-0 font-w600">$4,000</h3>
              <small>/$10,000</small>
            </div>
            <canvas id="lineChart" height="300" class="mt-auto line-chart-demo"></canvas>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header d-sm-flex d-block border-0 pb-0">
              <div class="pr-3 mr-auto mb-sm-0 mb-3">
                <h4 class="fs-20 text-black mb-1">Transaction Overview</h4>
                <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <a href="javascript:void(0)" class="btn btn-rounded btn-light mr-3" data-toggle="modal" data-target="#DownloadReport"><i class="las la-download text-primary scale5 mr-3"></i>Download Report</a>
                <!-- Modal -->
                <div class="modal fade" id="DownloadReport">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="dropdown">
                  <div class="btn-link" data-toggle="dropdown">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                  </div>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                    <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div id="chartBar"></div>
              <div class="d-flex">
                <div class="custom-control custom-switch toggle-switch text-right mr-4 mb-2">
                  <input type="checkbox" class="custom-control-input" id="customSwitch11">
                  <label class="custom-control-label fs-14 text-black pr-2" for="customSwitch11">Number</label>
                </div>
                <div class="custom-control custom-switch toggle-switch text-right mr-4 mb-2">
                  <input type="checkbox" class="custom-control-input" id="customSwitch12">
                  <label class="custom-control-label fs-14 text-black pr-2" for="customSwitch12">Analytics</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header d-sm-flex d-block border-0 pb-0">
              <div class="pr-3 mb-sm-0 mb-3 mr-auto">
                <h4 class="fs-20 text-black mb-1">Quick Transfer</h4>
                <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
              </div>
              <span class="fs-24 text-black font-w600">$56,772.38</span>
            </div>
            <div class="card-body">
              <div class="owl-carousel testimonial-one mb-5">
                <div class="item">
                  <div class="image-bx mb-3">
                    <img src="{{ asset('images/avatar/1.jpg') }}" alt="">
                    <i class="las la-check-circle"></i>
                  </div>
                  <h6 class="fs-16 mb-0"><a href="{!! url('/transactions-details'); !!}" class="text-black">David</a></h6>
                  <span class="fs-12">@davidxc</span>
                </div>
                <div class="item">
                  <div class="image-bx mb-3">
                    <img src="{{ asset('images/avatar/2.jpg') }}" alt="">
                    <i class="las la-check-circle"></i>
                  </div>
                  <h6 class="fs-16 mb-0"><a href="{!! url('/transactions-details'); !!}" class="text-black">Cindy</a></h6>
                  <span class="fs-12">@cindyss</span>
                </div>
                <div class="item">
                  <div class="image-bx mb-3">
                    <img src="{{ asset('images/avatar/3.jpg') }}" alt="">
                    <i class="las la-check-circle"></i>
                  </div>
                  <h6 class="fs-16 mb-0"><a href="{!! url('/transactions-details'); !!}" class="text-black">Samuel</a></h6>
                  <span class="fs-12">@sam224</span>
                </div>
                <div class="item">
                  <div class="image-bx mb-3">
                    <img src="{{ asset('images/avatar/4.jpg') }}" alt="">
                    <i class="las la-check-circle"></i>
                  </div>
                  <h6 class="fs-16 mb-0"><a href="{!! url('/transactions-details'); !!}" class="text-black">Olivia</a></h6>
                  <span class="fs-12">@oliv62</span>
                </div>
                <div class="item">
                  <div class="image-bx mb-3">
                    <img src="{{ asset('images/avatar/5.jpg') }}" alt="">
                    <i class="las la-check-circle"></i>
                  </div>
                  <h6 class="fs-16 mb-0"><a href="{!! url('/transactions-details'); !!}" class="text-black">Martha</a></h6>
                  <span class="fs-12">@marthaa</span>
                </div>
              </div>
              <form>
                <div class="form-group row style-1 align-items-center">
                  <label class="fs-18 col-sm-3 text-black font-w500">Amount</label>
                  <div class="input-group col-sm-9">
                    <input type="number" class="form-control">
                    <div class="input-group-append">
                      <button class="btn btn-primary rounded" type="button">TRANSFER NOW</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
