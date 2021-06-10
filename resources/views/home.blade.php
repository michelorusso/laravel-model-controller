<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinema</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    
    <div class="logo">
        <img src="{{asset("img/Cinema-paradiso.png")}}" alt="cinema">
    </div>

    <div class="container">
        <h3>Film in disponibili in sala:</h3>
    
        <ul>
            @foreach ($movies as $movie)
            
                <li>
                    <div class="box">
                        <span class="name">Title: </span><span class="title info">{{$movie['title']}}</span>
                    </div>
                    <div class="box">
                        <span class="name">Original-Title: </span><span class="info">{{$movie['original_title']}}</span>
                    </div>
                    <div class="box">
                        <span class="name">Nationality: </span><span class="info">{{$movie['nationality']}}</span>
                    </div>
                    <div class="box">
                        <span class="name">Date: </span><span class="info">{{$movie['date']}}</span>
                    </div>
                    <div class="box">
                        <span class="name">Vote: </span><span class="info vote">{{$movie['vote']}}</span>
                    </div>
                </li>

            @endforeach
        </ul>

    </div>
    

</body>
</html>