<x-app-layout>:
    {{-- <x-theme.tab-list :route="route('why-us.update', $model)">
        <x-slot:arForm>
            @method('PUT')
            @csrf
            <div class="col-12 mb-3">
                <livewire:add-properties fieldName="properties_ar" :properties="$model->properties_ar ?? []" />
            </div>
        </x-slot:arForm>
        <x-slot:enForm>
            <div class="col-12 mb-3">
                <livewire:add-properties fieldName="properties_en" :properties="$model->properties_en ?? []" />
            </div>
        </x-slot:enForm>
    </x-theme.tab-list> --}}
    <form action="{{route('why-us.update', $whyU->id)}}" method="post" class="p-4 bg-light shadow rounded">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="properties_ar" class="form-label">العنوان بالعربية</label>
            <textarea 
                name="properties_ar" 
                id="properties_ar" 
                class="form-control" 
                rows="4">
            {{$whyU->properties_ar}}
            </textarea>
        </div>
        
        <div class="mb-3">
            <label for="properties_en" class="form-label">العنوان بالانجليزية</label>
            <textarea 
                name="properties_en" 
                id="properties_en" 
                class="form-control" 
                rows="4">
                {{$whyU->properties_en}}
            </textarea>
        </div>
        
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
    </form>
    <div class="p-4 bg-light shadow rounded">
    <div>
    <button type="button" class="btn btn-primary col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        إضافة
    </button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">إضافة بيانات</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="modalForm" method="POST" action="{{route('add.certificate')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title_en" class="form-label">الميزة (بالانجليزية)</label>
                            <textarea class="form-control" id="title_en" name="title_en" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="title_ar" class="form-label">الميزة (بالعربية)</label>
                            <textarea class="form-control" id="title_ar" name="title_ar" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <table class="table table-striped table-inverse table-responsive mt-4">
        <thead class="thead-inverse">
            <tr>
                <th>المعرف</th>
                <th>الميزة بالعربية</th>
                <th>الميزة بالإنجليزية</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($certificates as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title_ar }}</td>
                <td>{{ $item->title_en }}</td>
                <td>
                    <!-- زر تعديل -->
                    <button 
                        type="button" 
                        class="btn btn-warning btn-sm" 
                        data-bs-toggle="modal" 
                        data-bs-target="#editModal-{{ $item->id }}">
                        تعديل
                    </button>
    
                    <!-- زر حذف -->
                    <button 
                        type="button" 
                        class="btn btn-danger btn-sm" 
                        data-bs-toggle="modal" 
                        data-bs-target="#deleteModal-{{ $item->id }}">
                        حذف
                    </button>
                </td>
            </tr>
    
            <!-- مودال التعديل -->
            <div class="modal fade" id="editModal-{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $item->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel-{{ $item->id }}">تعديل البيانات</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="{{ route('update.certificate') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="title_en-{{ $item->id }}" class="form-label">الميزة (بالإنجليزية)</label>
                                    <textarea 
                                        class="form-control" 
                                        id="title_en-{{ $item->id }}" 
                                        name="title_en" 
                                        rows="3" 
                                        required>{{ $item->title_en }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="title_ar-{{ $item->id }}" class="form-label">الميزة (بالعربية)</label>
                                    <textarea 
                                        class="form-control" 
                                        id="title_ar-{{ $item->id }}" 
                                        name="title_ar" 
                                        rows="3" 
                                        required>{{ $item->title_ar }}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                                <button type="submit" class="btn btn-primary">تحديث</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    
            <!-- مودال الحذف -->
            <div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModalLabel-{{ $item->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel-{{ $item->id }}">تأكيد الحذف</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="{{ route('delete.certificate') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <div class="modal-body">
                                <p>هل أنت متأكد أنك تريد الحذف  </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                                <button type="submit" class="btn btn-danger">حذف</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>
    
</div>
</x-app-layout>
