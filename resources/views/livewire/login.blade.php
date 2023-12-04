<form wire:submit="submit" >
    <h1 class="h3 mb-3 fw-normal">Inserisci le tue credenziali</h1>
    <div class="form-floating">
      <input type="email" name="email" class="form-control " id="floatingInput" wire:model="form.email" placeholder="name@example.com">
      <label for="floatingInput">Indirizzo email</label>
      @error('form.email')<span class="text-red-500 text-xs">{{ $message }}</span> @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" wire:model="form.password" id="pass" placeholder="Password">
      <label for="floatingPassword">Password</label>
      @error('form.password')<span class="text-red-500 text-xs">{{ $message }}</span> @enderror
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Accedi</button>
    <p class="mt-5 mb-3 text-body-secondary"></p>
  </form>
