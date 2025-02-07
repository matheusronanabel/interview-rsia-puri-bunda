<div>
    <select id="positions" name="position_id[]" multiple wire:model="selectedPositions">
        @foreach($positions as $position)
            <option value="{{ $position->id }}" {{ in_array($position->id, $selectedPositions) ? 'selected' : '' }}>
                {{ $position->name }}
            </option>
        @endforeach
    </select>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let select = new TomSelect("#positions", {
                plugins: ['remove_button'],
                persist: false,
                create: false,
                onChange: function(value) {
                    if (value.length > 2) {
                        this.removeItem(value[2]); // Prevent selecting more than 2
                    }
                }
            });
        });
    </script>
</div>
