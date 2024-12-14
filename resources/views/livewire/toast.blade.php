<div class="toast align-items-center {{$message != '' ? 'show' : 'hide'}} " role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
        <div class="toast-body">
            {{$message}}
        </div>
        <button type="button" class="btn-close {{app()->getLocale() == 'ar' ? 'ms-3' : 'me-2' }} m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
</div>
