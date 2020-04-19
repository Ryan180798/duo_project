  <!--==========================
  Hero Section
  ============================-->

  @if(!empty($header))
  
    <section id="hero" style= "background-image: url({{asset('storage/'.$header->img_path)}});">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">

                  <img class="" src="img/logo.png" alt="Imperial">
                  <h1>Welcome to Imperial studios</h1>
                  <h2>We create <span class="rotating">beautiful graphics, functional websites, working mobile apps</span></h2>
                  <div class="actions">
                    <a href="#about" class="btn-get-started">Get Strated</a>
                    <a href="#services" class="btn-services">Our Services</a>



          @else

            {{-- <section id="hero" src= "{{asset('storage/'.$header[0]->img_path)}}"> --}}
              <section id="hero" style= "background: url(/img/hero-bg.jpg);">
                <div class="hero-container">
                  <div class="wow fadeIn">
                    <div class="hero-logo">
            
                  <img class="" src="img/logo.png" alt="Imperial">
                  <h1>Welcome to Imperial studios</h1>
                  <h2>We create <span class="rotating">beautiful graphics, functional websites, working mobile apps</span></h2>
                  <div class="actions">
                    <a href="#about" class="btn-get-started">Get Strated</a>
                    <a href="#services" class="btn-services">Our Services</a>

          @endif   
        </div>
        </div>
      </div>
    </div>
  </section>


  {{-- <img class="" src="{{asset('storage/'.$header[0]->img_path)}}" alt="Imperial"> --}}