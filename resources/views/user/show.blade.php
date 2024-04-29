<x-auth.layout>
    <x-slot name="title">User ({{ $user->name }})</x-slot>
    <div class="card" style="background-color: white">
        <div class="card-header pb-0">
            <h4 class="mb-0 text-black">Profile Details</h4>
            <p class="text-black">Informasi pengguna di perbarui sejak {{ $user->updated_at }}</p>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md">
                    <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control
                                name="name"
                            value="{{ $user->name }}" id="name" disabled placeholder="Enter your name"
                            autofocus />
                        <label for="name">Nama Lengkap</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating form-floating-outline mb-3">
                        <input type="text" class="form-control
                                name="email"
                            value="{{ $user->email }}" disabled placeholder="Enter your email" />
                        <label for="email">Email</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-floating form-floating-outline mb-3">
                        <input type="number" class="form-control
                                name="telp"
                            value="{{ $user->telp }}" id="telp" disabled placeholder="Enter your telp"
                            autofocus />
                        <label for="telp">Telpon</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating form-floating-outline mb-3">
                        <input type="number" class="form-control" name="identify" value="{{ $user->identify }}"
                            id="identify" disabled placeholder="Enter your identify" autofocus />
                        <label for="identify">NIS/etc.</label>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-floating form-floating-outline mb-3">
                        <select class="form-select form-control" name="gender" id="gender" disabled>
                            <option disabled>Pilih satu</option>
                            <option value="Laki-laki" {{ $user->gender == 'Laki-laki' ? 'selected' : '' }}>
                                Laki-laki</option>
                            <option value="Perempuan" {{ $user->gender == 'Perempuan' ? 'selected' : '' }}>
                                Perempuan</option>
                        </select>
                        <label for="gender">Jenis Kelamin</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating form-floating-outline mb-3">
                        <input type="date" class="form-control
                                name="birthdate"
                            value="{{ $user->birthdate }}" id="birthdate" disabled placeholder="Enter your birthdate"
                            autofocus />
                        <label for="birthdate">Tanggal Lahir</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating form-floating-outline mb-3">
                        <select class="form-select form-control"
                                name="role"
                            id="role" disabled>
                            <option disabled>Pilih satu</option>
                            <option value="Anggota" {{ $user->role == 'Anggota' ? '' : '' }}>Anggota
                            </option>
                            <option value="Petugas" {{ $user->role == 'Petugas' ? '' : '' }}>Petugas</option>
                        </select>
                        <label for="role">Status</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body text-end">
            <h4 class="mb-0 text-black">History</h4>
            <p class="text-black">informasi pengguna di perbarui sejak {{ $user->updated_at }}</p>
        </div>

    </div>
</x-auth.layout>
