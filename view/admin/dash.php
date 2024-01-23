<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Dashboard Admin</title>
</head>
<body>
  <!-- Dash Navbar Top -->
  <nav class="navbar navbar-light bg-faded navbar-static-top dash-navbar-top nb-visible">
    <button class="nb-btn-toggle">
            <span class="fa fa-bars"></span>
    </button>
  </nav>
  
      <!-- Dash Navbar Left -->
      <div class="dash-navbar-left nb-visible">
        <a class="navbar-brand" href="#">Dashboard Admin</a>
  
        <p class="nb-nav-title">Home</p>
        <ul class="nb-nav">
          <li>
            <a class="collapsed" data-toggle="collapse" href="#collapseStatistics" aria-expanded="false" aria-controls="collapseStatistics">
              <span class="glyphicon glyphicon-stats nb-link-icon"></span>
              <span class="nb-link-text">Statistics</span>
              <span class="fa fa-angle-up nb-btn-sub-collapse"></span>
            </a>
            <!-- Dropdown level one -->
            <ul class="nb-sub-one collapse" id="collapseStatistics">
              <li>
                <a href="#">
                  <span class="fa fa-clock-o nb-link-icon"></span>
                  <span class="nb-link-text">Daily</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="fa fa-history nb-link-icon"></span>
                  <span class="nb-link-text">Annual</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="#active">
            <a href="#">
              <span class="glyphicon glyphicon-folder-open nb-link-icon"></span>
              <span class="nb-link-text">Pages</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="glyphicon glyphicon-comment nb-link-icon"></span>
              <span class="nb-link-text">Comments</span>
              <span class="badge">4</span>
            </a>
          </li>
          <li>
            <a class="collapsed" data-toggle="collapse" href="#collapseLevelOne" aria-expanded="false" aria-controls="collapseLevelOne">
              <span class="fa fa-sort-amount-desc nb-link-icon"></span>
              <span class="nb-link-text">Dropdown level 1</span>
              <span class="fa fa-angle-up nb-btn-sub-collapse"></span>
            </a>
            <!-- Dropdown level one -->
            <ul class="nb-sub-one collapse" id="collapseLevelOne">
              <li>
                <a href="#">
                  <span class="fa fa-slack nb-link-icon"></span>
                  <span class="nb-link-text">Level 1</span>
                </a>
              </li>
              <li>
                <a class="collapsed" data-toggle="collapse" href="#collapseLevelTwo" aria-expanded="false" aria-controls="collapseLevelTwo">
                  <span class="fa fa-level-down nb-link-icon"></span>
                  <span class="nb-link-text">Dropdown level 2</span>
                  <span class="fa fa-angle-up nb-btn-sub-collapse"></span>
                </a>
                <!-- Dropdown level two -->
                <ul class="nb-sub-two collapse" id="collapseLevelTwo">
                  <li>
                    <a href="#">
                      <span class="fa fa-wifi nb-link-icon"></span>
                      <span class="nb-link-text">Level 2</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="fa fa-wifi nb-link-icon"></span>
                      <span class="nb-link-text">Level 2</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="fa fa-wifi nb-link-icon"></span>
                      <span class="nb-link-text">Level 2</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">
                  <span class="fa fa-slack nb-link-icon"></span>
                  <span class="nb-link-text">Level 1</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <p class="nb-nav-title">Filter</p>
        <ul class="nb-nav">
          <li>
            <a href="#">
              <span class="fa fa-image nb-link-icon"></span>
              <span class="nb-link-text">Image</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="fa fa-video-camera nb-link-icon"></span>
              <span class="nb-link-text">Video</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="glyphicon glyphicon-folder-open nb-link-icon"></span>
              <span class="nb-link-text">Audio</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="fa fa-file-text nb-link-icon"></span>
              <span class="nb-link-text">File</span>
              <span class="badge">4</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="fa fa-link nb-link-icon"></span>
              <span class="nb-link-text">Active link</span>
            </a>
          </li>
        </ul>
        <p class="nb-nav-title">Category</p>
        <ul class="nb-nav">
          <li>
            <a class="collapsed" data-toggle="collapse" href="#collapseCategoryAll" aria-expanded="false" aria-controls="collapseCategoryAll">
              <span class="glyphicon glyphicon-tags nb-link-icon"></span>
              <span class="nb-link-text">All</span>
              <span class="fa fa-angle-up nb-btn-sub-collapse"></span>
            </a>
            <!-- Dropdown level one -->
            <ul class="nb-sub-one collapse" id="collapseCategoryAll">
              <li>
                <a href="#">
                  <span class="fa fa-dot-circle-o nb-link-icon"></span>
                  <span class="nb-link-text">UI</span>
                  <span class="badge">4</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="fa fa-dot-circle-o nb-link-icon"></span>
                  <span class="nb-link-text">Design</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="fa fa-dot-circle-o nb-link-icon"></span>
                  <span class="nb-link-text">App</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="fa fa-dot-circle-o nb-link-icon"></span>
                  <span class="nb-link-text">Homepage</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">
              <span class="fa fa-dot-circle-o nb-link-icon"></span>
              <span class="nb-link-text">Popular</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="fa fa-dot-circle-o nb-link-icon"></span>
              <span class="nb-link-text">Handpicked</span>
            </a>
          </li>
        </ul>
      </div> <!-- /.dash-navbar-left -->
  
  
      <!-- <div class="content-wrap nb-visible" data-effect="nb-push"> -->
        <!-- <div class="container-fluid"> -->
          <!-- <div class="row"> -->
           <!-- Your content here -->
           <!-- <div class="dummy-div" style="height:1500px;"> -->
           <!-- </div> -->
           <!-- End of your content -->
          <!-- </div> -->
        <!-- </div> -->
      <!-- </div>  -->
      <!-- /.content-wrap -->
      <script>
