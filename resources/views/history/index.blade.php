<x-guest.layout>
    <x-slot name="title">History Catalog Book</x-slot>
    @include('layouts.table')
    <div class="card m-5 p-4 mt-1 shadow-none text-black"  style="background-color: white">
        <h5 class="mb-0 text-black">Riwayat Peminjaman Buku</h5>
        <p class="mb-3 text-black">Berikut data riwayat dari peminjaman buku {{ auth()->user()->name }}</p>
        <div class="card-header text-black" style="color: black !important;">
            <div class="nav-align-top" style="color: black !important;">
                <ul class="nav nav-tabs nav-fill text-black" role="tablist">
                    <li class="nav-item text-black">
                        <button type="button" class="nav-link active text-black" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-waiting" aria-controls="navs-justified-waiting"
                            aria-selected="true"><i
                                class="tf-icons mdi mdi-receipt-text-clock-outline mdi-20px me-1"></i> Menunggu
                            @if ($waiting->count() > 0)
                                <span
                                    class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger ms-1">{{ $waiting->count() }}</span>
                            @endif
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link text-black" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-walking" aria-controls="navs-justified-walking"
                            aria-selected="false"><i class="tf-icons mdi mdi-timer-sand-complete mdi-20px me-1"></i>
                            Berjalan
                            @if ($walking->count() > 0)
                                <span
                                    class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger ms-1">{{ $walking->count() }}</span>
                            @endif
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link text-black" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-penalty" aria-controls="navs-justified-penalty"
                            aria-selected="false"><i class="tf-icons mdi mdi-alert-box-outline mdi-20px me-1"></i>
                            Hukuman
                            @if ($penalty->count() > 0)
                                <span
                                    class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger ms-1">{{ $penalty->count() }}</span>
                            @endif
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link text-black" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-finished" aria-controls="navs-justified-finished"
                            aria-selected="false"><i class="tf-icons mdi mdi-tag-check mdi-20px me-1"></i>
                            Selesai
                            @if ($finished->count() > 0)
                                <span
                                    class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger ms-1">{{ $finished->count() }}</span>
                            @endif
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link text-black" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-rejects" aria-controls="navs-justified-rejects"
                            aria-selected="false"><i class="tf-icons mdi mdi-tag-check mdi-20px me-1"></i>
                            Tolak
                            @if ($rejects->count() > 0)
                                <span
                                    class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger ms-1">{{ $rejects->count() }}</span>
                            @endif
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content p-0">
                <div class="tab-pane fade show active" id="navs-justified-waiting" role="tabpanel">
                    <div class="table-responsive">
                        <table id="example" class="display table nowrap text-center" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-black">No.</th>
                                    <th class="text-black">status</th>
                                    <th class="text-black">Tanggal Pinjam</th>
                                    <th class="text-black">Tanggal Kembali</th>
                                    <th class="text-black">Buku</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($waiting as $no => $wait)
                                    <tr>
                                        <td class="text-black">{{ ++$no }}.</td>
                                        <td class="text-black"><span class="badge bg-warning">{{ $wait->status }}</span></td>
                                        <td class="text-black">{{ $wait->borrow_date ?? '-' }}</td>
                                        <td class="text-black">{{ $wait->return_date ?? '-' }}</td>
                                        <td class="text-black">{{ $wait->book->title }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-justified-walking" role="tabpanel">
                    <div class="table-responsive">
                        <table id="example" class="display table nowrap text-center" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-black">No.</th>
                                    <th class="text-black">status</th>
                                    <th class="text-black">Tanggal Pinjam</th>
                                    <th class="text-black">Tanggal Kembali</th>
                                    <th class="text-black">Buku</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($walking as $no => $walk)
                                    <tr>
                                        <td class="text-black">{{ ++$no }}.</td>
                                        <td class="text-black"><span class="badge bg-primary">{{ $walk->status }}</span></td>
                                        <td class="text-black">{{ $walk->borrow_date ?? '-' }}</td>
                                        <td class="text-black">{{ $walk->return_date ?? '-' }}</td>
                                        <td class="text-black">{{ $walk->book->title }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-justified-penalty" role="tabpanel">
                    <div class="table-responsive">
                        <table id="example" class="display table nowrap text-center" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>status</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Buku</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penalty as $no => $penal)
                                    <tr>
                                        <td>{{ ++$no }}.</td>
                                        <td><span class="badge bg-danger">{{ $penal->status }}</span></td>
                                        <td>{{ $penal->borrow_date ?? '-' }}</td>
                                        <td>{{ $penal->return_date ?? '-' }}</td>
                                        <td>{{ $penal->book->title }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-justified-finished" role="tabpanel">
                    <div class="table-responsive">
                        <table id="example" class="display table nowrap text-center" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>status</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Buku</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($finished as $no => $finish)
                                    <tr>
                                        <td>{{ ++$no }}.</td>
                                        <td><span class="badge bg-success">{{ $finish->status }}</span></td>
                                        <td>{{ $finish->borrow_date ?? '-' }}</td>
                                        <td>{{ $finish->return_date ?? '-' }}</td>
                                        <td>{{ $finish->book->title }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-justified-rejects" role="tabpanel">
                    <div class="table-responsive">
                        <table id="example" class="display table nowrap text-center" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>status</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Buku</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rejects as $no => $finish)
                                    <tr>
                                        <td>{{ ++$no }}.</td>
                                        <td><span class="badge bg-danger">{{ $finish->status }}</span></td>
                                        <td>{{ $finish->borrow_date ?? '-' }}</td>
                                        <td>{{ $finish->return_date ?? '-' }}</td>
                                        <td>{{ $finish->book->title }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest.layout>
