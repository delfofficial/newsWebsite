<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="/public">
    @include("admin.admincss");
</head>
<body>
    <x-app-layout>

            <!-- Required meta tags -->

            <div class="container-scroller">
              @include("admin.navbar");
             <div style="position:relative; top:60px; right:-60px">
                 <table bgcolor="grey" border="3px">
                     <tr>
                         <th style="padding: 30px">ID</th>
                         <th  style="padding: 30px">NAME</th>
                     </tr>
                     @foreach ($data as $data )
                     <tr align="center">
                        <td>{{$data->id}}</td>
                         <td>{{$data->name}}</td>
                         <!--td><a href="{url('/edituser', $data->id)}}" class="btn btn-success">edit</a></td-->
                         <td><a href="{{url('/deleteCategory', $data->id)}}" class="btn btn-danger">Delete</a></td>
                         <td><a href="{{url('/editCategory', $data->id)}}" class="btn btn-success">Edit</a></td>



                     </tr>
                     @endforeach
                 </table>
             </div>

            </div>
            @include("admin.adminscript");


          </body>
        </html>
    </x-app-layout>


</body>
</html>