(function(){
  "use strict";

  // Navbar left
  // -------------------------------------------------

    // Variables
      var nb                = $(".dash-navbar-left"),
          nbBtnToggle       = $(".nb-btn-toggle"),
          nbBtnCollapse     = $(".nb-btn-collapse"),
          contentWrap        = $(".content-wrap"),
          contentWrapEffect  = contentWrap.data("effect"),
          windowHeight       = $(window).height() - 61,
          windowWidth        = $(window).width() < 767;

    // Functions
      function cwShowOverflow() {
        if ( windowWidth ) {
            contentWrap.css({
            height : windowHeight ,
            overflow : 'hidden'
          });
          $( 'html, body' ).css( 'overflow', 'hidden' );
        }
      }

      function cwHideOverflow() {
        if ( windowWidth ) {
          contentWrap.css({
            height : 'auto' ,
            overflow : 'auto'
          });
          $( 'html, body' ).css( 'overflow', 'auto' );
        }
      }

      function nbShow() {
        nb.addClass("nb-show").removeClass("nb-hide");
        contentWrap.addClass(contentWrapEffect);
        cwShowOverflow();
        nbBtnToggle.find("span").removeClass("fa-bars").addClass("fa-arrow-left");
      }

      function nbHide() {
        nb.removeClass("nb-show").addClass("nb-hide");
        contentWrap.removeClass(contentWrapEffect);
        cwHideOverflow();
        nbBtnToggle.find("span").removeClass("fa-arrow-left").addClass("fa-bars");
      }

    // Toggle the edge navbar left
      nb.addClass("nb-hide");
      nbBtnToggle.click( function() {
        if( nb.hasClass("nb-hide") ) {
          nbShow();
        } else {
          nbHide();
        }
      });

    // Collapse the dash navbar left subnav
      nbBtnCollapse.click( function(e) {
        e.preventDefault();
        if( nb.hasClass("nb-collapsed") ) {
          nb.removeClass("nb-collapsed");
          contentWrap.removeClass("nb-collapsed");
          $(this).find(".nb-link-icon").removeClass("fa-arrow-right").addClass("fa-arrow-left");
        } else {
          nb.addClass("nb-collapsed");
          contentWrap.addClass("nb-collapsed");
          $(this).find(".nb-link-icon").removeClass("fa-arrow-left").addClass("fa-arrow-right");
        }
      });

    // Close left navbar when top navbar opens
      $( '.navbar-toggle' ).click( function() {
        if ( $( this ).hasClass( 'collapsed' ) ) {
          nbHide();
        }
      });

    // Close top navbar when left navbar opens
      nbBtnToggle.click( function() {
        $( '.navbar-toggle' ).addClass( 'collapsed' );
        $( '.navbar-collapse' ).removeClass( 'in' );
      });

    // Code credit: https://tr.im/CZzf4
      function isMobile() {
        try { document.createEvent("TouchEvent"); return true; }
        catch(e){ return false; }
      }

    // Swipe the navbar
      if ( isMobile() == true ) {
        $(window).swipe( {
          swipeRight:function() {
            nbShow();
            $( '.navbar-collapse' ).removeClass( 'in' );
          },
          swipeLeft:function() {
            nbHide();
          },
          threshold: 75
        });
      }

    // Collapse navbar on content click
      $( '.content-wrap' ).click( function() {
        nbHide();
      });

    // Auto collapse other opens subnavs
      /*$(".nb-nav > li > a").click( function() {
        $( document ).find( 'ul .in' ).collapse( 'hide' );
      });*/

})();
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
</body>
</html>