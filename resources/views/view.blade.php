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
                    <strong>READ</strong>
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
                <table>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Roll</td>
                            <td>Class</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cruds as $crud)
                        <tr>
                            <td>{{$crud->id}}</td>
                            <td>{{$crud->name}}</td>
                            <td>{{$crud->roll}}</td>
                            <td>{{$crud->class}}</td>
                            <td>
                                <a href="{{route('crud.edit',$crud->id)}}">Edit</a>
                                <form action="{{route('crud.destroy', $crud->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </body>
</html>
