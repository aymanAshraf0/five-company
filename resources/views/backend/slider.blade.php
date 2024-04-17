@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Slider</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Main Page</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
					@if(session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
				@endif
					<!--table-->
					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0"><a class="btn btn-primary" href="{{route('addSlider')}}">Add Slider</a></h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="table key-buttons text-md-nowrap">
										<thead>
											
											<tr>
												<th class="border-bottom-0">ls</th>
												<th class="border-bottom-0">image</th>
												<th class="border-bottom-0">logo</th>
												<th class="border-bottom-0">title</th>
												<th class="border-bottom-0">description</th>
												<th class="border-bottom-0">video</th>
												<th class="border-bottom-0">subtitle</th>
												<th class="border-bottom-0">Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($SliderData as $item)
											<tr>
												<td>{{ $loop->iteration }}</td>

												@if ($item->image ==null)
												<td style="text-align: center; vertical-align: middle; height: 100px; width: 100px;">
													<p style=" background-color: red; color: white; margin: 0;">Unavailable</p>
												</td>
												@else
												<td><img style="width: 200px" src="{{ asset('uploads/images/sliderImage/' . $item->image) }}"></td>
												@endif

												<td><img style="width: 200px" src="{{asset('uploads/logo/sliderlogo/' . $item->logo) }}"> </td>
												<td>{{$item->title}}</td>
												<td>{{$item->description}}</td>
												

												@if ($item->video==null)
												<td style="text-align: center; vertical-align: middle; height: 100px; width: 100px;">
													<p style=" background-color: red; color: white; margin: 0;">Unavailable</p>
												</td>
												
												@else
												<td>
													<video width="220" height="140" controls>
														<source src="{{ asset('uploads/video/slidervideo/' . $item->video) }}" type="video/mp4">
													</video>
												</td>
												<td>{{$item->subtitle}}</td>
												@endif

												<td>
													<a href="{{ route('slider.edit', $item->id) }}" class="btn btn-primary">Edit</a>
													<form action="{{ route('slider.destroy', $item->id) }}" method="post" style="display: inline-block;">
														@csrf
														@method('DELETE')
														<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
													</form>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/end_table-->
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection