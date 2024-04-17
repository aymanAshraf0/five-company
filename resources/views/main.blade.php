
@extends('layouts.master')
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection

@section('content')
				<!-- row -->
				<div class="row row-sm mt-5" style="text-align: left;">
					<div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-danger-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="" >
									<h6 class="mb-3 tx-20 text-white">Visitors</h6>
								</div>
								<div class="form-group text-left">
									
									<select style="width: 25%; display: inline-block;" name="month" class="form-control" id="monthFilter">
										<option >select</option>
										<option value="1">January</option>
										<option value="2">February</option>
										<option value="3">March</option>
										<option value="4">April</option>
										<option value="5">May</option>
										<option value="6">June</option>
										<option value="7">July</option>
										<option value="8">August</option>
										<option value="9">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
									</select>
								</div>
								
								

								<button class="btn btn-success" onclick="filterVisitors()">Select</button>
								
								<div class="pb-0 mt-0 ">
									<div class="">
										<?php 
											use App\Models\Visit;
										?>
										<div id="visitorCount" class="text-center">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{$totalVisitors = Visit::count();}}</h4>
										</div>
									</div>
								</div>
							</div>
							<span id="compositeline2" class="pt-1"></span>
						</div>
					</div>
					<div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-primary-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-20 text-white">Subscribe</h6>
								</div>
								<div class="pb-0 mt-0 ">
									<div class="">
										<?php 
											use App\Models\Subscribe;
										?>
										<div class="text-center">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{$totalSubscribes= Subscribe::count();}}</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-success-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-20 text-white">Sliders</h6>
								</div>
								<div class="pb-0 mt-0 ">
									<div class="">
										<?php 
											use App\Models\Slider;
										?>
										<div class="text-center">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{$totalSliders= Slider::count();}}</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- row closed -->

			</div>
		</div>
		<!-- Container closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>	

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function filterVisitors() {
        var selectedMonth = document.getElementById('monthFilter').value;
        $.ajax({
            url: '{{ route("get-visitors-data") }}',
            method: 'POST',
            data: { month: selectedMonth, _token: '{{ csrf_token() }}' },
            success: function (data) {
                // تحديث محتوى العنصر الذي تريد عرض البيانات فيه
                document.getElementById('visitorCount').innerText = data;
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
</script>

@endsection
