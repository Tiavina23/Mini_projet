<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ajout_info</title>
  <meta name="description" content="Publiez un information sur l'intelligence artificiel sur notre site Web. Découvrez comment l'IA est utilisée dans différents domaines, y compris la santé, l'industrie, le commerce électronique, etc. Partagez vos connaissances et vos expériences avec notre communauté.">
  <meta property="og:title" content="Publier un information sur l'intelligence informatique ">
  <meta property="og:description" content="Publiez un article sur l'intelligence informatique sur notre site Web. Découvrez comment l'IA est utilisée dans différents domaines, y compris la santé, l'industrie, le commerce électronique, etc. Partagez vos connaissances et vos expériences avec notre communauté.">
  <meta property="og:image" content="https://exemple.com/images/ia.jpg">
  <meta name="keywords" content="Intelligence informatique,Intelligence artificiel, IA, information sur IA, santé, industrie, evolution, publication d'articles, connaissances, , Nom de la Société , Produits commerciaux">
  <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="" class="logo d-flex align-items-center">
          <img src="assets/img/logo.png" alt="">
          <span class="d-none d-lg-block">INTELLIGENCE .ARTICIELLE</span>
        </a>

      </div>




  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="index.html">
              <i class="bi bi-grid"></i>
             <a href="{{url('genere_contenu')}}"> <span>GERER LES CONTENU</span></a>
            </a>
          </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">



    <section class="section dashboard">
      <div class="row">


          <div class="row">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">



                    <div class="card-body">
                        <h5 class="card-title"><span>| INTELLIGENCE ARTIFICIELLE</span></h5>

                        <form action="{{ url('ajout_contenu') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Titre</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="titre" required>
                                </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Illustrateur</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="illustrateur" required>
                                    </div>
                                    </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="image" required>
                                    </div>
                                    </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"> Domaine</label>
                                    <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="domaine" required>
                                        <option selected></option>
                                        @foreach ( $data as $tab )
                                        <option value={{ $tab->id_domaine}}>{{ $tab->libelle}}</option>
                                        @endforeach


                                    </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"> Secteur</label>
                                    <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="secteur">
                                        <option selected></option>
                                        @foreach ( $data1 as $tab )
                                        <option value={{ $tab->id_secteur}}>{{ $tab->libelle}}</option>
                                        @endforeach


                                    </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"> Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="desc" id="editor" cols="30" rows="10"></textarea>
                                        <script>
                                            CKEDITOR.replace( 'editor', {

                                                filebrowserUploadMethod: 'form'
                                            } );
                                        </script>
                                    </div>
                                </div>
                                <div class="row mb-3">

                                <div class="col-sm-10" style="margin-left: 90%">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                </div>

                        </form>
                    </div>

                </div>
            </div>


          </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Intelligence_Artificiele</span></strong>.
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ url('assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{ url('assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ url('assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{ url('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{ url('assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ url('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('assets/js/main.js')}}"></script>

</body>

</html>
