@extends('layout.index')

@section('content')

<!-- Page Content -->
<div class="container" style="padding-top: 15px;">
	<!-- <div class="row"> -->
		<!-- @include('layout.menu') -->

		<!-- <div class="col-md-9 "> -->
			<div class="panel panel-default">
				<div class="panel-heading" style="background-color:#33B739; color:white;">
					<h4><b>{{$loaitin->Ten}}</b></h4>
				</div>

				@foreach($tintuc as $tt)
				<div class="row-item row">
					<div class="col-md-3">

						<a href="tintuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">
							<br>
							<img width="200px" height="200px" class="img-responsive" 
							src="upload/tintuc/{{$tt->Hinh}}" 
							alt="Hình ảnh">
						</a>
					</div>

					<div class="col-md-9">
						<h3>{{$tt->TieuDe}}</h3>
						<p>{{$tt->TomTat}}</p>
						<a class="btn btn-primary" 
						href="tintuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">Xem thêm<span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
					<div class="break"></div>
				</div>
				@endforeach
				<div style="text-align: center;">
					<!-- Phân trang -->
					{{$tintuc->links()}}
				</div>
				

			</div>
		<!-- </div>  -->

	<!-- </div> -->
</div>
<!-- end Page Content -->
@endsection