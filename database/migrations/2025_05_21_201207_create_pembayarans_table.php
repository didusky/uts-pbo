Schema::create('pembayarans', function (Blueprint $table) {
    $table->id();
    $table->foreignId('siswa_id')->constrained()->onDelete('cascade');
    $table->foreignId('jenis_pembayaran_id')->constrained()->onDelete('cascade');
    $table->decimal('jumlah', 12, 2);
    $table->enum('status', ['Lunas', 'Belum Lunas', 'Menunggu']);
    $table->date('tanggal_pembayaran');
    $table->timestamps();
});
