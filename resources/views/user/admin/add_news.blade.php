@extends('user.layouts.main')

@extends('user.admin.menu')
@section('title', 'Tambah Berita | Admin')

@section('breadcrumbs')




@endsection

@section('content')
    <div class="box">

   		<!--mulai content section-->

   		<div class="title">
   			<h2 class="mg-b-5 mg-t-25">Tambahkan Berita Baru</h2>
   		</div>
   		           
   		<div class="row ">
   		    <div class="col-md-8">
   		         <input type="text" name="title" id="title" placeholder="Tambahkan Judul Berita" class="form-control">
   		    </div>

   		    <div class="col-md-4 text-right">
   		      <span>Kategori : </span>
   		      <label>
   		        <select class="form-control" id="categories">
   		          <option value="1">Kategori 1</option>
   		          <option value="2">Kategori 2</option>
   		          <option value="3">Kategori 3</option>
   		          <option value="4">Kategori 4</option>
   		        </select>
   		      </label>
   		    </div>
   		</div>

   		<div class="row">
   		  <div class="col-md-12">
   		    <textarea class="tinymce"></textarea>
   		  </div>
   		</div>

   		<div class="row">
   		  <div class="col-md-12 mtb10">
   		    <input type="submit" value="Simpan Draft" name="" class="btn  btn-sm btn-default">
   		    <input type="submit" value="Pratinjau" name="" class="btn btn-sm btn-default">
   		    <input type="submit" value="Terbitkan" name="" class="btn btn-sm btn-success">
   		  </div>
   		</div>        
   		 
   		<!--akhir content section-->
	</div>
@endsection
