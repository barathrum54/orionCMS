<!-- Modal -->
<form action="/form/iletisimFormuKaydet" method="post">
    @csrf
    <div class="container my-4">
        <div class="card shadow">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
                <h4 class="card-title text-center">
                    İletişim Formu
                </h4>
                <div class="form-group">
                    <label for="isim">İsim</label>
                    <input type="text" name="isim" id="isim" class="form-control" placeholder="Ad Soyad"
                        aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="isim">E-Posta</label>
                    <input type="email" name="eposta" id="eposta" class="form-control" placeholder="İletişim Adresiniz"
                        aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="isim">Telefon</label>
                    <input type="tel" name="telefon" id="telefon" class="form-control" placeholder="Telefon Numaranız"
                        aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Mesajınız</label>
                    <textarea type="text" name="mesaj" id="mesaj" class="form-control" placeholder=""
                        aria-describedby="helpId"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gönder</button>

            </div>
        </div>

    </div>
</form>
