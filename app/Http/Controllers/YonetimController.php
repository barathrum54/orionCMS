<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Yonetim;

use  App\Models\AnasayfaSlider;
use  App\Models\Kategori;
use  App\Models\Portfolyo;
use  App\Models\Blog;
use  App\Models\Referans;
use  App\Models\MusteriYorum;
use  App\Models\PortfolyoGaleri;
use  App\Models\Arama;


use  App\Models\Anasayfa;
use  App\Models\Hakkimizda;
use  App\Models\Hizmetlerimiz;
use  Goutte\Client;

class YonetimController extends Controller
{
    public function index()
    {
        return view('yonetim.index');
    }
    public function __construct() 
{
  $this->middleware('auth');
}
    //sayfalar
    public function anasayfaEdit ()
    {
        $sliderArray = AnasayfaSlider::all();
        $data = Anasayfa::first();
        return view('yonetim.sayfalar.anasayfa.anasayfa',compact('data','sliderArray'));
        
    }
     public function anasayfaKaydet(Request $request)
    {
        $request->files;
        $first = Anasayfa::first();
        if ($first != null) {
        $first->update($request->all());
        $first->save();
        }else{
        Anasayfa::create($request->all());
        }
        return redirect('/admin/sayfalar/anasayfa');

    }
     public function sliderKaydet(Request $request)
    {
     $slider = AnasayfaSlider::create($request->all());
     if($request->hasFile('slider_gorsel')) {
      $destinationPath = '/';
      $fileNameWithExt = $request->file('slider_gorsel')->getClientOriginalName();
      
      $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
      $extension = $request->file('slider_gorsel')->getClientOriginalExtension();
      $fileNameToStore = $fileNameWithExt;
      $path = $request->file('slider_gorsel')->storeAs('sliderGorsel',$fileNameToStore);
      $slider->slider_gorsel = $path;
      $slider->update();
     }
     if($request->hasFile('mobil')) {
      $destinationPath = '/';
      $fileNameWithExt = $request->file('mobil')->getClientOriginalName();
      
      $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
      $extension = $request->file('mobil')->getClientOriginalExtension();
      $fileNameToStore = $fileNameWithExt;
      $path = $request->file('mobil')->storeAs('sliderGorsel','m-'.$fileNameToStore);
      $slider->mobil = $path;
      $slider->update();
     }
        return redirect('/admin/sayfalar/anasayfa');
    
    }
     public function sliderDuzenle(AnasayfaSlider $slider)
    {

        
        return view('yonetim.sayfalar.anasayfa.sliderDuzenle',compact('slider'));
    
        }
    public function sliderDuzenleKaydet(AnasayfaSlider $slider, Request $request)
        {
        $slider->url = $request->url;
        $slider->slider_aciklama = $request->slider_aciklama;
        $slider->slider_baslik = $request->slider_baslik;
        $slider->update();
        $slider->save();
        return redirect('/admin/sayfalar/anasayfa');
            
        }
     public function sliderSil(AnasayfaSlider $slider)
    {
        $slider->delete();
        return redirect('/admin/sayfalar/anasayfa');

    
    }
     public function hakkimizdaEdit ()
    {
        $data = Hakkimizda::first();
        return view('yonetim.sayfalar.hakkimizda.hakkimizda',compact('data'));
    }
     public function hakkimizdaKaydet (Request $request)
    {
        $first = Hakkimizda::first();
        if ($first != null) {
        $first->update($request->all());
        $first->save();
        }else{
        Hakkimizda::create($request->all());
        }
        return redirect('/admin/sayfalar/hakkimizda');
    }
     public function hizmetlerimizEdit ()
    {
        $data = Hizmetlerimiz::first();

        return view('yonetim.sayfalar.hizmetlerimiz.hizmetlerimiz',compact('data'));
        
    }
    public function webHizmetleriEdit ()
    {
        $data = Hizmetlerimiz::first();

        return view('yonetim.sayfalar.hizmetlerimiz.webHizmetleri',compact('data'));
        
    }
    public function sosyalMedyaHizmetleriEdit  ()
    {
        $data = Hizmetlerimiz::first();

        return view('yonetim.sayfalar.hizmetlerimiz.sosyalMedyaHizmetleri',compact('data'));
        
    }
    public function videoAnimasyonHizmetleriEdit  ()
    {
        $data = Hizmetlerimiz::first();

        return view('yonetim.sayfalar.hizmetlerimiz.videoAnimasyon',compact('data'));
        
    }
    public function grafikTasarimHizmetleriEdit  ()
    {
        $data = Hizmetlerimiz::first();

        return view('yonetim.sayfalar.hizmetlerimiz.grafikTasarim',compact('data'));
        
    }
    public function algiYonetimiHizmetleriEdit  ()
    {
        $data = Hizmetlerimiz::first();

        return view('yonetim.sayfalar.hizmetlerimiz.algiYonetimi',compact('data'));
        
    }
    public function itibarYonetimiHizmetleriEdit  ()
    {
        $data = Hizmetlerimiz::first();

        return view('yonetim.sayfalar.hizmetlerimiz.itibarYonetimi',compact('data'));
        
    }
     public function hizmetlerimizKaydet (Request $request)
    {
        $first = Hizmetlerimiz::first();
        if ($first != null) {
        $first->update($request->all());
        $first->save();
        }else{
        Hizmetlerimiz::create($request->all());
        }
        return redirect('/admin/sayfalar/hizmetlerimiz');
    }
     public function portfolyoEdit()
    {
        $portfolyoArray = Portfolyo::all();
        return view('yonetim.sayfalar.portfolyo.portfolyo',compact('portfolyoArray'));
        
    }
    public function portfolyoYeni()
    {
        $kategoriler = Kategori::all();
        return view('yonetim.sayfalar.portfolyo.yeni',compact('kategoriler'));
        
    }
     public function portfolyoSil(Portfolyo $portfolyo)
    {
        $portfolyo->delete();
        return redirect('http://127.0.0.1:8000/admin/sayfalar/portfolyo');
        
    }
    
