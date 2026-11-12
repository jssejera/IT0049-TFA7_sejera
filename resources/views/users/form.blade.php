<label for="username">Username</label>
<input id="username" name="username" value="{{ old('username', $user->username ?? '') }}" required maxlength="255">
<label for="full_name">Full name</label>
<input id="full_name" name="full_name" value="{{ old('full_name', $user->full_name ?? '') }}" required maxlength="255">
<p class="hint">Username must be unique. Full name is required.</p>
