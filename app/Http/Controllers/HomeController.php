<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use  App\Models\Anasayfa;
use  App\Models\AnasayfaSlider;
use  App\Models\Hakkimizda;
use  App\Models\Portfolyo;
use  App\Models\AnalizTalepFormu;
use  App\Models\HaberBulteni;
use  App\Models\IletisimFormu;
use  App\Models\PortfolyoGaleri;
use  App\Models\Blog;
use  App\Models\Arama;
use Kuveytturk;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Anasayfa::first();
        $sliderArray = AnasayfaSlider::all();
        $sliderArrayFirst = AnasayfaSlider::first();
        unset($sliderArray[0]);

        return view('home', compact('data','sliderArray','sliderArrayFirst'));
    }
    public function hakkimizda()
    {
      $data = Hakkimizda::first();
        return view('sayfalar.hakkimizda', compact('data'));

    }
      public function hizmetlerimiz()
    {
        return view('sayfalar.hizmetlerimiz.hizmetlerimiz');

    }
      public function sosyalMedyaHizmetleri()
    {
        return view('sayfalar.hizmetlerimiz.sosyalMedyaHizmetleri');

    }
    public function webHizmetleri()
    {
        return view('sayfalar.hizmetlerimiz.webHizmetleri');

    }
    public function videoAnimasyonHizmetleri()
    {
        return view('sayfalar.hizmetlerimiz.videoAnimasyonHizmetleri');

    }
    public function grafikTasarimHizmetleri()
    {
        $gtPortfolyo =  Portfolyo::where('etiketler','like','%'.'Grafik Tasarım'.'%')->get();
        return view('sayfalar.hizmetlerimiz.grafikTasarimHizmetleri',compact('gtPortfolyo'));

    }
    public function algiYonetimiHizmetleri()
    {
        return view('sayfalar.hizmetlerimiz.algiYonetimiHizmetleri');

    }
    public function kurumsalKimlikHizmetleri()
    {
        return view('sayfalar.hizmetlerimiz.kurumsalKimlikHizmetleri');

    }
      public function portfolyo()
    {
        $portfolyoData = Portfolyo::orderBy('created_at','ASC')->get();
        return view('sayfalar.portfolyo.portfolyo',compact('portfolyoData'));

    }
    public function portfolyoWebTasarim()
    {
          $portfolyoData = Portfolyo::where('kategori',7)->orderBy('created_at','ASC')->get();
        return view('sayfalar.portfolyo.portfolyo',compact('portfolyoData'));
    }
    public function portfolyoSingle(Portfolyo $portfolyo)
    {
        $galeriArray = PortfolyoGaleri::where('portfolyo',$portfolyo->id)->get();
        $portfolyo = Portfolyo::where('id',$portfolyo->id)->first();
        $portfolyo->galeri = json_decode($portfolyo->galeri);
        return view('sayfalar.portfolyo.portfolyoSingle',compact('portfolyo','galeriArray'));
    }
      public function blog()
    {   
        $blogData = Blog::all();
        return view('sayfalar.blog.blog',compact('blogData'));

    }
    public function blogSingle(Blog $blog)
    {
     return view('sayfalar.blog.blogSingle',compact('blog'));

    }
      public function iletisim()
    {
        return view('sayfalar.iletisim');

    }
       public function kariyer()
    {
        return view('sayfalar.kariyer');

    }

    public function suKuyusuIndex()
    {
        return view('sayfalar.sukuyusu');
    }
    public function suKuyusuPost(Request $request)
    {
        $app = app();
        $data = $app->make('stdClass');
        $data->ulke_adi = $request->ulke_adi;
        $data->su_kuyusu_adi = $request->su_kuyusu_adi;
        $data->su_kuyusu_no = $request->su_kuyusu_no;
        $data->tarih = $request->tarih;
        $tempisimler = preg_replace(array('/\n/', '/\r/','/\s+/'), '', $request->isimler);
        $tempisimler = explode(',', $tempisimler);
        $data->isimler = [];
        $data->satir_sayisi = $request->satir_sayisi;
        $data->sutun_sayisi = $request->sutun_sayisi;
        foreach ($tempisimler as $key => $value) {
            if($value == ''){
                unset($data->tempisimler);
            }
        }
        foreach ($tempisimler as $key => $value) {
            $newisim = strval($key + 1).'- '.$value;
            array_push($data->isimler, $newisim);
        }
        $data->isim_sayisi = count($data->isimler);
        $data->isimler  = json_encode($data->isimler);
        return view('sayfalar.sukuyusu2',compact('data'));

    }

    public function aramaIndex(Request $request)
    {

        if($request->arama != null){
        $aramaQuery = $request->arama;
        $sonuclar = [];
        $bloglar = Blog::where('baslik', 'like', "{$request->arama}%")->get();
        $sayfalar = Arama::where('kategori','sayfalar')->where('baslik', 'like', "{$request->arama}%")->get();
        $hizmetler = Arama::where('kategori','hizmetler')->where('baslik', 'like', "{$request->arama}%")->get();
        $portfolyo = Portfolyo::where('baslik', 'like', "{$request->arama}%")->get();

        if ($bloglar != null) {
            foreach ($bloglar as $key => $value) {
                $item = $value;
                $item->tip = 'blog';
                array_push($sonuclar,$value);
            }
        }
        if ($sayfalar != null) {
            foreach ($sayfalar as $key => $value) {
                       $item = $value;
                $item->tip = 'sayfa';
                array_push($sonuclar,$value);
            }
        }
        if ($hizmetler != null) {

            foreach ($hizmetler as $key => $value) {
                       $item = $value;
                $item->tip = 'hizmet';
                array_push($sonuclar,$value);
            }
        }
        if ($portfolyo != null) {
            foreach ($portfolyo as $key => $value) {
                       $item = $value;
                $item->tip = 'portfolyo';
                array_push($sonuclar,$value);
            }
        }
        
        return view('sayfalar.arama.index',compact('sonuclar','aramaQuery'));
    }else{
        return redirect('/');
        
    }
    }
    public function analizTalepFormuKaydet(Request $request)
    {
        AnalizTalepFormu::create($request->all());
        return redirect('/');
    }
    public function iletisimFormuKaydet(Request $request)
    {
        IletisimFormu::create($request->all());
        return redirect('/');
    }
    public function haberBulteniKaydet(Request $request)
    {
        HaberBulteni::create($request->all());
        return redirect('/');
    }
    public function mss()
    {
        return view('sayfalar.sozlesmeler.mss');
    }
      public function cerez()
    {
        return view('sayfalar.sozlesmeler.cerez');
    }
      public function iade()
    {
        return view('sayfalar.sozlesmeler.iade');
    }
      public function kvkk()
    {
        return view('sayfalar.sozlesmeler.kvkk');
    }
    public function odeme(Request $request)
    { 
        $fiyat = $request->fiyat;
        return view('sayfalar.odemeler.index',compact('fiyat'));
    }
    public function odemeyap(Request $request)
    {
         $kuveytturk = Kuveytturk::setName('Faruk Çam')
        ->setCardNumber(1234567891234567)
        ->setCardExpireDateMonth(02)
        ->setCardExpireDateYear(20)
        ->setCardCvv2(123)
        ->setOrderId(12345)
        ->setAmount(100)
        ->pay();
    }
    public function odemeBasarisiz(Request $request)
    {
        $res = $request->AuthenticationResponse;
        return view('sayfalar.odemeler.odemebasarisiz',compact('res'));
    }
}
