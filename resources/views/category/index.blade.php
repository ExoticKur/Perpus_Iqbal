<x-auth.layout>
    @include('layouts.table')
    <x-slot name="title">Kategori Buku</x-slot>
    <div class="card mb-3">
        <div class="row" style="background-color: white">
            <div class="col-12 col-md-6">
                <div class="card-body text-black">
                    <h4 class="card-title display-6 mb-4 text-truncate lh-sm text-black">Selamat {{ Auth()->user()->name }}! 🎉</h4>
                    <p class="mb-0">Kamu mempunyai {{ $count }} buku yang terdaftar dalam
                        {{ $categories->count() }} kategori buku saat ini.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 position-relative text-center">
                <img src="https://demos.themeselection.com/materio-bootstrap-html-admin-template/assets/img/illustrations/illustration-john-2.png"
                    class="card-img-position bottom-0 w-50 end-0 scaleX-n1-rtl" alt="View Profile">
            </div>
        </div>
    </div>
    <div class="card" style="background-color: white">
        <div class="card-header">
            @include('category.store')
        </div>
        <div class="card-body">
            <div class="table-responsive text-black">
                <table id="example" class="display table nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-black">No.</th>
                            <th class="text-black">Kategori</th>
                            <th class="text-black">Buku</th>
                            <th class="text-black">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $no => $category)
                            <tr>
                                <td class="text-black">{{ ++$no }}.</td>
                                <td class="text-black">{{ $category->name }}</td>
                                <td class="text-black">{{ $category->books->count() }} Buku</td>
                                <td>
                                    <div class="d-flex gap-3 align-items-center justify-content-center text-black">
                                        @include('category.update')
                                        <form action="{{ route('categories.destroy', $category->id) }}" onclick="return confirm('Apakah anda ingin menghapus?');" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger btn-sm" type="submit">
                                                Hapus</button>
                                        </form>
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
