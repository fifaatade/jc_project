    <main>
      <section id="about">
        <div class="container">
          <div class="mt-5 mb-5">
            <div class="vision d-flex align-items-center mt-5 row">
              <div class="vision-text  mt-5 col">
                <h4 class="mb-3">VISION</h4>
                <p class="mx-3">Plus qu’un simple cabinet, nous voulons être un levier de croissance pour les micros, petites et
                  moyennes entreprises.</p>
              </div>
              <div class="col d-flex description-img">
                <img src="{{asset('image/_).jpg')}}" alt="" height="400" width="250" class="margin mx-2">
                <img src="{{asset('image/Jaden Walton  - 𝒻ℴ𝓊𝓇.jpg')}}" alt="" class="mt-5" height="400" width="250">
              </div>
            </div>
            <div class="mission d-flex align-items-center mt-5 row">
              <div class="col d-flex description-img">
                <img src="{{asset('/image/_).jpg')}}" alt="" height="400" width="250" class="margin mx-2">
                <img src="{{asset('/image/Jaden Walton  - 𝒻ℴ𝓊𝓇.jpg')}}" alt="" class="mt-5" height="400" width="250">
              </div>
              <div class="mission-text mx-5 mt-5 col" id="mission">
                <h4 class="mb-3">MISSION</h4>
                <p class="mx-3">Notre mission est d'accompagner nos clients dans le développement de leur portefeuilles clients
                  mais également à répondre aux enjeux économiques et organisationnels. En un mot conduire nos
                  clients à la performance. Nous voulons également offrir un accompagnement personnalisé et
                  individuel pour répondre aux attentes de chaque client.</p>
              </div>
            </div>
            <div class="valeurs d-flex align-items-center mt-5 row">
              <div class="valeurs-text  mx-5 mt-5 col ">
                <h4 class="mb-3 ">VALEURS</h4>
                <ul>Les valeurs fortes qui déclinent l’identité et la culture d’entreprise d’Impact Plus sont notamment:
                  <li class="li mt-3 mx-5">Innovation</li>
                  <li class="li mx-5">Co-création</li>
                  <li class="li mx-5">Esprit d’équipe</li>
                  <li class="li mx-5">Satisfaction clients</li>
                </ul>
              </div>
              <div class="col d-flex description-img">
                <img src="{{asset('/image/_).jpg')}}"alt="" height="400" width="250" class="margin mx-2">
                <img src="{{asset('/image/Jaden Walton  - 𝒻ℴ𝓊𝓇.jpg')}}" alt="" class="mt-5" height="400" width="250">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="service">
        <div class="container">
          <h2 class="mt-5 mb-5">Nos services</h2>
          <div id="service-text" class="mb-3">
            Nous mettons aux profits de nos clients notre expertise pour qu’ils puissent atteindre leurs objectifs.
            Notre portefeuille est composé
          </div>
        </div>
      </section>
      <section id="list-item">
        <div class="container">
          <div id="items" class="mb-5">
            <div class="service">
              <img src="{{asset('/image/icone-service2.png')}}" />
              <h3>Formation</h3>
              <p>
                Renforcement de capacité du personnel, initiation aux logiciels comptable...
              </p>
              <div class="link">
                <a href="{{route('formation')}}"><span>Découvrir </span> </a>
              </div>
            </div>
            <div class="service">
              <img src="{{asset('/image/icone-service2.png')}}" />
              <h3>Ressources humaines</h3>
              <p class="mt-4">
                Préparation à l’emploi, placement de paersonnel...
              </p>
              <div class="link">
                <a href="{{route('rh')}}">Découvrir </a>
              </div>
            </div>
            <div class="service">
              <img src="{{asset('/image/icone-service2.png')}}" />
              <h3>Finance && Fiscalité</h3>
              <p>
                Etablissement des déclarations fiscales, tenue de la comptabilité des ...
              </p>
              <div class="link"> 
                <a href="{{route('finance')}}">Découvrir</a>
              </div>
            </div>
            <div class="service">
              <img src="{{asset('/image/icone-service2.png')}}" />
              <h3>Accompagnement des MPME</h3>
              <p>
                Rédaction de Business Plan et Business Model, appui à la création d'entreprise ...
              </p>
              <div class="link">
                <a href="{{route('mpme')}}">Découvrir</a>
              </div>
            </div>
            <div class="service">
              <img src="{{asset('/image/icone-service2.png')}}" />
              <h3>Recherche de financement</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor...
              </p>
              <div class="link">
                <a href="{{route('searchFinance')}}">Découvrir</a>
              </div>
            </div>
            <div class="service">
              <img src="{{asset('/image/icone-service2.png')}}" />
              <h3>Prestations divers</h3>
              <p>
                Appels d’offres publics et privés, fourniture de biens et services...
              </p>
              <div class="link">
                <a href="{{route('divers')}}">Découvrir</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="contact">
        <div class="container">
            <div id="contactez-nous">Pour nous contacter</div>
            <div id="form">
                <form action="{{ route('contact') }}" method="post">
                    @csrf
                    <div class="form-item">
                        <label for="name">Nom et prénoms:</label>
                        <input type="text" name="name" placeholder="Nom et prénom" />
                    </div>
                    <div class="form-item">
                        <label for="mail">E-mail:</label>
                        <input type="email" name="email" placeholder="E-mail" />
                    </div>
                    <div class="form-item">
                        <label for="objet">Objet:</label>
                        <input type="text" name="subject" placeholder="Objet" />
                    </div>
                    <div class="form-item">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="form-item">
                        <button class="form-item-btn" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
      </section>

    </main>
