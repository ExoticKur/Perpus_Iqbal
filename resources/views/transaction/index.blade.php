<x-auth.layout>
    <x-slot name="title">Transaction Library</x-slot>
    @include('layouts.table')
    <div class="row gy-4 mb-3">
        <div class="col-md-12 col-lg-4">
            <div class="card" style="background-color: white">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 col-md text-black">
                            <div class="card-body">
                                <h4 class="card-title mb-4 text-black">Informasi Peminjaman dan Pengembalian Buku Perpustakaan</h4>
                                <p>Informasi telah diperbarui pada {{ now() }}</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 position-relative text-center d-lg-none">
                            <img src="https://demos.themeselection.com/materio-bootstrap-html-admin-template/assets/img/illustrations/illustration-john-2.png"
                                class="card-img-position bottom-0 w-50" alt="View Profile">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-primary rounded shadow">
                                        <i class="mdi mdi-trending-up mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3 text-black">
                                    <div class="small mb-1">Menunggu</div>
                                    <h5 class="mb-0 text-black">{{ $waiting->count() }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-success rounded shadow">
                                        <i class="mdi mdi-account-outline mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <div class="small mb-1 text-black">Berjalan</div>
                                    <h5 class="mb-0 text-black">{{ $walking->count() }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-warning rounded shadow">
                                        <i class="mdi mdi-cellphone-link mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <div class="small mb-1 text-black">Terlambat</div>
                                    <h5 class="mb-0 text-black">{{ $penalty->count() }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-info rounded shadow">
                                        <i class="mdi mdi-currency-usd mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <div class="small mb-1 text-black">Selesai</div>
                                    <h5 class="mb-0 text-black">{{ $finished->count() }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-8">
            <div class="card" style="background-color: white">
                <h5 class="card-header mb-0 pb-0 text-black">Tambah Peminjaman Buku</h5>
                @include('transaction.store')
            </div>
        </div>
    </div>

    <div class="card" style="background-color: white">
        <div class="card-header" style="background-color: white">
            <div class="nav-align-top">
                <ul class="nav nav-tabs nav-fill" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active text-black" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-waiting" aria-controls="navs-justified-waiting"
                            aria-selected="true"><i
                                class="tf-icons mdi mdi-receipt-text-clock-outline mdi-20px me-1"></i> Menunggu
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link text-black" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-walking" aria-controls="navs-justified-walking"
                            aria-selected="false"><i class="tf-icons mdi mdi-timer-sand-complete mdi-20px me-1"></i>
                            Berjalan
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link text-black" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-penalty" aria-controls="navs-justified-penalty"
                            aria-selected="false"><i class="tf-icons mdi mdi-alert-box-outline mdi-20px me-1"></i>
                            Terlambat
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link text-black" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-finished" aria-controls="navs-justified-finished"
                            aria-selected="false"><i class="tf-icons mdi mdi-tag-check mdi-20px me-1"></i>
                            Selesai
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-body text-black" style="background-color: white">
            <div class="tab-content p-0 text-black" style="background-color: white">
                <div class="tab-pane fade show active text-black" id="navs-justified-waiting" role="tabpanel">
                    <div class="card-body text-black">
                        @include('transaction.table.waiting')
                    </div>
                </div>
                <div class="tab-pane fade text-black" id="navs-justified-walking" role="tabpanel">
                    <div class="card-body text-black">
                        @include('transaction.table.walking')
                    </div>
                </div>
                <div class="tab-pane fade text-black" id="navs-justified-penalty" role="tabpanel">
                    <div class="card-body text-black">
                        @include('transaction.table.penalty')
                    </div>
                </div>
                <div class="tab-pane fade text-black" id="navs-justified-finished" role="tabpanel">
                    <div class="card-body text-black">
                        @include('transaction.table.finished')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-auth.layout>
