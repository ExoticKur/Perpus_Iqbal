<x-auth.layout>
    @include('layouts.table')
    <x-slot name="title">Pengguna</x-slot>
    <div class="row mb-3 gy-3">
        <div class="col-md">
            <div class="card" style="background-color: white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <p class="mb-0 text-black">Total {{ $member->count() }} Pengguna</p>
                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                            @forelse ($member->take(5) as $item)
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar pull-up" aria-label="{{ $item->name }}"
                                    data-bs-original-title="{{ $item->name }}">
                                    <img class="rounded-circle" src="/assets/img/avatars/6.png" alt="Avatar">
                                </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="role-heading">
                            <h5 class="mb-1 text-black">Anggota</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card" style="background-color: white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2 text-black">
                        <p class="mb-0">Total {{ $officer->count() }} Pengguna</p>
                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                            @forelse ($officer->take(5) as $item)
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar pull-up" aria-label="{{ $item->name }}"
                                    data-bs-original-title="{{ $item->name }}">
                                    <img class="rounded-circle" src="/assets/img/avatars/6.png" alt="Avatar">
                                </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="role-heading">
                            <h5 class="mb-1 text-black">Petugas</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card" style="background-color: white">
        <div class="card-header">
            @include('user.store')
        </div>
        <div class="card-body">
            <div class="table-responsive text-black">
                <table id="example" class="display table nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-black">No.</th>
                            <th class="text-black">Nama Lengkap</th>
                            <th class="text-black">Aktor</th>
                            <th class="text-black">telpon</th>
                            <th class="text-black">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $no => $user)
                            <tr>
                                <td class="text-black">{{ ++$no }}.</td>
                                <td class="text-black">{{ $user->name }}</td>
                                <td class="text-black">
                                    <span class="badge bg-primary">{{ $user->role }}</span>
                                </td>
                                <td class="text-black">{{ $user->telp }}</td>
                                <td>
                                    <div class="d-flex gap-3 align-items-center justify-content-center">
                                        @include('user.update')
                                        <form action="{{ route('users.destroy', $user->id) }}" onclick="return confirm('Apakah anda ingin menghapus?');" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="btn btn-outline-danger btn-sm"
                                                type="submit">
                                                Hapus</button>
                                        </form>
                                        <a class="btn btn-outline-primary btn-sm"
                                            href="{{ route('users.show', $user->slug) }}" role="button">Lihat</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-auth.layout>
