<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@extends('dashboard.layout.master-dashboard')
@section('tittle', 'Trang chủ')
@section('body')
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
     
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('categories.store-categories') }}" method="POST">
                  @csrf
                <div class="form-group">
                  <label for="">Tên danh mục</label>
                  <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên danh mục">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Chọn danh mục cha</label>
                    <select class="form-control" name="parent_id" id="exampleFormControlSelect1">
                      <option value="0">Chọn danh mục cha</option>
                      {!! $htmlOption !!}
                    </select>
                  </div>
                
                <button type="submit" class="btn btn-primary">Thêm danh mục</button>
              </form>

              
            </div>
        </div>
        
		{{-- <div class="market-updates">
			
		   <div class="clearfix"> </div>
		</div>	 --}}
		<!-- //market-->
		
</section>

@endsection