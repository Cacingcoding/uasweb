<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Andriana_20180040001</title>
    <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    </style>
</head>

<body>
    <section id="pertama">
        <div class="container">
            <header>
                <div class="kiri">
                    <ul>
                        <li><a href="">About</a></li>
                        <li><a href="">States</a></li>
                        <li><a href="">Selections</a></li>
                        <li><a href="">Updates</a></li>
                    </ul>
                </div>
                <div class="tengah">
                    <img src="{{ asset('Asset/logo.png')}}" alt="">
                </div>
                <div class="kanan">
                    <ul>
                        <li><a href="{{url('news')}}"> NEWS</a></li>
                        <li><a href="">Take Action</a></li>
                        <li><a href="">Donate</a></li>
                        <li><img style="width: 25px;" src="Asset/search.svg" alt=""></li>
                        <li><a href="">English</a></li>
                    </ul>
                </div>
        </div>
        </header>
        </div>

    </section>
    <section>
        <div class="row">
            @foreach ($items as $item)
            <div class="content py-5">
                <h1 class="text-center">{{$item->title}}</h1>
                <p>{{$item->article}}</p>
            </div>

            @endforeach
        </div>
    </section>

    <footer>

        <div class="logo">
            <div class="container lebar">
                <img src="Asset/case.png" alt="">
            </div>
        </div>


        <div class="konten py-5">
            <section class="container lebar">
                <div class="satu">
                    <p>CASA in Action, a 501(c)(4) organization, is the foremost Latino and immigrant organization in
                        the Mid-Atlantic region and a national leader in supporting immigrant families and ensuring that
                        all individuals have the core supports necessary for full participation in society</p>
                    <br><br>CASA in Action and CASA in Action PAC endorse candidates that advance its membership’s
                    priorities and facilitates greater engagement of Latinos and voters of color in elections.
                </div>
                <div class="satu">
                    <h1>About</h1><br>About <br> states <br><br> Donate to CASA in Action's Virginia and payllll work
                    <br><br>Donate to CASA in Action's Virginia and payllll work <br><br><br><br><button
                        style="border-radius: 110px;" type="button" class="btn btn-danger">Contact</button>
                </div>
                <div class="satu">
                    <h1>Get Involped</h1>Pennsylvania <br><br>Maryland <br><br>Virginia <br><br>National
                    <div class="icon">
                        <img src="Asset/facebook.svg" alt="">
                        <img src="Asset/twitter.svg" alt="">
                        <img src="Asset/instagram.svg" alt="">
                    </div>
                </div>
                <div class="satu">
                    <h1>Get Informed</h1>Press Room <br><br>Updates<br><br><br><br><br><br><br>Check out our sister
                    organization
                    <div class="icon">
                        <img src="Asset/casalogo@3x.png" alt="" class="icon-footer">
                    </div>
                </div>
            </section>
        </div>
        <div class="footer-bawah">
            <p class="text-light">&copy; 2020 All Rights Reserved | Website design by <span
                    class="text-success">IndieTech Solutions</span>
            </p>
        </div>
    </footer>
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>
