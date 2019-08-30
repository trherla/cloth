<!DOCTYPE html>
<head>
    <title>D Cloth</title>
    <link rel="icon" href="image/D.png">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <script src="{{ asset('js/semantic.min.js') }}"></script>
    <style type="text/css">
      body {
        background-color: #FFFFFF;
        margin: 0;
        font-family: sans-serif;
      }
      .ui.menu .item img.logo {
        margin-right: 1.5em;
      }
      .main.container {
        margin-top: 5em;
      }
      .wireframe {
        margin-top: 2em;
      }
      .ui.footer.segment {
        margin: 5em 0em 0em;
        padding: 5em 0em;
      }

      .hero{
        width: 100vw;
        height: 45vw;

        display: flex;
        justify-content: center;
        align-items: center;

        text-align: center;
        color: white;

        background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url('image/herowpp.jpg');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }

      .hero h1{
        font-size: 5em;
        margin-top: 0;
        margin-bottom: 0.5em;
      }

      .hero .btn{
        display: block;
        width: 200px;

        padding: 1em;
        margin-top: 50px;
        margin-left: auto;
        margin-right: auto;

        color: white;
        text-decoration: none;
        font-size: 1.5em;

        border: 3px solid white;
        border-radius: 
      }
    </style>
    <script>
        $(document)
        .ready(function() {

          // fix menu when passed
          $('.masthead')
            .visibility({
              once: false,
              onBottomPassed: function() {
                $('.fixed.menu').transition('fade in');
              },
              onBottomPassedReverse: function() {
                $('.fixed.menu').transition('fade out');
              }
            })
          ;

          // create sidebar and attach to menu open
          $('.ui.sidebar')
            .sidebar('attach events', '.toc.item')
          ;

        })
      ;
    </script>
</head>
<body>
       <!-- <div class="ui large secondary inverted pointing menu">
            <a class="toc item" href="#"></a>
                <i class="sidebar icon"></i>
            <a class="active item" href="#">Home</a>
            <a class="item" href="#">Shop</a>
            <a class="item" href="#">About</a>
            <div class="right item">
                <a class="ui inverted button" href="#">Login</a>
            </div>
        </div> -->
        <div class="ui large top fixed inverted hidden menu">
          <div class="ui container">
            <a class="active item">Home</a>
            <a class="item">Work</a>
            <a class="item">Company</a>
            <a class="item">Careers</a>
            <div class="right menu">
              <div class="item">
                <a class="ui button">Log in</a>
              </div>
              <div class="item">
                <a class="ui primary button">Sign Up</a>
              </div>
            </div>
          </div>
        </div>
      <section class="hero">
        <div class="hero-inner">
            <h1>D Clothing</h1>
            <h2>Look to my awesome Website !!!</h2>
        </div>
      </section>

    <!-- main -->
    <div class="ui main text container">
        <h1 class="ui header">Semantic UI Fixed Template</h1>
        <p>This is a basic fixed menu template using fixed size containers.</p>
        <p>A text container is used for the main container, which is useful for single column layouts</p>
        
        <div class="ui two stackable cards">
            <div class="card">
                <div class="image">
                    <img src="image/D.png">
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="image/D.png">
                </div>
            </div>
        </div>
    </div>



    <!-- footer -->
    <div class="ui inverted vertical footer segment">
        <div class="ui center aligned container">
            <div class="ui stackable inverted divided grid">
                <div class="five wide column">
                    <h4 class="ui inverted header">Group 1</h4>
                </div>
                 <div class="six wide column">
                    <h4 class="ui inverted header">Group 2</h4>
                </div>
                 <div class="five wide column">
                    <h4 class="ui inverted header">Group 3</h4>
                </div>
            </div>
            <div class="ui inverted section divider">
                <img class="ui centered mini image" src="image/D.png">                
            </div>
        </div>
    </div>
</body>
</html>
