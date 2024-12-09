@props(['required' => true])

<label {{ $attributes }}>{{ $slot }} @if($required) <span class="required">*</span> @endif</label>