    public function portfolyoKaydet(Request $request)
    {
        $portfolyo = Portfolyo::create($this->portfolyoValidate());
        if($request->hasFile('thumbnail_file')) {
         $destinationPath = '/';
         $fileNameWithExt = $request->file('thumbnail_file')->getClientOriginalName();
         $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
         $extension = $request->file('thumbnail_file')->getClientOriginalExtension();
         $fileNameToStore = $fileNameWithExt;
         $path = $request->file('thumbnail_file')->storeAs('portfolyo',$fileNameToStore);
         $portfolyo->thumbnail = $path;
         $portfolyo->update();
        }
        
        if($request->hasFile('galeri_files')){
        $files = $request->file('galeri_files');
        $galeri_array = [];
         foreach ($files as $file) {
          $portfolyoGaleri = PortfolyoGaleri::create();
          $portfolyoGaleri->portfolyo = $portfolyo->id;
          $destinationPath = '/';
          $fileNameWithExt = $file->getClientOriginalName();
          $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
          $extension = $file->getClientOriginalExtension();
          $fileNameToStore = $fileNameWithExt;
          $path = $file->storeAs('portfolyo',$fileNameToStore);
          $portfolyoGaleri->path = $path;
          $portfolyoGaleri->update();
          $portfolyoGaleri->save();
         }
          $portfolyo->update();
       
        }
        return redirect('/admin/sayfalar/portfolyo');

    }

