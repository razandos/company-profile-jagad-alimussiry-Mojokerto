<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Team;
use App\Models\beranda;
use App\Models\event;
use App\Models\jamedia;
use App\Models\istigosah;
use App\Models\bimbel;
use App\Models\koperasi;
use App\Models\konsultasi;
use App\Models\guru;
use App\Models\science;
use App\Models\komuniti;
use App\Models\pengurus;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() 
    {
        $slide = Slide::all();
        $beranda = beranda::all();
        return view('home.index', compact('slide','beranda'));
    }
   
    public function bimbel1() 
    {
        $bimbel = bimbel::all();
        return view('home.bimbel1', compact('bimbel'));
    }
    public function istigosah1() 
    {
        $istigosah = istigosah::all();
        return view('home.istigosah1', compact('istigosah'));
    }
    public function koperasi1() 
    {
        $koperasi = koperasi::all();
        return view('home.koperasi1', compact('koperasi'));
    }
    public function konsultasi1() 
    {
        $konsultasi = konsultasi::all();
        return view('home.konsultasi1', compact('konsultasi'));
    }
    public function media() 
    {
        $guru = guru::all();
        return view('home.media', compact('guru'));
    }
    public function science1() 
    {
        $science = science::all();
        return view('home.science1',compact('science'));
    }
    public function komunitas() 
    {
        $komuniti = komuniti::all();
        return view('home.komunitas', compact('komuniti'));
    }
    public function penerbit() 
    {
        return view('home.penerbit');
    }
    
    
    public function team() 
    {
        $teams = Team::all();
        return view('home.team', compact('teams'));
    }
  
    
    public function jamedia1() 
    {
        $jamedia = jamedia::all();
        return view('home.jamedia1', compact('jamedia'));
    }

    public function berita1() 
    {
        $event = event::all();
        return view('home.berita1', compact('event'));
    }

    public function contact() 
    {
        return view('home.contact');
    }
    public function BlogBimbel() 
    {
        return view('home.BlogBimbel');
    }
    public function BlogIstigosah() 
    {
        return view('home.BlogIstigosah');
    }
    public function BlogKoperasi() 
    {
        return view('home.BlogKoperasi');
    }
    public function BlogKomunitas() 
    {
        return view('home.BlogKomunitas');
    }
    public function BlogMedia() 
    {
        return view('home.BlogMedia');
    }
    public function BlogKonsultasi() 
    {
        return view('home.BlogKonsultasi');
    }
    public function BlogMedia2() 
    {
        return view('home.BlogMedia2');
    }
    public function BlogMedia3() 
    {
        return view('home.BlogMedia3');
    }
    public function BlogMedia4() 
    {
        return view('home.BlogMedia4');
    }
}
