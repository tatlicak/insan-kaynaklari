@extends('layouts.modern-layout.master')

@section('title')Contacts
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/sweetalert2.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Personeller</h3>
		@endslot
		<li class="breadcrumb-item">Apps</li>
		<li class="breadcrumb-item active">Contacts</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="email-wrap bookmark-wrap">
	        <div class="row">
	            <div class="col-xl-3">
	                <div class="email-sidebar">
	                    <a class="btn btn-primary email-aside-toggle" href="javascript:void(0)">contact filter </a>
	                    <div class="email-left-aside">
	                        <div class="card">
	                            <div class="card-body">
	                                <div class="email-app-sidebar left-bookmark">
	                                    <div class="media">
	                                        <div class="media-size-email"><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="" /></div>
	                                        <div class="media-body">
	                                            <a href="#"> <h6 class="f-w-700">{{$user->name}}</h6></a>
	                                            <p>{{$user->email}}</p>
	                                        </div>
	                                    </div>
	                                    <ul class="nav main-menu contact-options" role="tablist">
	                                        <li class="nav-item">
	                                            <button class="badge-light btn-block btn-mail w-100" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="me-2" data-feather="users"></i> Yeni Personel</button>
	                                            <div class="modal fade modal-bookmark" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                                @include('layouts.personel-ekle')
	                                            </div>
	                                        </li>
	                                        <li class="nav-item"><span class="main-title"> Departmanlar</span></li>

	                                        <li>
	                                            
	                                           
	                                        </li>
											@foreach ($subeler as $sube)
												
											
	                                        <li>
	                                            <a class="show @if($loop->first) active @endif"" id="pills-{{ str_replace(' ', '-', $sube->dept_ad) }}-tab" data-bs-toggle="pill" href="#pills-{{ str_replace(' ', '-', $sube->dept_ad) }}" role="tab" aria-controls="pills-organization" aria-selected="false">
	                                                <span class="title"> {{$sube->dept_ad}}</span>
	                                            </a>
	                                        </li>
	                                        @endforeach
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-9 col-md-12 box-col-8">
	                <div class="email-right-aside bookmark-tabcontent contacts-tabs">
	                    <div class="card email-body radius-left">
	                        <div class="ps-0">
	                            <div class="tab-content">
									@foreach ($subeler as $sube)
									<div class="tab-pane fade @if($loop->first) active show @endif" id="pills-{{ str_replace(' ', '-', $sube->dept_ad) }}" role="tabpanel" aria-labelledby="pills-personal-tab">
	                                    <div class="card mb-0">
	                                        <div class="card-header d-flex">
	                                            <h5>{{$sube->dept_ad}}</h5>
	                                            <span class="f-14 pull-right mt-0">{{$sube->personeller->count()}} personel</span>
	                                        </div>
	                                        <div class="card-body p-0">
	                                            <div class="row list-persons" id="addcon">
	                                                <div class="col-xl-4 xl-50 col-md-5 box-col-6">
	                                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
															@foreach ($sube->personeller as $personel)
																
															
	                                                        <a
	                                                            class="contact-tab-{{$loop->index}} nav-link " 
	                                                            id="v-pills-user-tab"
	                                                            data-bs-toggle="pill"
	                                                            onclick="activeDiv({{$sayac}})"
	                                                            href="#v-pills-user-{{$personel->id}}"
	                                                            role="tab"
	                                                            aria-controls="v-pills-user"
	                                                            aria-selected="true"
	                                                        >
	                                                            <div class="media">
	                                                                <img class="img-50 img-fluid m-r-20 rounded-circle update_img_0" src="{{$personel->foto_url}}" alt="" />
	                                                                <div class="media-body">
	                                                                    <h6><span class="first_name_0">{{$personel->ad}} </span><span class="last_name_0">{{$personel->soyad}}</span></h6>
	                                                                    <p class="email_add_0">{{$personel->eposta}}</p>
	                                                                </div>
	                                                            </div>
	                                                        </a>
															<?php $sayac++; ?>
															@endforeach
	                                                           
	                                                      
	                                                    </div>
	                                                </div>
	                                                <div class="col-xl-8 xl-50 col-md-7 box-col-6">
	                                                    <div class="tab-content" id="v-pills-tabContent">
															@foreach ($sube->personeller as $personel)
	                                                        <div class="tab-pane contact-tab-{{$loop->index}} tab-content-child fade @if($loop->first) active show @endif" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab">
	                                                            <div class="profile-mail">
	                                                                <div class="media align-items-center">
	                                                                    <img class="img-100 img-fluid m-r-20 rounded-circle update_img_0" src="{{$personel->foto_url}}" alt="" />
	                                                                    <input class="updateimg" type="file" name="img" onchange="readURL(this,{{$loop->index}})" />
	                                                                    <div class="media-body mt-0">
	                                                                        <h5><span class="first_name_0">{{$personel->ad}} </span><span class="last_name_0">{{$personel->soyad}}</span></h5>
	                                                                        <p class="email_add_0">{{$personel->eposta}}</p>
	                                                                        <ul>
	                                                                            <li><a href="{{route('perDetay',$personel->id)}}">Detay</a></li>
	                                                                            

	                                                                        </ul>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="email-general">
	                                                                    <h6 class="mb-3">Bilgiler</h6>
	                                                                    <ul>
	                                                                        <li>Ad Soyad<span class="font-primary first_name_0">{{$personel->ad}}{{" "}}{{$personel->soyad}}</span></li>
																			<li>TC Kimlik No<span class="font-primary first_name_0">{{$personel->kimlik_no}}</span></li>
																			<li>
	                                                                           Anne Adı<span class="font-primary"> <span class="birth_day_0">
																				{{ $personel->dateFormat('dogumTarih')}}
																				</span>
	                                                                        </li>
																			<li>
																				Baba Adı<span class="font-primary"> <span class="birth_day_0">
																				 {{ $personel->dateFormat('dogumTarih')}}
																				 </span>
																			 </li>
																			 <li>
																				Doğum Tarihi<span class="font-primary"> <span class="birth_day_0">
																				 {{ $personel->dateFormat('dogumTarih')}}
																				 </span>
																			 </li>
																			<li>
																				Doğum Yeri<span class="font-primary"> <span class="birth_day_0">
																				 {{ $personel->dogum_yeri}}
																				 </span>
																			 </li>
	                                                                        <li>Şube <span class="font-primary">{{$personel->sube->dept_ad}}</span></li>
	                                                                        <li>
	                                                                            Pozisyon<span class="font-primary"> <span class="birth_day_0">
																					
																					{{$personel->getPosition()}}</span>
	                                                                        </li>
	                                                                        <li>Kan Grubu<span class="font-primary personality_0">{{$personel->kan_grubu}}</span></li>
	                                                                        <li>İşe Giriş<span class="font-primary city_0">{{ $personel->dateFormat('giris_tarihi')}}</span></li>
	                                                                        <li>GSM<span class="font-primary mobile_num_0">{{$personel->tel_no}}</span></li>
	                                                                        <li>Eposta <span class="font-primary email_add_0">{{$personel->eposta}} </span></li>
	                                                                        <li>Engellilik Durumu<span class="font-primary url_add_0">{{$personel->engel_durumu==0 ? "Yok":"Var"}}</span></li>
	                                                                        <li>Adli Sicil<span class="font-primary interest_0">{{$personel->adli_sicil==0 ? "Yok":"Var"}}</span></li>
	                                                                    </ul>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                       
	                                                      @endforeach
	                                                       
	                                                       
	                                                       
	                                                       
	                                                    </div>
	                                                    
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
									
	                               
	                               
	                                
									@endforeach
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	
	@push('scripts')
	<script src="{{asset('assets/js/notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('assets/js/sweet-alert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
    <script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
    <script src="{{asset('assets/js/bookmark/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/contacts/custom.js')}}"></script>
	@endpush

@endsection