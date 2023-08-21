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
        <div class="row" style="margin-bottom: 5px">
            <div class="col-md-12 text-right">
             

                <a href="{{ route('categories.add-categories') }}" class="btn btn-primary" style="right: 0">Thêm</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                

              <table class="table" style="background-color: #fff">
                <thead class="thead-dark" style="background-color: #000">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
        
		{{-- <div class="market-updates">
			
		   <div class="clearfix"> </div>
		</div>	 --}}
		<!-- //market-->
		
</section>

@endsection