<x-app-layout>

    <x-theme.tab-list :route="route('faq.update', $faq)">
        <x-slot:arForm>
            @method('PUT')
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="question_ar" :value="$faq->question_ar" :title="trans('table.columns.question')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="answer_ar" :value="$faq->answer_ar" :title="trans('table.columns.answer')" />
            </div>
        </x-slot:arForm>
        <x-slot:enForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="question_en" :value="$faq->question_en"
                    :title="trans('table.columns.question')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="answer_en" :value="$faq->answer_en"
                    :title="trans('table.columns.answer')" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>
</x-app-layout>
