<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<!--boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--css-->
<style>

    body{
        background: #000;
        color: aliceblue
    }
.input, .tb{
    padding-top: 20px;
    
}

input{
    
    width: 100px;
}

.x{
    padding-top:20px;

    
}

</style>
</head>
<body>
    <div>
        <div class="container-fluid text-center">
            <h1>Database Handler</h1>
        </div>
        <div class="container-fluid input">
            <div class="row">
                <div class="col-md-12 ">




                    

                <form action="/formroutpathinweb_php" method="post">
                    {{ csrf_field() }}
                   <input type="text" class="form-control text-center" name="name" placeholder="Please input your task.." >
                   
                   @foreach ($errors -> all( ) as $error)
                   <div class="alert alert-danger">
                       {{$error}}
                   </div>
                   @endforeach


                    <div class="x text-center">
                        <input value="save" type="submit" class="btn btn-primary ">
                        <input value="clear" type="button" class="btn btn-warning border rounded-circle ">
                    </div>


                </form>
 

                
                </div>
            </div>
            <div class="text-center tb">
                <table class="container w-100  table-dark ">
                    <th>Id</th>
                    <th>Task </th>
                    <th>Competed</th>

                    <tr>
                        <td>1</td>
                        <td>play</td>
                        <td>not yet i am</td>
                    </tr>

                    <!--
                   @foreach ($databasehandletablemodel as $user)
                    <tr>laravel
                        <td>{{user->Id}}</td>
                        <td>{{user->Task}}</td>
                        <td>{{user->Completed}}</td>
                    </tr>
                    @endforeach
                  -->
                </table>
            </div>
        </div>
    </div>
</body>
</html>