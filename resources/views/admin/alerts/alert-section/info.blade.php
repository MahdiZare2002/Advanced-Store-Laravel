@if(session('alert-section-info'))

    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">&times; خطا </h4>
        <hr>
        <p class="mb-0">
            {{ session('alert-section-info') }}
        </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="right: auto!important; left: 0!important">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>


@endif
