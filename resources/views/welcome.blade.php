<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Greetings from a sample PHP app built with the Lumen framework!</title>
    <meta content='website' property='og:type'>
    <meta content='https://cdn.scalingo.com/homepage/assets/fb-33a6a93ddbf90bfdae57407481aa05a4.png' property='og:image'>
    <meta content="Deploying your own PHP/Lumen app on Scalingo is as easy as pie: JUST CLICK THIS BUTTON! It will be up in less than 2 minutes!" property='og:description'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet">
    <style>
      body { color: #373a3c; font-family: 'Roboto', sans-serif; font-size: 1rem; line-height: 1.5; font-weight: 300; }
      .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
        color: inherit;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        margin-bottom: 1rem;
        margin-top: 0;
      }
      a { color: #0275d8; text-decoration: none; background-color: transparent; }
      a:focus, a:hover { color: #014c8c; text-decoration: underline; text-decoration: none; }
      a:focus { outline: thin dotted; outline-offset: -2px; }
      .container { margin: 0 auto; text-align: center; }
      .hero { padding: 3rem 1.5rem; }
      .love { margin-bottom: 2rem; }
      h1 { font-size: 2.5rem; margin-bottom: 2rem; }
      h2 { font-size: 1.6rem; font-weight: 300; }
      small { margin-top: 0; }
      .btn {
        overflow: visible;
        text-transform: uppercase;
        text-decoration: none;
        margin: 1em 0;
        -moz-user-select: none;
        border-radius: 0.25rem;
        cursor: pointer;
        display: inline-block;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        padding: 0.375rem 1rem;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        background-color: #0275d8;
        border-color: #0275d8;
        color: #fff;
        border-radius: 0.3rem;
        font-size: 1.25rem;
        line-height: 1.33333;
        padding: 0.75rem 1.25rem;
      }
      .btn:hover, .btn:focus, .btn:active { background-color: #025aa5; border-color: #01549b; color: #fff; background-image: none; }
      .btn:active:focus, .btn:active:hover { background-color: #014682; border-color: #01315a; color: #fff; }
      .scalingo-logo { max-width: 100%; height: auto; width: 330px; }
      .heart-logo { margin: 0 20px; width:56px;position:relative; top:-18px; }
      .tech-logo { width:50px; position:relative; top:-18px; }
      @media (min-width:768px){
        .container { width: 800px; }
        .one-liner { display: block; }
      }
      @media (max-width:767px){
        .scalingo-logo, .heart-logo, .tech-logo { display: block; position: unset; margin: 0 auto; }
        .scalingo-logo, .heart-logo { margin-bottom: 1rem; }
      }
    </style>
  </head>
  <body>
    <div class="container hero">
      <div class="love">
        <img class="scalingo-logo" alt="Scalingo" src="https://scalingo.com/logo-lightgrey.svg">
        <img class="heart-logo" alt="love" src="https://cdn.scalingo.com/documentation/heart.png">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64.104 127.916" class="iconic iconic-lightbulb tech-logo"><defs><clipPath id="iconic-size-lg-lightbulb-clip-0"><path d="M16.583 94H50v2.667l-39.083 6.375-.333-6.417z"/></clipPath><clipPath id="iconic-size-lg-lightbulb-clip-1"><path d="M64 57l-14.5 8.25V82H15.25l-1.5-16L64 43z"/></clipPath><linearGradient id="linearGradient4238" y2="88" gradientUnits="userSpaceOnUse" x2="52.045" y1="88" x1="11.955"><stop stop-color="#e74430" offset="0"/></linearGradient></defs><g data-width="64" class="iconic-lightbulb-lg iconic-container iconic-lg" data-height="128"><path stroke-linejoin="round" d="M44.052 121.91l-23.834 4" class="iconic-lightbulb-screw iconic-lightbulb-screw-4 iconic-property-accent iconic-property-stroke" stroke="#e74430" stroke-linecap="round" stroke-width="4"/><g stroke="#e74430" stroke-linecap="round" fill="none"><g stroke-width="4"><path d="M48.052 111.91l-32 6" class="iconic-lightbulb-screw iconic-lightbulb-screw-3 iconic-property-accent iconic-property-stroke"/><path d="M48.052 101.91l-32 6" class="iconic-lightbulb-screw iconic-lightbulb-screw-2 iconic-property-accent iconic-property-stroke"/><path d="M48 92.5l-32 6" clip-path="url(#iconic-size-lg-lightbulb-clip-0)" class="iconic-lightbulb-screw iconic-lightbulb-screw-1 iconic-property-accent iconic-property-stroke" transform="translate(.052 -.09)"/></g><path stroke-linejoin="round" d="M60 54l-20 9v18.75" clip-path="url(#iconic-size-lg-lightbulb-clip-1)" class="iconic-lightbulb-coil iconic-lightbulb-coil-6 iconic-property-stroke" stroke-width="8" transform="translate(.052 -.09)"/><path stroke-linejoin="round" d="M24 68v13.75" clip-path="url(#iconic-size-lg-lightbulb-clip-1)" class="iconic-lightbulb-coil iconic-lightbulb-coil-5 iconic-property-stroke" stroke-width="8" transform="translate(.052 -.09)"/></g><path d="M47 94H17c-1.657 0-3.221-1.325-3.493-2.959l-1.014-6.082C12.221 83.325 13.343 82 15 82h34c1.657 0 2.779 1.325 2.507 2.959l-1.014 6.082C50.221 92.675 48.657 94 47 94z" class="iconic-lightbulb-base iconic-property-fill" stroke="url(#linearGradient4238)" fill="#e74430" transform="translate(.052 -.09)"/><g stroke-linejoin="round" stroke="#e74430" stroke-linecap="round" stroke-width="8" fill="none"><path d="M60.052 37.91l-56 26" class="iconic-lightbulb-coil iconic-lightbulb-coil-4 iconic-property-stroke"/><path d="M60.052 21.91l-56 26" class="iconic-lightbulb-coil iconic-lightbulb-coil-3 iconic-property-stroke"/><path d="M60.052 5.91l-56 26" class="iconic-lightbulb-coil iconic-lightbulb-coil-2 iconic-property-stroke"/><path d="M30.052 4.024l-26 11.886" class="iconic-lightbulb-coil iconic-lightbulb-coil-1 iconic-property-stroke"/></g></g></svg>
      </div>
      <h1>Greetings from a sample PHP app <br/> built with the Lumen framework!</h1>
      <h2>
        <span style="display:block;"><span class="one-liner">Deploying your own PHP/Lumen app on Scalingo</span> is as easy as pie:</span>
        <a class="btn" href="https://my.scalingo.com/deploy?source=https://github.com/Scalingo/sample-php-lumen">Just click this button!</a>
        <span style="display:block;">It will be up in less than 2 minutes!</span>
      </h2>
      <p>The code of this sample lives <a href="/">on GitHub</a>. You can find <a href="http://samples.scalingo.com">more samples here</a>.</p>
    </div>
    <footer>
      <div class="container">
        <p>
          <span class="one-liner"><a href="https://scalingo.com">Scalingo</a> is the best Platform as a Service on the market:</span>
          no server to install, no dependencies to install, just push your code!
        </p>
      </div>
    </footer>
  </body>
</html>
