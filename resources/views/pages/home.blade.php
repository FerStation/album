@extends('/layouts/main')
@section('content')
<header class="text-white gradient">
  <!-- comentário do HTML -->
  {{-- comentário do blade --}}
  @include('/partials/navbar')
  <div class="jumbotron bg-transparent text-center py-5">
    <div class="container">
      <h1 class="display-3 text-pacifico">Album de fotos</h1>
      <br>
      <p class="lead text-white-50">Something short and leading about the collection below—its contents, the creator,
        etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <br>
      <form action="">
        <input class="form-control form-control-lg" type="text" name="" id=""
          placeholder="Digite aqui a foto que deseja pesquisar">
      </form>
      <br>
    </div>
  </div>
</header>

<section class="container mt-4">
  <div class="row">

    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card shadow-sm h-100">
        <img class="bd-placeholder-img card-img-top"
          src="https://www.osmais.com/wallpapers/201209/dia-de-chuva-wallpaper.jpg" alt="">
        <div class="card-body">
          <p class="card-text">"Uma foto qualquer"
          <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted text-center">Por: Fernando</small>
            <small class="text-muted text-center">10/08/2020</small>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card shadow-sm h-100">
        <img class="bd-placeholder-img card-img-top"
          src="https://i0.wp.com/alcidesmelhadofilho.com.br/wp-content/uploads/2017/01/space-desktop-wallpapers-cool-background-quality-wallpaper-definition-high-images.jpg?ssl=1"
          alt="">
        <div class="card-body">
          <p class="card-text">"Espaço profundo"
          <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted text-center">Por: Luis da Silva</small>
            <small class="text-muted text-center">10/08/2020</small>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card shadow-sm h-100">
        <img class="bd-placeholder-img card-img-top"
          src="https://64.media.tumblr.com/e5b80940152af60bed18ede4f740e87b/a070ab8df10b6c7d-c5/s1280x1920/1b43e24aae2b23f7802bab62cdb2ea8a54256f8e.png"
          alt="">
        <div class="card-body">
          <p class="card-text">"bob esponja calça quadrada"
          <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted text-center">Por: Aline Souza</small>
            <small class="text-muted text-center">10/08/2020</small>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card shadow-sm h-100">
        <img class="bd-placeholder-img card-img-top"
          src="https://is2-ssl.mzstatic.com/image/thumb/Purple71/v4/e0/e8/65/e0e865d7-67c5-d4db-5612-ecd99e7f6c2e/pr_source.png/246x0w.png"
          alt="">
        <div class="card-body">
          <p class="card-text">"Playstation! Playstation! Playstation!"
          <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted text-center">Por: Yudi do sbt</small>
            <small class="text-muted text-center">10/08/2020</small>
          </div>
        </div>
      </div>
    </div>


  </div>
</section>
@endsection
