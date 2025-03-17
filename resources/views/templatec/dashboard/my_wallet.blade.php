{{-- Extends layout --}}
@extends('templatec.layout.default')



{{-- Content --}}
@section('content')
            <!-- row -->
<div class="container-fluid">
  <div class="form-head mb-4">
    <h2 class="text-black font-w600 mb-0">My Wallet</h2>
  </div>
  <div class="row">
    <div class="col-xl-9 col-xxl-12">
      <div class="row">
        <div class="col-xl-12">
          <div class="card stacked-2">
            <div class="card-header flex-wrap border-0 pb-0 align-items-end">
              <div class="d-flex align-items-center mb-3 mr-3">
                <svg class="mr-3" width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M59.4999 31.688V19.8333C59.4999 19.0818 59.2014 18.3612 58.6701 17.8298C58.1387 17.2985 57.418 17 56.6666 17H11.3333C10.5818 17 9.86114 16.7014 9.32978 16.1701C8.79843 15.6387 8.49992 14.9181 8.49992 14.1666C8.49992 13.4152 8.79843 12.6945 9.32978 12.1632C9.86114 11.6318 10.5818 11.3333 11.3333 11.3333H56.6666C57.418 11.3333 58.1387 11.0348 58.6701 10.5034C59.2014 9.97208 59.4999 9.25141 59.4999 8.49996C59.4999 7.74851 59.2014 7.02784 58.6701 6.49649C58.1387 5.96514 57.418 5.66663 56.6666 5.66663H11.3333C9.07891 5.66663 6.9169 6.56216 5.32284 8.15622C3.72878 9.75028 2.83325 11.9123 2.83325 14.1666V53.8333C2.83325 56.0876 3.72878 58.2496 5.32284 59.8437C6.9169 61.4378 9.07891 62.3333 11.3333 62.3333H56.6666C57.418 62.3333 58.1387 62.0348 58.6701 61.5034C59.2014 60.9721 59.4999 60.2514 59.4999 59.5V47.6453C61.1561 47.0683 62.5917 45.9902 63.6076 44.5605C64.6235 43.1308 65.1693 41.4205 65.1693 39.6666C65.1693 37.9128 64.6235 36.2024 63.6076 34.7727C62.5917 33.3431 61.1561 32.265 59.4999 31.688ZM53.8333 56.6666H11.3333C10.5818 56.6666 9.86114 56.3681 9.32978 55.8368C8.79843 55.3054 8.49992 54.5847 8.49992 53.8333V22.1453C9.40731 22.4809 10.3658 22.6572 11.3333 22.6666H53.8333V31.1666H45.3333C43.0789 31.1666 40.9169 32.0622 39.3228 33.6562C37.7288 35.2503 36.8333 37.4123 36.8333 39.6666C36.8333 41.921 37.7288 44.083 39.3228 45.677C40.9169 47.2711 43.0789 48.1666 45.3333 48.1666H53.8333V56.6666ZM56.6666 42.5H45.3333C44.5818 42.5 43.8611 42.2015 43.3298 41.6701C42.7984 41.1387 42.4999 40.4181 42.4999 39.6666C42.4999 38.9152 42.7984 38.1945 43.3298 37.6632C43.8611 37.1318 44.5818 36.8333 45.3333 36.8333H56.6666C57.418 36.8333 58.1387 37.1318 58.6701 37.6632C59.2014 38.1945 59.4999 38.9152 59.4999 39.6666C59.4999 40.4181 59.2014 41.1387 58.6701 41.6701C58.1387 42.2015 57.418 42.5 56.6666 42.5Z" fill="#1EAAE7"/>
                </svg>
                <div class="mr-auto">
                  <h5 class="fs-20 text-black font-w600">Main Balance</h5>
                  <span class="text-num text-black font-w600">$673,412.66</span> </div>
              </div>
              <div class="mr-3 mb-3">
                <p class="fs-14 mb-1">VALID THRU</p>
                <span class="text-black">08/21</span> </div>
              <div class="mr-3 mb-3">
                <p class="fs-14 mb-1">CARD HOLDER</p>
                <span class="text-black">Franklin Jr.</span> </div>
              <span class="fs-20 text-black font-w500 mr-3 mb-3">**** **** **** 1234</span>
              <div class="dropdown mb-auto">
                <div class="btn-link" role="button" data-toggle="dropdown" aria-expanded="false">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 11.9999C10 13.1045 10.8954 13.9999 12 13.9999C13.1046 13.9999 14 13.1045 14 11.9999C14 10.8954 13.1046 9.99994 12 9.99994C10.8954 9.99994 10 10.8954 10 11.9999Z" fill="black"/>
                    <path d="M10 4.00006C10 5.10463 10.8954 6.00006 12 6.00006C13.1046 6.00006 14 5.10463 14 4.00006C14 2.89549 13.1046 2.00006 12 2.00006C10.8954 2.00006 10 2.89549 10 4.00006Z" fill="black"/>
                    <path d="M10 20C10 21.1046 10.8954 22 12 22C13.1046 22 14 21.1046 14 20C14 18.8954 13.1046 18 12 18C10.8954 18 10 18.8954 10 20Z" fill="black"/>
                  </svg>
                </div>
                <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="javascript:void(0)">Delete</a> <a class="dropdown-item" href="javascript:void(0)">Edit</a> </div>
              </div>
            </div>
            <div class="card-body">
              <div class="progress mb-4" style="height:18px;">
                <div class="progress-bar bg-inverse progress-animated" style="width: 40%; height:18px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
              </div>
              <div class="row align-items-center">
                <div class="col-xl-3 mb-3 col-xxl-6 col-sm-6">
                  <div class="media align-items-center bgl-secondary rounded p-2">
                    <div class="d-inline-block mr-3 position-relative donut-chart-sale2"> <span class="donut2" data-peity='{ "fill": ["rgb(172, 57, 212)", "rgba(255, 255, 255, 0)"],   "innerRadius": 23, "radius": 10}'>3/8</span> <small class="text-secondary">24%</small> </div>
                    <div class="media-body">
                      <h4 class="fs-15 text-black font-w600 mb-0">Installment</h4>
                      <span class="fs-14">$5,412</span> </div>
                  </div>
                </div>
                <div class="col-xl-3 mb-3 col-xxl-6 col-sm-6">
                  <div class="media bgl-success rounded p-2 align-items-center">
                    <div class="d-inline-block mr-3 position-relative donut-chart-sale2"> <span class="donut2" data-peity='{ "fill": ["rgb(43, 193, 85)", "rgba(255, 255, 255, 0)"],   "innerRadius": 23, "radius": 10}'>8/10</span> <small class="text-success">74%</small> </div>
                    <div class="media-body">
                      <h4 class="fs-15 text-black font-w600 mb-0">Investment</h4>
                      <span class="fs-14">$3,784</span> </div>
                  </div>
                </div>
                <div class="col-xl-3 mb-3 col-xxl-6 col-sm-6">
                  <div class="media bgl-info rounded p-2 align-items-center">
                    <div class="d-inline-block mr-3 position-relative donut-chart-sale2"> <span class="donut2" data-peity='{ "fill": ["rgb(70, 30, 231)", "rgba(255, 255, 255, 0)"],   "innerRadius": 23, "radius": 10}'>4/10</span> <small class="text-info">34%</small> </div>
                    <div class="media-body">
                      <h4 class="fs-15 text-black font-w600 mb-0">Property</h4>
                      <span class="fs-14">$3,784</span> </div>
                  </div>
                </div>
                <div class="col-xl-3 mb-3 col-xxl-6 col-sm-6"> <a class="btn btn-outline-primary rounded d-block btn-lg" data-toggle="modal" data-target="#newspends">+New Spends</a>
                  <div class="modal fade" id="newspends">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal"><span>&times;</span> </button>
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header d-block d-sm-flex border-0">
              <div>
                <h4 class="fs-20 text-black">Payment History</h4>
                <p class="mb-0 fs-13">Lorem ipsum dolor sit amet, consectetur</p>
              </div>
              <div class="card-action card-tabs mt-3 mt-sm-0">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#monthly" role="tab">Monthly</a> </li>
                  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Weekly" role="tab">Weekly</a> </li>
                  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Today" role="tab">Today</a> </li>
                </ul>
              </div>
            </div>
            <div class="card-body payment-bx tab-content p-0">
              <div class="tab-pane active show fade" id="monthly" role="tabpanel">
                <div id="accordion-one" class="accordion accordion-primary">
                  <div class="accordion__item border-bottom mb-0">
                    <div class="d-flex flex-wrap align-items-center accordion__header collapsed rounded" data-toggle="collapse" data-target="#default_collapseOne1">
                      <div class="mb-lg-0 mb-3 d-flex align-items-center">
                        <div class="profile-image mr-4"> <img src="{{ asset('images/avatar/10.png') }}" alt="" width="63" class="rounded-circle"> <span class="bg-success">
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip3)">
                              <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"/>
                              <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"/>
                            </g>
                            <defs>
                              <clipPath id="clip3">
                                <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"/>
                              </clipPath>
                            </defs>
                          </svg>
                          </span> </div>
                        <div>
                          <h6 class="fs-16 font-w700 mb-0"><a class="text-black" href="javascript:void(0)">XYZ Store ID</a></h6>
                          <span class="fs-14">Online Shop</span> </div>
                      </div>
                      <span class="mb-lg-0 mb-3 text-black px-2">June 1, 2020 <br>
                      08:22 AM</span> <span class="mb-lg-0 mb-3 text-black font-w600 px-2">+$5,553</span> <span class="mb-lg-0 mb-3 text-black font-w600 px-2">MasterCard 404</span> <a class="mb-lg-0 mb-3 btn btn-outline-success btn-md btn-rounded mx-2" href="javascript:void(0)">Completed</a> <span class="accordion__header--indicator"></span> </div>
                    <div id="default_collapseOne1" class="collapse accordion__body" data-parent="#accordion-one">
                      <div class="d-flex flex-wrap align-items-center accordion__body--text p-0">
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">ID Payment</p>
                          <span class="text-black font-w500">#00123521</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Payment Method</p>
                          <span class="text-black font-w500">MasterCard 404</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Invoice Date</p>
                          <span class="text-black font-w500">April 29, 2020</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Due Date</p>
                          <span class="text-black font-w500">June 5, 2020</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Date Paid</p>
                          <span class="text-black font-w500">June 4, 2020</span> </div>
                        <div class="d-flex p-3 rounded bgl-dark align-items-center mb-3">
                          <svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#A4A4A4"/>
                            <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#A4A4A4"/>
                            <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#A4A4A4"/>
                          </svg>
                          <p class="mb-0 fs-14">Lorem ipsum dolor sit<br>
                            amet, consectetur </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion__item border-bottom mb-0">
                    <div class="d-flex flex-wrap align-items-center accordion__header collapsed rounded" data-toggle="collapse" data-target="#default_collapseOne2">
                      <div class="mb-lg-0 mb-3 d-flex align-items-center">
                        <div class="profile-image mr-4"> <img src="{{ asset('images/avatar/11.png') }}" alt="" width="63" class="rounded-circle"> <span class="bg-danger">
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip1)">
                              <path d="M10.4125 1.15001C10.225 1.53751 10.3906 2.00627 10.7781 2.19377C11.8563 2.71252 12.7688 3.51876 13.4188 4.52814C14.0844 5.56251 14.4375 6.76251 14.4375 8.00001C14.4375 11.55 11.55 14.4375 8 14.4375C4.45 14.4375 1.5625 11.55 1.5625 8.00002C1.5625 6.76251 1.91562 5.56252 2.57812 4.52501C3.225 3.51564 4.14062 2.70939 5.21875 2.19064C5.60625 2.00314 5.77187 1.53752 5.58437 1.14689C5.39687 0.759391 4.93125 0.593765 4.54062 0.781265C3.2 1.42502 2.06562 2.42501 1.2625 3.68126C0.4375 4.96877 -4.16897e-07 6.46251 -3.49691e-07 8.00002C-2.56258e-07 10.1375 0.83125 12.1469 2.34375 13.6563C3.85313 15.1688 5.8625 16 8 16C10.1375 16 12.1469 15.1688 13.6563 13.6563C15.1688 12.1438 16 10.1375 16 8.00001C16 6.46251 15.5625 4.96876 14.7344 3.68126C13.9281 2.42814 12.7938 1.42501 11.4563 0.781265C11.0656 0.59689 10.6 0.759389 10.4125 1.15001Z" fill="white"/>
                              <path d="M11.0407 7.58437C11.1938 7.43125 11.2688 7.23125 11.2688 7.03125C11.2688 6.83125 11.1938 6.63125 11.0407 6.47812L9.07503 4.5125C8.78753 4.225 8.40628 4.06875 8.00315 4.06875C7.60003 4.06875 7.21565 4.22813 6.93127 4.5125L4.96565 6.47812C4.6594 6.78437 4.6594 7.27812 4.96565 7.58437C5.2719 7.89062 5.76565 7.89062 6.0719 7.58437L7.22502 6.43125L7.22502 10.8719C7.22502 11.3031 7.57503 11.6531 8.00628 11.6531C8.43753 11.6531 8.78753 11.3031 8.78753 10.8719L8.78753 6.42812L9.94065 7.58125C10.2407 7.8875 10.7344 7.8875 11.0407 7.58437Z" fill="white"/>
                            </g>
                            <defs>
                              <clipPath id="clip1">
                                <rect width="16" height="16" fill="white" transform="translate(0 16) rotate(-90)"/>
                              </clipPath>
                            </defs>
                          </svg>
                          </span> </div>
                        <div>
                          <h6 class="fs-16 font-w700 mb-0"><a class="text-black" href="javascript:void(0)">Andrew Lee</a></h6>
                        </div>
                      </div>
                      <span class="mb-lg-0 mb-3 text-black px-2">June 3, 2020 <br>
                      04:29 AM</span> <span class="mb-lg-0 mb-3 text-black font-w600 px-2">+$2,351</span> <span class="mb-lg-0 mb-3 text-black font-w600 px-2">MasterCard 404</span> <a class="mb-lg-0 mb-3 btn btn-outline-dark btn-md btn-rounded mx-2" href="javascript:void(0)">Canceled</a> <span class="accordion__header--indicator"></span> </div>
                    <div id="default_collapseOne2" class="collapse accordion__body" data-parent="#accordion-one">
                      <div class="d-flex flex-wrap align-items-center accordion__body--text p-0">
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">ID Payment</p>
                          <span class="text-black font-w500">#00123521</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Payment Method</p>
                          <span class="text-black font-w500">MasterCard 404</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Invoice Date</p>
                          <span class="text-black font-w500">April 29, 2020</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Due Date</p>
                          <span class="text-black font-w500">June 5, 2020</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Date Paid</p>
                          <span class="text-black font-w500">June 4, 2020</span> </div>
                        <div class="d-flex p-3 rounded bgl-dark align-items-center mb-3">
                          <svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#A4A4A4"/>
                            <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#A4A4A4"/>
                            <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#A4A4A4"/>
                          </svg>
                          <p class="mb-0 fs-14">Lorem ipsum dolor sit<br>
                            amet, consectetur </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion__item border-bottom mb-0">
                    <div class="d-flex flex-wrap align-items-center accordion__header collapsed rounded" data-toggle="collapse" data-target="#default_collapseOne3">
                      <div class="mb-lg-0 mb-3 d-flex align-items-center">
                        <div class="profile-image mr-4"> <img src="{{ asset('images/avatar/12.png') }}" alt="" width="63" class="rounded-circle"> <span class="bg-success">
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip2)">
                              <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"/>
                              <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"/>
                            </g>
                            <defs>
                              <clipPath id="clip2">
                                <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"/>
                              </clipPath>
                            </defs>
                          </svg>
                          </span> </div>
                        <div>
                          <h6 class="fs-16 font-w700 mb-0"><a class="text-black" href="javascript:void(0)">Olivia Brownlee</a></h6>
                        </div>
                      </div>
                      <span class="mb-lg-0 mb-3 text-black px-2">June 4, 2020 <br>
                      02:37 AM</span> <span class="mb-lg-0 mb-3 text-black font-w600 px-2">+$3,543</span> <span class="mb-lg-0 mb-3 text-black font-w600 px-2">MasterCard 404</span> <a class="mb-lg-0 mb-3 btn btn-outline-success btn-md btn-rounded mx-2" href="javascript:void(0)">Completed</a> <span class="accordion__header--indicator"></span> </div>
                    <div id="default_collapseOne3" class="collapse accordion__body" data-parent="#accordion-one">
                      <div class="d-flex flex-wrap align-items-center accordion__body--text p-0">
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">ID Payment</p>
                          <span class="text-black font-w500">#00123521</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Payment Method</p>
                          <span class="text-black font-w500">MasterCard 404</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Invoice Date</p>
                          <span class="text-black font-w500">April 29, 2020</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Due Date</p>
                          <span class="text-black font-w500">June 5, 2020</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Date Paid</p>
                          <span class="text-black font-w500">June 4, 2020</span> </div>
                        <div class="d-flex p-3 rounded bgl-dark align-items-center mb-3">
                          <svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#A4A4A4"/>
                            <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#A4A4A4"/>
                            <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#A4A4A4"/>
                          </svg>
                          <p class="mb-0 fs-14">Lorem ipsum dolor sit<br>
                            amet, consectetur </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion__item border-bottom mb-0">
                    <div class="d-flex flex-wrap align-items-center accordion__header collapsed rounded" data-toggle="collapse" data-target="#default_collapseOne4">
                      <div class="mb-lg-0 mb-3 d-flex align-items-center">
                        <div class="profile-image mr-4"> <img src="{{ asset('images/avatar/14.png') }}" alt="" width="63" class="rounded-circle"> <span class="bg-success">
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip4)">
                              <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"/>
                              <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"/>
                            </g>
                            <defs>
                              <clipPath id="clip4">
                                <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"/>
                              </clipPath>
                            </defs>
                          </svg>
                          </span> </div>
                        <div>
                          <h6 class="fs-16 font-w700 mb-0"><a class="text-black" href="javascript:void(0)">Popo Store</a></h6>
                          <span class="fs-14">Online Shop</span> </div>
                      </div>
                      <span class="mb-lg-0 mb-3 text-black px-2">June 5, 2020 <br>
                      08:22 AM</span> <span class="mb-lg-0 mb-3 text-black font-w600 px-2">+$5,553</span> <span class="mb-lg-0 mb-3 text-black font-w600 px-2">MasterCard 404</span> <a class="mb-lg-0 mb-3 btn btn-outline-warning btn-md btn-rounded mx-2" href="javascript:void(0)">Pending</a> <span class="accordion__header--indicator"></span> </div>
                    <div id="default_collapseOne4" class="collapse accordion__body" data-parent="#accordion-one">
                      <div class="d-flex flex-wrap align-items-center accordion__body--text p-0">
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">ID Payment</p>
                          <span class="text-black font-w500">#00123521</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Payment Method</p>
                          <span class="text-black font-w500">MasterCard 404</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Invoice Date</p>
                          <span class="text-black font-w500">April 29, 2020</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Due Date</p>
                          <span class="text-black font-w500">June 5, 2020</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Date Paid</p>
                          <span class="text-black font-w500">June 4, 2020</span> </div>
                        <div class="d-flex p-3 rounded bgl-dark align-items-center mb-3">
                          <svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#A4A4A4"/>
                            <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#A4A4A4"/>
                            <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#A4A4A4"/>
                          </svg>
                          <p class="mb-0 fs-14">Lorem ipsum dolor sit<br>
                            amet, consectetur </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion__item border-bottom mb-0">
                    <div class="d-flex flex-wrap align-items-center accordion__header collapsed rounded" data-toggle="collapse" data-target="#default_collapseOne5">
                      <div class="mb-lg-0 mb-3 d-flex align-items-center">
                        <div class="profile-image mr-4"> <img src="{{ asset('images/avatar/13.png') }}" alt="" width="63" class="rounded-circle"> <span class="bg-danger">
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip6)">
                              <path d="M10.4125 1.15001C10.225 1.53751 10.3906 2.00627 10.7781 2.19377C11.8563 2.71252 12.7688 3.51876 13.4188 4.52814C14.0844 5.56251 14.4375 6.76251 14.4375 8.00001C14.4375 11.55 11.55 14.4375 8 14.4375C4.45 14.4375 1.5625 11.55 1.5625 8.00002C1.5625 6.76251 1.91562 5.56252 2.57812 4.52501C3.225 3.51564 4.14062 2.70939 5.21875 2.19064C5.60625 2.00314 5.77187 1.53752 5.58437 1.14689C5.39687 0.759391 4.93125 0.593765 4.54062 0.781265C3.2 1.42502 2.06562 2.42501 1.2625 3.68126C0.4375 4.96877 -4.16897e-07 6.46251 -3.49691e-07 8.00002C-2.56258e-07 10.1375 0.83125 12.1469 2.34375 13.6563C3.85313 15.1688 5.8625 16 8 16C10.1375 16 12.1469 15.1688 13.6563 13.6563C15.1688 12.1438 16 10.1375 16 8.00001C16 6.46251 15.5625 4.96876 14.7344 3.68126C13.9281 2.42814 12.7938 1.42501 11.4563 0.781265C11.0656 0.59689 10.6 0.759389 10.4125 1.15001Z" fill="white"/>
                              <path d="M11.0407 7.58437C11.1938 7.43125 11.2688 7.23125 11.2688 7.03125C11.2688 6.83125 11.1938 6.63125 11.0407 6.47812L9.07503 4.5125C8.78753 4.225 8.40628 4.06875 8.00315 4.06875C7.60003 4.06875 7.21565 4.22813 6.93127 4.5125L4.96565 6.47812C4.6594 6.78437 4.6594 7.27812 4.96565 7.58437C5.2719 7.89062 5.76565 7.89062 6.0719 7.58437L7.22502 6.43125L7.22502 10.8719C7.22502 11.3031 7.57503 11.6531 8.00628 11.6531C8.43753 11.6531 8.78753 11.3031 8.78753 10.8719L8.78753 6.42812L9.94065 7.58125C10.2407 7.8875 10.7344 7.8875 11.0407 7.58437Z" fill="white"/>
                            </g>
                            <defs>
                              <clipPath id="clip6">
                                <rect width="16" height="16" fill="white" transform="translate(0 16) rotate(-90)"/>
                              </clipPath>
                            </defs>
                          </svg>
                          </span> </div>
                        <div>
                          <h6 class="fs-16 font-w700 mb-0"><a class="text-black" href="javascript:void(0)">Peter Parkur</a></h6>
                        </div>
                      </div>
                      <span class="mb-lg-0 mb-3 text-black px-2">June 10, 2020 <br>
                      08:22 AM</span> <span class="mb-lg-0 mb-3 text-black font-w600 px-2">+$5,553</span> <span class="mb-lg-0 mb-3 text-black font-w600 px-2">MasterCard 404</span> <a class="mb-lg-0 mb-3 btn btn-outline-warning btn-md btn-rounded mx-2" href="javascript:void(0)">Pending</a> <span class="accordion__header--indicator"></span> </div>
                    <div id="default_collapseOne5" class="collapse accordion__body" data-parent="#accordion-one">
                      <div class="d-flex flex-wrap align-items-center accordion__body--text p-0">
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">ID Payment</p>
                          <span class="text-black font-w500">#00123521</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Payment Method</p>
                          <span class="text-black font-w500">MasterCard 404</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Invoice Date</p>
                          <span class="text-black font-w500">April 29, 2020</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Due Date</p>
                          <span class="text-black font-w500">June 5, 2020</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Date Paid</p>
                          <span class="text-black font-w500">June 4, 2020</span> </div>
                        <div class="d-flex p-3 rounded bgl-dark align-items-center mb-3">
                          <svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#A4A4A4"/>
                            <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#A4A4A4"/>
                            <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#A4A4A4"/>
                          </svg>
                          <p class="mb-0 fs-14">Lorem ipsum dolor sit<br>
                            amet, consectetur </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="Weekly" role="tabpanel">
                <div id="accordion-two" class="accordion accordion-primary">
                  <div class="accordion__item border-bottom mb-0">
                    <div class="d-flex flex-wrap align-items-center accordion__header collapsed rounded" data-toggle="collapse" data-target="#default_collapseOne1d">
                      <div class="mb-lg-0 mb-3 d-flex align-items-center">
                        <div class="profile-image mr-4"> <img src="{{ asset('images/avatar/10.png') }}" alt="" width="63" class="rounded-circle"> <span class="bg-success">
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip7)">
                              <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"/>
                              <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"/>
                            </g>
                            <defs>
                              <clipPath id="clip7">
                                <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"/>
                              </clipPath>
                            </defs>
                          </svg>
                          </span> </div>
                        <div>
                          <h6 class="fs-16 font-w700 mb-0"><a class="text-black" href="javascript:void(0)">XYZ Store ID</a></h6>
                          <span class="fs-14">Online Shop</span> </div>
                      </div>
                      <span class="mb-lg-0 mb-3 text-black px-2">June 1, 2020 <br>
                      08:22 AM</span> <span class="mb-lg-0 mb-3 text-black font-w600 px-2">+$5,553</span> <span class="mb-lg-0 mb-3 text-black font-w600 px-2">MasterCard 404</span> <a class="mb-lg-0 mb-3 btn btn-outline-success btn-md btn-rounded mx-2" href="javascript:void(0)">Completed</a> <span class="accordion__header--indicator"></span> </div>
                    <div id="default_collapseOne1d" class="collapse accordion__body" data-parent="#accordion-one">
                      <div class="d-flex flex-wrap align-items-center accordion__body--text p-0">
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">ID Payment</p>
                          <span class="text-black font-w500">#00123521</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Payment Method</p>
                          <span class="text-black font-w500">MasterCard 404</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Invoice Date</p>
                          <span class="text-black font-w500">April 29, 2020</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Due Date</p>
                          <span class="text-black font-w500">June 5, 2020</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Date Paid</p>
                          <span class="text-black font-w500">June 4, 2020</span> </div>
                        <div class="d-flex p-3 rounded bgl-dark align-items-center mb-3">
                          <svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#A4A4A4"/>
                            <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#A4A4A4"/>
                            <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#A4A4A4"/>
                          </svg>
                          <p class="mb-0 fs-14">Lorem ipsum dolor sit<br>
                            amet, consectetur </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion__item border-bottom mb-0">
                    <div class="d-flex flex-wrap align-items-center accordion__header collapsed rounded" data-toggle="collapse" data-target="#default_collapseOne222">
                      <div class="mb-lg-0 mb-3 d-flex align-items-center">
                        <div class="profile-image mr-4"> <img src="{{ asset('images/avatar/11.png') }}" alt="" width="63" class="rounded-circle"> <span class="bg-danger">
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip8)">
                              <path d="M10.4125 1.15001C10.225 1.53751 10.3906 2.00627 10.7781 2.19377C11.8563 2.71252 12.7688 3.51876 13.4188 4.52814C14.0844 5.56251 14.4375 6.76251 14.4375 8.00001C14.4375 11.55 11.55 14.4375 8 14.4375C4.45 14.4375 1.5625 11.55 1.5625 8.00002C1.5625 6.76251 1.91562 5.56252 2.57812 4.52501C3.225 3.51564 4.14062 2.70939 5.21875 2.19064C5.60625 2.00314 5.77187 1.53752 5.58437 1.14689C5.39687 0.759391 4.93125 0.593765 4.54062 0.781265C3.2 1.42502 2.06562 2.42501 1.2625 3.68126C0.4375 4.96877 -4.16897e-07 6.46251 -3.49691e-07 8.00002C-2.56258e-07 10.1375 0.83125 12.1469 2.34375 13.6563C3.85313 15.1688 5.8625 16 8 16C10.1375 16 12.1469 15.1688 13.6563 13.6563C15.1688 12.1438 16 10.1375 16 8.00001C16 6.46251 15.5625 4.96876 14.7344 3.68126C13.9281 2.42814 12.7938 1.42501 11.4563 0.781265C11.0656 0.59689 10.6 0.759389 10.4125 1.15001Z" fill="white"/>
                              <path d="M11.0407 7.58437C11.1938 7.43125 11.2688 7.23125 11.2688 7.03125C11.2688 6.83125 11.1938 6.63125 11.0407 6.47812L9.07503 4.5125C8.78753 4.225 8.40628 4.06875 8.00315 4.06875C7.60003 4.06875 7.21565 4.22813 6.93127 4.5125L4.96565 6.47812C4.6594 6.78437 4.6594 7.27812 4.96565 7.58437C5.2719 7.89062 5.76565 7.89062 6.0719 7.58437L7.22502 6.43125L7.22502 10.8719C7.22502 11.3031 7.57503 11.6531 8.00628 11.6531C8.43753 11.6531 8.78753 11.3031 8.78753 10.8719L8.78753 6.42812L9.94065 7.58125C10.2407 7.8875 10.7344 7.8875 11.0407 7.58437Z" fill="white"/>
                            </g>
                            <defs>
                              <clipPath id="clip8">
                                <rect width="16" height="16" fill="white" transform="translate(0 16) rotate(-90)"/>
                              </clipPath>
                            </defs>
                          </svg>
                          </span> </div>
                        <div>
                          <h6 class="fs-16 font-w700 mb-0"><a class="text-black" href="javascript:void(0)">Andrew Lee</a></h6>
                        </div>
                      </div>
                      <span class="mb-lg-0 mb-3 text-black px-2">June 3, 2020 <br>
                      04:29 AM</span> <span class="mb-lg-0 mb-3 text-black font-w600 px-2">+$2,351</span> <span class="mb-lg-0 mb-3 text-black font-w600 px-2">MasterCard 404</span> <a class="mb-lg-0 mb-3 btn btn-outline-dark btn-md btn-rounded mx-2" href="javascript:void(0)">Canceled</a> <span class="accordion__header--indicator"></span> </div>
                    <div id="default_collapseOne222" class="collapse accordion__body" data-parent="#accordion-one">
                      <div class="d-flex flex-wrap align-items-center accordion__body--text p-0">
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">ID Payment</p>
                          <span class="text-black font-w500">#00123521</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Payment Method</p>
                          <span class="text-black font-w500">MasterCard 404</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Invoice Date</p>
                          <span class="text-black font-w500">April 29, 2020</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Due Date</p>
                          <span class="text-black font-w500">June 5, 2020</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Date Paid</p>
                          <span class="text-black font-w500">June 4, 2020</span> </div>
                        <div class="d-flex p-3 rounded bgl-dark align-items-center mb-3">
                          <svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#A4A4A4"/>
                            <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#A4A4A4"/>
                            <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#A4A4A4"/>
                          </svg>
                          <p class="mb-0 fs-14">Lorem ipsum dolor sit<br>
                            amet, consectetur </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion__item border-bottom mb-0">
                    <div class="d-flex flex-wrap align-items-center accordion__header collapsed rounded" data-toggle="collapse" data-target="#default_collapseOne321">
                      <div class="mb-lg-0 mb-3 d-flex align-items-center">
                        <div class="profile-image mr-4"> <img src="{{ asset('images/avatar/12.png') }}" alt="" width="63" class="rounded-circle"> <span class="bg-success">
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip9)">
                              <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"/>
                              <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"/>
                            </g>
                            <defs>
                              <clipPath id="clip9">
                                <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"/>
                              </clipPath>
                            </defs>
                          </svg>
                          </span> </div>
                        <div>
                          <h6 class="fs-16 font-w700 mb-0"><a class="text-black" href="javascript:void(0)">Olivia Brownlee</a></h6>
                        </div>
                      </div>
                      <span class="mb-lg-0 mb-3 text-black px-2">June 4, 2020 <br>
                      02:37 AM</span> <span class="mb-lg-0 mb-3 text-black font-w600 px-2">+$3,543</span> <span class="mb-lg-0 mb-3 text-black font-w600 px-2">MasterCard 404</span> <a class="mb-lg-0 mb-3 btn btn-outline-success btn-md btn-rounded mx-2" href="javascript:void(0)">Completed</a> <span class="accordion__header--indicator"></span> </div>
                    <div id="default_collapseOne321" class="collapse accordion__body" data-parent="#accordion-one">
                      <div class="d-flex flex-wrap align-items-center accordion__body--text p-0">
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">ID Payment</p>
                          <span class="text-black font-w500">#00123521</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Payment Method</p>
                          <span class="text-black font-w500">MasterCard 404</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Invoice Date</p>
                          <span class="text-black font-w500">April 29, 2020</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Due Date</p>
                          <span class="text-black font-w500">June 5, 2020</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Date Paid</p>
                          <span class="text-black font-w500">June 4, 2020</span> </div>
                        <div class="d-flex p-3 rounded bgl-dark align-items-center mb-3">
                          <svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#A4A4A4"/>
                            <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#A4A4A4"/>
                            <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#A4A4A4"/>
                          </svg>
                          <p class="mb-0 fs-14">Lorem ipsum dolor sit<br>
                            amet, consectetur </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="Today" role="tabpanel">
                <div id="accordion-three" class="accordion accordion-primary">
                  <div class="accordion__item border-bottom mb-0">
                    <div class="d-flex flex-wrap align-items-center accordion__header collapsed rounded" data-toggle="collapse" data-target="#default_collapseOne51">
                      <div class="mb-lg-0 mb-3 d-flex align-items-center">
                        <div class="profile-image mr-4"> <img src="{{ asset('images/avatar/13.png') }}" alt="" width="63" class="rounded-circle"> <span class="bg-danger">
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip10)">
                              <path d="M10.4125 1.15001C10.225 1.53751 10.3906 2.00627 10.7781 2.19377C11.8563 2.71252 12.7688 3.51876 13.4188 4.52814C14.0844 5.56251 14.4375 6.76251 14.4375 8.00001C14.4375 11.55 11.55 14.4375 8 14.4375C4.45 14.4375 1.5625 11.55 1.5625 8.00002C1.5625 6.76251 1.91562 5.56252 2.57812 4.52501C3.225 3.51564 4.14062 2.70939 5.21875 2.19064C5.60625 2.00314 5.77187 1.53752 5.58437 1.14689C5.39687 0.759391 4.93125 0.593765 4.54062 0.781265C3.2 1.42502 2.06562 2.42501 1.2625 3.68126C0.4375 4.96877 -4.16897e-07 6.46251 -3.49691e-07 8.00002C-2.56258e-07 10.1375 0.83125 12.1469 2.34375 13.6563C3.85313 15.1688 5.8625 16 8 16C10.1375 16 12.1469 15.1688 13.6563 13.6563C15.1688 12.1438 16 10.1375 16 8.00001C16 6.46251 15.5625 4.96876 14.7344 3.68126C13.9281 2.42814 12.7938 1.42501 11.4563 0.781265C11.0656 0.59689 10.6 0.759389 10.4125 1.15001Z" fill="white"/>
                              <path d="M11.0407 7.58437C11.1938 7.43125 11.2688 7.23125 11.2688 7.03125C11.2688 6.83125 11.1938 6.63125 11.0407 6.47812L9.07503 4.5125C8.78753 4.225 8.40628 4.06875 8.00315 4.06875C7.60003 4.06875 7.21565 4.22813 6.93127 4.5125L4.96565 6.47812C4.6594 6.78437 4.6594 7.27812 4.96565 7.58437C5.2719 7.89062 5.76565 7.89062 6.0719 7.58437L7.22502 6.43125L7.22502 10.8719C7.22502 11.3031 7.57503 11.6531 8.00628 11.6531C8.43753 11.6531 8.78753 11.3031 8.78753 10.8719L8.78753 6.42812L9.94065 7.58125C10.2407 7.8875 10.7344 7.8875 11.0407 7.58437Z" fill="white"/>
                            </g>
                            <defs>
                              <clipPath id="clip10">
                                <rect width="16" height="16" fill="white" transform="translate(0 16) rotate(-90)"/>
                              </clipPath>
                            </defs>
                          </svg>
                          </span> </div>
                        <div>
                          <h6 class="fs-16 font-w700 mb-0"><a class="text-black" href="javascript:void(0)">Peter Parkur</a></h6>
                        </div>
                      </div>
                      <span class="mb-lg-0 mb-3 text-black px-2">June 10, 2020 <br>
                      08:22 AM</span> <span class="mb-lg-0 mb-3 text-black font-w600 px-2">+$5,553</span> <span class="mb-lg-0 mb-3 text-black font-w600 px-2">MasterCard 404</span> <a class="mb-lg-0 mb-3 btn btn-outline-warning btn-md btn-rounded mx-2" href="javascript:void(0)">Pending</a> <span class="accordion__header--indicator"></span> </div>
                    <div id="default_collapseOne51" class="collapse accordion__body" data-parent="#accordion-one">
                      <div class="d-flex flex-wrap align-items-center accordion__body--text p-0">
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">ID Payment</p>
                          <span class="text-black font-w500">#00123521</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Payment Method</p>
                          <span class="text-black font-w500">MasterCard 404</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Invoice Date</p>
                          <span class="text-black font-w500">April 29, 2020</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Due Date</p>
                          <span class="text-black font-w500">June 5, 2020</span> </div>
                        <div class="mr-3 mb-3">
                          <p class="fs-12 mb-2">Date Paid</p>
                          <span class="text-black font-w500">June 4, 2020</span> </div>
                        <div class="d-flex p-3 rounded bgl-dark align-items-center mb-3">
                          <svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#A4A4A4"/>
                            <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#A4A4A4"/>
                            <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#A4A4A4"/>
                          </svg>
                          <p class="mb-0 fs-14">Lorem ipsum dolor sit<br>
                            amet, consectetur </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-xxl-12">
      <div class="row">
        <div class="col-xl-12 col-xxl-6 col-sm-6">
          <div class="card bg-primary">
            <div class="card-body p-3">
              <div class="d-flex align-items-center"> <span class="bg-white rounded-circle p-3 mr-4">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.98" clip-path="">
                    <path d="M9.77812 2.0125C10.1062 2.69062 9.81641 3.51094 9.13828 3.83906C7.25156 4.74688 5.65469 6.15781 4.51719 7.92422C3.35234 9.73437 2.73438 11.8344 2.73438 14C2.73438 20.2125 7.7875 25.2656 14 25.2656C20.2125 25.2656 25.2656 20.2125 25.2656 14C25.2656 11.8344 24.6477 9.73437 23.4883 7.91875C22.3563 6.15234 20.7539 4.74141 18.8672 3.83359C18.1891 3.50547 17.8992 2.69063 18.2273 2.00703C18.5555 1.32891 19.3703 1.03906 20.0539 1.36719C22.4 2.49375 24.3852 4.24375 25.7906 6.44219C27.2344 8.69531 28 11.3094 28 14C28 17.7406 26.5453 21.257 23.8984 23.8984C21.257 26.5453 17.7406 28 14 28C10.2594 28 6.74297 26.5453 4.10156 23.8984C1.45469 21.2516 1.22342e-07 17.7406 1.66948e-07 14C1.99034e-07 11.3094 0.765625 8.69531 2.21484 6.44219C3.62578 4.24922 5.61094 2.49375 7.95156 1.36719C8.63516 1.04453 9.45 1.3289 9.77812 2.0125Z" fill="#1EAAE7"/>
                    <path d="M8.67896 13.2726C8.41099 13.0047 8.27974 12.6547 8.27974 12.3047C8.27974 11.9547 8.41099 11.6047 8.67896 11.3367L12.1188 7.89685C12.6219 7.39373 13.2891 7.12029 13.9946 7.12029C14.7 7.12029 15.3727 7.3992 15.8704 7.89685L19.3102 11.3367C19.8461 11.8726 19.8461 12.7367 19.3102 13.2726C18.7743 13.8086 17.9102 13.8086 17.3743 13.2726L15.3563 11.2547L15.3563 19.0258C15.3563 19.7804 14.7438 20.3929 13.9891 20.3929C13.2344 20.3929 12.6219 19.7804 12.6219 19.0258L12.6219 11.2492L10.604 13.2672C10.079 13.8031 9.21489 13.8031 8.67896 13.2726Z" fill="#1EAAE7"/>
                  </g>
                  <defs>
                    <clipPath id="clip11">
                      <rect width="28" height="28" fill="white" transform="matrix(1.19249e-08 -1 -1 -1.19249e-08 28 28)"/>
                    </clipPath>
                  </defs>
                </svg>
                </span> <span class="fs-20 text-white">Transfer </span> </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-xxl-6 col-sm-6">
          <div class="card bg-success">
            <div class="card-body p-3">
              <div class="d-flex align-items-center"> <span class="bg-white rounded-circle p-3 mr-4">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22.1667 1.16669H5.83342C4.59574 1.16669 3.40875 1.65835 2.53358 2.53352C1.65841 3.40869 1.16675 4.59568 1.16675 5.83335V14C1.16675 14.3094 1.28966 14.6062 1.50846 14.825C1.72725 15.0438 2.024 15.1667 2.33341 15.1667H8.16675V25.6667C8.1662 25.8898 8.22965 26.1085 8.34959 26.2966C8.46952 26.4848 8.6409 26.6346 8.84342 26.7284C9.0464 26.8218 9.27195 26.855 9.49325 26.824C9.71455 26.7929 9.92228 26.699 10.0917 26.5534L13.4167 23.7067L16.7417 26.5534C16.9531 26.7341 17.222 26.8334 17.5001 26.8334C17.7782 26.8334 18.0471 26.7341 18.2584 26.5534L21.5834 23.7067L24.9084 26.5534C25.1197 26.7341 25.3887 26.8334 25.6667 26.8334C25.8355 26.8322 26.0023 26.7964 26.1567 26.7284C26.3593 26.6346 26.5306 26.4848 26.6506 26.2966C26.7705 26.1085 26.834 25.8898 26.8334 25.6667V5.83335C26.8334 4.59568 26.3418 3.40869 25.4666 2.53352C24.5914 1.65835 23.4044 1.16669 22.1667 1.16669ZM3.50008 12.8334V5.83335C3.50008 5.21452 3.74591 4.62102 4.1835 4.18344C4.62108 3.74585 5.21458 3.50002 5.83342 3.50002C6.45225 3.50002 7.04575 3.74585 7.48333 4.18344C7.92092 4.62102 8.16675 5.21452 8.16675 5.83335V12.8334H3.50008ZM24.5001 23.135L22.3417 21.28C22.1304 21.0993 21.8615 20.9999 21.5834 20.9999C21.3053 20.9999 21.0364 21.0993 20.8251 21.28L17.5001 24.1267L14.1751 21.28C13.9638 21.0993 13.6948 20.9999 13.4167 20.9999C13.1387 20.9999 12.8697 21.0993 12.6584 21.28L10.5001 23.135V5.83335C10.4986 5.01375 10.2813 4.20898 9.87008 3.50002H22.1667C22.7856 3.50002 23.3791 3.74585 23.8167 4.18344C24.2542 4.62102 24.5001 5.21452 24.5001 5.83335V23.135ZM22.1667 7.00002C22.1667 7.30944 22.0438 7.60619 21.825 7.82498C21.6062 8.04377 21.3095 8.16669 21.0001 8.16669H14.0001C13.6907 8.16669 13.3939 8.04377 13.1751 7.82498C12.9563 7.60619 12.8334 7.30944 12.8334 7.00002C12.8334 6.6906 12.9563 6.39386 13.1751 6.17506C13.3939 5.95627 13.6907 5.83335 14.0001 5.83335H21.0001C21.3095 5.83335 21.6062 5.95627 21.825 6.17506C22.0438 6.39386 22.1667 6.6906 22.1667 7.00002ZM22.1667 11.6667C22.1667 11.9761 22.0438 12.2729 21.825 12.4916C21.6062 12.7104 21.3095 12.8334 21.0001 12.8334H14.0001C13.6907 12.8334 13.3939 12.7104 13.1751 12.4916C12.9563 12.2729 12.8334 11.9761 12.8334 11.6667C12.8334 11.3573 12.9563 11.0605 13.1751 10.8417C13.3939 10.6229 13.6907 10.5 14.0001 10.5H21.0001C21.3095 10.5 21.6062 10.6229 21.825 10.8417C22.0438 11.0605 22.1667 11.3573 22.1667 11.6667ZM22.1667 16.3334C22.1667 16.6428 22.0438 16.9395 21.825 17.1583C21.6062 17.3771 21.3095 17.5 21.0001 17.5H14.0001C13.6907 17.5 13.3939 17.3771 13.1751 17.1583C12.9563 16.9395 12.8334 16.6428 12.8334 16.3334C12.8334 16.0239 12.9563 15.7272 13.1751 15.5084C13.3939 15.2896 13.6907 15.1667 14.0001 15.1667H21.0001C21.3095 15.1667 21.6062 15.2896 21.825 15.5084C22.0438 15.7272 22.1667 16.0239 22.1667 16.3334Z" fill="#2BC155"/>
                </svg>
                </span> <span class="fs-20 text-white">Send Invoices </span> </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header pb-0 border-0">
              <div>
                <h4 class="fs-20 text-black mb-0">Invoices Sent</h4>
                <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span> </div>
            </div>
            <div class="card-body">
              <div class="d-flex pb-3 border-bottom mb-3 align-items-center"> <img src="{{ asset('images/avatar/15.png') }}" alt="" class="rounded-circle mr-3" width="50">
                <div class="mr-auto">
                  <h6 class="fs-16 font-w600 mb-0"><a href="{!! url('/invoices'); !!}" class="text-black">FSoziety</a></h6>
                  <span class="fs-12">4h ago</span> </div>
                <span class="fs-16 text-black font-w600">$45</span> </div>
              <div class="d-flex align-items-center pb-3 border-bottom mb-3"> <img src="{{ asset('images/avatar/17.png') }}" alt="" class="rounded-circle mr-3" width="50">
                <div class="mr-auto">
                  <h6 class="fs-16 font-w600 mb-0"><a href="{!! url('/invoices'); !!}" class="text-black">David Ignis</a></h6>
                  <span class="fs-12">7h ago</span> </div>
                <span class="fs-16 text-black font-w600">$672</span> </div>
              <div class="d-flex align-items-center pb-3 border-bottom mb-3"> <img src="{{ asset('images/avatar/18.png') }}" alt="" class="rounded-circle mr-3" width="50">
                <div class="mr-auto">
                  <h6 class="fs-16 font-w600 mb-0"><a href="{!! url('/invoices'); !!}" class="text-black">Olivia Johan..</a></h6>
                  <span class="fs-12">4h ago</span> </div>
                <span class="fs-16 text-black font-w600">$769</span> </div>
              <div class="d-flex align-items-center pb-3 border-bottom mb-3"> <img src="{{ asset('images/avatar/16.png') }}" alt="" class="rounded-circle mr-3" width="50">
                <div class="mr-auto">
                  <h6 class="fs-16 font-w600 mb-0"><a href="{!! url('/invoices'); !!}" class="text-black">Stevan Store</a></h6>
                  <span class="fs-12">4h ago</span> </div>
                <span class="fs-16 text-black font-w600">$562</span> </div>
              <div class="d-flex align-items-center"> <img src="{{ asset('images/avatar/17.png') }}" alt="" class="rounded-circle mr-3" width="50">
                <div class="mr-auto">
                  <h6 class="fs-16 font-w600 mb-0"><a href="{!! url('/invoices'); !!}" class="text-black">Kidz Zoo</a></h6>
                  <span class="fs-12">4h ago</span> </div>
                <span class="fs-16 text-black font-w600">$776</span> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

			
@endsection