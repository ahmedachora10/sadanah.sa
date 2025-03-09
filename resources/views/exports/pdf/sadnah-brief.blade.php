<!DOCTYPE html>
<html>

<head>
    <style>
        .pdf-container {
            font-family: 'aealarabiya', sans-serif;
            width: 100%;
            direction: rtl;
        }

        .dashed-border {
            border-bottom: 1px dashed #000;
            padding-bottom: 2px;
            color: rgb(64, 42, 0)
        }

        .section-title {
            font-weight: bold;
            color: rgb(211, 137, 0);
            margin: 5px 0 5px 0;
            font-size: 20px
        }

        .bg-light-gradient {
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 3px;
            margin-bottom: 15px;
        }

        .row {
            display: flex !important;
            flex-wrap: wrap !important;
            width: 100%;
            margin-bottom: 10px;
        }

        .d-flex {
            display: table !important;
        }

        .col-6 {
            flex-basis: 48%;
            width: 48%;
            display: inline-block;
        }

        .d-block {
            display: block !important;
        }

        .checkbox-container {
            margin-left: 20px;
        }

        .align-items-center {
            align-items: center !important;
        }

        .py-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .px-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important;
        }

        .text-left {
            align-items: start;
        }
    </style>
</head>

<body>
    < class="pdf-container">
        @if ($questionnaire)
        <div>
            <span class="fw-bold" style="font-size: 16px;">{{ trans('table.columns.date') }}</span>
            <span class="dashed-border">{{ $questionnaire->created_at->translatedFormat('d M Y') }}</span>
        </div>
            @php
                $questionnaireColumns = [
                    'information' => ['new_client', 'client_name', 'client_nationality', 'company_name', 'phone_number', 'email'],
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
                    ],
                ];
            @endphp

            @foreach ($questionnaireColumns as $name => $sections)
                <h5 class="section-title">{{ __(ucwords($name)) }}</h5>
                @foreach ($sections as $item)
                    <div style="margin: 5px 0; display: flex">
                        <div class="bg-light-gradient" style="display:block; width: 160px; font-weight: bold">
                            {{ trans('table.columns.' . str_replace('_', ' ', $item)) }}
                        </div>
                        <div class="dashed-border"
                            style="flex-grow: 1; margin-right: 10px; display:block; width: calc(100% - 166px)">
                            @if ($item == 'new_client')
                            {{ $questionnaire->client_color?->text }}
                            @elseif ($item == 'logo_type')
                                {{ $questionnaire->logoType?->name }}
                                @elseif(in_array($item, ['favorite_colors', 'excluded_colors']))
                                {{ implode(' | ', $questionnaire->{$item}) }}
                            @elseif($item == 'applications')
                                @php
                                    $data = $questionnaire->corporateIdentities->pluck('name')->toArray();
                                @endphp
                                {{ implode(' | ', $data) }}
                            @else
                                {{ $item == 'target_audience' ? $questionnaire->{$item}?->label() : $questionnaire->{$item} }}
                            @endif
                        </div>
                    </div>
                @endforeach
            @endforeach

            <h5 class="section-title">{{ trans('table.columns.notes') }}</h5>
            <div class="dashed-border" style="padding: 8px">
                {{ $questionnaire->notes }}
            </div>
        @endif
    </div>
</body>

</html>
