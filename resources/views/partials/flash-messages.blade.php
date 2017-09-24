@if(session()->has('flash-message'))
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            {{ session()->get('flash-message') }}
            </div>
        </div>
    </div>
@endif