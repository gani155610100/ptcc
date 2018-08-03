<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
  <link rel="stylesheet" href="css/metisMenu/demo.css">

</head>
<body>

  <div class="clearfix">
    <aside class="sidebar">
      <nav class="sidebar-nav">
        <ul class="metismenu" id="auto-collapse-menu-demo">
          <li class="active">
            <a href="#" aria-expanded="true">
              <span class="sidebar-nav-item-icon fa fa-github fa-lg"></span>
              <span class="sidebar-nav-item">Menu demo</span>
              <span class="fa arrow"></span>
            </a>
            <ul aria-expanded="true">
              <li>
                <a href="http://www.jquery-az.com/">
                  <span class="sidebar-nav-item-icon fa fa-code-fork"></span>
                  jQuery
                </a>
              </li>
              <li>
                <a href="http://www.jquery-az.com/">
                  <span class="sidebar-nav-item-icon fa fa-star"></span>
                  Bootstrap
                </a>
              </li>
              <li>
                <a href="http://www.jquery-az.com/">
                  <span class="sidebar-nav-item-icon fa fa-exclamation-triangle"></span>
                  PHP
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" aria-expanded="false">jQuery <span class="fa arrow"></span></a>
            <ul aria-expanded="false">
              <li><a href="http://www.jquery-az.com/">$.on</a></li>
              <li><a href="http://www.jquery-az.com/">$.animate</a></li>
              <li><a href="http://www.jquery-az.com/">$.click()</a></li>
            </ul>
          </li>
          <li>
            <a href="http://www.jquery-az.com/" aria-expanded="false">Bootstrap <span class="glyphicon arrow"></span></a>
            <ul aria-expanded="false">
              <li><a href="#">Forms</a></li>
              <li><a href="#">Tables</a></li>
              <li>
                <a href="#" aria-expanded="false">Carousel <span class="fa plus-times"></span></a>
                <ul aria-expanded="false">
                  <li><a href="#">Single Item</a></li>
                  <li><a href="#">Multi item</a></li>
                  <li><a href="#">Product</a></li>
                </ul>
              </li>
              <li><a href="#">Modals</a></li>
              <li>
                <a href="#" aria-expanded="false">Accordions<span class="fa plus-minus"></span></a>
                <ul aria-expanded="false">
                  <li><a href="#">Accordion 1</a></li>
                  <li><a href="#">Accordion 2</a></li>
                  <li><a href="#">Accordion 3</a></li>
                  <li><a href="#">Accordion 4</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </aside>

  </div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/metisMenu/metisMenu.min.js"></script>

  <script>
    $(function() {

      $('#auto-collapse-menu-demo').metisMenu();

    });
  </script>

  

</body>
</html>

