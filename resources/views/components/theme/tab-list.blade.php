
<form action="{{ $route }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- <h6 class="mt-4"> </h6> --}}
    <div class="nav-align-top mb-3">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="#" class="nav-link active" data-bs-toggle="tab"
                    data-bs-target="#{{$key}}-ar" role="tab" aria-selected="true">{{
                    trans('arabic') }}</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#{{$key}}-en"
                    role="tab" aria-selected="false" tabindex="-1">{{ trans('english') }}</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="{{$key}}-ar" role="tabpanel">
                <div class="row g-3">
                    {{$arForm}}
                </div>
                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">{{ trans('common.save')
                        }}</button>
                </div>
            </div>

            <div class="tab-pane" id="{{$key}}-en" role="tabpanel">
                <div class="row g-3">
                    {{$enForm}}
                </div>
            </div>
        </div>
    </div>
</form>
