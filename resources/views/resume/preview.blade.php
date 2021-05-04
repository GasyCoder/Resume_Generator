<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Go to http://fontawesome.io/get-started/ to generate your own embed code! -->
  <script src="https://use.fontawesome.com/6e47fdd73a.js"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $user->firstname }} {{ $user->lastname }} - Aperçu CV</title>
  <<link href="{{ asset('css/print.css') }}" rel="stylesheet" type="text/css" media="print" /> 

  <link href="https://fonts.googleapis.com/css?family=Caveat|Open+Sans:400,700" rel="stylesheet">
  <style>
            /* Color Palette
        #2B2D42 - dark blue
        #8D99AE - light blue
        #EDF2F4 - blue/white
        #EF233C - red
        */

        /* Global styles
        -------------------------*/
        /* apply a natural box layout model to all elements, but allowing components to change */
        html {
        box-sizing: border-box;
        }
        *, *:before, *:after {
        box-sizing: inherit;
        }
        body {
        font-family: 'Open Sans', sans-serif;
        margin: 0;
        }
        h1, h2 {
        font-family: 'Caveat', cursive;
        font-weight: 400;
        }
        h1 {
        font-size: 80px;
        }
        h2 {
        font-size: 40px;
        margin-top: 0;
        }
        h3 {
        margin: 0;

        }
        a {
        color: #EF233C;
        }
        a:hover {
        text-decoration: none;
        }
        .content-wrap {
        max-width: 950px;
        margin: 0 auto;
        padding: 60px 50px;
        overflow: hidden;
        }
        .uppercase {
        text-transform: uppercase;
        }

        /* Download button */
        .btn {
        text-decoration: none;
        background: #EF233C;
        color: white;
        padding: 10px;
        display: inline-block;
        }


        /* Header and Footer
        -------------------------*/
        header, footer {
        background: #2B2D42;
        color: #8D99AE;
        }
        /* header */
        header {
        padding-top: 50px;
        position: relative;
        }
        header h1, header h2 {
        color: #EDF2F4; 
        margin: 0;
        }
        .profile-img {
        border-radius: 50%;
        }
        .download {
        position: absolute;
        bottom: 0;
        right: 0;
        }

        /* footer */
        footer {
        text-align: center;
        }
        .contact-info a {
        padding: 10px;
        display: inline-block;
        }


        /* Navigation
        -------------------------*/
        nav {
        text-align: center;
        background: white;
        position: fixed;
        top: 0;
        width: 100%;
        /*z-index: 100;*/
        }
        nav a {
        display: inline-block;
        padding: 15px 20px;
        text-decoration: none;
        text-transform: uppercase;
        font-weight: 700;
        }


        /* Work Experience
        -------------------------*/
        .work {
        background: #EDF2F4;
        }
        h3 ~ p {
        margin: 0;
        }
        .job-description {
        margin-bottom: 25px;
        }
        .job-description p:first-of-type {
        margin-top: 0;
        }


        /* Education
        -------------------------*/
        .education {
        background: linear-gradient(rgba(141, 153, 174, 0.8), rgba(141, 153, 174, 0.5)),
                    url( {{ asset('img/toronto.jpg') }}) no-repeat fixed;
        background-size: cover;
        }
        p + h3 {
        margin-top: 30px;
        }

        .interest {
        background: linear-gradient(rgba(141, 153, 174, 0.8), rgba(141, 153, 174, 0.5)),
                    url( ) no-repeat fixed;
        background-size: cover;
        }
        p + h3 {
        margin-top: 30px;
        }



        /* Media Queries
        -------------------------*/
        @media (min-width: 900px) {
        .col-narrow {
            width: 30%;
            float: left;
        }
        .col-wide {
            width: 70%;
            float: left;
            padding-left: 20px;
        }
        }
        @media (max-width: 899px){
        header {
            text-align: center;
        }
        .profile-img {
            width: 200px;
        }
        }

        .one-job {
        width: 960px;
        margin: 0 auto;
        border: 2px solid black;
        }

        .content-wrap h2 {
            color: #EF233C;
        }
  </style>
</head>
<body>
  <!-- // Intro -->
  <header id="about">
    <a href="" class="btn download" onclick="alert('Oups! Payer avant de télécharger :) ')">Download PDF</a>
    <nav>
      <a href="#about">A propos</a>
      <a href="#work">Expériences</a>
      <a href="#education">Formations</a>
      <a href="#skill">Compétences</a>
      <a href="#interest">Divers</a>
    </nav>
    <div class="content-wrap">
      <!--<img class="profile-img col-narrow" src="images/christina-truong.png" alt="Christina Truong">-->
      <div class="col-wide">
        <h1>{{ $user->firstname }} {{ $user->lastname }}</h1>
        <p>Né(e) le {{ Carbon\Carbon::parse($user->birthday)->format('d/m/Y ') }}</p>
        <p>Habite à {{ $user->city }} - {{ $user->address }}</p>
        <p>Email: {{ $user->email }}
        <p>Contact: {{ $user->phone }}</p>
      </div>
    </div>
  </header>

  <main>
    <!-- // Work Experience -->
    <section id="work" class="work">
        <div class="content-wrap">
            <h2>Expériences</h2>

            @foreach($experiences as $experience)
                <!-- Job  Details -->  
                    <div class="col-narrow">
                        <h3>{{ $experience->jobtitle }}</h3>
                        <p class="uppercase">{{ $experience->company }}</p>
                        <p> 
                            {{ $experience->begin }} - 
                            @if ( $experience->end == null)
                                maintenant
                            @else
                                {{ $experience->end }}
                            @endif
                        </p>
                    </div>

                    <div class="col-wide job-description">
                        <p>{!! nl2br($experience->jobdescription) !!}</p>
                    </div>

            @endforeach
      </div>
    </section>


    <!-- // Education -->
    <section id="education" class="education">
      <div class="content-wrap">
        <h2>Formations</h2>

        <!-- School details. -->
        @foreach($educations as $education)
            <h3>{{ $education->school }}</h3>
            <p>{{ $education->degree }}</p>
           <p> 
                {{ $education->begin }} - 

                @if ( $education->end == null)
                    maintenant
                @else
                    {{ $education->end }}
                @endif
             </p>
        @endforeach

        
      </div>
    </section>

    <section id="skill" class="work">
        <div class="content-wrap">
            <h2>Compétences</h2>

            @foreach($skills as $skill)
              
              <h3>{{ $skill->label }} : {{ $skill->description }}</h3>
              
            @endforeach
        </div>

    </section>
    <section id="interest" class="interest">
        <div class="content-wrap">
            <h2>Divers</h2>

            @foreach($interests as $interest)
              
              <h3>{{ $interest->label }} : {{ $interest->description }}</h3>
              
            @endforeach
        </div>

    </section>
  </main>

</body>
</html>
