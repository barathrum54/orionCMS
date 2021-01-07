<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/hakkimizda', [App\Http\Controllers\HomeController::class, 'hakkimizda']);


Route::get('/hizmetlerimiz', [App\Http\Controllers\HomeController::class, 'hizmetlerimiz']);
Route::get('/sosyal-medya-hizmetleri', [App\Http\Controllers\HomeController::class, 'sosyalMedyaHizmetleri']);
Route::get('/web-tasarim-hizmetleri', [App\Http\Controllers\HomeController::class, 'webHizmetleri']);
Route::get('/video-animasyon-hizmetleri', [App\Http\Controllers\HomeController::class, 'videoAnimasyonHizmetleri']);
Route::get('/grafik-tasarim-hizmetleri', [App\Http\Controllers\HomeController::class, 'grafikTasarimHizmetleri']);
Route::get('/algi-yonetimi-hizmetleri', [App\Http\Controllers\HomeController::class, 'algiYonetimiHizmetleri']);
Route::get('/kurumsal-kimlik-hizmetleri', [App\Http\Controllers\HomeController::class, 'kurumsalKimlikHizmetleri']);
Route::post('/arama', [App\Http\Controllers\HomeController::class, 'aramaIndex']);


Route::get('/portfolyo', [App\Http\Controllers\HomeController::class, 'portfolyo']);
Route::get('/portfolyo-kategori/web-tasarim', [App\Http\Controllers\HomeController::class, 'portfolyoWebTasarim']);
Route::get('/portfolyo/{portfolyo}', [App\Http\Controllers\HomeController::class, 'portfolyoSingle']);

Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog']);
Route::get('/blog/{blog}', [App\Http\Controllers\HomeController::class, 'blogSingle']);
Route::get('/kariyer', [App\Http\Controllers\HomeController::class, 'kariyer']);
Route::get('/iletisim', [App\Http\Controllers\HomeController::class, 'iletisim']);

//Formlar
Route::post('/form/analizTalepFormuKaydet', [App\Http\Controllers\HomeController::class, 'analizTalepFormuKaydet']);
Route::post('/form/iletisimFormuKaydet', [App\Http\Controllers\HomeController::class, 'iletisimFormuKaydet']);
Route::post('/form/haberBulteniKaydet', [App\Http\Controllers\HomeController::class, 'haberBulteniKaydet']);


//YÖNETİM
Route::get('/admin', [App\Http\Controllers\YonetimController::class, 'index']);

Route::get('/admin/sayfalar/anasayfa', [App\Http\Controllers\YonetimController::class, 'anasayfaEdit']);
Route::post('/admin/sayfalar/anasayfaKaydet', [App\Http\Controllers\YonetimController::class, 'anasayfaKaydet']);
Route::post('/admin/sliderKaydet', [App\Http\Controllers\YonetimController::class, 'sliderKaydet']);
Route::get('/admin/sayfalar/sliderDuzenle/{slider}', [App\Http\Controllers\YonetimController::class, 'sliderDuzenle']);
Route::post('/admin/sayfalar/sliderDuzenleKaydet/{slider}', [App\Http\Controllers\YonetimController::class, 'sliderDuzenleKaydet']);
Route::get('/admin/sayfalar/sliderSil/{slider}', [App\Http\Controllers\YonetimController::class, 'sliderSil']);



Route::get('/admin/sayfalar/hakkimizda', [App\Http\Controllers\YonetimController::class, 'hakkimizdaEdit']);
Route::post('/admin/sayfalar/hakkimizdaKaydet', [App\Http\Controllers\YonetimController::class, 'hakkimizdaKaydet']);

Route::get('/admin/sayfalar/hizmetlerimiz', [App\Http\Controllers\YonetimController::class, 'hizmetlerimizEdit']);
Route::post('/admin/sayfalar/hizmetlerimizKaydet', [App\Http\Controllers\YonetimController::class, 'hizmetlerimizKaydet']);
Route::get('/admin/sayfalar/web-hizmetleri', [App\Http\Controllers\YonetimController::class, 'webHizmetleriEdit']);
Route::get('/admin/sayfalar/sosyal-medya-hizmetleri', [App\Http\Controllers\YonetimController::class, 'sosyalMedyaHizmetleriEdit']);
Route::get('/admin/sayfalar/video-animasyon-hizmetleri', [App\Http\Controllers\YonetimController::class, 'videoAnimasyonHizmetleriEdit']);
Route::get('/admin/sayfalar/grafik-tasarim-hizmetleri', [App\Http\Controllers\YonetimController::class, 'grafikTasarimHizmetleriEdit']);
Route::get('/admin/sayfalar/algi-yonetimi-hizmetleri', [App\Http\Controllers\YonetimController::class, 'algiYonetimiHizmetleriEdit']);
Route::get('/admin/sayfalar/kurumsal-kimlik-hizmetleri', [App\Http\Controllers\YonetimController::class, 'itibarYonetimiHizmetleriEdit']);


