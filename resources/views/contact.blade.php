@extends('layouts')
@section('title')
 About
@endsection


@section('content')


<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active"
                    style="background-image: url('assets/img/img-contact2.jpg'); width:100%;">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown text-center">Contactez-nous</h2>
                           {{--  <p class="animate__animated animate__fadeInUp">La société de services spécialisée dans
                                l’accompagnement des entreprises dans leur transformation digitale.</p> --}}
                            {{-- <a href="{{ url('/a-propos') }}"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir plus</a> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>





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


    <section id="contact" class="contact">
        <div class="container aos-init aos-animate" data-aos="fade-up">
  
           {{--  <div class="section-title">
                <h2>Contactez-nous</h2>
            </div>  --}}
          
            @if (session()->has('success'))
                <div class="alert-success mb-4 p-3">
                    <h5 class="text-center">{{ session()->get('success') }}</h5>
                </div>
            @endif
        
            <div class="row">
                <div class="col-lg-4 d-none d-lg-block">
                    <img src="{{asset('assets/img/img-contact.jpg')}}" class="img-fluid" alt="" style="height: 91%;
                    object-fit: cover;border-radius: 2px;">            
                </div>
    
                <div class="col-lg-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <form action="{{url('/store-contact')}}" method="POST" role="" class="shadow p-3 mb-5 bg-body-tertiary rounded">
                    @csrf
                    {{-- start error  --}}
                    {{--  @if ($errors->any())
                        <div class='alert alert-danger text-sm p-2' role="alert">
                            <div class="font-weight-bold">{{ __('Quelque chose s\'est mal passé.') }}</div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li> @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    {{--End start error  --}}
                

                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <label for="name">Nom & Prénom</label><span class="text-danger"> *</span>
                            <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" style="
                            border-radius: 3px;
                        " id="name" placeholder="Nom & Prénom" >

                            @error('name')
                            <div class="text-danger text-center">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror

                        </div>

                        <div class="col-lg-6 form-group">
                            <label for="contact1">Contact</label><span class="text-danger"> *</span>
                            <input type="phone" class="form-control {{ $errors->has('contact') ? 'is-invalid' : '' }}" style="
                            border-radius: 3px;
                        " name="contact" id="contact1" placeholder="+225 00 00 00 00 00" >
                            @error('contact')
                            <div class="text-danger text-center">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <label for="email">Email</label> <span class="text-danger"> *</span>
                            <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" style="
                            border-radius: 3px;
                        " name="email" id="email" placeholder="Email">
                            @error('email')
                            <div class="text-danger text-center">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
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
                                <input type="text" class="form-control " style="border-radius: 3px;" name="compagnie" id="compagnie" placeholder="ex: Croissance Numerique"  />
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
    <!-- Contact -->
    <section id="contact" class="contact mt-0">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">

                <div class="col">
                    <div class="col-lg d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="info-box ">
                            <i class="bx bx-phone-call"></i>
                            <h4>Contactez-nous</h4>
                            <p>+225 07 07 540 555
                                {{-- <br>+1 6678 254445 41 --}}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg d-flex aos-init aos-animate" data-aos="fade-up">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h4>Notre adresse</h4>
                            <p>ATTOBAN
                                ,CITE ATTOBAN 1, Villa 370 D
                            </p>
                        </div>
                    </div>

                    <div class="col-lg d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="info-box">
                            <i class="bx bx-envelope"></i>
                            <h4>Email</h4>
                            <p>
                                contact@croissancenumerique.ci
                                {{-- <br>contact@example.com --}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d993.0707894117758!2d-3.984357699185542!3d5.373721538027353!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1edd6ea31e79f%3A0x1cb6dff0d3e1919f!2sCroissance%20Numerique!5e0!3m2!1sfr!2sci!4v1707911881538!5m2!1sfr!2sci"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </section>
    <!-- End contact -->

    
</div>

@endsection