@if ($message = Session::get('success'))
<div class="text-center py-4 lg:px-4">
  <div class="p-2 bg-green-800 items-center text-green-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
    <span class="flex rounded-full bg-green-500 uppercase px-2 py-1 text-xs font-bold mr-3">BIEN JOUÉ</span>
    <span class="text_bold  font-semibold mr-2 text-left text-white flex-auto">{{ $message }}</span>
  </div>
</div>
@endif

@if ($message = Session::get('error'))
<div class="text-center py-4 lg:px-4">
  <div class="p-2 bg-red-800 items-center text-white leading-none lg:rounded-full flex lg:inline-flex" role="alert">
    <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">DOMMAGE</span>
    <span class="text_bold font-semibold text-white mr-2 text-left flex-auto">{{ $message }}</span>
  </div>
</div>
@endif