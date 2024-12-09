<x-app-layout>

    <x-theme.tab-list :route="route('faq.store')">
        <x-slot:arForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="question_ar" :title="trans('table.columns.question')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="answer_ar" :title="trans('table.columns.answer')" />
            </div>
        </x-slot:arForm>
        <x-slot:enForm>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="question_en" :title="trans('table.columns.question')" />
            </div>
            <div class="col-md-6 col-12 mb-3">
                <x-dashboard.input-group type="text" name="answer_en" :title="trans('table.columns.answer')" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list>

</x-app-layout>
