@extends('user.layouts.main')

@extends('user.admin.menu')
@section('title', 'Tambah Berita | Admin')

@section('breadcrumbs')




@endsection

@section('content')
    <div class="box">

   		<!--mulai content section-->
			<form action="{{route('admin.storeNews')}}" method="POST">
					@csrf
				<div class="title">
					<h2 class="mg-b-5 mg-t-25">Tambahkan Berita Baru</h2>
				</div>
									
				<div class="row ">
						<div class="col-md-8">
								<input type="text" name="title" style="margin-bottom: 10px;" placeholder="Tambahkan Judul Berita" class="form-control">
						</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<textarea class="tinymce" id="addNews" name="content"></textarea>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4 mtb10">
						Thumbnail : <input type="file">
					</div>
				</div>      

				<div class="row">
					<div class="col-md-12 mtb10">
						
						<input type="submit" value="Simpan Draft" name="submit" class="btn  btn-sm btn-default">
						<input type="submit" value="Terbitkan" name="submit" class="btn btn-sm btn-success">
					</div>
				</div>    
			</form>    
   		 
   		<!--akhir content section-->
	</div>
@endsection

