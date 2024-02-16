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
              <form action="{{url('/store-contact')}}" method="POST" role="" class="">
                @csrf

               {{--  @if ($errors->any())
                    <div class='alert alert-danger text-sm p-2' role="alert">
                        <div class="font-weight-bold">{{ __('Quelque chose s\'est mal passé.') }}</div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif --}}

                

                <div class="row">
                  <div class="col-lg-6 form-group">
                    <label for="name">Nom & Prénom</label><span class="text-danger"> *</span>
                    <input type="text" name="name" class="form-control " style="
                    border-radius: 3px;
                " id="name" placeholder="Nom & Prénom" required="">
                  </div>
                  <div class="col-lg-6 form-group">
                    <label for="contact1">Contact</label><span class="text-danger"> *</span>
                    <input type="phone" class="form-control " style="
                    border-radius: 3px;
                " name="contact" id="contact1" placeholder="+225 00 00 00 00 00" required="">
                  </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <label for="email">Email</label> <span class="text-danger"> *</span>
                        <input type="email" class="form-control " style="
                        border-radius: 3px;
                    " name="email" id="email" placeholder="Email" required="">
                    </div>
                    <div class="col-lg-6 form-group">
                        <label for="industrie">Industrie</label>{{-- <span class="text-danger"> *</span> --}}
                        <select class="form-control " style="border-radius: 3px;" name="industrie" id="industrie">
                            <option value="" disabled selected>Choisissez une industrie</option>
                            <option value="Distribution et commerce de gros">Distribution et commerce de gros</option>
                            <option value="Manufacturier">Manufacturier</option>
                            <option value="Alimentation">Alimentation</option>
                            <option value="Agriculture">Agriculture</option>
                            <option value="Pharmaceutique/Produits naturels">Pharmaceutique/Produits naturels</option>
                            <option value="Produits de consommation">Produits de consommation</option>
                            <option value="Industrie chimique">Industrie chimique</option>
                            <option value="Energie et mines">Energie et mines</option>
                            <option value="Vente au détail">Vente au détail</option>
                            <option value="Services">Services</option>
                            <option value="Autre">Autre</option>
                            <!-- Ajoutez autant d'options que nécessaire -->
                        </select>
                    </div>
                    
                </div>
            
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <div class="form-group">
                            <label for="compagnie">Compagnie</label><span class="text-danger"> *</span>
                            <input type="text" class="form-control " style="border-radius: 3px;" name="compagnie" id="compagnie" placeholder="ex: Croissance Numerique" required="" />
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 form-group">
                        <div class="form-group">
                            <label for="Objet">Sujet</label>
                            <input type="text" class="form-control " style="border-radius: 3px;" name="objet" id="sujet" placeholder="Objet" required="" />
                        </div>
                    </div> --}}

                    <div class="col-lg-6 form-group">
                      <label for="industrie">Objet</label>{{-- <span class="text-danger"> *</span> --}}
                      <select class="form-control " style="border-radius: 3px;" name="objet" id="objet">
                          <option value="" disabled selected>Choisissez un Objet</option>
                          <!-- Ajoutez ici les options de l'industrie -->
                          <option value="Information Générale">Information Générale</option>
                          <option value="Demande de démonstration">Demande de démonstration</option>
                          <option value="Services techniques">Services techniques</option>
                          <option value="Autre">Autre</option>
                          <!-- Ajoutez autant d'options que nécessaire -->
                      </select>
                  </div>
                </div>


                <div class="form-group">
                  <textarea class="form-control " style="
                  border-radius: 3px;
              " name="message" rows="5" placeholder="Message"></textarea>
                </div>
                {{-- <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div> --}}
                <div class="text-center"><button style="background: #428bca;
                border-radius: 3px;
                  border: 0;
                  padding: 10px 30px;
                  color: #fff;
                  transition: 0.4s;" type="submit" class="butForm" >Envoyer</button></div>
              </form>
            </div>  
          </div>
        </div>
      </section>
    
</div>

@endsection