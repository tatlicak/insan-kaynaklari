@extends('layouts.admin.master')

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
	                                            <a href="#"> <h6 class="f-w-700">MARK JENCO</h6></a>
	                                            <p>Markjecno@gmail.com</p>
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
	                                            
	                                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
	                                                <div class="modal-dialog" role="document">
	                                                    <div class="modal-content">
	                                                        <div class="modal-header">
	                                                            <h5 class="modal-title" id="exampleModalLabel1">Şube Ekle</h5>
	                                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
	                                                        </div>
	                                                        <div class="modal-body">
	                                                            <form class="form-bookmark">
	                                                                <div class="row g-2">
	                                                                    <div class="mb-3 col-md-12">
	                                                                        <input class="form-control" type="text" required="" placeholder="Şube İsmi Giriniz..." autocomplete="off" />
	                                                                    </div>
	                                                                </div>
	                                                                <button class="btn btn-secondary" type="button">Save</button>
	                                                                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
	                                                            </form>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
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
	                                                                            <li><a href="javascript:void(0)" onclick="editContact({{$loop->index}})">Düzenle</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="deleteContact({{$personel->id}})">Sil</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="history({{$loop->index}})">Geçmiş</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="printContact({{$loop->index}})" data-bs-toggle="modal" data-bs-target="#printModal">Yazdır</a></li>
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
	                                                    <div class="contact-editform">
	                                                        <form>
	                                                            <div class="row g-2">
	                                                                <div class="mt-0 mb-3 col-md-12">
	                                                                    <label>Name</label>
	                                                                    <div class="row">
	                                                                        <div class="col-sm-6">
	                                                                            <input class="form-control" id="first_name" type="text" required="" placeholder="First Name" value="first_name" />
	                                                                        </div>
	                                                                        <div class="col-sm-6">
	                                                                            <input class="form-control" id="last_name" type="text" required="" placeholder="Last Name" value="last_name" />
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="mt-0 mb-3 col-md-12">
	                                                                    <label>Email Address</label>
	                                                                    <input class="form-control" id="email_add" type="text" required="" autocomplete="off" />
	                                                                </div>
	                                                                <div class="mt-0 mb-3 col-md-12">
	                                                                    <label>Phone</label>
	                                                                    <div class="row">
	                                                                        <div class="col-sm-6">
	                                                                            <input class="form-control" id="mobile_num" type="text" required="" autocomplete="off" />
	                                                                        </div>
	                                                                        <div class="col-sm-6">
	                                                                            <select class="form-control">
	                                                                                <option>Mobile</option>
	                                                                                <option>Work</option>
	                                                                                <option>Others</option>
	                                                                            </select>
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                            <div class="row g-2 more-data">
	                                                                <div class="mt-0 mb-3 col-md-12">
	                                                                    <label>URLS</label>
	                                                                    <div class="row">
	                                                                        <div class="col-lg-6 col-sm-6">
	                                                                            <input class="form-control" id="url_add" type="text" required="" />
	                                                                        </div>
	                                                                        <div class="col-lg-4 col-sm-6">
	                                                                            <select class="js-example-basic-single">
	                                                                                <option value="pw">Personal web address</option>
	                                                                                <option value="cw">Company web address</option>
	                                                                                <option value="fb">Fabebook URL</option>
	                                                                                <option value="tw">Twitter URL</option>
	                                                                            </select>
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="mt-0 mb-3 col-md-12">
	                                                                    <label>Personal</label>
	                                                                    <div class="d-block">
	                                                                        <label class="me-3" for="edo-ani"> <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="" /><span>Male</span> </label>
	                                                                        <label for="edo-ani1"> <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani" /><span>Female</span> </label>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="mt-0 mb-3 col-md-12">
	                                                                    <div class="row">
	                                                                        <div class="col-lg-2 col-sm-4">
	                                                                            <select class="form-control" id="birth_day">
	                                                                                <option class="f-w-600">Day</option>
	                                                                                <option>01</option>
	                                                                                <option>02</option>
	                                                                                <option>03</option>
	                                                                                <option>04</option>
	                                                                                <option>05</option>
	                                                                                <option>06</option>
	                                                                                <option>07</option>
	                                                                                <option>08</option>
	                                                                                <option>09</option>
	                                                                                <option>10</option>
	                                                                                <option>11</option>
	                                                                                <option>12</option>
	                                                                                <option>13</option>
	                                                                                <option>14</option>
	                                                                                <option>15</option>
	                                                                                <option>16</option>
	                                                                                <option>17</option>
	                                                                                <option>18</option>
	                                                                                <option>19</option>
	                                                                                <option>20</option>
	                                                                                <option>21</option>
	                                                                                <option>22</option>
	                                                                                <option>23</option>
	                                                                                <option>24</option>
	                                                                                <option>25</option>
	                                                                                <option>26</option>
	                                                                                <option>27</option>
	                                                                                <option>28</option>
	                                                                                <option>29</option>
	                                                                                <option>30</option>
	                                                                                <option>31</option>
	                                                                            </select>
	                                                                        </div>
	                                                                        <div class="col-lg-3 col-sm-4">
	                                                                            <select class="form-control" id="birth_month">
	                                                                                <option class="f-w-600">Month</option>
	                                                                                <option>January</option>
	                                                                                <option>February</option>
	                                                                                <option>March</option>
	                                                                                <option>April</option>
	                                                                                <option>May</option>
	                                                                                <option>June</option>
	                                                                                <option>July</option>
	                                                                                <option>August</option>
	                                                                                <option>September</option>
	                                                                                <option>October</option>
	                                                                                <option>November</option>
	                                                                                <option>December</option>
	                                                                            </select>
	                                                                        </div>
	                                                                        <div class="col-lg-3 col-sm-4">
	                                                                            <input class="form-control" id="birth_year" type="text" />
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="mt-0 mb-3 col-md-12">
	                                                                    <div class="row">
	                                                                        <div class="col-sm-6">
	                                                                            <label>Personality</label>
	                                                                            <input class="form-control" id="personality" type="text" required="" autocomplete="off" />
	                                                                        </div>
	                                                                        <div class="col-sm-6">
	                                                                            <label>Interest</label>
	                                                                            <input class="form-control" id="interest" type="text" required="" autocomplete="off" />
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="mb-3 col-md-12">
	                                                                    <label>Home Address</label>
	                                                                    <div class="row">
	                                                                        <div class="col-12">
	                                                                            <div class="form-group">
	                                                                                <input class="form-control" type="text" placeholder="Address" />
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col-sm-6">
	                                                                            <div class="form-group">
	                                                                                <input class="form-control" id="city" type="text" placeholder="City" />
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col-sm-6">
	                                                                            <div class="form-group">
	                                                                                <input class="form-control" type="text" placeholder="State" />
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col-sm-6">
	                                                                            <div>
	                                                                                <input class="form-control" type="text" placeholder="Country" />
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col-sm-6">
	                                                                            <div>
	                                                                                <input class="form-control" type="text" placeholder="Pin Code" />
	                                                                            </div>
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                            <a class="ps-0 edit-information f-w-600" href="javascript:void(0)">Edit more information</a>
	                                                            <button class="btn btn-secondary update-contact" type="button">Save</button>
	                                                            <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
	                                                        </form>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
									
	                               
	                               
	                                <div id="right-history">
	                                    <div class="modal-header p-l-20 p-r-20">
	                                        <h6 class="modal-title w-100">
	                                            Contact History
	                                            <span class="pull-right">
	                                                <a class="closehistory" href="javascript:void(0)"><i class="icofont icofont-close"></i></a>
	                                            </span>
	                                        </h6>
	                                    </div>
	                                    <div class="history-details">
	                                        <div class="text-center">
	                                            <i class="icofont icofont-ui-edit"></i>
	                                            <p>Contact has not been modified yet.</p>
	                                        </div>
	                                        <div class="media">
	                                            <i class="icofont icofont-star me-3"></i>
	                                            <div class="media-body mt-0">
	                                                <h6 class="mt-0">Contact Created</h6>
	                                                <p class="mb-0">Contact is created via mail</p>
	                                                <span class="f-12">Sep 10, 2019 4:00</span>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="modal fade modal-bookmark" id="printModal" tabindex="-1" role="dialog" aria-hidden="true">
	                                    <div class="modal-dialog modal-dialog-centered" role="document">
	                                        <div class="modal-content">
	                                            <div class="modal-header">
	                                                <h5 class="modal-title">Print preview</h5>
	                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
	                                            </div>
	                                            <div class="modal-body list-persons">
	                                                <div class="profile-mail pt-0" id="DivIdToPrint">
	                                                    <div class="media">
	                                                        <img class="img-100 img-fluid m-r-20 rounded-circle" id="updateimg" src="{{asset('assets/images/user/2.png')}}" alt="" />
	                                                        <div class="media-body mt-0">
	                                                            <h5><span id="printname">Bucky </span><span id="printlast">Barnes</span></h5>
	                                                            <p id="printmail">barnes@gmail.com</p>
	                                                        </div>
	                                                    </div>
	                                                    <div class="email-general">
	                                                        <h6>General</h6>
	                                                        <p>Email Address: <span class="font-primary" id="mailadd">barnes@gmail.com </span></p>
	                                                    </div>
	                                                </div>
	                                                <button class="btn btn-secondary" id="btnPrint" type="button" onclick="printDiv();">Print</button>
	                                                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
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