

@if(Session::has('message-error'))
    <div class="alert alert-danger alert-dismissible text-center" role="alert">
        {{Session::get('message-error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif