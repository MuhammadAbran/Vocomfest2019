@extends('frontend.layouts.main')

@extends('frontend.menu.home_navigation')

@section('title','Home')



@section('content')

    <!-- Start Header Section -->
    <header  id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-4 bottom-animated">
                    <h1 class="headline">"Improving<br />
                        Indonesia's Economy<br />
                        Heading Industry 4.0"</h1>
                    <div class="call-btn">
                        <button class="btn btn-custom btn-transparent m-margin10" onclick=" $('#about').animatescroll({scrollSpeed:3000,easing:'easeInOutBack'});">Tentang</button>
                        <a href="{{route('register')}}"><button class="animated pulse infinite btn btn-custom ">Daftar</button></a>
                    </div>	
				</div>
			</div>
		</div>
    </header>
    <!-- End Header Section -->

    <!-- Start About  Section  -->
    <section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ">
                    <h1 class="sec-title text-center bottom-animated">Teaser Vocomfest 2019</h1>
                    <hr class="title-line" />
 
                </div> 
            </div>

            <div class="row">
				<div class="col-sm-12 order-sm-2  col-md-7 order-md-1">
					<div class="video_box bottom-animated" data-toggle="modal" data-target="#videoTeaser">
                        <img  class="play_btn" src="{!! asset('assets/img/play_btn.png')!!}" alt="Video play button">
                    </div>
				</div>
				<div class=" col-sm-12 order-sm-1  col-md-5 order-md-2 content bottom-animated">
					<p>
                        <strong>VOCOMFEST</strong> (Vocational Computer Festival)  merupakan acara yang diadakan oleh Himpunan Mahasiswa, Prodi D3 Komputer dan SIstem Informasi, Universitas Gadjah Mada dengan mengangkat tema “Improving Indonesia’s Economy Heading to Industry 4.0”. 
                    </p>
				</div>
			</div>
		</div>
    </section>

    <!-- End About  Section  -->

    <!-- Start  Competition Section  -->

    <section id="competition">
		<div class="container">
			<div class="row">
				<div class="col-md-4 offset-md-4 bottom-animated" >
					<h1 class="title text-center">Kompetisi</h1>	
                </div>
            </div>

           
            <div class="row">
                <div class="col-4 offset-4 bottom-animated">
                    <img class="animated heartBeat infinite mx-auto d-block text-center" src="{!! asset('assets/img/vocom_logo2.png')!!}" style="width:100%;height:100%;display:block;">  
                </div>
            </div>

             <!-- Start Card Competition-->
            <div class="row bottom-animated">

                <div class="col-xs-12 col-sm-12 col-md-4 ">
                    <div class="card">
                        <img class="card-img-top img-responsive" src="{!! asset('assets/img/icpc.png')!!}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text text-center">International Collegiate Programming Contest</p>
                            <p class="text-center" style="font-size:1.4em; font-weight : bold; color:#FF5722;">Total Hadiah Rp9.500.000,00</p>
                            <div class="text-center">
                                <a href="{{route('icpcPage')}}"><button class="btn btn-custom btn-transparent">Selengkapnya</button></a>
                            </div>     
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="card">
                        <img class="card-img-top img-responsive" src="{!! asset('assets/img/madc.png')!!}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text text-center">Mobile Apps Development <br/>Competition</p>
                            <p class="text-center" style="font-size:1.4em; font-weight : bold; color:#FF5722;">Total Hadiah Rp9.500.000,00</p>
                            <div class="text-center">
                                    <a href="{{route('madcPage')}}"><button class="btn btn-custom btn-transparent">Selengkapnya</button></a>
                            </div>     
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="card">
                        <img class="card-img-top img-responsive" src="{!! asset('assets/img/wdc.png') !!}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text text-center">Web Design<br/> Competition</p>
                            <p class="text-center" style="font-size:1.4em; font-weight : bold; color:#FF5722;">Total Hadiah Rp4.500.000,00</p>
                            <div class="text-center">
                                    <a href="{{route('wdcPage')}}"><button class="btn btn-custom btn-transparent">Selengkapnya</button></a>
                            </div>     
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Card Competition-->
		</div>
    </section>

    <!-- End Competition Section  -->

    <!-- Start Festival Section  -->

    <section id="festival">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2" >
                    <h1 class="sec-title text-center bottom-animated">National Technology Festival</h1>
                    <hr class="title-line" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 left-box bottom-animated">
                    <p>National Technology Festival (NTF) adalah salah satu rangkaian acara pada VOCOMFEST 2019 yang menyelenggarakan festival dimana akan mengundang berbagai start up, komunitas, dan perusahaan yang telah bekerja sama dengan acara ini dengan mengangkat tema dari tema umum VOCOMFEST 2019 sendiri yaitu “Improving Indonesia’s Economy Heading to Industry 4.0”. </p>
                    <p class="mybtn">
                        <a href="{{route('ntfPage')}}"><button class="btn btn-green">Selengkapnya</button></a>
                    </p> 

                    <p class="text-center btn-mobile">
                        <a href="{{route('ntfPage')}}"><button class="btn btn-green">Selengkapnya</button></a>
                    </p> 
                </div>
                <div class="col-md-6 bottom-animated">
                   <img class="image-responsive" style="width:100%;"src="{!! asset('assets/img/training-seminar.jpg')!!}" alt="Festuval image">

                </div>
            </div>

           
		</div>
    </section>

    <!-- End Festival Section  -->
     
    <!-- Start Timeline Section  -->

  <section id="timeline" class="bottom-animated">
		<div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h1 class="sec-title  text-center">Timeline</h1>
                    <hr class="title-line" />
                </div> 
            </div>
			<div class="row">
                <div class="offset-md-3 col-md-6 bottom-animated ">
                    <div class="text-center" style="margin-top:20px;">
                        <input id="wdcTab" type="radio" name="tabs" checked>
                        <label for="wdcTab"><i class="fa fa-laptop fa-2x"></i> <br> <span>WDC</span></label>
                            
                        <input id="madcTab" type="radio" name="tabs">
                        <label for="madcTab"> <i class="fa fa-mobile fa-2x"></i> <br> <span>MADC</span></label>
                            
                        <input id="ntfTab" type="radio" name="tabs">
                        <label for="ntfTab"><i class="fa fa-microphone fa-2x"></i> <br /> <span>NTF</span></label>
                            
                        <input id="icpcTab" type="radio" name="tabs">
                        <label for="icpcTab"> <i class="fa fa-code fa-2x"></i><br/> <span>ICPC</span></label>

                        <section id="wdcContent">
                            <h3 class="tab-title">Web Design Competition</h3>
                            <div class="timeline_info">
                                
                                @component('components.front_timeline_item')
                                    @slot('date','5 Februari 2019')  
                                    @slot('text')
                                        Pendaftaran dan pengumpulan Website.
                                        <a href="{{route('wdcPage')}}">Download rulebook.</a> 
                                    @endslot
                                @endcomponent

                                @component('components.front_timeline_item')
                                    @slot('date','27 Maret 2019')  
                                    @slot('text','Batas akhir pengumpulan website.')  
                                @endcomponent

                                @component('components.front_timeline_item')
                                    @slot('date','1 April 2019')  
                                    @slot('text','Pengumuman penyisihan I.')  
                                @endcomponent

                                @component('components.front_timeline_item')
                                    @slot('date','18 Maret 2019')  
                                    @slot('text','Batas pengumpulan website yang disempurnakan.')  
                                @endcomponent

                                @component('components.front_timeline_item')
                                    @slot('date','19 April 2019')  
                                    @slot('text','Technical Meeting WDC')  
                                @endcomponent

                                @component('components.front_timeline_item')
                                    @slot('date','20 April 2019')  
                                    @slot('text','Babak Final WDC')  
                                @endcomponent
                            </div>

                        </section>
                            
                        <section id="madcContent">
                            <h3 class="tab-title">Mobile Apps Development Competition</h3>
                            <div class="timeline_info">
                                
                                @component('components.front_timeline_item')
                                    @slot('date','5 Februari 2019')  
                                    @slot('text') 
                                        Pendaftaran dan pengumpulan proposal.
                                        <a href="{{route('madcPage')}}">Download rulebook.</a> 
                                    @endslot 
                                @endcomponent

                                @component('components.front_timeline_item')
                                    @slot('date','24 Maret 2019')  
                                    @slot('text','Batas pengumpulan akhir proposal.')  
                                @endcomponent

                                @component('components.front_timeline_item')
                                    @slot('date','28 Maret 2019')  
                                    @slot('text','Pengumuman Penyisihan I')  
                                @endcomponent

                                @component('components.front_timeline_item')
                                    @slot('date','1 April 2019')  
                                    @slot('text','Pengumpulan aplikasi dan video')  
                                @endcomponent

                                @component('components.front_timeline_item')
                                    @slot('date','11 April 2019')  
                                    @slot('text','Pengumuman finalis')  
                                @endcomponent

                                @component('components.front_timeline_item')
                                    @slot('date','12-18 April 2019')  
                                    @slot('text','Pengumpulan apps yang sudah disempurnakan dan file presentasi.')  
                                @endcomponent

                                @component('components.front_timeline_item')
                                    @slot('date','19 April 2019')  
                                    @slot('text','Technical Meeting MADC')  
                                @endcomponent

                                @component('components.front_timeline_item')
                                    @slot('date','20 April 2019')  
                                    @slot('text','Babak Final MADC')  
                                @endcomponent
                            </div>
                        </section>
                            
                        <section id="ntfContent">
                            <h3 class="tab-title">National Festival Technology</h3>
                            <div class="timeline_info">
                                
                                @component('components.front_timeline_item')
                                    @slot('date','24 Februari 2019')  
                                    @slot('text')  
                                        Pendaftaran 
                                        <a href="{{route('ntfPage')}}">Klik disini.</a> 
                                    @endslot
                                @endcomponent

                                @component('components.front_timeline_item')
                                    @slot('date','31 Maret 2019')  
                                    @slot('text','Penutupan Pendaftaran')  
                                @endcomponent

                                @component('components.front_timeline_item')
                                    @slot('date','20 April 2019')  
                                    @slot('text','Festival')  
                                @endcomponent
                            </div>
                        </section>
                            
                        <section id="icpcContent">
                            <h3 class="tab-title">International Collegiate Programming Contest</h3>
                            <div class="timeline_info">
                                    
                            @component('components.front_timeline_item')
                                @slot('date','25 Februari 2019')  
                                @slot('text','Pendaftaran.')  
                            @endcomponent

                            @component('components.front_timeline_item')
                                @slot('date','29 Maret 2019')  
                                @slot('text','Penutupan Pendaftaran.')  
                            @endcomponent

                            @component('components.front_timeline_item')
                                @slot('date','5 April 2019')  
                                @slot('text','Warming Up Online')  
                            @endcomponent

                            @component('components.front_timeline_item')
                                @slot('date','7 April 2019')  
                                @slot('text','Babak Penyisihan online')  
                            @endcomponent

                            @component('components.front_timeline_item')
                                @slot('date','8 April 2019')  
                                @slot('text','Pengumuman finalis')  
                            @endcomponent

                            @component('components.front_timeline_item')
                                @slot('date','20 April 2019')  
                                @slot('text','Babak Final')  
                            @endcomponent


                            </div>
                        </section>

                    </div>
                    
                    
                </div>
				
			</div>
		</div>
    </section>
    
    <!-- End Timeline Section  -->


    <!-- Start  News Section  -->
    <section id="news" class="bottom-animated">
		<div class="container">
                <div class="row">
                        <div class="col-md-12 ">
                            <h1 class="sec-title text-center">Berita Terbaru</h1>
                            <hr class="title-line" />
                        </div> 
                    </div>
   
			<div class="row">
				<div class="col-md-12">
                    <section class="center slider">
                        <!-- news list-->

                        @foreach($news_all as $news)
                            @component('components.home_news_list')
                                @slot('title',$news->title)
                                @slot('thumbnail',$news->thumbnail)
                                @slot('alt',$news->title)
                                @slot('news_id',$news->id)
                                @slot('date',$news->created_at)
                            @endcomponent
                        @endforeach

                    
                        <!-- End of News List-->

                    </section>
                </div>
            </div>
                
		</div>
    </section>

    <!-- End News Section  -->

    <!-- start galleries section-->
    {{-- <section id="galleries">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="sec-title text-center bottom-animated">Galleries</h1>
                    <hr class="title-line" />
                </div> 
            </div>
    
            <div class="photo-grid bottom-animated">     
               <img src="assets/img/cat2.jpg" alt="">
               <img src="assets/img/training-seminar.jpg" alt="">
               <img src="assets/img/news-thumb.jpg" alt="">
               <img src="assets/img/cat1.jpg" alt="">
               <img src="assets/img/cat2.jpg" alt="">
               <img src="assets/img/training-seminar.jpg" alt="">
               <img src="assets/img/news-thumb.jpg" alt="">
               <img src="assets/img/cat1.jpg" alt="">
               <img src="assets/img/cat2.jpg" alt="">
               <img src="assets/img/training-seminar.jpg" alt="">
               <img src="assets/img/news-thumb.jpg" alt="">
               <img src="assets/img/cat1.jpg" alt="">
            </div>
        </div>
    </section> --}}
    
    <!-- End of galleries Section  -->
      
    <!-- Start Sponsorship Section  -->

    <section id="sponsorship" class="bottom-animated">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <h1 class="sec-title text-center">Sponsorship</h1>
                    <hr class="title-line" />
                </div> 
            </div>
    
            <div class="row">     
                @foreach ($sponsorship as $item)
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <img class="logo mx-auto d-block" src="{{asset('storage/gallaries')}}/{{$item->gallaries_path}}" alt="{{$item->title}}">
                    </div> 
                @endforeach
             </div>
         </div>
    </section>

    <!-- End  Sponsorship Section  -->

    <!-- Start Contact Section  -->

    <section id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 ">
                    <h1 class="sec-title text-center">Contact</h1>
                    <hr class="title-line" />
                </div> 
            </div>
            
            <div class="row">
                <div class=" col-xs-6 col-sm-4 col-md-3 offset-md-1 left-box ">
                    <p> <i class="fas fa-map-marker-alt fa-lg icon-purple"></i>  Gedung Sekolah Vokasi UGM</p>
                    <p><i class="fas fa-envelope fa-lg icon-purple"></i> registration@vocomfest.com</p>
                    <p><i class="fas fa-phone fa-lg icon-purple"></i> (+62) 813-2726-8845</p>
                </div>

                <div class="col-xs-6 col-sm-8 col-md-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.147316700502!2d110.37253361437632!3d-7.774199279276886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a584a6eaf7cbb%3A0x294cd98559dc9c8c!2sSekolah+Vokasi+UGM!5e0!3m2!1sid!2sid!4v1547922619669" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

         </div>
    </section>

@endsection