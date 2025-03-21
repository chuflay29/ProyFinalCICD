{{-- Extends layout --}}
@extends('templatec.layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <h4>Peity</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Charts</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Peity</a></li>
    </ol>
  </div>
  <!-- row -->
  
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <h4 class="card-title mb-4">Attributes</h4>
              <div class=" row">
                <div class="col-md-2 col-sm-4 col-6">
                  <span class="data-attr" data-peity='{ "fill": ["rgb(30, 170, 231)", "rgba(30, 170, 231, .5)"], "innerRadius": 10, "radius": 40 }'>1/7</span>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mt-3 mt-md-0"><span class="data-attr" data-peity='{ "fill": ["rgb(172, 57, 212)", "rgba(172, 57, 212, .5)"], "innerRadius": 14, "radius": 36 }'>2/7</span>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mt-3 mt-md-0"><span class="data-attr" data-peity='{ "fill": ["rgb(43, 193, 85)", "rgba(43, 193, 85, .5)"], "innerRadius": 16, "radius": 32 }'>3/7</span>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mt-3 mt-md-0"><span class="data-attr" data-peity='{ "fill": ["rgb(255, 46, 46)", "rgba(255, 46, 46, .5)"],  "innerRadius": 18, "radius": 28 }'>4/7</span>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mt-3 mt-md-0"><span class="data-attr" data-peity='{ "fill": ["rgb(255, 149, 72)", "rgba(255, 149, 72, .5)"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mt-3 mt-md-0"><span class="data-attr" data-peity='{ "fill": ["#461EE7", "rgba(70, 30, 231, .1)"], "innerRadius": 18, "radius": 20 }'>6/7</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-body pb-0">
          <div class="row">
            <div class="col-lg-4 col-md-4 pb-4">
              <h4 class="card-title mb-4">Bar Chart</h4>
              <div class="px-4"><span class="bar" data-peity='{ "fill": ["rgb(30, 170, 231)", "rgba(30, 170, 231, .5)"]}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 pb-4">
              <h4 class="card-title mb-4">Bar Chart</h4>
              <div class="px-4"><span class="bar" data-peity='{ "fill": ["rgb(0, 0, 128)", "rgb(7, 135, 234)"]}'>6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 pb-4">
              <h4 class="card-title mb-4">Bar Chart</h4>
              <div class="px-4"><span class="bar" data-peity='{ "fill": ["rgb(7, 135, 234)", "rgb(0, 0, 128)"]}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-body pb-0">
          <div class="row">
            <div class="col-lg-4 col-md-4 pb-4">
              <h4 class="card-title mb-4">Line Chart</h4>
              <div class="px-4"><span class="peity-line" data-width="100%">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 pb-4">
              <h4 class="card-title mb-4">Line Chart</h4>
              <div class="px-4"><span class="peity-line" data-width="100%">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 pb-4">
              <h4 class="card-title mb-4">Line Chart</h4>
              <div class="px-4"><span class="peity-line" data-width="100%">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
              <h4 class="card-title mb-4">Pie 1</h4>
              <div class=""><span class="pie" data-peity='{ "fill": ["#F44336", "rgba(244, 67, 54, .1)"]}'>5/8</span>
              </div>
            </div>
            <div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
              <h4 class="card-title mb-4">Pie 2</h4>
              <div class=""><span class="pie" data-peity='{ "fill": ["#34C73B", "rgba(52, 199, 59, .1)"]}'>250/650</span>
              </div>
            </div>
            <div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
              <h4 class="card-title mb-4">Pie 3</h4>
              <div class=""><span class="pie" data-peity='{ "fill": ["#00A2FF", "rgba(0, 162, 255, .1)"]}'>0.52/1.561</span>
              </div>
            </div>
            <div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
              <h4 class="card-title mb-4">Pie 4</h4>
              <div class=""><span class="pie" data-peity='{ "fill": ["#28D6C3 ", "rgba(40, 214, 195, .1)"]}'>1,4</span>
              </div>
            </div>
            <div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
              <h4 class="card-title mb-4">Pie 5</h4>
              <div class=""><span class="pie" data-peity='{ "fill": ["#0000FF", "rgba(0, 0, 255, .1)"]}'>226,134</span>
              </div>
            </div>
            <div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
              <h4 class="card-title mb-4">Pie 6</h4>
              <div class=""><span class="pie" data-peity='{ "fill": ["#DCDCDC", "rgba(220, 220, 220, .1)"]}'>0.52,1.041</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
              <h4 class="card-title mb-4">Donut 1</h4>
              <div class=""><span class="donut" data-peity='{ "fill": ["rgb(30, 170, 231)", "rgba(30, 170, 231, .5)"]}'>5/8</span>
              </div>
            </div>
            <div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
              <h4 class="card-title mb-4">Donut 2</h4>
              <div class=""><span class="donut" data-peity='{ "fill": ["rgb(172, 57, 212)", "rgba(172, 57, 212, .5)"]}'>250/650</span>
              </div>
            </div>
            <div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
              <h4 class="card-title mb-4">Donut 3</h4>
              <div class=""><span class="donut" data-peity='{ "fill": ["rgb(43, 193, 85)", "rgba(43, 193, 85, .5)"]}'>0.52/1.561</span>
              </div>
            </div>
            <div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
              <h4 class="card-title mb-4">Donut 4</h4>
              <div class=""><span class="donut" data-peity='{ "fill": ["rgb(255, 46, 46)", "rgba(255, 46, 46, .5)", "rgba(255, 46, 46, .3)",]}'>1,4,5</span>
              </div>
            </div>
            <div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
              <h4 class="card-title mb-4">Donut 5</h4>
              <div class=""><span class="donut" data-peity='{ "fill": ["rgb(255, 149, 72)", "rgba(255, 149, 72, .5)"]}'>226,134</span>
              </div>
            </div>
            <div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
              <h4 class="card-title mb-4">Donut 6</h4>
              <div class=""><span class="donut" data-peity='{ "fill": ["#461EE7", "rgba(70, 30, 231, .1)"]}'>0.52,1.041</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-body pb-0">
          <div class="row">
            <div class="col-lg-3 col-6 pb-4">
              <h4 class="card-title mb-4">Bar Color 1</h4>
              <div><span class="bar-colours-1">5,3,9,6,5,9,7,3,5,2</span>
              </div>
            </div>
            <div class="col-lg-3 col-6 pb-4">
              <h4 class="card-title mb-4">Bar Color 2</h4>
              <div><span class="bar-colours-2">5,3,2,-1,-3,-2,2,3,5,2</span>
              </div>
            </div>
            <div class="col-lg-3 col-6 pb-4">
              <h4 class="card-title mb-4">Bar Color 3</h4>
              <div><span class="bar-colours-3">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
              </div>
            </div>
            <div class="col-lg-3 col-6 pb-4">
              <h4 class="card-title mb-4">Pie Color</h4>
              <div><span class="pie-colours-2">5,3,9,6,5</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <h4 class="card-title mb-4">Live Update</h4>
              <div class=""><span class="updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection			