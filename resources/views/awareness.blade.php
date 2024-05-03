@extends('body')

@section('content')



<section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
      <h1 style="font-weight: 400;" id="sinhala">{{__('awareness.title')}}</h1>
      <img src="assets/img/mother.png" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
    </div>

</section>

  <main id="main">

    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">
        <div class="container" >
          <div class="row row-cols-1 row-cols-md-2 g-3">
            <div class="col">
              <div class="card" style="height: 14rem !important; ">
                <div class="row">
                  <div class="col-md-9"> <!-- Text column, order last on medium and larger, last on mobile -->
                    <div class="card-body">
                      <h5 class="card-title" id="sinhala">{{__('awareness.what_title')}}</h5>
                      <p class="card-text" id="sinhala">{{__('awareness.what_content1')}} {{__('awareness.what_content2')}}</p>
                      <a href="#what" class="btn btn-success" id="sinhala">{{__('awareness.button')}}</a>
                    </div>
                  </div>
                  <div class="col-md-3 "> <!-- Image column, order first on medium and larger, first on mobile -->
                    <img src="assets/img/cards/question.png" class="img-fluid img-md1" alt="...">
                  </div>
                </div>
              </div>
            </div>
            <!-- Repeat the above div for each additional card -->
            <div class="col">
              <div class="card" style="height: 14rem !important;">
                <div class="row">
                  <div class="col-md-8"> <!-- Text column, order last on medium and larger, last on mobile -->
                    <div class="card-body">
                      <h5 class="card-title" id="sinhala">{{__('awareness.recognize_title')}}</h5>
                      <p class="card-text" id="sinhala">{{__('awareness.recognize_content1')}}{{__('awareness.recognize_content2')}} </p>
                      <a href="#recognize" class="btn btn-success" id="sinhala">{{__('awareness.button')}}</a>
                    </div>
                  </div>
                  <div class="col-md-4"> <!-- Image column, order first on medium and larger, first on mobile -->
                    <img src="assets/img/cards/recognize.png" class="img-fluid img-md2" alt="...">
                  </div>
                </div>
              </div>
            </div>
            <!-- Repeat the above div for each additional card -->
            <div class="col">
              <div class="card" style="height: 14rem !important;">
                <div class="row">
                  
                  <div class="col-md-9"> <!-- Text column, order last on medium and larger, last on mobile -->
                    <div class="card-body">
                      <h5 class="card-title" id="sinhala">{{__('awareness.should_title')}}</h5>
                      <p class="card-text" id="sinhala">{{__('awareness.should_content1')}} {{__('awareness.should_content2')}}</p>
                      <a href="#should" class="btn btn-success" id="sinhala">{{__('awareness.button')}}</a>
                    </div>
                  </div>
                  <div class="col-md-3"> <!-- Image column, order first on medium and larger, first on mobile -->
                    <img src="assets/img/cards/should.png" class="img-fluid img-md3" alt="...">
                  </div>
                </div>
              </div>
            </div>
            <!-- Repeat the above div for each additional card -->
            <div class="col">
              <div class="card" style="height: 14rem !important;">
                <div class="row">
                  <div class="col-md-9"> <!-- Text column, order last on medium and larger, last on mobile -->
                    <div class="card-body">
                      <h5 class="card-title" id="sinhala">{{__('awareness.hospital_title')}}</h5>
                      <p class="card-text" id="sinhala">{{__('awareness.hospital_content1')}} {{__('awareness.hospital_content2')}}</p>
                      <a href="#hospital" class="btn btn-success" id="sinhala">{{__('awareness.button')}}</a>
                    </div>
                  </div>
                  <div class="col-md-3 "> <!-- Image column, order first on medium and larger, first on mobile -->
                    <img src="assets/img/cards/hospital.png" class="img-fluid img-md4" alt="...">
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- Repeat the above div for each additional card -->
            {{-- <div class="col">
              <div class="card" style="height: 14rem !important;">
                <div class="row">
                  
                  <div class="col-md-9"> <!-- Text column, order last on medium and larger, last on mobile -->
                    <div class="card-body">
                      <h5 class="card-title" id="sinhala">{{__('awareness.prevent_title')}}</h5>
                      <p class="card-text" id="sinhala">{{__('awareness.prevent_content1')}} {{__('awareness.prevent_content2')}}</p>
                      <a href="#prevent" class="btn btn-success" id="sinhala">{{__('awareness.button')}}</a>
                    </div>
                  </div>
                  <div class="col-md-3 "> <!-- Image column, order first on medium and larger, first on mobile -->
                    <img src="assets/img/cards/recognize.png" class="img-fluid img-md2" alt="...">
                  </div>
                </div>
              </div>
            </div> --}}

            <!-- Repeat the above div for each additional card -->
            <div class="col">
              <div class="card" style="height: 14rem !important;">
                <div class="row">
                  <img src="assets/img/cards/prevent.png" class="card-img-top" alt="..." style="height: 14rem !important;padding-bottom: 1rem !important; padding-left:2rem;padding-right:2rem">
                  <div class="card-img-overlay">
                    <h5 class="card-title" id="sinhala">{{__('awareness.prevent_title')}}</h5>
                    <p class="card-text" id="sinhala">{{__('awareness.prevent_content1')}} {{__('awareness.prevent_content2')}}</p>
                    <a href="#prevent" class="btn btn-success" id="sinhala">{{__('awareness.button')}}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Select all elements with class 'card-text' and loop through them
        var paragraphs = document.querySelectorAll('.card-text');
        paragraphs.forEach(function(paragraph) {
          // Get the text content of the current paragraph
          var paragraphText = paragraph.textContent;
          
          // Split the text into an array of words
          var words = paragraphText.split(' ');
          
          // Slice the array to keep only the first 20 words
          var shortenedText = words.slice(0, 15).join(' ');
          
          // Update the current paragraph with the shortened text
          paragraph.textContent = shortenedText + '...';
        });
      });
    </script>
{{-- 
<section id="section-id" class="features" >
  <P></P>
  <P></P>
  <h4>Thashini</h4>
  <P >Raleesha</P>
</section> --}}

    {{-- <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="card">
            <img src="assets/img/card.jpg" class="card-img-top" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title">Card with an image overlay</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <div class="col-lg-12 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <div class="col-lg-12">

                <div class="card mb-3">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="assets/img/card.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Card with an image on left</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                    </div>
                  </div>
                </div>
      
              </div>
            </div>
          </div>

          <div class="col-lg-12 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <div class="col-lg-12">

                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Default Accordion</h5>
      
                    <!-- Default Accordion -->
                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Accordion Item #1
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                          </div>
                        </div>
                      </div>
                    </div><!-- End Default Accordion Example -->
      
                  </div>
                </div>
      
              </div>
            </div>
          </div>

          <div class="col-lg-12 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <div class="col-lg-12">

                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Default Accordion</h5>
      
                    <!-- Default Accordion -->
                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Accordion Item #1
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                          </div>
                        </div>
                      </div>
                    </div><!-- End Default Accordion Example -->
      
                  </div>
                </div>
      
              </div>
            </div>
          </div>

          

        </div>

      </div>
    </section> --}}
    {{-- <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3>Febrile Seizure</h3>
              <h3>උණ වලිප්පුව</h3>
              <h3>Febrile Seizure</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Corporis voluptates sit</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Ullamco laboris nisi</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Labore consequatur</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Beatae veritatis</h4>
                  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section --> --}}
    <!-- ======= Clients Section ======= -->
    {{-- <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section --> --}}

    <!-- ======= Features Section ======= -->
