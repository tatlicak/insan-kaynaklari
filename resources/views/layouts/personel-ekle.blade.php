<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Personel Ekle</h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="form-bookmark needs-validation" id="bookmark-form" novalidate="" method="POST" enctype="multipart/form-data"  action="{{route('perSave')}}">
                @csrf
                <div class="row g-2">
                    <div class="mb-3 col-md-6 mt-0">
                        <label for="con-name">Kimlik No</label>
                        <div class="row">
                            <div class="col-sm-12">
                                <input class="form-control" id="per-kNo" type="number" required="" placeholder="TC Kimlik No Giriniz" name="kimlik_no" autocomplete="off" />
                            </div>
                           
                        </div>
                    </div>
                    <div class="mb-3 col-md-6 mt-0">
                        <label for="con-name">Fotoğraf</label>
                        <div class="row">
                            <div class="col-sm-12">
                                <input class="form-control" id="per_foto" type="file" required="" placeholder="TC Personel Foto Yükle" name="per_foto" autocomplete="off" />
                            </div>
                           
                        </div>
                    </div>
                    <div class="mb-3 col-md-12 mt-0">
                        <label for="con-name">Ad Soyad</label>
                        <div class="row">
                            <div class="col-sm-6">
                                <input class="form-control" id="per_ad" name="per_ad" type="text" required="" placeholder="Ad" autocomplete="off" />
                            </div>
                            <div class="col-sm-6">
                                <input class="form-control" id="per_soyad" name="per_soyad" type="text" required="" placeholder="Soyad" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12 mt-0">
                       
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="per_anne">Anne Adı</label>
                                <input class="form-control" id="per_anne" name="per_anne" type="text" required="" placeholder="Anne Adı" autocomplete="off" />
                            </div>
                            <div class="col-sm-6">
                                <label for="per_baba">Baba Adı</label>
                                <input class="form-control" id="per_baba"  name="per_baba" type="text" required="" placeholder="Baba Adı" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12 mt-0">
                       
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="con-name">Doğum Tarihi</label>
                                <input class="form-control" id="per-dogTarih" name="per_dogTarih" type="date" required="" placeholder="Doğum Tarihi" autocomplete="off" />
                            </div>
                            <div class="col-sm-6">
                                <label for="con-name">Doğum Yeri</label>
                                <input class="form-control" id="per-dogYer"  name="per_dogYer" type="text" required="" placeholder="Doğum Yeri" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12 mt-0">
                        <div class="row"> 
                            <div class="col-sm-6">
                        <label for="con-mail">Eposta Adresi</label>
                        <input class="form-control" id="con-mail"  name="per_email" type="email" autocomplete="off" />
                            </div>
                            <div class="col-sm-6">
                                <label for="con-phone">Telefon</label>
                                <input class="form-control" id="con-phone" type="number" name="per_gsm" required="" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12 my-0">
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="con-phone">Pozisyon</label>
                                <select class="form-control" id="per_poz" name="per_poz">
                                    
                                        @foreach ($pozisyonlar as $pozisyon)
                                        <option value="{{$pozisyon->id}}">{{$pozisyon->poz_ad}}</option>
                                        @endforeach
                                    
                                    
                                </select>

                               
                            </div>
                            
                            <div class="col-sm-6">
                                <label for="con-phone">Şube</label>
                                <select class="form-control" id="sube-select" name="per_sube">
                                        @foreach ($subeler as $sube)
                                        <option value="{{$sube->id}}">{{$sube->dept_ad}}</option>
                                        @endforeach
                                    
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12 mt-0">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="con-mail">İşe Giriş Tarihi</label>
                                <input class="form-control" id="per_girisTarih" name="per_girisTarih" type="date" required="" autocomplete="off" />
                        </div>
                        <div class="col-sm-6">
                            <label for="con-mail">Kan Grubu</label>
                            <select name="per_kanGrup" id="per_kanGrup" class="form-control">
                                <option value="A Rh+">A Rh+</option>
                                <option value="B Rh+">B Rh+</option>
                                <option value="O Rh+">O Rh+</option>
                                <option value="AB Rh+">AB Rh+</option>
                                <option value="A Rh-">A Rh-</option>
                                <option value="B Rh-">B Rh-</option>
                                <option value="O Rh-">O Rh-</option>
                                <option value="AB Rh-">AB Rh-</option>
                            </select>
                    </div>
                    </div>
                        
                    </div>

                    <div class="mb-3 col-md-12 mt-0">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="per_engellilik">Engellilik Durumu</label>
                                <select name="per_engellilik" id="per_engellilik" class="form-control">
                                    <option value="0">Yok</option>
                                    <option value="1">Var</option>
                                </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="per_adliSicil">Adli Sicil Kaydı</label>
                            <select name="per_adliSicil" id="per_adliSicil" class="form-control">
                                <option value="0">Yok</option>
                                <option value="1">Var</option>
                            </select>
                    </div>
                    </div>
                        
                    </div>
                </div>
                <input id="index_var" type="hidden" value="5" />
                <button class="btn btn-secondary" type="submit" >Kaydet</button>
                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">İptal</button>
            </form>
        </div>
    </div>
</div>