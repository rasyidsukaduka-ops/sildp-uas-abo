# SILDP
## Sistem Informasi Layanan Data Pemerintah

SILDP (Sistem Informasi Layanan Data Pemerintah) merupakan aplikasi berbasis web yang dirancang untuk membantu proses **permintaan, verifikasi, pengelolaan, dan publikasi data pemerintah** secara terstruktur dan terdokumentasi.

Proyek ini dikembangkan sebagai bagian dari **Ujian Akhir Semester (UAS) Analisa Berorientasi Objek (ABO)**.

---
## 🎓 Identitas Proyek

| Keterangan | Informasi |
|---|---|
| **Mata Kuliah** | Analisa Berorientasi Objek (ABO) |
| **Jenis Kegiatan** | Ujian Akhir Semester (UAS) |
| **Program Studi** | PJJ Informatika |
| **Kelas** | IF404 |
| **Kelompok** | Kelompok 13 |

### 📌 Tentang Sistem

Proses permintaan data pemerintah membutuhkan mekanisme yang jelas agar permintaan dapat diterima, diverifikasi, diproses, dan diselesaikan secara terstruktur.

SILDP menyediakan alur layanan data yang memungkinkan:

- Pengguna mengajukan permintaan data
- Sistem menghasilkan tiket permintaan
- Admin melakukan verifikasi permintaan
- Operator menyiapkan dan mengunggah dataset
- Admin melakukan proses publikasi
- Pengguna dapat mengetahui status permintaannya

Dengan demikian, proses layanan data menjadi lebih **terstruktur, terdokumentasi, dan mudah dipantau**.

---

## 🎯 Tujuan

Sistem ini bertujuan untuk:

1. Digitalisasi proses permintaan data.
2. Mempermudah pengelolaan permintaan data.
3. Meningkatkan keterlacakan proses layanan data.
4. Mempermudah pengelolaan dataset.
5. Mendukung publikasi data secara terstruktur.
6. Mengurangi proses layanan data yang dilakukan secara manual.

---

## ✨ Fitur Utama

### 👤 Pengguna

- Mengajukan permintaan data
- Mendapatkan nomor/tiket permintaan
- Melihat status permintaan
- Melihat dataset yang telah dipublikasikan

### 🛡️ Admin

- Melihat daftar permintaan data
- Melakukan verifikasi permintaan
- Menyetujui atau menolak permintaan
- Mengelola dataset
- Melakukan publikasi dataset

### 📊 Operator

- Menyiapkan dataset
- Mengunggah dataset
- Memproses permintaan data
- Memperbarui status permintaan

---

## 🔄 Alur Layanan Data

```text
┌─────────────┐
│   Pengguna  │
└──────┬──────┘
       │
       ▼
┌────────────────────┐
│ Ajukan Permintaan  │
│       Data         │
└─────────┬──────────┘
          │
          ▼
┌────────────────────┐
│ Sistem Membuat     │
│      Tiket         │
└─────────┬──────────┘
          │
          ▼
┌────────────────────┐
│       Admin        │
│      Verifikasi    │
└─────────┬──────────┘
          │
          ▼
┌────────────────────┐
│     Operator       │
│ Menyiapkan Dataset │
└─────────┬──────────┘
          │
          ▼
┌────────────────────┐
│ Upload Dataset     │
└─────────┬──────────┘
          │
          ▼
┌────────────────────┐
│       Admin        │
│      Publikasi     │
└─────────┬──────────┘
          │
          ▼
┌────────────────────┐
│ Dataset Tersedia   │
│     untuk User     │
└────────────────────┘
