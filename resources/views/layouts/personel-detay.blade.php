@extends('layouts.modern-layout.master')

@section('title')Personel Detay
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Personel Detay Bilgileri</h3>
		@endslot
		<li class="breadcrumb-item">Personel</li>
		<li class="breadcrumb-item active">Detay</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="edit-profile">
	        <div class="row">
	            <div class="col-sm-12">
	                <div class="card">
	                    <div class="card-header pb-0">
	                        <h4 class="card-title mb-0">Profil</h4>
	                        <div class="card-options">
	                            <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
	                        </div>
	                    </div>
	                    <div class="card-body">
	                        
	                            <div class="row mb-2">
	                                <div class="profile-title">
	                                    <div class="media">
	                                        <img class="img-70 rounded-circle" alt="" src="{{asset($personel->foto_url)}}" />
	                                        <div class="media-body">
	                                            <h3 class="mb-1 f-20 txt-primary">{{$personel->ad}} {{$personel->soyad}}</h3>
	                                            <p class="f-12">{{$personel->pozisyon->poz_ad}}</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                      
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6">
	                <form class="card">
	                    <div class="card-header pb-0">
	                        <h4 class="card-title mb-0">Özlük Bilgileri</h4>
	                        <div class="card-options">
	                            <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
	                        </div>
	                    </div>
	                    <div class="card-body">
	                        <div class="row">
	                            <div class="col-md-5">
	                                <div class="mb-3">
	                                    <label class="form-label">Company</label>
	                                    <input class="form-control" type="text" placeholder="Company" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-3">
	                                <div class="mb-3">
	                                    <label class="form-label">Username</label>
	                                    <input class="form-control" type="text" placeholder="Username" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-4">
	                                <div class="mb-3">
	                                    <label class="form-label">Email address</label>
	                                    <input class="form-control" type="email" placeholder="Email" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-6">
	                                <div class="mb-3">
	                                    <label class="form-label">First Name</label>
	                                    <input class="form-control" type="text" placeholder="Company" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-6">
	                                <div class="mb-3">
	                                    <label class="form-label">Last Name</label>
	                                    <input class="form-control" type="text" placeholder="Last Name" />
	                                </div>
	                            </div>
	                            <div class="col-md-12">
	                                <div class="mb-3">
	                                    <label class="form-label">Address</label>
	                                    <input class="form-control" type="text" placeholder="Home Address" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-4">
	                                <div class="mb-3">
	                                    <label class="form-label">City</label>
	                                    <input class="form-control" type="text" placeholder="City" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-3">
	                                <div class="mb-3">
	                                    <label class="form-label">Postal Code</label>
	                                    <input class="form-control" type="number" placeholder="ZIP Code" />
	                                </div>
	                            </div>
	                            <div class="col-md-5">
	                                <div class="mb-3">
	                                    <label class="form-label">Country</label>
	                                    <select class="form-control btn-square">
	                                        <option value="0">--Select--</option>
	                                        <option value="1">Germany</option>
	                                        <option value="2">Canada</option>
	                                        <option value="3">Usa</option>
	                                        <option value="4">Aus</option>
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="col-md-12">
	                                <div>
	                                    <label class="form-label">About Me</label>
	                                    <textarea class="form-control" rows="5" placeholder="Enter About your description"></textarea>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="card-footer text-end">
	                        <button class="btn btn-primary" type="submit">Update Profile</button>
	                    </div>
	                </form>
	            </div>
				<div class="col-md-6">
	                {{--  Özlük dosyaları buraya gelecek--}}
					<div class="file-content">
						<div class="card">
							<div class="card-header">
								<div class="media">
								 
								  <div class="media-body text-end">
									
									  <div class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#dosyaEkleModal" > <i data-feather="plus-square"></i>Dosya Ekle</div>
									  <div class="modal fade modal-bookmark" id="dosyaEkleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										@include('layouts.personel-dosya-ekle')
									</div>
									
								  </div>
								</div>
							  </div>
						  <div class="card-body file-manager">
							
							<h5 class="mt-4">Özlük Dosyaları</h5>
							<ul class="files">
							  <li class="file-box">
								<div class="file-top">  <i class="fa fa-file-archive-o txt-secondary"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
								<div class="file-bottom">
								  <h6>Project.zip </h6>
								  <p class="mb-1">1.90 GB</p>
								  <p> <b>last open : </b>1 hour ago</p>
								</div>
							  </li>
							</ul>
						  </div>
						</div>
					  </div>
	            </div>
	        </div>
	    </div>
	</div>

	
	@push('scripts')
	@endpush

@endsection