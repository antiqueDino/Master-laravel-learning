@if ($show)
    {{-- <span  class="badge badge-{{ $type ?? 'success' }}">
        {{ $slot }} --}}
    {{-- </span> --}}

    <span class="badge badge-{{ $type ?? 'success'  }}">
        {{ $slot }} 
    </span>
    
@endif
