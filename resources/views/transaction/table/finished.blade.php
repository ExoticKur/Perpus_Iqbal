<div class="table-responsive text-black">
    <table id="example" class="display table nowrap text-center text-black" style="width:100%">
        <thead>
            <tr>
                <th class="text-black">No.</th>
                <th class="text-black">Nama Lengkap</th>
                <th class="text-black">status</th>
                <th class="text-black">Tanggal Pinjam</th>
                <th class="text-black">Tanggal Kembali</th>
                <th class="text-black">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($finished as $no => $item)
                <tr>
                    <td class="text-black">{{ ++$no }}.</td>
                    <td class="text-black">{{ $item->user->name ?? '-' }}</td>
                    <td class="text-black"><span class="badge bg-primary">{{ $item->status }}</span></td>
                    <td class="text-black">{{ $item->borrow_date ?? '-' }}</td>
                    <td class="text-black">{{ $item->return_date ?? '-' }}</td>
                    <td class="text-black">
                        <div class="d-flex gap-2 text-black">
                            <a class="btn btn-primary btn-sm text-black" href="{{ route('transactions.show', $item->id) }}"
                                role="button">Lihat</a>                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
