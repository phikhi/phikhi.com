@php
    use Illuminate\Support\Facades\Auth;
@endphp

<div class="bg-red-100 dark:bg-red-900 p-4 m-4 rounded-lg">
    <h2 class="text-lg font-bold mb-2">Informations de débogage</h2>
    <div class="text-sm">
        <p>Auth::check(): {{ Auth::check() ? 'true' : 'false' }}</p>
        <p>Session ID: {{ session()->getId() }}</p>
        <p>User: {{ $this->user ? $this->user->name : 'Non connecté' }}</p>
    </div>
</div>
