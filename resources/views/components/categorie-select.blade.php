<label for="categorie">Catégorie:</label>
<select name="categorie_id" id="categorie" required>
    <option value="">-- Choisir une catégorie --</option>
    @foreach($categories as $categorie)
        <option value="{{ $categorie->id }}" {{ (old('categorie_id') == $categorie->id) ? 'selected' : '' }}>
            {{ $categorie->name }}
        </option>
    @endforeach
</select>

@error('categorie_id')
    <div class="text-red-500">{{ $message }}</div>
@enderror
