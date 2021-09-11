<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Trip</title>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>
<body>
  
        <div class="container-trip mt-3">
            <div class="row">
               @foreach($allTrips as $trips)
                <div class="trip-content col-4">
                    <div class="inner-trip">
                        <img src="{{ $trips->cover }}" alt="location">
                        <h4>{{$trips->place}}</h4>
                    </div>
                       
                    <div class="trip-text">
                        <span>Partenza: {{$trips->departure}}</span>
                        <div class="box-plane">
                          <h6>Viaggia con noi: </h6>
                          <span class="choose-your-plane">{{$trips->plane}}</span>  
                        </div> 
                        <span>Costo: {{$trips->price}} euro</span>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    
</body>
</html>