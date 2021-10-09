<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Search Page</title>
</head>
<body>
    <div class="col-xs-2 m-5" style="height:30px;">
        <input class="form-control" type="text" placeholder="Search" name="search" id="search" aria-label="Search">
    </div>
    <!-- Search form -->
    <div class="col-md-11 m-5 ml-5">
    <table class="table ">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">phone</th>
                <th scope="col">Hospital Name</th>
                <th scope="col">Department</th>
                <th scope="col">Date and Time</th>
            </tr>
        </thead>
        <tbody>
        @foreach($user as $users)
            <tr>
                <td>{{ $users->name}}  </td> 
                <td>{{ $users->email}}  </td> 
                <td>{{ $users->phone}}  </td> 
                <td>{{ $users->h_name}}  </td> 
                <td>{{ $users->d_name}}  </td> 
                <td>{{ $users->created_at}}  </td> 
            </tr> 
        @endforeach
           
        </tbody>
    </table>
    </div>
</body>
</html>
<script type="text/javascript">
$('#search').on('keyup',function(){
$value=$(this).val();
$.ajax({
type : 'get',
url : '{{URL::to('search')}}',
data:{'search':$value},
success:function(output){
$('tbody').html(output);
}
});
})
</script>
<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>