Route::get('/admin/sayfalar/portfolyo', [App\Http\Controllers\YonetimController::class, 'portfolyoEdit']);
Route::get('/admin/sayfalar/yeniportfolyo', [App\Http\Controllers\YonetimController::class, 'portfolyoYeni']);
Route::post('/admin/portfolyoKaydet', [App\Http\Controllers\YonetimController::class, 'portfolyoKaydet']);
Route::post('/admin/portfolyoDuzenleKaydet/{portfolyo}', [App\Http\Controllers\YonetimController::class, 'portfolyoDuzenleKaydet']);
Route::get('/admin/portfolyo/{portfolyo}', [App\Http\Controllers\YonetimController::class, 'portfolyoDuzenle']);
Route::get('/admin/portfolyoSil/{portfolyo}', [App\Http\Controllers\YonetimController::class, 'portfolyoSil']);
Route::get('/admin/portfolyoThumbnailSil/{portfolyo}', [App\Http\Controllers\YonetimController::class, 'portfolyoThumbnailSil']);
Route::get('/admin/portfolyoGaleriSil/{portfolyo}', [App\Http\Controllers\YonetimController::class, 'portfolyoGaleriSil']);


Route::get('/admin/sayfalar/blog', [App\Http\Controllers\YonetimController::class, 'blogEdit']);
Route::get('/admin/sayfalar/yeniBlog', [App\Http\Controllers\YonetimController::class, 'blogYeni']);
Route::post('/admin/sayfalar/yeniBlogKaydet', [App\Http\Controllers\YonetimController::class, 'blogKaydet']);
Route::get('/admin/sayfalar/blogDuzenle/{blog}', [App\Http\Controllers\YonetimController::class, 'blogDuzenle']);
Route::post('/admin/sayfalar/blogDuzenleKaydet/{blog}', [App\Http\Controllers\YonetimController::class, 'blogDuzenleKaydet']);
Route::get('/admin/sayfalar/blogSil/{blog}', [App\Http\Controllers\YonetimController::class, 'blogSil']);
Route::get('/admin/sayfalar/blogThumbnailSil/{blog}', [App\Http\Controllers\YonetimController::class, 'blogThumbnailSil']);

Route::get('/admin/sayfalar/iletisim', [App\Http\Controllers\YonetimController::class, 'iletisimEdit']);

Route::get('/admin/sayfalar/kariyer', [App\Http\Controllers\YonetimController::class, 'kariyerEdit']);



Route::get('/admin/istatistikler/kullanici-istatistikleri', [App\Http\Controllers\YonetimController::class, 'kullaniciIstatistikleriIndex']);
Route::get('/admin/istatistikler/google-seo', [App\Http\Controllers\YonetimController::class, 'seoIndex']);

Route::get('/admin/reklamlar/bannerlar', [App\Http\Controllers\YonetimController::class, 'bannerlarIndex']);
Route::get('/admin/reklamlar/popuplar', [App\Http\Controllers\YonetimController::class, 'popuplarIndex']);

Route::get('/admin/talep-formlari/is-talep-formlari', [App\Http\Controllers\YonetimController::class, 'itFormuIndex']);
Route::get('/admin/talep-formlari/analiz-talep-formlari', [App\Http\Controllers\YonetimController::class, 'analizFormuIndex']);
Route::get('/admin/talep-formlari/ik-talep-formlari', [App\Http\Controllers\YonetimController::class, 'ikFormuIndex']);
Route::get('/admin/talep-formlari/iletisim-talep-formlari', [App\Http\Controllers\YonetimController::class, 'iletisimFormu']);
Route::get('/admin/talep-formlari/haber-bulteni', [App\Http\Controllers\YonetimController::class, 'haberBulteni']);

Route::get('/admin/ayarlar', [App\Http\Controllers\YonetimController::class, 'ayarlarIndex']);
Route::post('/admin/ayarlarKaydet', [App\Http\Controllers\YonetimController::class, 'ayarlarKaydet']);

Route::get('/admin/ayarlar/kategoriEkle', [App\Http\Controllers\YonetimController::class, 'ayarlarKategoriEkle']);
Route::post('/admin/ayarlar/kategoriKaydet', [App\Http\Controllers\YonetimController::class, 'ayarlarKategoriKaydet']);
Route::get('/admin/ayarlar/kategoriSil/{kategori}', [App\Http\Controllers\YonetimController::class, 'ayarlarKategoriSil']);
Route::get('/admin/ayarlar/kategoriDuzenle/{kategori}', [App\Http\Controllers\YonetimController::class, 'ayarlarKategoriDuzenle']);
Route::post('/admin/ayarlar/kategoriDuzenleKaydet/{kategori}', [App\Http\Controllers\YonetimController::class, 'ayarlarKategoriDuzenleKaydet']);

