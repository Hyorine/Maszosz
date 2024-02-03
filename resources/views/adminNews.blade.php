<h1>{{ __('messages.adminNewsH1') }}</h1>

<div class="admin-News-form">
    <form action="{{ route('save.news') }}" method="post">
        @csrf

        <label for="title">{{ __('messages.adminNewsTitle') }}</label>
        <input type="text" id="title" name="title" required>

        <label for="content">{{ __('messages.adminNewsContent') }}</label>
        <textarea id="content" name="content" rows="4" required></textarea>

        <button type="submit">{{ __('messages.adminNewsSubmit') }}</button>
    </form>
    @if(session('eventSuccess'))
        <p style="color:green;">{{ session('eventSuccess') }}</p>
    @endif
</div>

