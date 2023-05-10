@if(session('alert') && session('alert') == 'success')
    <div class="p-4 mb-2 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800">
        <span class="font-medium">{{ session('message') }}</span>
    </div>
@endif

@if(session('alert') && session('alert') == 'warning')
    <div class="flex p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800">
        <span class="font-medium">{{ session('message') }}</span>
    </div>
@endif

@if(session('alert') && session('alert') == 'danger')
    <div class="p-4 mb-2 mt-3 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
        <span class="font-medium">{{ session('message') }}</span>
    </div>
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="p-4 mb-2 mt-3 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            <span class="font-medium">{{ $error }}</span>
        </div>
    @endforeach
@endif
