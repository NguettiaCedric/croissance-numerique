@extends('layouts')
@section('title')
 About
@endsection


@section('content')

<div class="container">
    <!-- About Content -->
    {{-- <div class="about-main">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-4" src="images/about-img.jpg" alt="" />
            </div>
            <div class="col-lg-6">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate!</p>
            </div>
        </div>
        <!-- /.row -->
    </div> --}}



    <section id="contact" class="contact" >
        <div class="container aos-init aos-animate" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Contactez-nous</h2>
          </div>
  
          <div class="row">

            <div class="col-lg-4 d-none d-lg-block">
                    <img src="assets/img/img-contact.jpg" class="img-fluid" alt="" style="height: 100%;
                    object-fit: cover;border-radius: 2px;">            
            </div>
  
            <div class="col-lg-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-lg-6 form-group">
                    <label for="name">Nom & Prénom</label><span class="text-danger">*</span>
                    <input type="text" name="name" class="form-control formreduis" style="
                    border-radius: 3px;
                " id="name" placeholder="Nom & Prénom" required="">
                  </div>
                  <div class="col-lg-6 form-group">
                    <label for="contact">Contact</label><span class="text-danger">*</span>
                    <input type="phone" class="form-control formreduis" style="
                    border-radius: 3px;
                " name="contact" id="contact" placeholder="+225 00 00 00 00 00" required="">
                  </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <label for="email">Email</label> <span class="text-danger">*</span>
                        <input type="email" class="form-control formreduis" style="
                        border-radius: 3px;
                    " name="email" id="email" placeholder="Email" required="">
                      </div>
                      <div class="col-lg-6 form-group">
                        <label for="industrie">Industrie</label> <span class="text-danger">*</span>
                        <select class="form-control formreduis" style="border-radius: 3px;" name="industrie" id="industrie" required="">
                            <option value="" disabled selected>Choisissez une industrie</option>
                            <!-- Ajoutez ici les options de l'industrie -->
                            <option value="industrie1">Industrie 1</option>
                            <option value="industrie2">Industrie 2</option>
                            <option value="industrie3">Industrie 3</option>
                            <!-- Ajoutez autant d'options que nécessaire -->
                        </select>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="Objet">Sujet</label>
                  <input type="text" class="form-control formreduis" style="
                  border-radius: 3px;
              " name="objet" id="sujet" placeholder="Objet" required="">
                </div>
                <div class="form-group">
                  <textarea class="form-control formreduis" style="
                  border-radius: 3px;
              " name="message" rows="5" placeholder="Message" required=""></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" style="
                    border-radius: 3px;
                ">Envoyer</button></div>
              </form>
            </div>  
          </div>
        </div>
      </section>
    
</div>

@endsection