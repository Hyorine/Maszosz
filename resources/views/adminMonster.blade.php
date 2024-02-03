<div class="adminMonster-form-container">
    <h1>{{ __('messages.adminMonsterH1') }}</h1>
    <form action="{{ route('save.monster') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="adminMonster-form-field">
            <label>{{ __('messages.adminMonsternev') }}</label>
            <input name="name">
        </div>
        <div class="adminMonster-form-field">
            <label>{{ __('messages.adminMonsterLeir') }}</label>
            <input name="description">
        </div>
        <div class="adminMonster-form-field">
            <label>{{ __('messages.adminMonsterPlace') }}</label>
            <input name="place">
        </div>
        <div class="adminMonster-form-field">
            <label>{{ __('messages.adminMonsterViselkedes') }}</label>
            <input name="behavior">
        </div>
        <div class="adminMonster-form-field">
            <label>{{ __('messages.adminMonsterRarity') }}</label>
            <input name="rarity_level" type="range" min="0" max="10" step="1" oninput="updateRangeValue(this, 'rarityValue')">
            <span id="rarityValue">5</span>
        </div>
        <div class="adminMonster-form-field">
            <label>{{ __('messages.adminMonsterDanger') }}</label>
            <input name="danger_level" type="range" min="0" max="10" step="1" oninput="updateRangeValue(this, 'dangerValue')">
            <span id="dangerValue">5</span>
        </div>
        <div class="adminMonster-form-field">
            <label>{{ __('messages.adminMonsterFood') }}</label>
            <input name="nutrition">
        </div>
        <div class="adminMonster-form-field">
            <label>{{ __('messages.adminGaleryUpload') }}</label>
            <input type="file" name="image" accept="image/*">
        </div>
        <button type="button" onclick="validateAndSubmitForm()">{{ __('messages.adminMonsterSubmit') }}</button>
    </form>
</div>

        @if(session('monsterSuccess'))
            <p style="color:green;">{{ session('monsterSuccess') }}</p>
        @endif

<script>
     function updateRangeValue(input, targetId) {
        document.getElementById(targetId).innerText = input.value;
    }
    function validateAndSubmitForm() {
    // Get all input and textarea elements in the form
    const formElements = document.querySelectorAll('.adminMonster-form-field input, .adminMonster-form-field textarea');

    // Check if all fields are filled out
    const allFieldsFilled = Array.from(formElements).every((element) => element.value.trim() !== '');

    // If all fields are filled, submit the form
    if (allFieldsFilled) {
        document.querySelector('.adminMonster-form-container form').submit();
    } else {
        // Display an alert or message indicating that all fields must be filled out
        alert('Please fill out all fields before submitting.');
    }
}

</script>