<x-guest.layout>
    <x-slot name="title">Book {{ $book->title }}</x-slot>
    <div class="card m-5 mt-1 p-3 shadow-none" style="background-color: white">
        <h5 class="mb-0 text-black">Detail Buku</h5>
        <p class="mb-3 text-black"> informasi yang diberikan di bawahnya akan berkaitan dengan detail atau rincian mengenai suatu
            buku</p>
        <div class="row g-3 text-black">
            <div class="col-md">
                <div class="card-body">
                    <div class="cursor-pointer row">
                        <img src="{{ Storage::url($book->image) }}" class="img rounded" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card-body">
                    <div class="justify-content-between">
                        <h2 class="fw-bold text-wrap mb-0 text-black">{{ $book->title }}</h2>
                        <p>{{ $book->category->name }}</p>
                        <p>{{ $book->synopsis }}</p>
                    </div>
                    <div class="row mb-0">
                        <p class="text-wrap"><i class="mdi mdi-identifier mdi-24px me-2"></i>ISBN:
                            {{ $book->isbn }}</p>
                        <p class="text-wrap"><i class="mdi mdi-counter mdi-24px me-2"></i>Jumlah Buku:
                            {{ $book->book_count }}</p>
                        <p class="text-wrap"><i class="mdi mdi-face-man mdi-24px me-2"></i>Penulis:
                            {{ $book->author }}</p>

                        <p class="text-wrap"><i class="mdi mdi-clipboard-text-clock mdi-24px me-2"></i>Tahun
                            Terbit:
                            {{ $book->year_published }}</p>
                        <p class="text-wrap"><i class="mdi mdi-domain mdi-24px me-2"></i>Penerbit:
                            {{ $book->publisher }}</p>
                        @include('catalog.store')
                    </div>

                </div>
            </div>
        </div>
        <div class="divider">
            <div class="divider-text fw-border fs-5 text-black">Kamu Mungkin Juga Suka</div>
        </div>
        <div class="card-body">
            <div class="row gy-4 mb-4">
                @foreach ($books as $book)
                    <div class="col-sm-6 col-lg-4">
                        <div class="card shadow-none border p-2 h-100" style="background-color: #004953">
                            <div class="rounded-2 text-center mb-3">
                                <a href="{{ route('catalog.show', $book->id) }}">
                                    <img class="img" style="object-fit: cover"
                                        src="{{ Storage::url($book->image) }}" width="100%" height="200px"
                                        alt="Book Cover">
                                </a>
                            </div>
                            <div class="card-body p-3 pt-2 text-white">
                                <div class="align-items-center mb-3 text-white">
                                    <span
                                        class="badge rounded-pill bg-label-primary text-wrap">{{ Str::limit($book->category->name, 30, '...') }}</span>
                                </div>
                                <a href="{{ route('catalog.show', $book->id) }}"
                                    class="h5 text-white">{{ $book->title }}</a>
                                <p class="mt-2 text-white">{{ Str::limit($book->synopsis, 50, '...') }}
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex flex-column flex-md-row gap-3 text-nowrap flex-wrap flex-md-nowrap  flex-lg-wrap flex-xxl-nowrap"  style="background-color: white">
                                    <a class="w-100 btn btn-outline-primary d-flex align-items-center waves-effect text-black"
                                        href="{{ route('catalog.show', $book->id) }}">
                                        <span class="me-1">Continue</span><i
                                            class="mdi mdi-arrow-right lh-1 scaleX-n1-rtl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-guest.layout>
