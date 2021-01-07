<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use  App\Models\Yonetim;
use  App\Models\Hakkimizda;
use  App\Models\Hizmetlerimiz;
use  App\Models\Portfolyo;
use  App\Models\Referans;
use  App\Models\MusteriYorum;
use  App\Models\Blog;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
  view()->composer('layouts.app', function($view) {
    $data = Yonetim::first();
    $view->with('data', array('data' => $data));
  });
    view()->composer('sayfalar.iletisim', function($view) {
    $data = Yonetim::first();
    $view->with('data', array('data' => $data));
  });
    view()->composer('components.counter', function($view) {
      $hakkimizdadata = Hakkimizda::first();
    $view->with('hakkimizdadata',$hakkimizdadata);
  });
   view()->composer('layouts.app', function($view) {
        $portfolyoData = Portfolyo::orderBy('created_at','DESC')->get()->take(9);
        $blogData  = Blog::orderBy('created_at','DESC')->get()->take(3);
    $view->with('portfolyoData',$portfolyoData)->with('blogData',$blogData);
  });
  view()->composer('components.hizmetlerimiz', function($view) {
      $data = Hizmetlerimiz::first();
    $view->with('data',$data);
  });
  view()->composer('components.portfolyo', function($view) {
      $portfolyoData = Portfolyo::orderBy('created_at','DESC')->get()->take(8);
    $view->with('portfolyoData',$portfolyoData);
  });
  view()->composer('sayfalar.portfolyo', function($view) {
      $portfolyoData = Portfolyo::orderBy('created_at','DESC')->get();
    $view->with('portfolyoData',$portfolyoData);
  });
  view()->composer('components.referanslar', function($view) {
      $referanslar = Referans::all();
    $view->with('referanslar',$referanslar);
  });
  view()->composer('components.testimonials', function($view) {
      $musteriyorumlari = MusteriYorum::all();
    $view->with('musteriyorumlari',$musteriyorumlari);
  });
  view()->composer('components.sss', function($view) {
      $sssData = Hizmetlerimiz::first();
    $view->with('sssData',$sssData);
  });
    }
}