<div class="container">
<section id="what" class="features" data-aos="fade-up">
      <div class="container">
        <div class="section-title">
          
          <h2 id="sinhala">{{__('awareness.what_title')}}</h2> 
        </div>
        <div class="row content">
          <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/cards/w1.png" class="img-fluid w1" alt="">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
            <ul>
              <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.what_content1')}}</li>
              <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.what_content2')}}</li>
              <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.what_content3')}}</li>
            </ul>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/cards/w2.png" class="img-fluid w2" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <ul>
              <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.what_content4')}}</li>
              <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.what_content5')}}</li>
              <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.what_content6')}}</li>
            </ul>
          </div>
        </div>
        {{-- <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="assets/img/features-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5" data-aos="fade-left">
            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div>
        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/features-4.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div> --}}
      </div>
</section>

<section id="recognize" class="features" data-aos="fade-up">
  <div class="container" style="margin-top: 3rem">
    <div class="section-title">
      <h2 id="sinhala">{{__('awareness.recognize_title')}}</h2> 
    </div>

    <div class="row content">
      <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
        <img src="assets/img/cards/r1.png" class="img-fluid r1" alt="">
      </div>
      <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
        <ul>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.recognize_content1')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.recognize_content2')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.recognize_content3')}}</li>
        </ul>
      </div>
    </div>

    <div class="row content">
      <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
        <img src="assets/img/cards/r2.png" class="img-fluid r2" alt="">
      </div>
      <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
        <ul>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.recognize_content4')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.recognize_content5')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.recognize_content6')}}</li>
        </ul>
      </div>
    </div>
    <div class="row content">
      <div class="col-md-5" data-aos="fade-right">
        <img src="assets/img/cards/s4.png" class="img-fluid r3" alt="">
      </div>
      <div class="col-md-7 pt-5" data-aos="fade-left"><ul>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.recognize_content7')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.recognize_content8')}}</li>
        </ul>
      </div>
    </div>
   {{-- <div class="row content">
      <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
        <img src="assets/img/features-4.png" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
        <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
        <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
        <p>
          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum
        </p>
      </div>
    </div> --}}
  </div>
</section>

