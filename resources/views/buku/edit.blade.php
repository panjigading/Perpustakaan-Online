<x-base>
    <h1 class="text-center font-bold text-3xl mt-4 mb-7">Edit Buku</h1>
    <form class="grid grid-cols-1 gap-3" method="post" action="<?= route('buku.update') ?>">
        @csrf
        <input type="hidden" name="id" value="<?= $buku->id ?>">
        <label>Judul</label>
        <input class="border p-2 rounded-sm focus:border-blue-500" type="text" name="judul" required value="<?= $buku->judul ?>">
        <label>Penerbit</label>
        <input class="border p-2 rounded-sm focus:border-blue-500" type="text" name="penerbit" required value="<?= $buku->penerbit ?>">
        <input class="size-min border p-2 rounded-sm mt-5 hover cursor-pointer" type="submit" value="Submit">
    </form>
</x-base>