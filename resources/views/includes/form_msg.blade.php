@if(Session::has('del_msg'))

    <p class="alert alert-danger">{{session('del_msg')}}</p>

@elseif(Session::has('msg'))
    <p class="alert alert-success">{{session('msg')}}</p>

@endif