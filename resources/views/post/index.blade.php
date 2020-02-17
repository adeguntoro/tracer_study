<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{url('/vendor/BS4/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('/fonts/fonts.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">

        <title>Hello, world!</title>
        <style>
            
            body{
                font-family: 'Ubuntu Light';
                background-color: dimgrey;
                padding-top: 100px;
            }
            
            .navbar{
                min-height: 80px;
                transition: 0.5s;
            }
            
            .unsrink{
                min-height: 50px !important;
                transition: 0.5s;
            }
            
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-white topnav fixed-top shadow">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container pt-4 pb-4 mb-0">
            <div class="row">
                <div class="col-md-8">
                    <div class="card border-0 shadow-sm rounded-0">
                        <div class="card-body">
                            
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Judul berita</label>
                                    <input type="text" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" form="FormID" name="judul">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <textarea class="form-control round-0" id="inputKonten" name="isi_konten"form="FormID" hidden></textarea>
                            </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4" >
                  <div class="card border-0 shadow-sm rounded-0">
                      <div class="card-body">
                          <form id="FormID" action="{{route('post.store')}}" method="post">
                              @csrf
                              <div class="form-group">
                                  <label for="exampleFormControlSelect1">Status Artikel</label>
                                  <select class="form-control shadow-sm rounded-0" id="exampleFormControlSelect1" name="status_artikel">
                                      <option value="simpan">Simpan</option>
                                      <option value="terbitkan">Langsung Terbitkan</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="exampleFormControlTextarea1">Ringkasan Berita</label>
                                  <textarea class="form-control shadow-sm rounded-0" id="exampleFormControlTextarea1" rows="3" name="ringkasan"></textarea>
                              </div>
                              <div class="form-group">
                                  <button class="btn btn-primary shadow-sm border-0" type="submit">Kirim</button>
                              </div>
                          </form>
                      </div>
                  </div>
                </div>
            </div>
        </div>
        
        <script src="{{url('/vendor/jquery/jquery-3.4.1.js')}}"></script>
        <script src="{{url('/vendor/popper.js/dist/umd/popper.js')}}"></script>
        <script src="{{url('/vendor/BS4/js/bootstrap.min.js')}}"></script>
        <script src="{{url('/vendor/react/umd/react.production.min.js')}}"></script>
        <script src="{{url('/vendor/react-dom/umd/react-dom.production.min.js')}}"></script>
        <script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
        <script>
            jQuery( document ).ready(function() {
                //navbar shrink
                $(window).scroll(function(){
                    $('.topnav').toggleClass('unsrink', $(this).scrollTop() > 90);
                });
                
                //Laraber init
                const options = {
                    laravelFilemanager : true,
                    sidebar : false,
                    minHeight : '300px'
                }
                Laraberg.init('inputKonten', options)
                
            });

        </script>
    </body>
</html>