    public function portfolyoDuzenle(Portfolyo $portfolyo)
    {
        $kategoriler = Kategori::all();
        $galeriArray = PortfolyoGaleri::where('portfolyo',$portfolyo->id)->get();
        return view('yonetim.sayfalar.portfolyo.duzenle',compact('kategoriler','portfolyo','galeriArray'));

    }
    public function portfolyoDuzenleKaydet(Request $request, Portfolyo $portfolyo)
    {

        $portfolyo->baslik = $request->baslik;
        $portfolyo->content = $request->icerik;
        $portfolyo->kategori = $request->kategori;
        $portfolyo->etiketler = $request->etiketler;
        
        if($request->hasFile('thumbnail_file')) {
         $destinationPath = '/';
         $fileNameWithExt = $request->file('thumbnail_file')->getClientOriginalName();
         $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
         $extension = $request->file('thumbnail_file')->getClientOriginalExtension();
         $fileNameToStore = $fileNameWithExt;
         $path = $request->file('thumbnail_file')->storeAs('portfolyo',$fileNameToStore);
         $portfolyo->thumbnail = $path;
         $portfolyo->update();
        }
        
        if($request->hasFile('galeri_files')){
        $files = $request->file('galeri_files');
         foreach ($files as $file) {
          $portfolyoGaleri = PortfolyoGaleri::create();
          $portfolyoGaleri->portfolyo = $portfolyo->id;
          $destinationPath = '/';
          $fileNameWithExt = $file->getClientOriginalName();
          $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
          $extension = $file->getClientOriginalExtension();
          $fileNameToStore = $fileNameWithExt;
          $path = $file->storeAs('portfolyo',$fileNameToStore);
          $portfolyoGaleri->path = $path;
          $portfolyoGaleri->update();
          $portfolyoGaleri->save();
         }
          $portfolyo->update();
       
        }
          $portfolyo->update();

        return redirect('/admin/sayfalar/portfolyo');

    }
    public function portfolyoGaleriSil(PortfolyoGaleri $portfolyo)
    {
        $portfolyo->delete();

        return redirect()->back();
    }
    public function portfolyoThumbnailSil(Portfolyo $portfolyo)
    {
        $portfolyo->thumbnail = '';
        $portfolyo->update();
        return redirect()->back();
    }


    // BLOG
     public function blogEdit()
    {
        $blogData = Blog::orderBy('created_at','DESC')->get();
        return view('yonetim.sayfalar.blog.blog',compact('blogData'));
        
    }
     public function blogYeni()
    {
        return view('yonetim.sayfalar.blog.yeni');
        
    }
    public function blogKaydet(Request $request)
    {
        $portfolyo = Blog::create($this->blogValidate());
        if($request->hasFile('thumbnail')) {
         $destinationPath = '/';
         $fileNameWithExt = $request->file('thumbnail')->getClientOriginalName();
         $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
         $extension = $request->file('thumbnail')->getClientOriginalExtension();
         $fileNameToStore = $fileNameWithExt;
         $path = $request->file('thumbnail')->storeAs('blog',$fileNameToStore);
         $portfolyo->thumbnail = $path;
         $portfolyo->update();
        }
        return redirect('admin/sayfalar/blog');
        
    }
    public function blogDuzenle(Blog $blog)
    {
        return view('yonetim.sayfalar.blog.duzenle',compact('blog'));
        
    }
    public function blogDuzenleKaydet(Blog $blog, Request $request)
    {
        $blog->baslik = $request->baslik;
        $blog->icerik = $request->icerik;
        $blog->etiketler = $request->etiketler;
        if($request->hasFile('thumbnail')) {
         $destinationPath = '/';
         $fileNameWithExt = $request->file('thumbnail')->getClientOriginalName();
         $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
         $extension = $request->file('thumbnail')->getClientOriginalExtension();
         $fileNameToStore = $fileNameWithExt;
         $path = $request->file('thumbnail')->storeAs('blog',$fileNameToStore);
         $blog->thumbnail = $path;
         $blog->update();
        }
        $blog->update();
        $blog->save();

        return redirect('admin/sayfalar/blog');
    }
    public function blogThumbnailSil(Blog $blog)
    {
         $blog->thumbnail = '';
         $blog->update();
         $blog->save();
        return redirect('admin/sayfalar/blog');
    }
    public function blogSil(Blog $blog)
    {
        $blog->delete();
        return redirect('admin/sayfalar/blog');
        
    }













     public function kariyerEdit()
    {
        return view('yonetim.sayfalar.kariyer.kariyer');
        
    }
     public function iletisimEdit()
    {
        return view('yonetim.sayfalar.iletisim');
        
    }
    //istatistikler
    public function kullaniciIstatistikleriIndex()
    {
        return view('yonetim.istatistikler.kistatistikleri');
        
    }
    public function seoIndex()
    {
        return view('yonetim.istatistikler.seo');

    }
    //reklamlar
    