Route::get('/admin/ayarlar/referansEkle', [App\Http\Controllers\YonetimController::class, 'ayarlarReferansEkle']);
Route::post('/admin/ayarlar/referansKaydet', [App\Http\Controllers\YonetimController::class, 'ayarlarReferansKaydet']);
Route::get('/admin/ayarlar/referansSil/{referans}', [App\Http\Controllers\YonetimController::class, 'ayarlarReferansSil']);
Route::get('/admin/ayarlar/referansDuzenle/{referans}', [App\Http\Controllers\YonetimController::class, 'ayarlarReferansDuzenle']);
Route::post('/admin/ayarlar/referansDuzenleKaydet/{referans}', [App\Http\Controllers\YonetimController::class, 'ayarlarReferansDuzenleKaydet']);
Route::get('/admin/ayarlar/referansGrafikSil/{referans}', [App\Http\Controllers\YonetimController::class, 'ayarlarReferansGrafikSil']);

Route::get('/admin/ayarlar/musteriYorumuEkle', [App\Http\Controllers\YonetimController::class, 'ayarlarMusteriYorumlariEkle']);
Route::post('/admin/ayarlar/musteriYorumuKaydet', [App\Http\Controllers\YonetimController::class, 'ayarlarMusteriYorumlariKaydet']);
Route::get('/admin/ayarlar/musteriYorumuDuzenle/{my}', [App\Http\Controllers\YonetimController::class, 'ayarlarMusteriYorumlariDuzenle']);
Route::post('/admin/ayarlar/musteriYorumuDuzenleKaydet/{my}', [App\Http\Controllers\YonetimController::class, 'ayarlarMusteriYorumlariDuzenleKaydet']);
Route::get('/admin/ayarlar/musteriYorumuSil/{my}', [App\Http\Controllers\YonetimController::class, 'ayarlarMusteriYorumlariSil']);

Route::get('/admin/ayarlar/aramaGirisiEkle', [App\Http\Controllers\YonetimController::class, 'ayarlarAramaGirisiEkle']);
Route::post('/admin/ayarlar/aramaGirisiKaydet', [App\Http\Controllers\YonetimController::class, 'ayarlarAramaGirisiKaydet']);
Route::get('/admin/ayarlar/aramaGirisiDuzenle/{a}', [App\Http\Controllers\YonetimController::class, 'ayarlarAramaGirisiDuzenle']);
Route::post('/admin/ayarlar/aramaGirisiDuzenleKaydet/{a}', [App\Http\Controllers\YonetimController::class, 'ayarlarAramaGirisiDuzenleKaydet']);
Route::get('/admin/ayarlar/aramaGirisiSil/{a}', [App\Http\Controllers\YonetimController::class, 'ayarlarAramaGirisiSil']);

//Crawler
Route::get('/crawl', [App\Http\Controllers\YonetimController::class, 'crawler']);

//ImageToPdf
Route::get('/sukuyusu', [App\Http\Controllers\HomeController::class, 'suKuyusuIndex']);
Route::post('/sukuyusu', [App\Http\Controllers\HomeController::class, 'suKuyusuPost']);
// MÜŞTERİ PANELi
Route::get('/musteri', [App\Http\Controllers\MusteriPaneliController::class, 'index']);
//Sözleşmeler
Route::get('/mesafeli-satis-sozlesmesi', [App\Http\Controllers\HomeController::class, 'mss']);
Route::get('/cerez-politikasi', [App\Http\Controllers\HomeController::class, 'cerez']);
Route::get('/iade-bilgileri', [App\Http\Controllers\HomeController::class, 'iade']);
Route::get('/kvkk-aydinlatma-metni', [App\Http\Controllers\HomeController::class, 'kvkk']);

//Ödeme
Route::post('/odeme', [App\Http\Controllers\HomeController::class, 'odeme']);
Route::get('/odemeyap', [App\Http\Controllers\HomeController::class, 'odemeyap']);
Route::get('/odemebasarili', [App\Http\Controllers\HomeController::class, 'odemeBasarili']);
Route::get('/odemebasarisiz', [App\Http\Controllers\HomeController::class, 'odemeBasarisiz']);
Route::post('/odemebasarili', [App\Http\Controllers\HomeController::class, 'odemeBasarili']);
Route::post('/odemebasarisiz', [App\Http\Controllers\HomeController::class, 'odemeBasarisiz']);