<section id="should" class="features" data-aos="fade-up">
  <div class="container" style="margin-top: 3rem">
    <div class="section-title">
      <h2 id="sinhala">{{__('awareness.should_title')}}</h2> 
    </div>
    <div class="row content">
      <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
        <img src="assets/img/cards/s1.png" class="img-fluid s1" alt="">
      </div>
      <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
        <ul>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.should_content1')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.should_content2')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.should_content3')}}</li>
        </ul>
      </div>
    </div>

    <div class="row content">
      <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
        <img src="assets/img/cards/s2.png" class="img-fluid s2" alt="">
      </div>
      <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
        <ul>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.should_content4')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.should_content5')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.should_content6')}}</li>
        </ul>
      </div>
    </div>
    <div class="row content">
      <div class="col-md-5" data-aos="fade-right">
        <img src="assets/img/cards/s3.png" class="img-fluid s3" alt="">
      </div>
      <div class="col-md-7 pt-5" data-aos="fade-left"><ul>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.should_content7')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.should_content8')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.should_content9')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.should_content10')}}</li>
        </ul>
      </div>
    </div>
    {{--<div class="row content">
      <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
        <img src="assets/img/features-4.png" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
        <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
        <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
        <p>
          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum
        </p>
      </div>
    </div> --}}
  </div>
</section>

<section id="hospital" class="features" data-aos="fade-up">
  <div class="container" style="margin-top: 3rem">
    <div class="section-title">
      <h2 id="sinhala">{{__('awareness.hospital_title')}}</h2> 
    </div>
    <div class="row content">
      <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
        <img src="assets/img/features-2.png" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
        <ul>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.hospital_content1')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.hospital_content2')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.hospital_content3')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.hospital_content4')}}</li>
        </ul>
      </div>
    </div>

    <div class="row content">
      <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
        <img src="assets/img/features-2.png" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
        <ul>
          
          <li id="sinhala"><strong>{{__('awareness.hospital_content5')}}</strong></li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.hospital_content6')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.hospital_content7')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.hospital_content8')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.hospital_content9')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.hospital_content10')}}</li>
        </ul>
      </div>
    </div>
    {{--<div class="row content">
      <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
        <img src="assets/img/features-4.png" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
        <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
        <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
        <p>
          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum
        </p>
      </div>
    </div> --}}
  </div>
</section>

<section id="prevent" class="features" data-aos="fade-up">
  <div class="container" style="margin-top: 3rem">
    <div class="section-title">
      <h2 id="sinhala">{{__('awareness.prevent_title')}}</h2> 
    </div>

    <div class="row content">
      <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
        <img src="assets/img/cards/p1.png" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
        <ul>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content1')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content2')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content3')}}</li>
        </ul>
      </div>
    </div>

    <div class="row content">
      <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
        <img src="assets/img/cards/p2.png" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
        <ul>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content4')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content5')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content6')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content7')}}</li>

        </ul>
      </div>
    </div>
    
    <div class="row content">
      <div class="col-md-5" data-aos="fade-right">
        <img src="assets/img/cards/p3.png" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 pt-5" data-aos="fade-left"><ul>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content8')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content9')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content10')}}</li>
        </ul>
      </div>
    </div>

    <div class="row content">
      <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
        <img src="assets/img/features-2.png" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
        <ul>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content11')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content12')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content13')}}</li>


        </ul>
      </div>
    </div>

    <div class="row content">
      <div class="col-md-5" data-aos="fade-right">
        <img src="assets/img/features-3.png" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 pt-5" data-aos="fade-left"><ul>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content14')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content15')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content16')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content17')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content18')}}</li>
        </ul>
      </div>
    </div>

    <div class="row content">
      <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
        <img src="assets/img/features-2.png" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
        <ul>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content19')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content20')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content21')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content22')}}</li>
          <li id="sinhala"><i class="bi bi-check"></i> {{__('awareness.prevent_content23')}}</li>
       </ul>
      </div>
    </div>
 

  </div>
</section>
</div>

    <!-- ======= Steps Section ======= -->
    {{-- <section id="steps" class="steps">
      <div class="container">

        <div class="row no-gutters" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
            <span>01</span>
            <h4>Lorem Ipsum</h4>
            <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
            <span>02</span>
            <h4>Repellat Nihil</h4>
            <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <span>03</span>
            <h4> Ad ad velit qui</h4>
            <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
            <span>04</span>
            <h4>Repellendus molestiae</h4>
            <p>Inventore quo sint a sint rerum. Distinctio blanditiis deserunt quod soluta quod nam mider lando casa</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
            <span>05</span>
            <h4>Sapiente Magnam</h4>
            <p>Vitae dolorem in deleniti ipsum omnis tempore voluptatem. Qui possimus est repellendus est quibusdam</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <span>06</span>
            <h4>Facilis Impedit</h4>
            <p>Quis eum numquam veniam ea voluptatibus voluptas. Excepturi aut nostrum repudiandae voluptatibus corporis sequi</p>
          </div>

        </div>

      </div>
    </section><!-- End Steps Section --> --}}

    {{-- <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="box featured">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 mt-4 mt-md-0">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section --> --}}

  </main>

@endsection