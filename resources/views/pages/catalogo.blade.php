@extends('layouts.main')

@section('stylesheets')
  {{-- <link rel="stylesheet" href="{{asset('css/diamonds.css')}}"> --}}
  <link rel="stylesheet" href="{{asset('css/catalogo.css')}}">
@endsection

@section('content')

  <form class="key-search">
      <input class="form-control" type="search" placeholder="Busca por palabra clave...">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>

  <div class="filters">
    <div class="filters-hidden">Filtrar</div>
    <div class="filters-container">
      <span><i class="fas fa-times fa-lg"></i></span>
      <div class="filter__column">
        <h3 class="filter__title">Género</h3>

        <div class="checkbox"><label><input type="checkbox" rel=""/> Mujer</label></div>
        <div class="checkbox"><label><input type="checkbox" rel=""/> Hombre</label></div>
        <div class="checkbox"><label><input type="checkbox" rel=""/> NIño</label></div>

      </div>
      <div class="filter__column">
        <h3 class="filter__title">Tipo de prenda</h3>

        <div class="two-column">
          <div class="checkbox"><label><input type="checkbox" rel=""/> Vestido</label></div>
          <div class="checkbox"><label><input type="checkbox" rel=""/> Falda</label></div>
          <div class="checkbox"><label><input type="checkbox" rel=""/> Blusa</label></div>
          <div class="checkbox"><label><input type="checkbox" rel=""/> Pantalón</label></div>
          <div class="checkbox"><label><input type="checkbox" rel=""/> Camisa</label></div>
          <div class="checkbox"><label><input type="checkbox" rel=""/> Traje</label></div>
          <div class="checkbox"><label><input type="checkbox" rel=""/> Accesorios</label></div>
        </div>

      </div>
      <div class="filter__column">
        <h3 class="filter__title">Talla</h3>

        <div class="two-column">
          <div class="checkbox"><label><input type="checkbox" rel=""/> XS</label></div>
          <div class="checkbox"><label><input type="checkbox" rel=""/> S</label></div>
          <div class="checkbox"><label><input type="checkbox" rel=""/> M</label></div>
          <div class="checkbox"><label><input type="checkbox" rel=""/> L</label></div>
          <div class="checkbox"><label><input type="checkbox" rel=""/> XL</label></div>
          <div class="checkbox"><label><input type="checkbox" rel=""/> XXL</label></div>
        </div>

      </div>
      <div class="filter__column">
        <h3 class="filter__title">Filtrar por</h3>

        <div class="checkbox"><label><input type="checkbox" rel=""/> Popular</label></div>
        <div class="checkbox"><label><input type="checkbox" rel=""/> Nuevo</label></div>
        <div class="checkbox"><label><input type="checkbox" rel=""/> Ver Todo</label></div>

        <button type="button" name="button">Desmarcar todo</button>

      </div>

    </div><!--END OF FILTERS-CONTAINER-->
  </div><!--END OF FILTERS-->

  <!--CAROUSEL-->
  <div class="carousel-container container">
    <div class="row">
      <div class="carousel-wrap col-xs-15"> <!--<div class="col-sm-12">-->

        <div id="sliderPrendas" class="carousel slide" data-ride="carousel">
          <!-- indicator dot nov -->
          <!-- wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="row">
                <div class="card col-xs-3">
                  <img class="card__img" src="https://picsum.photos/200/200" alt="vestido 1" />
                  <p class="card__title">Vestido 1</p>
                </div>
                <div class="card col-xs-3">
                  <img class="card__img" src="https://picsum.photos/200/201" alt="vestido 2" />
                  <p class="card__title">Vestido 1</p>
                </div>
                <div class="card col-xs-3">
                  <img class="card__img" src="https://picsum.photos/200/202" alt="vestido 3" />
                  <p class="card__title">Vestido 1</p>
                </div>
                <div class="card col-xs-3">
                  <img class="card__img" src="https://picsum.photos/200/203" alt="vestido 4" />
                  <p class="card__title">Vestido 1</p>
                </div>
                <div class="card col-xs-3">
                  <img class="card__img" src="https://picsum.photos/200/204" alt="vestido 5" />
                  <p class="card__title">Vestido 1</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="card col-xs-3">
                  <img class="card__img" src="https://picsum.photos/200/205" alt="vestido 6" />
                  <p class="card__title">Vestido 1</p>
                </div>
                <div class="card col-xs-3">
                  <img class="card__img" src="https://picsum.photos/200/206" alt="vestido 7" />
                  <p class="card__title">Vestido 1</p>
                </div>
                <div class="card col-xs-3">
                  <img class="card__img" src="https://picsum.photos/200/207" alt="vestido 8" />
                  <p class="card__title">Vestido 1</p>
                </div>
                <div class="card col-xs-3">
                  <img class="card__img" src="https://picsum.photos/200/208" alt="vestido 9" />
                  <p class="card__title">Vestido 1</p>
                </div>
                <div class="card col-xs-3">
                  <img class="card__img" src="https://picsum.photos/200/209" alt="vestido 10" />
                  <p class="card__title">Vestido 1</p>
                </div>
              </div>
            </div>

          </div>

          <!-- controls or next and prev buttons -->
          <a class="ctrl-left carousel-control-prev" href="#sliderPrendas" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="ctrl-right carousel-control-next" href="#sliderPrendas" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div> <!-- END col-xs-15 -->
    </div> <!-- END row -->
  </div> <!-- END CAROUSEL -->

  {{-- <div class="card-container">
    <div class="card">
      <img src="https://picsum.photos/500/500" alt="" class="card__img">
      <h3 class="card__title">Vestidos de Novia</h3>
    </div>
    <div class="card">
      <img src="https://picsum.photos/500/501" alt="" class="card__img">
      <h3 class="card__title">Vestidos de Fiesta</h3>
    </div>
    <div class="card">
      <img src="https://picsum.photos/501/500" alt="" class="card__img">
      <h3 class="card__title">Vestidos de Gala</h3>
    </div>
    <div class="card">
      <img src="https://picsum.photos/501/501" alt="" class="card__img">
      <h3 class="card__title">Trajes de Caballero</h3>
    </div>
    <div class="card">
      <img src="https://picsum.photos/502/500" alt="" class="card__img">
      <h3 class="card__title">Trajes de Niño</h3>
    </div>
    <div class="card">
      <img src="https://picsum.photos/502/501" alt="" class="card__img">
      <h3 class="card__title">Accesorios</h3>
    </div>

  </div> --}}
@endsection

@section('scripts')
  {{-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="{{ asset('js/jquery-diamonds.js') }}" defer></script>
  <script>
    $(function(){
      $(".diamond-grid").diamonds({
      size : 250, // Size of diamonds in pixels. Both width and height.
      gap : 8, // Pixels between each square.
      hideIncompleteRow : false, // Hide last row if there are not enough items to fill it completely.
      autoRedraw : true, // Auto redraw diamonds when it detects resizing.
      itemSelector : ".item" // the css selector to use to select diamonds-items.
      });
    });

    $(function(){
      var gridMargin = function(){
        if(($('.diamond-row-lower').last().children().length) > 0){
          $('.diamond-grid').css('margin-bottom', '8rem');
        }
        else{
          $('.diamond-grid').css('margin-bottom', '0');
        }
      };

      gridMargin();

      $(window).resize(function() {
          gridMargin();
      });
    });
  </script> --}}
@endsection
