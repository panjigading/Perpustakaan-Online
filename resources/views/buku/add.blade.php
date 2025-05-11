<x-base>
    <h1 class="text-center font-bold text-3xl mt-4 mb-7">Tambah Buku Baru</h1>
    <form class="grid grid-cols-1 gap-3" method="post" action="<?= route('buku.store') ?>">
        @csrf
        <label>Judul</label>
        <input class="border p-2 rounded-sm focus:border-blue-500" type="text" name="judul" required>
        <label>Penerbit</label>
        <input class="border p-2 rounded-sm focus:border-blue-500" type="text" name="penerbit" required>
        <input class="size-min border p-2 rounded-sm mt-5 hover cursor-pointer" type="submit" value="Submit">
    </form>
</x-base>