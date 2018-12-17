<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <table id="routes-table" class="table table-bordered table-responsive">
           <thead>
                    <tr>
                        <th>uri</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Method</th>
                    </tr>
           </thead>
           <tbody>
                    @foreach ($routes as $route )
                        <tr>
                            <td>{{$route->uri}}</td>
                            <td>{{$route->getName()}}</td>
                            <td>{{$route->getPrefix()}}</td>
                            <td>{{$route->getActionMethod()}}</td>
                        </tr>
                    @endforeach
            </tbody>
    </table>


  </body>
</html>
