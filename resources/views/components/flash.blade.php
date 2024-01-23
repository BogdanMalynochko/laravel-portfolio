@if (session()->has('success'))
    <div 
        x-data="{show: true}"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="fixed text-white p-5 bg-blue text-xl right-0 bottom-0">
        <p>{{ session('success') }}</p>
    </div>
@endif