<div class="page-layout">
    @if(count($weedingFormData) > 0)
        @foreach($weedingFormData as $key => $data)
            <div class="formItem">
                {{ $data['label'] }}: <span style="color: #166534;font-weight: 600;">{{ $data['value'] }}</span>
            </div>
        @endforeach
    @endif
</div>
