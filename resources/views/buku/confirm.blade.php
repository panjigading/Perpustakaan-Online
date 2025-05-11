<x-base>
    <h1>Tolong Konfirmasi Penghapusan</h1>
    <dl>
        <dt>Judul Buku:</dt>
        <dd><?= $book->judul ?></dd>
        <dt>Penerbit:</dt>
        <dd><?= $book->penerbit ?></dd>
    </dl>
    <form action="<?= route('buku.destroy', ['buku', $buku->id]) =>" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Hapus">
    </form>
</x-base>