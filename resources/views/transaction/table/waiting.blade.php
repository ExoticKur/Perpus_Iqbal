<div class="table-responsive text-black">
    <table id="example" class="display table nowrap text-center text-black" style="width:100%">
        <thead>
            <tr>
                <th class="text-black">No.</th>
                <th class="text-black">nama lengkap</th>
                <th class="text-black">status</th>
                <th class="text-black">Tanggal Pinjam</th>
                <th class="text-black">Tanggal Kembali</th>
                <th class="text-black">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($waiting as $no => $item)
                <tr>
                    <td class="text-black">{{ ++$no }}.</td>
                    <td class="text-black">{{ $item->user->name ?? '-' }}</td>
                    <td class="text-black"><span class="badge bg-warning">{{ $item->status }}</span></td>
                    <td class="text-black">{{ $item->borrow_date ?? '-' }}</td>
                    <td class="text-black">{{ $item->return_date ?? '-' }}</td>
                    <td>
                        <div class="d-flex gap-2 text-black">
                            <form action="{{ route('transactions.confirmation', $item->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="Berjalan">
                                <input type="hidden" name="borrow_date" value="{{ $borrow_date }}">
                                <input type="hidden" name="return_date" value="{{ $return_date }}">
                                <button type="submit" class="btn btn-success btn-sm text-black">Konfirmasi</button>
                            </form>
                            <form action="{{ Route('transactions.reject', $item->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-danger btn-sm text-black">Tolak</button>
                            </form>
                            <a class="btn btn-primary btn-sm" href="{{ route('transactions.show', $item->id) }}"
                                role="button">Lihat</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
