 <div class="modal fade" id="sliderEkleModal" tabindex="-1" role="dialog" aria-labelledby="sliderEkleModal"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Yeni Slider Ekle</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="/admin/sliderKaydet" method="post" enctype="multipart/form-data">
                 @csrf
                 <div class="modal-body">
                     <div class="form-group d-flex flex-column">
                         <label for="">Slider Görseli </label>
                         <input type="file" name="slider_gorsel" id="slider_gorsel">
                     </div>
                     <div class="form-group d-flex flex-column">
                         <label for="">Slider Görseli(Mobil) </label>
                         <input type="file" name="mobil" id="mobil">
                     </div>
                     <div class="form-group d-flex flex-column">
                         <label for="">Açıklama </label>
                         <input type="text" name="slider_aciklama" id="slider_aciklama">
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                     <button type="submit" class="btn btn-primary" id="slider_kaydet_btn">Kaydet</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
