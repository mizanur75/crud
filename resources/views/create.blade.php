<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 30vh;
            }
            .right{
                text-align: right;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 50px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <strong>Insert</strong>
                </div>
                <div class="links">
                    <a href="{{url('/')}}">Back</a>
                </div>
                @if(session('msg'))
                    {{session('msg')}}
                @endif
            </div>
            
        </div>

        <div class="flex-center position-ref">
            <form action="{{route('crud.store')}}" method="post">
                @csrf
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td>Roll</td>
                        <td><input type="text" name="roll"></td>
                    </tr>
                    <tr>
                        <td>Class</td>
                        <td><input type="text" name="class"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="right"><input type="submit" value="Add"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
