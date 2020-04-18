 <!--==========================
  Testimonials Section
  ============================-->
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Testimonials</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Erdo lide, nora porodo filece, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
        </div>
      </div>

      @if (count($testimonials)!==0)

      @foreach ($testimonials as $testimonial)
        
      @if ($loop->index%2==0)
        <div class="row">
          <div class="col-md-3">
            <div class="profile">
              <div class="pic"><img src="{{asset('storage/'.$testimonial->img_path)}}" alt=""></div>
              <h4>{{$testimonial->name}}</h4>
              <span>{{$testimonial->entreprise}}</span>
            </div>
          </div>
          <div class="col-md-9">
            <div class="quote">
              <b><img src="img/quote_sign_left.png" alt=""></b> {{$testimonial->temoignage}} <small><img src="img/quote_sign_right.png" alt=""></small>
            </div>
          </div>  
        </div>
       @else
        <div class="row">
          <div class="col-md-9">
            <div class="quote">
              <b><img src="img/quote_sign_left.png" alt=""></b> {{$testimonial->temoignage}} <small><img src="img/quote_sign_right.png" alt=""></small>
            </div>
          </div>
          <div class="col-md-3">
            <div class="profile">
              <div class="pic"><img src="{{asset('storage/'.$testimonial->img_path)}}" alt=""></div>
              <h4>{{$testimonial->name}}</h4>
              <span>{{$testimonial->entreprise}}</span>
            </div>
          </div>
        </div>
        @endif
        @endforeach
            
        @else
            
      <div class="row">
          <div class="col-md-3">
            <div class="profile">
              <div class="pic"><img src="img/client-1.jpg" alt=""></div>
              <h4>Saul Goodman</h4>
              <span>Lawless Inc</span>
            </div>
          </div>
          <div class="col-md-9">
            <div class="quote">
              <b><img src="img/quote_sign_left.png" alt=""></b> Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="img/quote_sign_right.png" alt=""></small>
            </div>
          </div>
        </div>
  
        <div class="row">
          <div class="col-md-9">
            <div class="quote">
              <b><img src="img/quote_sign_left.png" alt=""></b> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis architecto beatae. <small><img src="img/quote_sign_right.png" alt=""></small>
            </div>
          </div>
          <div class="col-md-3">
            <div class="profile">
              <div class="pic"><img src="img/client-2.jpg" alt=""></div>
              <h4>Sara Wilsson</h4>
              <span>Odeo Inc</span>
            </div>
          </div>
        </div>
      
      @endif
    
    </div>
  </section>