    public function bannerlarIndex()
    {
        return view('yonetim.reklamlar.bannerlar');

    }
    public function popuplarIndex()
    {
        return view('yonetim.reklamlar.popuplar');

    }
    //Talep Formları
    
    public function itFormuIndex()
    {
        return view('yonetim.talepFormlari.itFormu');

    }
    
    public function ikFormuIndex()
    {
        return view('yonetim.talepFormlari.ikFormu');

    }
    public function iletisimFormu()
    {
        return view('yonetim.talepFormlari.iletisimFormu');

    }
    public function analizFormuIndex()
    {
        return view('yonetim.talepFormlari.analizFormu');

    }
    public function haberBulteni()
    {
        return view('yonetim.talepFormlari.haberBulteni');

    }
    //Ayarlar
    public function ayarlarIndex()
    {
        $data = Yonetim::first();
        $aramalar = Arama::all();
        $kategoriler = Kategori::all();
        $referanslar = Referans::all();
        $musteriyorumlari = MusteriYorum::all();
        return view('yonetim.ayarlar.ayarlar',compact('data','aramalar','musteriyorumlari','kategoriler','referanslar'));

    }
    public function ayarlarKaydet(Request $request)
    {
        $first = Yonetim::first();
        if ($first != null) {
        $first->facebook_link = $request->facebook_link;
        $first->linkedin_link = $request->linkedin_link;
        $first->twitter_link = $request->twitter_link;
        $first->youtube_link = $request->youtube_link;
        $first->googleplus_link = $request->googleplus_link;
        $first->instagram_link = $request->instagram_link;
        $first->behance_link = $request->behance_link;
        $first->telefon1 = $request->telefon1;
        $first->telefon2 = $request->telefon2;
        $first->teklif_mail = $request->teklif_mail;
        $first->iletisim_mail = $request->iletisim_mail;
        $first->ik_mail = $request->ik_mail;
        $first->fiziksel_adres = $request->fiziksel_adres;
        $first->firma_adi = $request->firma_adi;
            if($request->hasFile('firma_logo')) {
         $destinationPath = '/';
         $fileNameWithExt = $request->file('firma_logo')->getClientOriginalName();
         $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
         $extension = $request->file('firma_logo')->getClientOriginalExtension();
         $fileNameToStore = $fileNameWithExt;
         $path = $request->file('firma_logo')->storeAs('logo',$fileNameToStore);
         $first->firma_logo = $path;
         $first->update();
        }
        $first->save();
        }else{
        Yonetim::create($request);
        }
        return redirect('/admin/ayarlar');

    }
    //Kategori

    public function ayarlarKategoriEkle(Request $request)
    {
        return view('yonetim.ayarlar.kategoriEkle');
    }
    public function ayarlarKategoriDuzenle(Kategori $kategori)
    {

        return view('yonetim.ayarlar.kategoriDuzenle',compact('kategori'));
    }
     public function ayarlarKategoriDuzenleKaydet(Request $request)
    {
        $kategori = Kategori::where('id',$request->kategori)->first();
        $kategori->update(['baslik' => $request->baslik]);
        $kategori->save();
        return redirect('/admin/ayarlar');
    }
    public function ayarlarKategoriKaydet(Request $request)
    {

        $kategori = Kategori::create($request->all());
        return redirect('/admin/ayarlar');
    }
    public function ayarlarKategoriSil (Kategori $kategori)
    {
        $kategori->delete();
        return redirect('/admin/ayarlar');
    }

