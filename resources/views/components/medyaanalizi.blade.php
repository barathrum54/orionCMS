<!-- Button trigger modal -->

<!-- Modal -->
<form action="/form/analizTalepFormuKaydet" method="post">
    @csrf

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        <h4>Medya Analiz Formu</h4>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="isim">İsim</label>
                        <input type="text" name="isim" id="isim" class="form-control" placeholder="Ad Soyad"
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="isim">E-Posta</label>
                        <input type="email" name="eposta" id="eposta" class="form-control"
                            placeholder="İletişim Adresiniz" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="isim">Telefon</label>
                        <input type="tel" name="telefon" id="telefon" class="form-control"
                            placeholder="Telefon Numaranız" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="isim">Firma Adı(Opsiyonel)</label>
                        <input type="text" name="firma" id="firma" class="form-control" placeholder="Firma Adınız"
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="isim">Web Sitesi</label>
                        <input type="text" name="website" id="website" class="form-control" placeholder="Firma Adınız"
                            aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label for="isim">Facebook Profili</label>
                        <input type="text" name="facebook" id="facebook" class="form-control" placeholder="Firma Adınız"
                            aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label for="isim">Instagram Profili</label>
                        <input type="text" name="instagram" id="instagram" class="form-control"
                            placeholder="Firma Adınız" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label for="isim">Twitter Profili</label>
                        <input type="text" name="twitter" id="twitter" class="form-control" placeholder="Firma Adınız"
                            aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label for="isim">Youtube Kanalı</label>
                        <input type="text" name="youtube" id="youtube" class="form-control"
                            placeholder="Youtube kanalınızın adresi" aria-describedby="helpId">
                        <p class="form-text text-muted">

                        </p>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                    <button type="submit" class="btn btn-primary">Gönder</button>
                </div>
            </div>
        </div>
    </div>
</form>
