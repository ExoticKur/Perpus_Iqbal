<x-auth.layout>
    <x-slot name="title">Buku {{ $book->title }}</x-slot>
    <div class="card" style="background-color: white">
        <div class="card-header text-black">
            <h5 class="mb-0 text-black">Detail Buku</h5>
            <p class="mb-0"> Informasi yang diberikan di bawahnya akan berkaitan dengan detail atau rincian mengenai
                suatu buku.</p>
        </div>
        <div class="card shadow-none" style="background-color: white">
            <div class="row g-3">
                <div class="col-md">
                    <div class="card-body">
                        <div class="cursor-pointer row">
                            <img src="{{ Storage::url($book->image) }}" class="img rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md text-black">
                    <div class="card-body text-black">
                        <h2 class ="fw-bold text-wrap mb-0 text-black">{{ $book->title }}</h2>
                        <p>{{ $book->category->name }}</p>
                        <p>{{ $book->synopsis }}</p>
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
                            <div class="d-grid gap-3">
                                @include('book.update')
                                <form action="{{ route('books.destroy', $book->id) }}" onclick="return confirm('Apakah anda ingin menghapus?');" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-auth.layout>