    //Referanslar
    public function ayarlarReferansEkle(Request $request){

        return view('yonetim.ayarlar.referansEkle');
    }
    public function ayarlarReferansDuzenle(Referans $referans)
    {
        return view('yonetim.ayarlar.referansDuzenle',compact('referans'));

    }
    public function ayarlarReferansDuzenleKaydet(Request $request)
    {
        $referans = Referans::where('id',$request->referans)->first();
        if($request->hasFile('grafik')) {
         $destinationPath = '/';
         $fileNameWithExt = $request->file('grafik')->getClientOriginalName();
         $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
         $extension = $request->file('grafik')->getClientOriginalExtension();
         $fileNameToStore = $fileNameWithExt;
         $path = $request->file('grafik')->storeAs('referans',$fileNameToStore);
         $referans->grafik = $path;
         $referans->update();
        }
        $referans->update(['baslik' => $request->baslik]);
        $referans->save();
        return redirect('/admin/ayarlar');
    }
    public function ayarlarReferansKaydet(Request $request)
    {

         $referans = Referans::create($request->all());
         if($request->hasFile('grafik')) {
         $destinationPath = '/';
         $fileNameWithExt = $request->file('grafik')->getClientOriginalName();
      
         $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
         $extension = $request->file('grafik')->getClientOriginalExtension();
         $fileNameToStore = $fileNameWithExt;
         $path = $request->file('grafik')->storeAs('referans',$fileNameToStore);
         $referans->grafik = $path;
         $referans->update();
        }
        return redirect('/admin/ayarlar');

    }
    public function ayarlarReferansSil(Referans $referans)
    {
        $referans->delete();
        return redirect('/admin/ayarlar');
    }
    public function ayarlarReferansGrafikSil(Referans $referans)
    {
        $referans = Referans::where('id',$referans->id)->first();
        $referans->grafik = NULL;
        $referans->update();
        return redirect('/admin/ayarlar/referansDuzenle/'.$referans->id);
    }

    //musteri Yorumlari
      public function ayarlarMusteriYorumlariEkle()
    {
              return view('yonetim.ayarlar.musteriYorumuEkle');
    }
      public function ayarlarMusteriYorumlariKaydet(Request $request)
    {
              $portfolyo = MusteriYorum::create($request->all());
              return redirect('/admin/ayarlar');
    }
      public function ayarlarMusteriYorumlariDuzenle(MusteriYorum $my)
    {
              return view('yonetim.ayarlar.musteriYorumuDuzenle',compact('my'));
    }
      public function ayarlarMusteriYorumlariDuzenleKaydet(MusteriYorum $my,Request $request)
    {
              $my = MusteriYorum::where('id',$my->id)->first();
              $my->update(['metin' => $request->metin]);
              $my->update(['isim' => $request->isim]);
              $my->save();
              return redirect('/admin/ayarlar');
    }
    public function ayarlarMusteriYorumlariSil(MusteriYorum $my)
    {
        $my->delete();
        return redirect('/admin/ayarlar');
    }
    //Arama
      public function ayarlarAramaGirisiEkle()
    {
              return view('yonetim.ayarlar.aramaGirisiEkle');
    }
      public function ayarlarAramaGirisiKaydet(Request $request)
    {
              $aramaGirisi = Arama::create($request->all());
              return redirect('/admin/ayarlar');
    }
      public function ayarlarAramaGirisiDuzenle(Arama $a)
    {
              return view('yonetim.ayarlar.aramaGirisiDuzenle',compact('a'));
    }
      public function ayarlarAramaGirisiDuzenleKaydet(Arama $a,Request $request)
    {
              $my = Arama::where('id',$a->id)->first();
              $my->update(['kategori' => $request->metin]);
              $my->update(['baslik' => $request->isim]);
              $my->update(['aciklama' => $request->isim]);
              $my->update(['link' => $request->isim]);
              $my->save();
              return redirect('/admin/ayarlar');
    }
    public function ayarlarAramaGirisiSil(Arama $a)
    {
        $a->delete();
        return redirect('/admin/ayarlar');
    }
    protected function portfolyoValidate()
    {
      return request()->validate([
      'baslik' => '',
      'kategori' => '',
      'thumbnail' => '',
      'content' => '',
      'galeri' => ''
      ]);
    }
    protected function blogValidate()
    {
      return request()->validate([
      'baslik' => '',
      'icerik' => '',
      'etiketler' => ''
      ]);
    }
    public function crawler()
    {
      for ($i=0; $i < 100 ; $i++) { 
       $client = new Client();
       $crawler = $client->request('GET', 'https://tr.wikipedia.org/wiki/Anasayfa');
       $link = $crawler->filter('#n-randompage > a')->link();
       $crawler = $client->click($link);
// Get the latest post in this category and display the titles
       $crawler->filter('.firstHeading')->each(function ($node) {
         print $node->text()."<br>";
       });
      }

    }
}
