<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg my-5">
                <div class="card-header text-white" style="background-color: var(--primary-color)">
                    <h3 class="mb-0">{{ __('table.columns.brand questionnaire') }}</h3>
                </div>

                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    <form wire:submit.prevent="save" class="mt-5">
                        <div class="row g-4 mt-5">

                            <!-- New Client (Checkbox retains its label for clarity) -->
                            <div class="my-3 col-12">
                                <div class="d-flex justify-content-start align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"
                                            wire:model.defer="form.new_client" value="1" id="newClient">
                                        <label class="form-check-label" for="newClient">
                                            {{ __('table.columns.new client') }}
                                        </label>
                                    </div>
                                    <div class="form-check mx-4">
                                        <input class="form-check-input" type="radio"
                                            wire:model.defer="form.new_client" value="0" id="currentClient">
                                        <label class="form-check-label" for="currentClient">
                                            {{ __('table.columns.current client') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Client Information -->
                            <div class="my-3 col-md-6 contact">
                                <input type="text" wire:model.defer="form.client_name"
                                    class="form-control @error('form.client_name') is-invalid @enderror"
                                    placeholder="{{ __('table.columns.client name') }}">
                                @error('form.client_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="my-3 col-md-6 contact">
                                <input type="text" wire:model.defer="form.client_nationality"
                                    class="form-control @error('form.client_nationality') is-invalid @enderror"
                                    placeholder="{{ __('table.columns.client nationality') }}">
                                @error('form.client_nationality')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Company Information -->
                            <div class="my-3 col-md-6 contact">
                                <input type="text" wire:model.defer="form.company_name"
                                    class="form-control @error('form.company_name') is-invalid @enderror"
                                    placeholder="{{ __('table.columns.company name') }}">
                                @error('form.company name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="my-3 col-md-6 contact">
                                <input type="tel" wire:model.defer="form.phone_number" @class(['form-control', 'text-start' => app()->getLocale() == 'ar'])
                                    @error('form.phone_number') is-invalid @enderror"
                                    placeholder="{{ __('table.columns.phone number') }}">
                                @error('form.phone number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="my-3 col-12 contact">
                                <input type="email" wire:model.defer="form.email" @class(['form-control', 'text-start' => app()->getLocale() == 'ar'])
                                    @error('form.email') is-invalid @enderror"
                                    placeholder="{{ __('table.columns.email') }}">
                                @error('form.email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Brand Information -->
                            <div class="my-3 col-12 contact">
                                <h4 class="my-3 fw-bold" style="color: var(--primary-color)">
                                    {{ __('table.columns.project details') }} </h4>
                                <input type="text" wire:model.defer="form.brand_name"
                                    class="form-control @error('form.brand_name') is-invalid @enderror"
                                    placeholder="{{ __('table.columns.brand name') }}">
                                @error('form.brand_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="my-3 col-12 contact">
                                <textarea wire:model.defer="form.brand_about" class="form-control @error('form.brand_about') is-invalid @enderror"
                                    rows="3" placeholder="{{ __('table.columns.brand about') }}"></textarea>
                                @error('form.brand_about')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Project Type -->
                            <div class="my-3 col-12 contact">
                                <input type="text" wire:model.defer="form.project_type"
                                    class="form-control @error('form.project_type') is-invalid @enderror"
                                    placeholder="{{ __('table.columns.project type') }}">
                                @error('form.project_type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Target Audience -->
                            <div class="my-3 col-12 contact">
                                <select wire:model.defer="form.target_audience"
                                    class="form-select @error('form.target_audience') is-invalid @enderror">
                                    <option value="">{{ __('table.columns.target audience') }}</option>
                                    @foreach ($targetAudienceOptions as $audience)
                                        <option value="{{ $audience->value }}">{{ $audience->label() }}</option>
                                    @endforeach
                                </select>
                                @error('form.target_audience')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Brand Personality -->
                            <div class="my-3 col-12 contact">
                                <input type="text" wire:model.defer="form.brand_personality"
                                    class="form-control @error('form.brand_personality') is-invalid @enderror"
                                    placeholder="{{ __('table.columns.brand personality') }}">
                                @error('form.brand_personality')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Competitors -->
                            <div class="my-3 col-12 contact">
                                <textarea wire:model.defer="form.competitors" class="form-control @error('form.competitors') is-invalid @enderror"
                                    rows="3" placeholder="{{ __('table.columns.competitors') }}"></textarea>
                                @error('form.competitors')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 my-3">
                                <h4 class="my-3 fw-bold" style="color: var(--primary-color)">
                                    {{ __('Select Logo Type') }} </h4>
                            </div>
                            <!-- Logo Type -->
                            <div class="mb-3 col-12">
                                <div class="d-flex justify-content-start align-items-start">
                                    @foreach ($logoTypes as $logoType)
                                        <div class="bg-white" style="width: calc(100% / 5)">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    wire:model.defer="form.logo_type_id" value="{{ $logoType->id }}"
                                                    id="logo-type-{{ $logoType->id }}">
                                                <label class="form-check-label" for="logo-type-{{ $logoType->id }}">
                                                    {{ $logoType->name }}
                                                </label>
                                            </div>
                                            @foreach ($logoType->media as $media)
                                                <img src="{{ $media->getUrl() }}" style="width: 80px; height: 80px;"
                                                    width="80" height="80" class="mb-2" alt="logo-image">
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                                @error('form.logo_type_id')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Corporate Identity -->
                            <div class="col-12 my-3">
                                <h4 class="my-3 fw-bold" style="color: var(--primary-color)">
                                    {{ __('Select Applications Logo') }} </h4>
                            </div>
                            <div class="mb-3 col-md-6">
                                <div class="d-flex flex-wrap justify-content-start align-items-start">
                                    @foreach ($corporateIdentities as $identity)
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    wire:model.defer="form.corporate_identities"
                                                    value="{{ $identity->id }}" id="identity{{ $identity->id }}">
                                                <label class="form-check-label" for="identity{{ $identity->id }}">
                                                    {{ $identity->name }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                @error('form.corporate_identities')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Favorite Colors -->
                            <div class="my-3 col-12 contact">
                                <input type="text" id="favorite_colors" wire:model.defer="form.favorite_colors"
                                    class="form-control @error('form.favorite_colors') is-invalid @enderror"
                                    placeholder="{{ __('table.columns.favorite colors') }}">
                                @error('form.favorite_colors')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Excluded Colors -->
                            <div class="my-3 col-12 contact">
                                <input type="text" id="excluded_colors" wire:model.defer="form.excluded_colors"
                                    class="form-control @error('form.excluded_colors') is-invalid @enderror"
                                    placeholder="{{ __('table.columns.excluded colors') }}">
                                @error('form.excluded_colors')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Notes -->
                            <div class="my-3 col-12 contact">
                                <textarea wire:model.defer="form.notes" class="form-control @error('form.notes') is-invalid @enderror"
                                    rows="4" placeholder="{{ __('table.columns.notes') }}"></textarea>
                                @error('form.notes')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 contact text-center mt-4">
                                <button type="submit" class="btn btn-lg px-5"
                                    style="background-color: var(--primary-color)">
                                    <i class="bi bi-send me-2"></i>{{ __('table.columns.submit questionnaire') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @push('styles')
        <style>
            .contact .tagify__input {
                width: 120px !important;
            }

            .contact .tagify {
                border-width: 0px !important;
                width: 100%;
                border: 0;
                border-bottom: 1px solid rgba(0, 0, 0, 0.2) !important;
                background: transparent;
                padding: 0px !important;
                -webkit-transition: all 0.4s;
                -o-transition: all 0.4s;
                transition: all 0.4s;
            }


        </style>
    @endpush
</div>
