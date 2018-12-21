<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sub Course</title>
</head>
<body>
   
    <div class="container">
        <h2 class="container"> daftar course</h2>
        <table align = "center" border = 1 >
            <tr>
                <td> ID Course </td>
                <td> ID Sub Course </td>
                <td> ID Daftar Master </td>
                <td> Sub Course Tittle </td>
                <td> Overview </td> 
                <td> Setting </td>
            </tr>
        
            @foreach($data as $d)
            <tr>
                <td> {{ $d->ID_COURSE}}</td>
                <td> {{ $d->ID_SUB_COURSE}}</td>
                <td> {{ $d->ID_DAFTAR_MASTER}}</td>
                <td>{{ $d->NAMA_SUBCOURSE }}</td>
                <td>{{ $d->DEFINISI_SUB_COURSE}}</td>
                <td><a href="{{ ROUTE('SubCourseList.edit',$d->ID_SUB_COURSE)}}"><button>EDIT</button></a></td>
                <td><a href="#"><button>DELETE</button></a></td>
            </tr>
            @endforeach
        </table> 
    </div>
   
</body>
</html>