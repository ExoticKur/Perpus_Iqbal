<!-- Modal trigger button -->
<button type="button" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#{{ $user->slug }}">
    Edit
</button>

<!-- Modal Body -->

<div class="modal fade" id="{{ $user->slug }}" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl text-start" role="document">
        <div class="modal-content" style="background-color: #004953">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formAuthentication" class="mb-3" action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <h5 class="fw-bold mb-0">Perubahan informasi Pengguna
                    </h5>
                    <p>Kosongkan saja password jika tidak menggubah password</p>
                    <div class="row">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="name" class="text-white">Nama Lengkap</label>
                                <input type="text" class="form-control text-black @error('name') is-invalid @enderror" style="background-color: white"
                                    name="name" value="{{ $user->name }}" id="name"
                                    placeholder="Enter your name" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="email" class="text-white">Email</label>
                                <input type="text" class="form-control text-white @error('email') is-invalid @enderror" style="background-color: white"
                                    name="email" value="{{ $user->email }}" placeholder="Enter your email" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="telp" class="text-white">Telpon</label>
                                <input type="number" class="form-control text-black @error('telp') is-invalid @enderror" style="background-color: white"
                                    name="telp" value="{{ $user->telp }}" id="telp"
                                    placeholder="Enter your telp" />
                                @error('telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="identify" class="text-white">NIS/etc.</label>
                                <input type="number" class="form-control text-black @error('identify') is-invalid @enderror" style="background-color: white"
                                    name="identify" value="{{ $user->identify }}" id="identify"
                                    placeholder="Enter your identify" />
                                @error('identify')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="password" class="text-white">Password</label>
                                <input type="password" class="form-control text-black @error('password') is-invalid @enderror" style="background-color: white"
                                    name="password" id="password" placeholder="Enter your password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="birthdate" class="text-white">Tanggal Lahir</label>
                                <input type="date" class="form-control text-black @error('birthdate') is-invalid @enderror" style="background-color: white"
                                    name="birthdate" value="{{ $user->birthdate }}" id="birthdate"
                                    placeholder="Enter your birthdate" />
                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="gender" class="text-white">Jenis Kelamin</label>
                                <select class="form-select form-control text-black @error('gender') is-invalid @enderror" style="background-color: white"
                                    name="gender" id="gender">
                                    <option selected disabled>Pilih satu</option>
                                    <option {{ $user->gender == 'Laki-laki' ? 'selected' : '' }} value="Laki-laki">
                                        Laki-laki</option>
                                    <option {{ $user->gender == 'Perempuan' ? 'selected' : '' }} value="Perempuan">
                                        Perempuan</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="role" class="text-white">Status</label>
                                <select class="form-select form-control text-black @error('role') is-invalid @enderror" style="background-color: white"
                                    name="role" id="role">
                                    <option selected disabled>Pilih satu</option>
                                    <option {{ $user->role == 'Anggota' ? 'selected' : '' }} value="Anggota">Anggota
                                    </option>
                                    <option {{ $user->role == 'Petugas' ? 'selected' : '' }} value="Petugas">Petugas
                                    </option>
                                </select>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
