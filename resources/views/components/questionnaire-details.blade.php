@if ($questionnaire)
    <div class="d-flex flex-wrap justify-content-start align-items-center">
        <div class="col-6">
            <span class="fw-bold">{{ trans('table.columns.date') }}</span>
            <span class="border-0 border-bottom border-dashed ms-2">{{ $questionnaire->created_at->format('Y-m-d') }}</span>
        </div>
        <div class="col-6">
            <div class="d-flex justify-content-end align-items-center">
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"
                            @checked((bool) $questionnaire->new_client) readonly>
                        <label class="form-check-label" for="newClient">
                            {{ __('table.columns.new client') }}
                        </label>
                    </div>
                </div>
                <div class="ms-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"
                            @checked((bool) !$questionnaire->new_client) readonly>
                        <label class="form-check-label" for="currentClient">
                            {{ __('table.columns.current client') }}
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 my-5">

            @php
                $questionnaireColumns = [
                    'information' => [
                        'client_name',
                        'client_nationality',
                        'company_name',
                        'phone_number',
                        'email',
                    ],
                    'project details' => [
                        'brand_name',
                        'brand_about',
                        'project_type',
                        'target_audience',
                        'brand_personality',
                        'competitors',
                        'favorite_colors',
                        'excluded_colors',
                        'logo_type',
                        'applications',
                    ]
                ]
            @endphp

            @foreach ($questionnaireColumns as $name => $sections)
                <h5 class="fw-bold text-warning mt-4 mb-1">{{ __(ucwords($name)) }}</h5>
                <div class="bg-gradient-light rounded-1 px-4 py-3">
                    @foreach ($sections as $item)
                    <div class="my-2 d-flex align-items-center">
                        <span class="fw-bold d-block" style="width: 160px">{{ trans('table.columns.'.str_replace('_', ' ', $item)) }}</span>
                        <span class="border-0 border-bottom border-dashed d-block ms-2" style="width: calc(100% - 166px)">
                            @if($item == 'logo_type')
                            {{$questionnaire->logoType?->name}}
                            @elseif(in_array($item, ['favorite_colors','excluded_colors']))
                                {{ implode(' | ', $questionnaire->{$item}) }}

                            @elseif($item == 'applications')
                                @php
                                    $data = $questionnaire->corporateIdentities->pluck('name')->toArray();
                                @endphp
                                    {{ implode(' | ', $data) }}

                            @else
                            {{ $item == 'target_audience' ? $questionnaire->{$item}?->label() : $questionnaire->{$item} }}
                            @endif
                        </span>
                    </div>
                    @endforeach
                </div>
                @endforeach

                <h5 class="fw-bold text-warning mt-4 mb-1">{{ trans('table.columns.notes') }}</h5>
                <div class="bg-gradient-light rounded-1 px-4 py-3">
                    <p class="border-1 border-dashed p-2">{{ $questionnaire->notes }}</p>
                    {{-- <span class="fw-bold d-block mb-2" style="width: 160px">{{ trans('table.columns.notes') }}</span> --}}
                </div>
        </div>
    </div>
@else
    <div></div>
@endif
