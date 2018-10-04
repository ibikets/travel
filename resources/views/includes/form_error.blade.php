@if(Session::has('delmsg'))

    <p class="alert alert-danger">{{session('delmsg')}}</p>

@elseif(Session::has('msg'))
    <p class="alert alert-success">{{session('msg')}}</p>

@endif