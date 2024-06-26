<!-- Modal trigger button -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalId">
    Edit
</button>

<!-- Modal Body -->
<div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
        <div class="modal-content" style="background-color: #004953">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="modalTitleId">Buku <span class="text-primary">{{ $book->title }}</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('books.update', $book->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label text-white">Judul Buku</label>
                        <input type="text" class="form-control text-black" style="background-color: white" name="title" id="title"
                            value="{{ $book->title }}" aria-describedby="helpId" placeholder="Enter book title">
                        @error('title')
                            <small class="text-danger fw-bold">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="isbn" class="form-label text-white">Kode ISBN</label>
                                <input type="number" class="form-control text-black" style="background-color: white" name="isbn" id="isbn"
                                    value="{{ $book->isbn }}" aria-describedby="helpId" placeholder="Enter book isbn">
                                @error('isbn')
                                    <small class="text-danger fw-bold">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="image" class="form-label text-white">Gambar / Cover</label>
                                <input type="file" class="form-control text-black" style="background-color: white" name="image" id="image"
                                    aria-describedby="helpId" placeholder="Enter book image">
                                @error('image')
                                    <small class="text-danger fw-bold">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="author" class="form-label text-white">Penulis</label>
                                <input type="text" class="form-control text-black" style="background-color: white" name="author" id="author"
                                    value="{{ $book->author }}" aria-describedby="helpId"
                                    placeholder="Enter book author">
                                @error('author')
                                    <small class="text-danger fw-bold">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="year_published" class="form-label text-white">Tahun Terbit</label>
                                <input type="number" class="form-control text-black" style="background-color: white" name="year_published" id="year_published"
                                    value="{{ $book->year_published }}" aria-describedby="helpId"
                                    placeholder="Enter book year published">
                                @error('year_published')
                                    <small class="text-danger fw-bold">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="publisher" class="form-label text-white">Penerbit</label>
                                <input type="text" class="form-control text-black" style="background-color: white" name="publisher" id="publisher"
                                    value="{{ $book->publisher }}" aria-describedby="helpId"
                                    placeholder="Enter book publisher">
                                @error('publisher')
                                    <small class="text-danger fw-bold">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="category_id" class="form-label text-white">Kategori Buku</label>
                                <select class="form-select text-black" style="background-color: white" name="category_id" id="category_id">
                                    <option selected>Pilih</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $book->category->id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="book_count" class="form-label text-white">Jumlah Buku</label>
                                <input type="number" class="form-control text-black" style="background-color: white" name="book_count" id="book_count"
                                    value="{{ $book->book_count }}" aria-describedby="helpId"
                                    placeholder="Enter book book count">
                                @error('book_count')
                                    <small class="text-danger fw-bold">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="synopsis" class="form-label text-white">Sinopsis</label>
                        <textarea class="form-control text-black" style="background-color: white" name="synopsis" id="synopsis" rows="3">{{ $book->synopsis }}</textarea>
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
