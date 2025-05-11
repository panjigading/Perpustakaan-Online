<x-base>
    <h1 class="text-center font-bold text-3xl mt-4 mb-7">Perpustakaan Online</h1>
    <p class="mb-3 text-center">
        <a href="<?= route('buku.create') ?>" class="p-2 rounded-sm border">Tambah Buku</a>
    </p>
    <table class="min-w-full">
        <tr class="border-b-2 border-gray-800">
            <th class="p-3">Judul Buku</th>
            <th class="p-3">Penerbit</th>
            <th class="p-3">Aksi</th>
        </tr>
        @forelse ($books as $book)
        <tr>
            <td class="p-3 pl-0"><?= $book->judul ?></td>
            <td class="p-3"><?= $book->penerbit ?></td>
            <td class="p-3 pr-0">
                <a href="<?= route('buku.edit', ['id' => $book->id]) ?>" class="underline">Edit</a>
                /
                <a href="<?= route('buku.destroy', ['id' => $book->id]) ?>" class="underline">Delete</a>
            </td>
        </tr>
        @empty
        <tr>
            <td class="p-3 pl-0 text-center" colspan="3">Tidak ada buku</td>
        </tr>
        @endforelse
    </table>
</x-base>