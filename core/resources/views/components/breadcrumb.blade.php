<h4 class="fw-bold py-3 mb-4">
    <a class="text-muted fw-light" href="{{ route('admin.dashboard') }}">Home /</a>
    @foreach ($paths as $path)
        <a class="text-muted {{ $loop->last ? 'active' : 'fw-light' }}  " href="{{ url($path) }}">{{ str_replace('-', ' ', $path) }} {{ ($loop->last) ? '':'/' }}</a>
    @endforeach
</h4>

