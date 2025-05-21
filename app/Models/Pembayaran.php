public function siswa()
{
    return $this->belongsTo(Siswa::class);
}

public function jenisPembayaran()
{
    return $this->belongsTo(JenisPembayaran::class);
}
