<div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="perFileAdd">Dosya Ekle</h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-start">
            <form class="form-bookmark needs-validation" id="bookmark-form" novalidate="" method="POST" enctype="multipart/form-data"  action="{{route('perSave')}}">
                @csrf
                <div class="row g-2">

                    <div class="mb-3 col-md-12 mt-0">
                        <label for="con-name">Dosya Türü</label>
                        <div class="row">
                            <div class="col-sm-12">
                                <select class="form-control" id="per_poz" name="per_poz">
                                    
                                    @foreach ($fileTypes as $file)
                                    <option value="{{$file->id}}">{{$file->type_name}}</option>
                                    @endforeach
                                  
                                
                                
                            </select>
                            </div>
                           
                        </div>
                    </div>
                   
                    <div class="mb-3 col-md-12 mt-0">
                        <label for="con-name">Dosya</label>
                        <div class="row">
                            <div class="col-sm-12">
                                <input class="form-control" id="per_foto" type="file" required="" placeholder="TC Personel Foto Yükle" name="per_foto" autocomplete="off" />
                            </div>
                           
                        </div>
                    </div>
                    

                   
                </div>
                <div class="text-end">
                <button class="btn btn-secondary" type="submit">Kaydet</button>
                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">İptal</button>
                </div>
            </form>
        </div>
    </div>
</div>