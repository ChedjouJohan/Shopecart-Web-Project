@extends('layouts.app')

@section('title', 'Blog - Shopecart')

@section('content')
   <!-- Contenu principal du Blog -->
  <main class="blog-container">
    <!-- Hero Section -->
    <section class="blog-hero">
      <div class="hero-overlay">
        <h1>Le Monde de l'Électronique</h1>
        <p>Découvrez nos guides, comparatifs et actualités pour choisir les meilleurs appareils électroniques</p>
      </div>
    </section>

    <!-- Section Intro -->
    <section class="blog-intro">
      <h2>Nos Derniers Articles</h2>
      <p>Restez informés sur les tendances tech, nos conseils d'experts et les meilleures offres du moment</p>
    </section>
    
    <!-- Grille des articles -->
    <section class="articles">
      
      <!-- Article 5 -->
      <article class="card">
        <img src="/assets/images/femmecasque.jpg" alt="Femme avec casque audio">
        <div class="card-content">
          <span class="card-category">Tech & Lifestyle</span>
          <h2><a href="/articles/article5.html">Avec nos amis électroniques</a></h2>
          <p>Les appareils électroniques sont devenus des acteurs incontournables dans notre vie quotidienne. Découvrez comment ils nous aident au quotidien...</p>
          <div class="card-meta">
            <span><i class="far fa-clock"></i> 5 min</span>
            <span><i class="far fa-calendar"></i> 2 Oct 2025</span>
          </div>
          <a class="read-more" href="/articles/article5.html">Lire l'article</a>
        </div>
      </article>

      <!-- Article 3 -->
      <article class="card">
        <img src="/assets/images/laptopcamera.jpg" alt="Laptop et caméra">
        <div class="card-content">
          <span class="card-category">Photographie</span>
          <h2><a href="/articles/article3.html">Les créateurs de souvenirs</a></h2>
          <p>Afin de capturer les moments qui comptent, notre gamme de caméras est disponible pour vous accompagner partout...</p>
          <div class="card-meta">
            <span><i class="far fa-clock"></i> 7 min</span>
            <span><i class="far fa-calendar"></i> 28 Sep 2025</span>
          </div>
          <a class="read-more" href="/articles/article3.html">Lire l'article</a>
        </div>
      </article>
      
      <!-- Article 4 -->
      <article class="card">
        <img src="/assets/images/bazar.jpg" alt="Appareils électroniques variés">
        <div class="card-content">
          <span class="card-category">Guide d'Achat</span>
          <h2><a href="/articles/article4.html">Comment choisir ses appareils indispensables ?</a></h2>
          <p>Les critères essentiels pour ne pas se tromper lors de l'achat de vos appareils électroniques. Notre guide complet...</p>
          <div class="card-meta">
            <span><i class="far fa-clock"></i> 10 min</span>
            <span><i class="far fa-calendar"></i> 25 Sep 2025</span>
          </div>
          <a class="read-more" href="/articles/article4.html">Lire l'article</a>
        </div>
      </article>

      <!-- Article 2 -->
      <article class="card">
        <img src="/assets/images/desktopjeuenligne.jpg" alt="Setup gaming">
        <div class="card-content">
          <span class="card-category">Gaming</span>
          <h2><a href="/articles/article2.html">Le divertissement sans limite</a></h2>
          <p>Les outils électroniques ne sont pas qu'à but professionnel, ils laissent aussi place à l'amusement et au gaming...</p>
          <div class="card-meta">
            <span><i class="far fa-clock"></i> 6 min</span>
            <span><i class="far fa-calendar"></i> 20 Sep 2025</span>
          </div>
          <a class="read-more" href="/articles/article2.html">Lire l'article</a>
        </div>
      </article>

      <!-- Article 1 -->
      <article class="card">
        <img src="/assets/images/fille.jpg" alt="Femme avec smartphone">
        <div class="card-content">
          <span class="card-category">Smartphones</span>
          <h2><a href="/articles/article1.html">Au sommet du monde des smartphones</a></h2>
          <p>Vous cherchez un smartphone performant ? Ne cherchez plus ! Notre catalogue de smartphones est à couper le souffle. Découvrez en exclusivité le nouveau iPhone 12 Pro Max...</p>
          <div class="card-meta">
            <span><i class="far fa-clock"></i> 8 min</span>
            <span><i class="far fa-calendar"></i> 15 Sep 2025</span>
          </div>
          <a class="read-more" href="/articles/article1.html">Lire l'article</a>
        </div>
      </article>

      <!-- Article 6 -->
      <article class="card">
        <img src="/assets/images/casqueetmanette.jpg" alt="Casque et manette de jeu">
        <div class="card-content">
          <span class="card-category">Gaming</span>
          <h2><a href="/articles/article6.html">Immersion totale dans vos jeux</a></h2>
          <p>Casques VR, manettes et accessoires gaming : découvrez comment transformer vos sessions de jeu en expériences inoubliables...</p>
          <div class="card-meta">
            <span><i class="far fa-clock"></i> 5 min</span>
            <span><i class="far fa-calendar"></i> 10 Sep 2025</span>
          </div>
          <a class="read-more" href="/articles/article6.html">Lire l'article</a>
        </div>
      </article>

    </section>
  </main>

@endsection