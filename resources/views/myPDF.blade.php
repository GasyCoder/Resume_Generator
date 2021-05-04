<!doctype html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Emploi Mahajanga - Générateur de CV</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link href="{{ asset('css/template_one.css') }}" rel="stylesheet" type="text/css" /> 

        <style>
                   

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

        .education, legend{
            text-align: center;
        }
        </style>
    </head>

    <body>
        
        <div class="container">
                
            <div class="row">
                <div class="col-lg-12">
                    <div class="about">
                        <fieldset>
                            <legend>ETAT CIVIL</legend>
                            <p>{{ $name }}</p>
                            <p>Né(e) le {{ Carbon\Carbon::parse($birthday)->format('d/m/Y ') }}</p>
                            <p>Habite à {{ $city }} - {{ $address }}</p>
                            <p>Email: {{ $email }}
                            <p>Contact: {{ $phone }}</p>
                        </fieldset>
                    </div>
                </div>
            </div>   

            <div class="row">
                <div class="col-lg-12">
                    <div class="experience">
                         <fieldset>
                            <legend>EXPERIENCES PROFESSIONNELLES</legend>
                            @foreach($experiences as $experience)
                                 <div class="row">
                                    <div class="col-lg-12">
                                        
                                        <h3>{{ $experience->jobtitle }}</h3>

                                        <div class="details col-narrow">
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
                                    </div>
                                     
                                 </div>
                            @endforeach
                           
                        </fieldset>
                    </div>
                </div>
            </div>    
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="education">
                         <fieldset>
                            <legend>FORMATIONS</legend>
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
                        </fieldset>
                    </div>
                </div>
            </div>    

            <div class="row">
                <div class="col-lg-12">
                    <div class="skill">
                        <fieldset>
                            <legend>COMPETENCES</legend>

                                @foreach($skills as $skill)
                                  
                                  <p>{{ $skill->label }} : {{ $skill->description }}</p>
                                  
                                @endforeach
                        </fieldset>
                    </div>
                </div>
            </div>    

            <div class="row">
                <div class="col-lg-12">
                    <div class="interest">
                        <fieldset>
                            <legend>DIVERS</legend>
                            
                                @foreach($interests as $interest)
                                  
                                  <p>{{ $interest->label }} : {{ $interest->description }}</p>
                                  
                                @endforeach
                        </fieldset>
                    </div>
                </div>
            </div>    
        </div>
    </body>
</html>

