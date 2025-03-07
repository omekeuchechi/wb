<div class="container">
    <h2>Carousel Example</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
  
        <div class="item active">
          <img src="{{ asset('assets/img/flat-vector-illustration-business-people-operating-work-scene_1156664-8.avif') }}" alt="Los Angeles" style="width:100%;">
          <div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>LA is always so much fun!</p>
          </div>
        </div>
  
        <div class="item">
          <img src="{{ asset('assets/img/organic-flat-computer-programming-illustration_23-2148955255.avif') }}" alt="Chicago" style="width:100%;">
          <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
          </div>
        </div>
      
        <div class="item">
          <img src="{{ asset('assets/img/stock-market-broker-working-with-charts-global-currency-data_482257-17964.avif') }}" alt="New York" style="width:100%;">
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
          </div>
        </div>
    
      </div>
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>