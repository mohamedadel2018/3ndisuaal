@if (Session::has('success'))
<div class="bg-green-500 text-white border border-green-600 text-center font-bold p-6 rounded-lg">
   {{ session('success') }}
</div>
@endif
@if (Session::has('info'))
<div class="bg-blue-500 text-white border border-blue-600 text-center font-bold p-6 rounded-lg">
    {{ session('info') }}
</div>
@endif
