<div style="background-color: #004953">
    <div class="card-header d-flex flex-wrap justify-content-between gap-3">
        <div class="card-title mb-0 me-1 text-white">
            <h5 class="mb-1 text-white">Katalog Buku</h5>
            <p class="mb-0">Total {{ $books->count() }} keseluruhan buku yang tersedia</p>
        </div>
        <div class="d-flex justify-content-md-end align-items-center gap-3 flex-wrap">
            <div class="position-relative">
                <select class="form-select text-black" wire:model="category_id" name="" id="" style="background-color: white">
                    <option value="">Pilih Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ Str::limit($category->name, 35, '...') }}</option>
                    @endforeach
                </select>
            </div>

            <label class="switch">
                <input wire:model="search" type="text" class="form-control" style="background-color: white" name="" id=""
                    aria-describedby="helpId" placeholder="Masukkan judul buku ...">
            </label>
        </div>
    </div>
    <div class="card-body">
        <h5 class="mb-3 text-center fw-bold text-primary">
            <i wire:loading class="mdi mdi-loading mdi-spin mdi-36px text-primary"></i>
            {{ $search }}
        </h5>
        <div class="row gy-4 mb-4">
            @foreach ($books as $book)
                <div class="col-sm-6 col-lg-4">
                    <div class="card shadow-none border p-2 h-100" style="background-color: white">
                        <div class="rounded-2 text-center mb-3">
                            <a href="{{ route('catalog.show', $book->id) }}">
                                <img class="img" style="object-fit: cover" src="{{ Storage::url($book->image) }}"
                                    width="100%" height="200px" alt="Book Cover">
                            </a>
                        </div>
                        <div class="card-body p-3 pt-2">
                            <div class="align-items-center mb-3">
                                <span
                                    class="badge rounded-pill bg-label-primary text-wrap" style="color: white !important;">{{ $book->category->name }}</span>
                            </div>
                            <a href="{{ route('catalog.show', $book->id) }}" class="h5 text-black">{{ $book->title }}</a>
                            <p class="mt-2 text-truncate">{{ $book->synopsis }}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('catalog.show', $book->id) }}"
                                class="btn btn-primary w-100 {{ $book->book_count == 0 ? 'disabled' : '' }}"><i
                                    class="mdi mdi-arrow-right lh-1 scaleX-n1-rtl"></i>Lihat</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
