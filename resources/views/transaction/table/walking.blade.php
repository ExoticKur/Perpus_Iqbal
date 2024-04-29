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
            @foreach ($walking as $no => $item)
                <tr>
                    <td class="text-black">{{ ++$no }}.</td>
                    <td class="text-black">{{ $item->user->name ?? '-' }}</td>
                    <td class="text-black"><span class="badge bg-success">{{ $item->status }}</span></td>
                    <td class="text-black">{{ $item->borrow_date ?? '-' }}</td>
                    <td class="text-black">{{ $item->return_date ?? '-' }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a class="btn btn-primary btn-sm" href="{{ route('transactions.show', $item->id) }}"
                                role="button">Lihat</a>
                            <form action="{{ route('transactions.finished', $item->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success btn-sm">Selesai</button>
                            </form>
                            <form action="{{ route('transactions.extratime', $item->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-warning btn-sm">Perpanjang</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
