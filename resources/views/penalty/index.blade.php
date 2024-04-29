<x-auth.layout>
    <x-slot name="title">Penalties</x-slot>
    @include('layouts.table')

    <div class="row mb-3 gy-3">
        <div class="col-md">
            <div class="card">
                <div class="card-body" style="background-color: white">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <p class="mb-0 text-black">Total Rp. {{ $all_amount }}</p>
                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                            @forelse ($penalties->take(5) as $item)
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar pull-up" aria-label="{{ $item->transaction->user->name }}"
                                    data-bs-original-title="{{ $item->transaction->user->name }}">
                                    <img class="rounded-circle" src="/assets/img/avatars/6.png" alt="Avatar">
                                </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="role-heading">
                            <h5 class="mb-1 text-black">Total Denda Masuk</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card">
                <div class="card-body" style="background-color: white">
                    <div class="d-flex  justify-content-between align-items-center mb-2">
                        <p class="mb-0 text-black">Total {{ $dont_payment->count() }} Pengguna</p>
                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                            @forelse ($dont_payment->take(5) as $item)
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar pull-up" aria-label="Julee Rossignol"
                                    data-bs-original-title="Julee Rossignol">
                                    <img class="rounded-circle" src="/assets/img/avatars/6.png" alt="Avatar">
                                </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="role-heading text-black">
                            <h5 class="mb-1 text-black">Total Terlambat</h5>
                        </div>
                        @if ($dont_payment)
                            <a href="{{ route('transactions.index') }}">Lihat</a>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body text-black" style="background-color: white">
            <div class="table-responsive text-black">
                <table id="example" class="display table nowrap text-black" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-black">No.</th>
                            <th class="text-black">Nama</th>
                            <th class="text-black">Jumlah Denda</th>
                            <th class="text-black">Jumlah Hari</th>
                            <th class="text-black">Tanggal Pembayaran</th>
                            <th class="text-black">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penalties as $no => $penalty)
                            <tr>
                                <td class="text-black">{{ ++$no }}.</td>
                                <td class="text-black">{{ $penalty->transaction->user->name }}</td>
                                <td class="text-black">Rp. {{ $penalty->amount }}</td>
                                <td class="text-black">{{ $penalty->lates_day }} Hari</td>
                                <td class="text-black">{{ $penalty->payment_date }}</td>
                                <td class="text-black">@include('penalty.detail')</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-auth.layout>
