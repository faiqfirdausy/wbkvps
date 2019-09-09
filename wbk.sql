/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.37-MariaDB : Database - wbk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`wbk` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `wbk`;

/*Table structure for table `abcsoal` */

DROP TABLE IF EXISTS `abcsoal`;

CREATE TABLE `abcsoal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text,
  `petunjuk_teknis` text,
  `nilai` double DEFAULT NULL,
  `id_nomorsoal` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

/*Data for the table `abcsoal` */

insert  into `abcsoal`(`id`,`nama`,`petunjuk_teknis`,`nilai`,`id_nomorsoal`,`updated_at`,`created_at`) values 
(1,'a. Apakah unit kerja telah membentuk tim kerja WBK\r\n/ WBBM untuk melakukan\r\npembangunan Zona\r\nIntegritas ?','<p>a.&nbsp;Membuat undangan pembentukan Tim kerja WBK / WBBM,</p>\r\n\r\n<p>b.&nbsp;Melaksanakan rapat pembentukan Tim kerja WBK / WBBM,</p>\r\n\r\n<p>c.&nbsp;Penentuan anggota Tim harus memiliki kompetensi, memahami tusi, berdedikasi, tidak bermasalah, tidak pernah melakukan tindak pidana serta pelanggaran kode etik dan kode perilaku,</p>\r\n\r\n<p>d.&nbsp;Pengesahan Tim kerja WBK / WBBM.</p>',0.5,1,NULL,NULL),
(2,'b. Apakah penentuan anggota\r\nTim kerja WBK / WBBM\r\nselain pimpinan dipilih\r\nmelalui\r\nprosedur/mekanisme yang\r\njelas ?\r\n','<p>a. Pimpinan, pejabat, dan pihak terkait melakukan seleksi untuk membentuk Tim kerja,</p>\r\n\r\n<p>b. Seleksi dilakukan dengan mempertimbangkan:</p>\r\n\r\n<ol>\r\n	<li>Kompetensi,</li>\r\n	<li>Memahami tusi,</li>\r\n	<li>Berdedikasi,</li>\r\n	<li>Tidak bermasalah,</li>\r\n	<li>Tidak pernah melakukan tindak pidana serta pelanggaran kode etik dan disiplin.</li>\r\n</ol>\r\n\r\n<p>c. Rapat penentuan Tim kerja,</p>\r\n\r\n<p>d. Penetapan Tim kerja.</p>',0.5,1,'2019-03-11 04:08:00',NULL),
(3,'a. Apakah ada dokumen rencana kerja pembangunan Zona Integritas menuju WBK/WBBM ','<p>Buat rencana aksi tiap-tiap penanggung jawab program (kapan dimulai, berapa lama, target yang akan dicapai)<br />\r\nMembuat SK Kepala Satker tentang rencana pembangunan ZI.</p>',0.33,2,'2019-03-11 04:11:59',NULL),
(4,'b. Apakah dalam dokumen pembangunan terdapat target-target prioritas yang relevan dengan tujuan pembangunan WBK/WBBM?','<p>Target prioritas adalah hasil yang ingin dicapai dalam tiap-tiap kegiatan, program dan inovasi yang dilaksanakan dalam rangka mempercepat Proses Perubahan serta membawa dampak menuju kearah yang lebih baik.</p>\r\n\r\n<ol>\r\n	<li>Tentukan target prioritas yang dirasa mudah diraih atau dicapai di tiap komponen perubahan,</li>\r\n	<li>Penentuan target-target prioritas harus melibatkan seluruh Tim Kerja,</li>\r\n	<li>&nbsp;Melaksanakan Analisa dan Evaluasi pada masing-masing Rencana Kerja dan Rencana Aksi yang terlaksana maupun tidak.</li>\r\n</ol>',0.33,2,'2019-03-11 04:13:35',NULL),
(5,'c. Apakah terdapat\r\nmekanisme atau media\r\nuntuk mensosialisasikan\r\npembangunan\r\nWBK/WBBM?\r\n','<p>Sosialisasi dilaksanakan agar kemauan untuk melakukan perubahan Menuju WBK/WBBM didengar dan dipahami oleh Internal dan Eksternal. Proses Pembangunan ZI menuju WBK harus disosialisasikan kepada seluruh pegawai agar tujuan utama meraih WBK dan WBBM tercapai, yaitu:</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;A. Sosialisasi kepada pegawai melalui:</p>\r\n\r\n<ul>\r\n	<li>Pengarahan saat apel pagi, rapat staf secara periodik,</li>\r\n	<li>Pendampingan/pembinaan oleh pusat dan wilayah terkait program, kegiatan dan inovasi pembangunan ZI menuju WBK/WBBM,</li>\r\n	<li>Pemasangan spanduk dan banner di lingkungan kerja;</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;B.Sosialisasi langsung kepada masyarkat</p>\r\n\r\n<ul>\r\n	<li>Untuk Unit Satuan Kerja Imigrasi, sosialisasi dilakukan kepada pemohon jasa keimigrasian;</li>\r\n	<li>Untuk Unit Satuan Kerja Pemasyarakatan, sosialisasi &nbsp;dilakukan kepada pemohon layanan pemasyarakatan (pengunjung dan WBP);</li>\r\n	<li>Untuk Satuan Kerja Eselon I, sosialisasi dilakukan kepada pemohon layanan.</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;C. Sosialisasi kepada masyarakat melalui:</p>\r\n\r\n<ul>\r\n	<li>Banner/spanduk/himbauan/brosur</li>\r\n	<li>Website</li>\r\n	<li>Media Sosial</li>\r\n	<li>Media elektronik</li>\r\n	<li>Media cetak</li>\r\n	<li>Media TV</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>Selain melakukan Sosialisasi Zona Integritas, satuan kerja juga perlu melakukan Pencanangan Zona Integritas yang menunjukkan keseriusan dan kemauan dari satuan kerja untuk melakukan perubahan pada jajarannya menuju WBK/WBBM serta sebagai titik awal dimulainya pembangunan Zona integritas hingga tercapainya WBK/WBBM, meliputi kegiatan:</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Eksternal</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>Melaksanakan pencanangan Zona Integritas yang disaksikan antara lain oleh Instansi terkait, Kemenpan RB, Forkopimda, Perwakilan Ombudsman, tokoh masyarakat, Tokoh agama serta dipublikasikan.</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Internal</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>melaksanakan Penandatanganan Pakta Integritas antara Kepala Satuan Kerja dengan jajaran struktural dibawahnya;</li>\r\n	<li>penandatangan Pakta Integritas Antara jajaran Struktural dalam satuan kerja dengan Pegawai (komitmen tidak memungut biaya diluar ketentuan, tidak diskriminasi, tidak melaksanakan gratifikasi, memberikan pelayanan terbaik kepada masyarakat)</li>\r\n</ol>',0.33,2,'2019-03-11 07:22:11',NULL),
(6,'a. Apakah seluruh kegiatan\r\npembangunan sudah\r\ndilaksanakan sesuai dengan\r\nrencana ?','<p>A. Pelaksanaan kegiatan harus melibatkan seluruh anggota Tim kerja;<br />\r\nb. Membuat laporan hasil pembangunan ZI berdasarkan Rencana Aksi dan Target Prioritas yang sudah ditetapkan oleh Tim kerja;<br />\r\nc. Membuat dokumentasi berupa foto-foto kegiatan.</p>',0.66,3,'2019-03-11 07:43:53',NULL),
(7,'b. Terdapat monitoring dan\r\nevaluasi terhadap\r\npembangunan Zona\r\nIntegritas','<p>a. Melaksanakan rapat monitoring dan evaluasi secara bulanan;<br />\r\nb. Membuat laporan monitoring dan evaluasi secara bulanan (berkala).</p>',0.66,3,'2019-03-11 07:44:13',NULL),
(8,'c. Apakah hasil Monitoring\r\ndan Evaluasi telah\r\nditindaklanjuti ?','<p>Laporan tindak lanjut hasil monitoring dan evaluasi.</p>',0.66,3,'2019-03-11 07:44:26',NULL),
(9,'a. Apakah pimpinan berperan\r\nsebagai role model dalam\r\npelaksanaan Pembangunan\r\nWBK/WBBM ?','<p>Pimpinan (Kepala Satuan Kerja serta pejabat struktural dibawahnya) harus berperan sebagai <em>role model </em>dalam pelaksanaan Pembangunan ZI Menuju WBK/WBBM, dengan:</p>\r\n\r\n<p>a. Keteladanan yang ditunjukan oleh pimpinan akan menjadi panutan bagi bawahannya;</p>\r\n\r\n<p>b. Keteladanan mempunyai pengaruh besar dalam pembentukan pribadi seseorang;</p>\r\n\r\n<p>c. Keteladanan akan sangat cepat merubah pola pikir bawahannya.</p>\r\n\r\n<p>Contoh: Pimpinan Tinggi Madya dan Pratama melakukan absensi kehadiran seperti pegawai lainnya</p>\r\n\r\n<p>&nbsp;</p>',0.25,4,'2019-03-12 02:23:06',NULL),
(10,'b. Apakah sudah ditetapkan\r\nagen perubahan ?\r\n','<p>Sesuai dengan Permenpan RB No.27 Tahun 2014 tentang Pedoman Pembangunan Agen Perubahan di Instansi Pemerintah, untuk:</p>\r\n\r\n<p>a. Membuat undangan penetapan agen perubahan;</p>\r\n\r\n<p>b. Melaksanakan rapat penetapan agen perubahan;</p>\r\n\r\n<p>c. Menentukan agen perubahan yang menjadi contoh bagi pegawai lainnya, memiliki kompetensi, memahami tusi, berdedikasi, tidak bermasalah, tidak pernah melakukan tindak pidana serta pelanggaran kode etik dan kode perilaku;</p>\r\n\r\n<p>d. Mengesahkan SK agen perubahan.</p>',0.25,4,'2019-03-12 02:27:44',NULL),
(11,'c. Apakah telah dibangun\r\nbudaya kerja dan pola pikir\r\ndi lingkungan organisasi ?\r\n','<p>a. Menerapkan budaya kerja sebagaimana tertuang dalam kode etik dan kode perilaku,</p>\r\n\r\n<p>b. Berikan <em>reward </em>dan <em>punishment</em>,</p>\r\n\r\n<p>c. Membuat laporan kegiatan pembangunan budaya kerja dan pola pikir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Contoh penerapan Budaya Kerja (membangun pola hidup sederhana; berfikir, berkata dan bertindak positif), antara lain:</p>\r\n\r\n<p>&nbsp; &nbsp;a. Penerapan tata nilai kami PASTI setiap hari oleh pimpinan kepada seluruh pegawai melalui kegiatan sosialisasi, bimtek, dan diklat,</p>\r\n\r\n<p>&nbsp; &nbsp;b. Absensi melalui fingerprint pada saat masuk dan pulang kerja</p>',0.25,4,'2019-03-12 02:31:02',NULL),
(12,'d. Apakah anggota organisasi\r\nterlibat dalam\r\npembangunan Zona\r\nIntegritas menuju\r\nWBK/WBBM ?','<p>a. Membuat program dan kegiatan ZI kepada seluruh pegawai meliputi:<br />\r\n&nbsp; &nbsp; 1) Penandatanganan pakta integritas seluruh pegawai;<br />\r\n&nbsp; &nbsp; 2) Penerapan tata nilai kami PASTI setiap hari oleh pimpinan kepada seluruh pegawai melalui kegiatan sosialisasi, bimtek, dan diklat;<br />\r\n&nbsp; &nbsp; 3) Apel pagi dan apel sore;<br />\r\n&nbsp; &nbsp; 4) Jumat olahraga;<br />\r\n&nbsp; &nbsp; 5) Kegiatan rohani;<br />\r\n&nbsp; &nbsp; 6) Coffee Morning.<br />\r\nb. Membuat laporan Hasil Kegiatan.</p>',0.25,4,'2019-03-12 03:08:02',NULL),
(13,'a. Apakah SOP mengacu pada\r\npeta proses bisnis instansi ?','<p>a. Unit Pusat membuat SOP yang mengacu kepada peta proses bisnis instansi,</p>\r\n\r\n<p>b. Wilayah/UPT membuat SOP Unit yang merupakan turunan dari SOP yang diterbitkan oleh Pusat,</p>\r\n\r\n<p>c. Wilayah/UPT membuat SOP Inovasi.</p>\r\n\r\n<p>Contoh:</p>\r\n\r\n<p>1) Sistem antrian penerbitan paspor sesuai SOP dari pusat hanya mensyaratkan pemberian nomor antrian kepada pemohon. Inovasi yang bisa dilakukan dengan menambahkan pengambilan poto wajah untuk menghindari percaloan. UPT membuat SOP inovasi system antrian berbasis poto wajah.</p>\r\n\r\n<p>2) Sistem kunjungan keluarga narapidana yang mensyaratkan pemeriksaan identitas. UPT menambahkan SOP pemeriksaan identitas melalui perekaman <em>fingerprint </em>pada saat masuk dan keluar.</p>\r\n\r\n<p>&nbsp;</p>',0.5,5,'2019-03-12 03:16:12',NULL),
(14,'b. Prosedur operasional tetap\r\n(SOP) telah diterapkan. ','<p>a. Memastikan pelaksanaan Tugas Pegawai sesuai SOP, dengan pemasangan/informasi tentang alur atau prosedur layanan,</p>\r\n\r\n<p>b. Melakukan inovasi terhadap SOP yang berlaku.</p>\r\n\r\n<p>Contoh:</p>\r\n\r\n<p>&nbsp; 1) Memasang informasi tentang alur layanan kunjungan keluarga narapidana/tahanan di Lapas/Rutan,</p>\r\n\r\n<p>&nbsp; 2) Memasang informasi tentang alur layanan penerbitan paspor.</p>\r\n\r\n<p>&nbsp;</p>',0.5,5,'2019-03-12 03:24:21',NULL),
(15,'c. Prosedur operasional tetap\r\n(SOP) telah dievaluasi.','<p>a. Melaksanakan Evaluasi SOP,</p>\r\n\r\n<p>b. Membuat laporan hasil evaluasi SOP serta tindak lanjutnya.</p>\r\n\r\n<p>&nbsp;</p>',0.5,5,'2019-03-12 03:25:10',NULL),
(16,'a. Apakah sistem pengukuran\r\nkinerja unit sudah\r\nmenggunakan teknologi\r\ninformasi?\r\n','<p>a. Pengukuran kinerja Satker melalui aplikasi e-Performance,<br />\r\nb. Penilaian Kinerja Individu melalui pengisian jurnal harian dengan menggunakan aplikasi Simpeg Terbaru</p>',NULL,6,'2019-03-12 03:26:53',NULL),
(17,'b. Apakah operasionalisasi\r\nmanajemen SDM sudah\r\nmenggunakan teknologi\r\ninformasi ?\r\n','<p>Operasionalisasi manajemen SDM sudah menggunakan aplikasi Simpeg Terbaru.</p>',NULL,6,'2019-03-12 03:27:42',NULL),
(18,'c. Apakah pemberian\r\npelayanan kepada publik\r\nsudah menggunakan\r\nteknologi informasi ?\r\n','<p>a. Penggunaan Tehnologi lnformasi dalam memberikan Pelayanan kepada masyarakat yang bertujuan untuk lebih memudahkan masyarakat dalam menerima layanan,</p>\r\n\r\n<p>b. Memiliki Website yang memudahkan masyarakat dalam memperoleh lnformasi,</p>\r\n\r\n<p>c. Memiliki aplikasi layanan:</p>\r\n\r\n<p>Contoh: Aplikasi layanan: AHU, KI, Imigrasi, Pemasyarakatan, dll</p>\r\n\r\n<p>d. Memiliki Media Sosial seperti facebook. Twitter, lnstagram, Google+, dll</p>\r\n\r\n<p>&nbsp;</p>',NULL,6,'2019-03-12 03:29:41',NULL),
(19,'d. Apakah telah dilakukan\r\nmonitoring dan evaluasi\r\nterhadap pemanfaatan\r\nteknologi informasi dalam\r\npengukuran kinerja unit,\r\noperasionalisasi SDM, dan\r\npemberian layanan kepada\r\npublik?\r\n','<p>a. Melakukan rapat bulanan Monitoring dan Evaluasi terhadap pemanfaatan teknologi informasi dalam pengukuran kinerja unit, operasionalisasi SDM, dan pemberian layanan kepada publik,</p>\r\n\r\n<p>b. Menyusun laporan Monitoring dan Evaluasi.</p>\r\n\r\n<p>&nbsp;</p>',NULL,6,'2019-03-12 03:36:53',NULL),
(20,'a. Kebijakan tentang\r\nketerbukaan informasi\r\npublik telah diterapkan.','<p>a. Menyiapkan ketersediaan informasi dengan berbagai infrastruktur dan konten yang memadai, disertai dengan sikap keterbukaan dan mekanisme serta prosedur yang memadai (memiliki Website yang mudah diakses),</p>\r\n\r\n<p>b. Penerapan keterbukaan informasi publik (persyaratan, alur, waktu, dan biaya) melalui Spanduk, Banner, Website dan Media Sosial.</p>\r\n\r\n<p><strong>Contoh Website Lembaga Pemasyarakatan yang berisi konten : </strong></p>\r\n\r\n<p>1) Transparansi alokasi anggaran DIPA melalui Website,</p>\r\n\r\n<p>2) lnformasi pengurusan layanan Pemasyarakatan (remisi, PB, CB, CMB, dll),</p>\r\n\r\n<p>3) lnformasi Kegiatan-Kegiatan di Lembaga Pemasyarakatan.</p>\r\n\r\n<p>&nbsp;</p>',NULL,7,'2019-03-12 03:38:15',NULL),
(21,'b. Melakukan monitoring dan\r\nevaluasi pelaksanaan\r\nkebijakan keterbukaan informasi publik','<p>a. Melakukan rapat monitoring dan evaluasi pelaksanaan kebijakan keterbukaan informasi publik,</p>\r\n\r\n<p>b. Menyusun laporan Monitoring dan Evaluasi.</p>\r\n\r\n<p>&nbsp;</p>',NULL,7,'2019-03-12 03:40:09',NULL),
(22,'a. Apakah kebutuhan pegawai yang disusun oleh unit kerja mengacu kepada peta jabatan dan hasil analisis beban kerja untuk masing-masing jabatan?','<p>a. UPT melaksanakan rapat kebutuhan pegawai berdasarkan peta jabatan dan analisis beban kerja, UPT menyampaikan kebutuhan pegawai tersebut ke Kantor wilayah untuk pengisian kebutuhan pegawai dilingkungannya,</p>\r\n\r\n<p>b. Kanwil melaksanakan rapat kebutuhan pegawai berdasarkan peta jabatan dan analisis beban kerja usulan dari UPT dan kebutuhan kanwil sendiri, selanjutnya Kanwil mengusulkan kebutuhan pegawai ke Biro Kepegawaian, Setjen,</p>\r\n\r\n<p>c. Biro Kepegawaian dan Sekretaris Unit Eselon I melaksanakan rapat kebutuhan pegawai. berdasarkan peta jabatan dan analisis beban kerja berdasarkan usulan dari Kantor Wilayah.</p>',NULL,8,'2019-03-14 01:35:00',NULL),
(23,'b. Apakah penempatan pegawai hasil rekrutmen murni mengacu kepada kebutuhan pegawai yang telah disusun perjabatan ?','<p>a. Biro Kepegawaian menerbitkan SK penempatan pegawai berdasarkan persetujuan dari MenPAN dan BKN, serta berdasarkan usulan kebutuhan pegawai dari masing-masing Kanwil,</p>\r\n\r\n<p>b. Kanwil menempatkan pegawai hasil rekrutmen berdasarkan formasi dan usulan yang telah disetujui dari MenPAN dan BKN ke UPT,</p>\r\n\r\n<p>c. UPT membuat surat perintah melaksanakan tugas (SPMT) sesuai dengan SK penempatannya.</p>',NULL,8,'2019-03-14 01:37:49',NULL),
(24,'c. Apakah telah dilakukan monitoring dan evaluasi terhadap penempatan pegawai rekrutmen untuk memenuhi kebutuhan jabatan dalam organisasi telah memberikan perbaikan terhadap kinerja unit kerja ?','<p>a. Melaksanakan monitoring dan evaluasi tentang penempatan pegawai terhadap kinerja unit,<br />\r\nb. Membuat laporan hasil monitoring dan evaluasi tentang penempatan pegawai terhadap kinerja unit.</p>',NULL,8,'2019-08-26 03:26:33',NULL),
(25,'a. Dalam melakukan pengembangan karier pegawai, apakah telah dilakukan mutasi pegawai antar jabatan ?','<p>a. UPT melakukan rapat pimpinan dalam rangka mutasi/rotasi antar jabatan Fungsional Umum (JFU),<br />\r\nb. Kanwil melaksanakan rapat Tim Penilai Kinerja dalam rangka mutasi/rotasi antar jabatan di lingkungan Kanwil yang menjadi kewenangannya,<br />\r\nc. Biro Kepegawaian melaksanakan rapat Tim Penilai Kinerja dalam rangka mutasi/rotasi antar jabatan di lingkungan Kementerian Hukum dan HAM.</p>',NULL,9,'2019-08-26 03:27:07',NULL),
(26,'b. Apakah dalam melakukan mutasi pegawai antar jabatan telah memperhatikan kompetensi jabatan dan mengikuti pola mutasi yang telah ditetapkan?','<p>a. UPT melakukan rapat pimpinan dalam rangka mutasi/rotasi antar jabatan Fungsional Umum (JFU),<br />\r\nb. Kanwil melaksanakan rapat Tim Penilai Kinerja dalam rangka mutasi/rotasi antar jabatan di lingkungan Kanwil dengan memperhatikan kompetensi jabatan dan mengikuti pola mutasi yang telah ditetapkan,<br />\r\nc. Biro Kepegawaian melaksanakan rapat Tim Penilai Kinerja dalam rangka mutasi/rotasi antar jabatan di lingkungan Kanwil dengan memperhatikan kompetensi jabatan dan mengikuti pola mutasi yang telah ditetapkan.</p>',NULL,9,'2019-08-26 03:27:36',NULL),
(27,'c. Apakah telah dilakukan monitoring dan evaluasi terhadap kegiatan mutasi yang telah dilakukan dalam kaitannya dengan perbaikan kinerja?','<p>a. Melaksanakan monitoring dan evaluasi terhadap kegiatan mutasi yang telah dilakukan dalam kaitannya dengan perbaikan kinerja,<br />\r\nb. Membuat laporan hasil monitoring dan evaluasi terhadap kegiatan mutasi yang telah dilakukan dalam kaitannya dengan perbaikan kinerja.</p>',NULL,9,'2019-08-26 03:28:19',NULL),
(28,'a. Apakah Unit Kerja melakukan Training Need Analysis Untuk pengembangan kompetensi?','<p>Training Need Analysis (TNA) atau analisis kebutuhan diklat adalah proses kegiatan yang bertujuan untuk mengidentifikasi dan menentukan adanya kesenjangan kompetensi (pengetahuan, keterampilan dan sikap) yang dapat ditingkatkan melalui pendidikan dan pelatihan.<br />\r\na. Satuan Kerja melaksanakan rapat penyusunan analisis kebutuhan diklat (Training Need Analysis) untuk pengembangan kompetensi.<br />\r\nb. Kanwil melaksanakan rapat penyusunan analisis kebutuhan diklat (Training Need Analysis) untuk pengembangan kompetensi di wilayahnya,<br />\r\nc. BPSDM melaksanakan rapat penyusunan analisis kebutuhan diklat (Training Need Analysis) untuk pengembangan kompetensi di lingkungan Kemenkumham.</p>',NULL,10,'2019-08-26 03:29:25',NULL),
(29,'b. Dalam menyusun rencana pengembangan kompetensi pegawai, apakah mempertimbangkan hasil pengelolaan kinerja pegawai ?','<p>Menyusun rencana pengembangan kompetensi pegawai berdasarkan hasil penilaian Sasaran Kinerja Pegawai (SKP)</p>',NULL,10,'2019-08-26 03:29:56',NULL),
(30,'c. Persentase kesenjangan kompetensi pegawai yang ada dengan standar kompetensi yang ditetapkan untuk masing-masing jabatan.','<p>Melakukan pemetaan persentase kesenjangan kompetensi pegawai yang ada dengan standar kompetensi yang ditetapkan untuk masing-masing jabatan.</p>',NULL,10,'2019-08-26 03:30:15',NULL),
(31,'d. Pegawai di Unit Kerja telah memperoleh kesempatan/hak untuk mengikuti diklat maupun pengembangan kompetensi lainnya.','<p>a. BPSDM membuat surat edaran Diklat maupun pengembangan kompetensi pegawai ke seluruh Unit Eselon I dan Kantor wilayah,<br />\r\nb. Kanwil menginformasikan surat edaran BPSDM tersebut ke seluruh pegawai di wilayahnya,<br />\r\nc. Satuan Kerja menginformasikan surat edaran BPSDM tersebut ke seluruh pegawai.</p>',NULL,10,'2019-08-26 03:30:31',NULL),
(32,'e. Dalam pelaksanaan pengembangan kompetensi, apakah unit kerja melakukan upaya pengembangan kompetensi kepada pegawai (dapat melalui pengikutsertaan pada lembaga pelatihan, in-house training, atau melalui coaching, atau mentoring, dll)?','<p>a. Satuan Kerja menyelenggarakan/mengusulkan pegawai dalam pelaksanaan pengembangan kompetensi, melakukan upaya pengembangan kompetensi kepada pegawai (dapat melalui pengikutsertaan pada lembaga pelatihan, in-house training, atau melalui coaching, atau mentoring, dll),<br />\r\nb. Kanwil menyelenggarakan/mengusulkan pegawai dalam pelaksanaan pengembangan kompetensi, melakukan upaya pengembangan kompetensi kepada pegawai (dapat melalui pengikutsertaan pada lembaga pelatihan, in-house training, atau melalui coaching, atau mentoring, dll),<br />\r\nc. BPSDM, Biro Kepegawaian dan Sekretariat Unit Eselon I menyelenggarakan/mengusulkan pegawai dalam pelaksanaan pengembangan kompetensi, melakukan upaya pengembangan kompetensi kepada pegawai (dapat melalui pengikutsertaan pada lembaga pelatihan, in-house training, atau melalui coaching, atau mentoring, dll).</p>',NULL,10,'2019-08-26 03:32:21',NULL),
(33,'f. Apakah telah dilakukan monitoring dan evaluasi terhadap hasil pengembangan kompetensi dalam kaitannya dengan perbaikan kinerja?','<p>a. Melaksanakan monitoring dan evaluasi terhadap hasil pengembangan kompetensi dalam kaitannya dengan perbaikan kinerja.<br />\r\nb. Membuat laporan hasil monitoring dan evaluasi terhadap hasil pengembangan kompetensi dalam kaitannya dengan perbaikan kinerja.</p>',NULL,10,'2019-08-26 03:33:03',NULL),
(34,'a. Terdapat penetapan kinerja individu yang terkait dengan kinerja organisasi.','<p>a. Menetapkan Sasaran Kinerja Pegawai (SKP) pada awal tahun melalui aplikasi Simpeg Terbaru,<br />\r\nb. Menetapkan Kinerja Unit (Perjanjian Kinerja-PK) pada awal tahun melalui aplikasi E-Performance.</p>',NULL,11,'2019-08-26 03:33:38',NULL),
(35,'b. Ukuran kinerja individu telah memiliki kesesuaian dengan indikator kinerja individu level di atasnya.','<p>Menyiapkan laporan kompilasi SKP melalui aplikasi Simpeg Terbaru yang telah disahkan secara berjenjang.</p>',NULL,11,'2019-08-26 03:33:51',NULL),
(36,'c. Pengukuran kinerja individu dilakukan secara periodik.','<p>Melakukan pengukuran kinerja individu secara berkala setiap bulan.</p>',NULL,11,'2019-08-26 03:37:16',NULL),
(37,'d. Hasil penilaian kinerja individu telah dijadikan dasar untuk pemberian reward (pengembangan karir individu, penghargaan, dll).','<p>a. Mengadakan rapat pemberian reward (penghargaan pegawai teladan) berdasarkan hasil penilaian kinerja individu,<br />\r\nb. Membuat Surat Keputusan pemberian reward (penghargaan pegawai teladan) berdasarkan hasil penilaian kinerja individu.</p>',NULL,11,'2019-08-26 03:37:02',NULL),
(38,'Aturan disiplin/kode etik/kode perilaku telah dilaksanakan/diimplementasikan.','<p>a. Melakukan sosialisasi aturan disiplin/kode etik/kode perilaku,<br />\r\nb. Penerapan kewajiban pelaksanaan disiplin (berpakaian dinas, ketepatan jam kerja, apel pagi/sore),<br />\r\nc. Penegakan hukuman disiplin atas pelanggaran aturan disiplin/kode etik/kode perilaku.</p>',NULL,12,'2019-08-26 03:37:53',NULL),
(39,'Data informasi kepegawaian unit kerja telah dimutakhirkan secara berkala.','<p>a. Membuat laporan hasil pemutahiran data pegawai secara bulanan melalui aplikasi Simpeg terbaru,<br />\r\nb. Update data secara mandiri oleh setiap pegawai,<br />\r\nc. Pindah data jabatan oleh setiap pegawai,<br />\r\nd. Integrasi Simpeg dengan SAPK BKN terkait pemutakhiran data KPO dan PPO,<br />\r\ne. Integrasi Simpeg dengan Taspen terkait pemutakhiran data pegawai purna tugas dan data taspen dalam Simpeg terbaru.</p>',NULL,13,'2019-08-26 03:38:15',NULL),
(40,'a. Apakah pimpinan terlibat secara langsung pada saat penyusunan Perencanaan','<p>Melaksanakan rapat penyusunan Rencana Kinerja Tahunan (RKT) atau Renja, perencanaan kegiatan dan anggaran yang dipimpin oleh kepala Satuan Kerja.</p>',NULL,14,'2019-08-26 03:42:09',NULL),
(41,'b. Apakah pimpinan terlibat secara langsung pada saat penyusunan Penetapan Kinerja','<p>Melaksanakan rapat penyusunan penetapan kinerja yang dipimpin oleh kepala Satuan Kerja</p>',NULL,14,'2019-08-26 03:43:37',NULL),
(42,'c. Apakah pimpinan memantau pencapaian kinerja secara berkala','<p>Melaksanakan rapat pemantauan pencapaian kinerja perbulan dipimpin oleh kepala Satuan Kerja.</p>',NULL,14,'2019-08-26 03:44:43',NULL),
(43,'a. Apakah dokumen perencanaan sudah ada?','<p>Memiliki dokumen perencanaan (Rencana Strategis, rencana kerja tahunan dan penetapan kinerja).</p>',NULL,15,'2019-08-26 03:45:22',NULL),
(44,'b. Apakah dokumen perencanaan telah berorientasi hasil?','<p>a. Membuat turunan Renja yang mendukung peningkatan pelayanan publik:<br />\r\n1) Menyusun standar pelayanan;<br />\r\n2) Menyusun SOP pelayanan;<br />\r\n3) Pelatihan pelayanan budaya prima;<br />\r\n4) Melakukan survey kepuasan masyarakat terhadap pelayanan.</p>\r\n\r\n<p><br />\r\nb. Membuat turunan Renja yang mendukung kegiatan anti korupsi:<br />\r\n1) Melakukan kampanye pengendalian gratifikasi,<br />\r\n2) Membangun SPIP,<br />\r\n3) Penanganan pengaduan masyarakat,<br />\r\n4) Penerapan Whistle Blowing System (WBS).</p>',NULL,15,'2019-08-26 03:45:56',NULL),
(45,'c. Apakah terdapat Indikator Kinerja Utama (IKU)?','<p>a. Memiliki Indikator Kinerja Utama (IKU) yang ditetapkan organisasi,<br />\r\nb. Membuat IKU tambahan yang sesuai dengan karakteristik unit kerja yang mendukung peningkatan pelayanan publik dan kegiatan anti&nbsp;korupsi.</p>',NULL,15,'2019-08-26 03:47:39',NULL),
(46,'d. Apakah indikator kinerja telah SMART (Specific, Measurable, Achievable, Realistic, Timely)?','<p>a. Memiliki IKU tambahan yang SMART,<br />\r\nb. IKU yang dibuat harus spesifik (pelayanan publik dan anti korupsi), terukur, dapat dicapai, realistis, dan dengan waktu yang jelas.</p>',NULL,15,'2019-08-26 03:48:35',NULL),
(47,'e. Apakah laporan kinerja telah disusun tepat waktu?','<p>a. Menyusun laporan kinerja LKj (Laporan Kinerja) dengan tepat waktu,<br />\r\nb. Laporan Kinerja LKj (Laporan Kinerja) UPT telah dikirim ke Kanwil tepat waktu (bulan Januari tahun berikutnya),<br />\r\nc. Laporan Kinerja LKIP LKj (Laporan Kinerja) Kanwil telah dikirim ke Biro Perencanaan tepat waktu (bulan Januari tahun berikutnya),<br />\r\nd. Laporan Kinerja LKIP Unit Eselon I telah dikirim ke Biro Perencanaan tepat waktu (bulan Januari tahun berikutnya).</p>',NULL,15,'2019-08-26 03:49:32',NULL),
(48,'f. Apakah pelaporan kinerja telah memberikan informasi tentang kinerja?','<p>Laporan Kinerja telah memberikan informasi tentang kinerja melalui presentase kenaikan capaian kinerja.</p>',NULL,15,'2019-08-26 03:49:44',NULL),
(49,'g. Apakah terdapat upaya peningkatan kapasitas SDM yang menangani akuntabilitas kinerja?','<p>a. Biro Perencanaan dan Kanwil melakukan upaya peningkatan kapasitas SDM yang menangani akuntabilitas kinerja dengan mengadakan kegiatan bimtek dan sosialisasi terkait dengan penyusunan LKIP,<br />\r\nb. Kanwil dan UPT mengusulkan pegawai untuk mengikuti kegiatan bimtek dan sosialisasi terkait dengan penyusunan LKIP.</p>',NULL,15,'2019-08-26 03:50:48',NULL),
(50,'h. Pengelolaan akuntabilitas kinerja dilaksanakan oleh SDM yang kompeten.','<p>a. Menempatkan anggota yang memiliki kompetensi pada bidang Pengelolaan akuntabilitas,<br />\r\nb. Personel Pengelolaan Akuntabilitas telah memiliki sertifikat atau bukti mengikuti bimtek/ sosialisasi.</p>',NULL,15,'2019-08-26 03:51:30',NULL),
(51,'a. Telah dilakukan public campaign tentang pengendalian gratifikasi.','<p>Melaksanakan public campaign di lokasi pelayanan melalui pemasangan Spanduk dan banner larangan gratifikasi.</p>',NULL,16,'2019-08-26 03:52:00',NULL),
(52,'b. Pengendalian gratifikasi telah diimplementasikan.','<p>Membentuk Unit Pengendali Gratifikasi (UPG),</p>',NULL,16,'2019-08-26 03:52:18',NULL),
(53,'a. Telah dibangun lingkungan pengendalian.','<p>a. Membentuk Tim SPIP,<br />\r\nb. Melakukan sosialisasi SPIP,<br />\r\nc. Melaksanakan Pengawasan dan Monitoring pada pelayanan.</p>',NULL,17,'2019-08-26 03:53:08',NULL),
(54,'b. Telah dilakukan penilaian risiko atas pelaksanaan kebijakan.','<p>a. Melakukan identifikasi resiko yang dituangkan dengan bentuk matrik;<br />\r\nb. Melakukan analisis resiko (scoring/penilaian resiko) terhadap faktor kemungkinan dan faktor dampak.</p>',NULL,17,'2019-08-26 03:53:27',NULL),
(55,'c. Telah dilakukan kegiatan pengendalian untuk meminimalisir risiko yang telah diidentifikasi.','<p>Melaksanakan kegiatan pengendalian resiko yang telah diidentifikasi dan inovasinya.</p>',NULL,17,'2019-08-26 03:53:43',NULL),
(56,'d. SPI telah diinformasikan dan dikomunikasikan kepada seluruh pihak terkait.','<p>Sosialisasi SPIP kepada pegawai melalui apel pagi/sore atau bimtek atau sosialisasi.</p>',NULL,17,'2019-08-26 03:54:13',NULL),
(57,'a. Kebijakan Pengaduan masyarakat telah diimplementasikan.','<p>a. Menunjuk petugas Penanganan Pengaduan,<br />\r\nb. Menyediakan petugas/ruang/loket/kotak khusus pengaduan,<br />\r\nc. Menyediakan sarana informasi penyampaian pengaduan (spanduk, banner, leaflet, dll),<br />\r\nd. Pengelolaan Pengaduan melalui Media:<br />\r\nWEB, Facebook, Twitter, Instagram, WA, Line dan E-Lapor</p>',NULL,18,'2019-08-26 03:59:51',NULL),
(58,'b. Hasil penanganan pengaduan masyarakat telah ditindaklanjuti.','<p>Petugas penanganan pengaduan:<br />\r\na. Merespon pengaduan masyarakat,<br />\r\nb. Meneruskan pengaduan masyarakat kepada bagian terkait untuk ditindaklanjuti.</p>',NULL,18,'2019-08-26 04:00:02',NULL),
(59,'c. Telah dilakukan monitoring dan evaluasi atas penanganan pengaduan masyarakat.','<p>a. Melakukan monitoring dan evaluasi terhadap pengaduan masyarakat setiap bulan,<br />\r\nb. Menyampaikan hasil monitoring dan evaluasi kepada Bagian terkait.</p>',NULL,18,'2019-08-26 04:00:25',NULL),
(60,'d. Hasil evaluasi atas penanganan pengaduan masyarakat telah ditindaklanjuti.','<p>Melakukan perbaikan layanan sebagai tindak lanjut dari hasil monitoring dan evaluasi pengaduan masyarakat.</p>',NULL,18,'2019-08-26 04:00:36',NULL),
(61,'a. Apakah Whistle Blowing System sudah di-internalisasi ?','<p>Melakukan internalisasi tentang Whistle-Blowing System pada seluruh pegawai melalui apel pagi/sore atau bimtek atau sosialisasi</p>',NULL,19,'2019-08-26 04:00:52',NULL),
(62,'b. Whistle Blowing System telah diterapkan.','<p>Menerapkan aplikasi Whistle Blowing System.</p>',NULL,19,'2019-08-26 04:01:05',NULL),
(63,'c. Telah dilakukan evaluasi atas penerapan Whistle Blowing System.','<p>Menyediakan laporan hasil evaluasi penerapan WBS dari Itjen.</p>',NULL,19,'2019-08-26 04:01:41',NULL),
(64,'d. Hasil evaluasi atas penerapan Whistle Blowing System telah ditindaklanjuti.','<p>Menyediakan tindak lanjut hasil evaluasi penerapan WBS dari Itjen.</p>',NULL,19,'2019-08-26 04:01:59',NULL),
(65,'a. Telah terdapat identifikasi/pemetaan benturan kepentingan dalam tugas fungsi utama.','<p>Melakukan identifikasi/pemetaan benturan kepentingan dalam tugas fungsi utama.</p>',NULL,20,'2019-08-26 04:02:08',NULL),
(66,'b. Penanganan Benturan Kepentingan telah disosialisasikan/internalisasi.','<p>Melakukan internalisasi Penanganan Benturan Kepentingan melalui apel pagi/sore atau bimtek atau sosialisasi.</p>',NULL,20,'2019-08-26 04:02:19',NULL),
(67,'c. Penanganan Benturan Kepentingan telah diimplementasikan.','<p>Menerapkan penempatan pegawai pada jabatan tertentu tanpa konflik kepentingan dengan tugasnya disertai surat pernyataan bebas dari benturan kepentingan.</p>',NULL,20,'2019-08-26 04:02:29',NULL),
(68,'d. Telah dilakukan evaluasi atas Penanganan Benturan Kepentingan.','<p>Menyediakan laporan hasil evaluasi atas Penanganan Benturan Kepentingan.</p>',NULL,20,'2019-08-26 04:02:38',NULL),
(69,'e. Hasil evaluasi atas Penanganan Benturan Kepentingan telah ditindaklanjuti.','<p>Melakukan evaluasi atas Penanganan Benturan Kepentingan telah ditindaklanjuti.</p>',NULL,20,'2019-08-26 04:02:46',NULL),
(70,'a. Terdapat kebijakan standar pelayanan.','<p>Menyusun Standar Pelayanan Sesuai dengan Peraturan Menteri PANRB Nomor 15 tahun 2014 tentang Standart Pelayanan yang berisi:<br />\r\na. Persyaratan,<br />\r\nb. Sistem Mekanisme dan Prosedur,<br />\r\nc. Jangka Waktu Pelayanan,<br />\r\nd. Biaya / Tarif,<br />\r\ne. Produk Layanan,<br />\r\nf. Penanganan pengaduan, saran dan masukan/apresiasi,<br />\r\ng. Dasar Hukum,<br />\r\nh. Sarana prasarana dan fasilitas,<br />\r\ni. Kompetensi pelaksanaan,<br />\r\nj. Pengawasan Internal,<br />\r\nk. Jumlah pelaksanaan,<br />\r\nl. Jaminan Pelayanan,<br />\r\nm. Jaminan Keamanan dan Keselamatan Pelayanan,<br />\r\nn. Evaluasi Kinerja Pelayanan.</p>',NULL,21,'2019-08-26 04:03:06',NULL),
(71,'b. Standar pelayanan telah dimaklumatkan','<p>a. Membuat Maklumat Standar Pelayanan,<br />\r\nb. Melakukan pemasangan maklumat standar pelayan di tempat pelayanan</p>',NULL,21,'2019-08-26 04:04:56',NULL),
(72,'c. Terdapat SOP bagi pelaksanaan standar pelayanan.','<p>Membuat SOP Pelayanan berdasarkan SOP yang telah ditetapkan oleh pusat</p>',NULL,21,'2019-08-26 04:05:08',NULL),
(73,'d. Dilakukan reviu dan perbaikan atas standar pelayanan dan SOP.','<p>Melaksanakan reviu dan perbaikan atas standar pelayanan dan SOP</p>',NULL,21,'2019-08-26 04:05:22',NULL),
(74,'a. Telah dilakukan sosialisasi/pelatihan dalam upaya penerapan Budaya Pelayanan Prima.','<p>Melakukan sosialisasi atau pelatihan dalam upaya penerapan budaya pelayanan prima;</p>',NULL,22,'2019-08-26 04:05:55',NULL),
(75,'b. Informasi tentang pelayanan mudah diakses melalui berbagai media.','<p>Menyediakan informasi yang dapat diakses melalui berbagai media. Misalnya papan pengumuman, website, media social, media cetak, media televisi, radio, dan lain sebagainya</p>',NULL,22,'2019-08-26 04:06:20',NULL),
(76,'c. Telah terdapat sistem punishment (sanksi)/reward bagi pelaksana layanan serta pemberian kompensasi kepada penerima layanan bila layanan tidak sesuai standar.','<p>Menyediakan sistem reward and punishment bagi pelaksana layanan serta pemberian kompensasi kepada penerima layanan apabila layanan tidak sesuai standar.</p>',NULL,22,'2019-08-26 04:06:51',NULL),
(77,'d. Telah terdapat sarana layanan terpadu/terintegrasi.','<p>a. Menyediakan layanan terpadu (pembayaran layanan melalui Simponi, Layanan terpadu AHU di Cikini),<br />\r\nb. Menyediakan Layanan Terpadu Satu Pintu (LTSP)</p>',NULL,22,'2019-08-26 04:07:13',NULL),
(78,'e. Terdapat inovasi pelayanan','<p>Melakukan inovasi pada pelayanan</p>',NULL,22,'2019-08-26 04:07:23',NULL),
(79,'a. Dilakukan survei kepuasan masyarakat terhadap pelayanan.','<p>Melakukan survey kepuasan masyarakat terhadap pelayanan secara berkala (6 bulan).</p>',NULL,23,'2019-08-26 04:07:34',NULL),
(80,'b. Hasil survei kepuasan masyarakat dapat diakses secara terbuka.','<p>Hasil survei dipublikasikan kepada masyarakat melalui : Website, Media sosial, Banner/spanduk;</p>',NULL,23,'2019-08-26 04:07:51',NULL),
(81,'c. Dilakukan tindak lanjut atas hasil survei kepuasan masyarakat.','<p>Melakukan perbaikan pelayanan sebagai tindak lanjut hasil dari survey kepuasan masyarakat</p>',NULL,23,'2019-08-26 04:08:05',NULL);

/*Table structure for table `data_dukung` */

DROP TABLE IF EXISTS `data_dukung`;

CREATE TABLE `data_dukung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text,
  `id_abcsoal` int(11) DEFAULT NULL,
  `id_divisi` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `path` varchar(500) DEFAULT NULL,
  `namafiledakung` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=190 DEFAULT CHARSET=latin1;

/*Data for the table `data_dukung` */

insert  into `data_dukung`(`id`,`nama`,`id_abcsoal`,`id_divisi`,`updated_at`,`created_at`,`path`,`namafiledakung`) values 
(1,'<p>SK Tim Kerja Pembangunan ZI Menuju WBK/ WBBM pada Satker</p>',1,NULL,'2019-08-27 07:45:44','2019-08-27 07:45:44','dakung/1.pdf','1.pdf'),
(2,'<p>a. Undangan rapat dan daftar hadir pembentukan Tim Kerja,</p>',2,NULL,'2019-08-27 07:46:13','2019-08-27 07:46:13','dakung/2.pdf','2.pdf'),
(3,'<p>b. Notulensi rapat penentuan Tim kerja,</p>',2,NULL,'2019-08-27 07:46:28','2019-08-27 07:46:28','dakung/3.pdf','3.pdf'),
(4,'<p>c. Berita acara dan laporan pelaksanaan seleksi anggota Tim Kerja,</p>',2,NULL,'2019-08-27 07:46:44','2019-08-27 07:46:44','dakung/4.pdf','4.pdf'),
(5,'<p>d. Riwayat Hidup dan rekam jejak anggota Tim&nbsp;Rekomendasi Irjen/Kakanwil,</p>',2,NULL,'2019-08-27 07:47:01','2019-08-27 07:47:01','dakung/5.pdf','5.pdf'),
(6,'<p>e. Untuk Satuan Kerja, rekomendasi dari Kepala Kantor Wilayah,</p>',2,NULL,'2019-08-27 07:47:12','2019-08-27 07:47:12','dakung/6.pdf','6.pdf'),
(7,'<p>f. Untuk Unit Eselon I, rekomendasi dari Inspektur Jenderal</p>',2,NULL,'2019-08-27 07:47:20','2019-08-27 07:47:20','dakung/7.pdf','7.pdf'),
(8,'<p>g. Dokumentasi Foto.</p>',2,NULL,'2019-08-27 07:47:25','2019-08-27 07:47:25','dakung/8.pdf','8.pdf'),
(9,'<p>a. Undangan, absensi, foto, dokumen rencana aksi. Laporan kegiatan penyusunan rencana aksi ZI,</p>',3,NULL,'2019-08-27 07:48:12','2019-08-27 07:48:12','dakung/9.pdf','9.pdf'),
(10,'<p>b. Dokumen Rencana Kerja Pembangunan ZI menuju WBK/ WBBM satuan kerja yang ditandatangani oleh Kepala Satuan Kerja melalui Surat Keputusan,</p>',3,NULL,'2019-08-27 07:48:30','2019-08-27 07:48:30','dakung/10.pdf','10.pdf'),
(11,'<p>c. Dokumen Kegiatan Penetapan Rencana Kerja (Undangan Rapat, Notulen, Daftar Hadir, Foto, dokumen rencana aksi. Laporan kegiatan penyusunan rencana aksi ZI).</p>',3,NULL,'2019-08-27 07:48:39','2019-08-27 07:48:39','dakung/11.pdf','11.pdf'),
(12,'<p>a. Dokumen rencana aksi yang berisi paket prioritas,</p>',4,NULL,'2019-08-27 07:51:11','2019-08-27 07:51:11','dakung/12.pdf','12.pdf'),
(13,'<p>b. Dokumen laporan pelaksanaan kegiatan penyusunan target prioritas pembangunan ZI (Undangan Rapat, Notulen, Daftar Hadir, Foto, dokumen rencana aksi. Laporan kegiatan penyusunan rencana aksi ZI yang memuat target prioritas).</p>',4,NULL,'2019-08-27 07:53:20','2019-08-27 07:53:20','dakung/13.pdf','13.pdf'),
(14,'<p>a. Dokumen laporan pelaksanaan kegiatan Sosialisasi Zona Integritas kepada pegawai, yaitu:<br />\r\n1) Dokumen Kegiatan Sosialisasi Kepala Satuan Kerja Terkait dengan Pembangunan ZI menuju WBK/ WBBM (Undangan, Notulen, Daftar Hadir, Foto)<br />\r\n2) Laporan kegiatan pendampingan/ pembinaan (Undangan, Notulen, Daftar Hadir, Foto).<br />\r\n3) Capture (Banner dan spanduk)</p>',5,NULL,'2019-08-27 07:53:53','2019-08-27 07:53:53','dakung/14.pdf','14.pdf'),
(15,'<p>b. Laporan Kegiatan sosialisasi langsung kepada masyarakat (Undangan, Notulen, Daftar Hadir, Foto)</p>',5,NULL,'2019-08-27 07:54:05','2019-08-27 07:54:05','dakung/15.pdf','15.pdf'),
(16,'<p>c. Sosialisasi Kepada Masyarakat<br />\r\n- Capture Banner/spanduk/himbauan/brosur<br />\r\n- Capture Website<br />\r\n- Capture Media Sosial<br />\r\n- Capture Media elektronik<br />\r\n- Capture Media cetak<br />\r\n- Capture Media TV</p>',5,NULL,'2019-08-27 07:54:20','2019-08-27 07:54:20','dakung/16.pdf','16.pdf'),
(17,'<p>d. Dokumen laporan pelaksanaan kegiatan Pencanangan Zona Integritas, yaitu:<br />\r\n1) Kegiatan Ekternal<br />\r\nPencanangan Zona Integritas melampirkan Foto, Laporan Kegiatan dan Press release.<br />\r\n2) Kegiatan Internal<br />\r\n- Dokumen Perjanjian Kinerja<br />\r\n- Dokumen Penandatanganan Pakta Integritas antara Kepala Satuan Kerja dengan jajaran struktural dibawahnya,<br />\r\n- Dokumen Pakta Integritas Antara jajaran Struktural dalam satuan kerja dengan pegawai;</p>',5,NULL,'2019-08-27 07:54:45','2019-08-27 07:54:45','dakung/17.pdf','17.pdf'),
(18,'<p>a. Dokumen kegiatan penyusunan pelaksanaan Rencana Aksi dan Target Prioritas oleh Tim kerja (Undangan, Notulen, Daftar Hadir, Foto).</p>',6,NULL,'2019-08-27 08:33:45','2019-08-27 08:33:45','dakung/18.pdf','18.pdf'),
(19,'<p>b. Dokumen laporan kegiatan pembangunan ZI berdasarkan Rencana Aksi dan Target Prioritas yang sudah ditetapkan oleh Tim kerja;</p>',6,NULL,'2019-08-27 08:33:56','2019-08-27 08:33:56','dakung/19.pdf','19.pdf'),
(20,'<p>a. Dokumentasi kegiatan penyusunan laporan hasil monitoring dan evaluasi (Undangan, Notulen, Daftar Hadir, Foto);</p>',7,NULL,'2019-08-27 08:36:00','2019-08-27 08:36:00','dakung/20.pdf','20.pdf'),
(21,'<p>b. Dokumen laporan hasil monitoring dan evaluasi yang dilakukan setiap bulan.</p>',7,NULL,'2019-08-27 08:36:10','2019-08-27 08:36:10',NULL,NULL),
(22,'<p>a. Dokumentasi kegiatan penyusunan laporan tindak lanjut hasil monitoring dan evaluasi (Undangan, Notulen, Daftar Hadir, Foto);</p>',8,NULL,'2019-08-27 08:36:49','2019-08-27 08:36:49',NULL,NULL),
(23,'<p>b. Dokumen laporan tindak lanjut hasil monitoring dan evaluasi.</p>',8,NULL,'2019-08-27 08:36:58','2019-08-27 08:36:58',NULL,NULL),
(24,'<p>a. Absensi pimpinan Satker dan pejabat struktural (Sampling: Bulan Januari, Februari, dan Maret),</p>',9,NULL,'2019-08-27 08:39:06','2019-08-27 08:39:06',NULL,NULL),
(25,'<p>b. Dokumentasi pimpinan/pejabat struktural menjadi Pembina apel dan pembina upacara.</p>',9,NULL,'2019-08-27 08:39:23','2019-08-27 08:39:23',NULL,NULL),
(26,'<p>c. Dokumen Jurnal Harian Pimpinan dan Pejabat Struktural (Sampling: Bulan Januari, Februari, dan Maret)<br />\r\n1) Untuk satuan kerja Eselon I, daftar hadir dan&nbsp;jurnal harian yang dibutuhkan sampai kepada Jabatan Struktural Eselon I, II, dan III;<br />\r\n2) Untuk satuan kerja Eselon II, daftar hadir dan jurnal harian yang dibutuhkan sampai kepada Jabatan Struktural Eselon II dan III;<br />\r\n3) Untuk satuan kerja Eselon III, daftar hadir dan jurnal harian yang dibutuhkan sampai kepada Jabatan Struktural Eselon III dan IV.</p>',9,NULL,'2019-08-27 08:39:53','2019-08-27 08:39:53',NULL,NULL),
(27,'<p>a. SK Agen Perubahan melalui SK Kepala Satuan Kerja;</p>',10,NULL,'2019-08-27 08:48:30','2019-08-27 08:48:30',NULL,NULL),
(28,'<p>b. Dokumen pelaksanaan kegiatan penetapan Agen Perubahan (Undangan, Notulen, Daftar Hadir, Foto);</p>',10,NULL,'2019-08-27 08:48:41','2019-08-27 08:48:41',NULL,NULL),
(29,'<p>c. Riwayat Hidup dan rekam jejak agen perubahan.</p>',10,NULL,'2019-08-27 08:48:46','2019-08-27 08:48:46',NULL,NULL),
(30,'<p>a. Dokumen Laporan Pelaksanaan Kegiatan Pelatihan budaya kerja atau Tata Nilai PASTI (Kegiatan dapat dilakukan oleh internal satuan kerja. Contoh: Workshop, in House Training),</p>',11,NULL,'2019-08-27 08:49:19','2019-08-27 08:49:19',NULL,NULL),
(31,'<p>b. Dokumen laporan pelaksanaan kegiatan penerapan budaya kerja berikut dokumentasinya,</p>',11,NULL,'2019-08-27 08:49:28','2019-08-27 08:49:28',NULL,NULL),
(32,'<p>c. Dokumentasi pegawai yang menerima reward dan punishment.<br />\r\nContoh:<br />\r\n1) Penghargaan/ Piagam terhadap pegawai terbaik/ teladan atas kehadiran dan kinerja.<br />\r\n2) Punishment berupa potongan tunjangan kinerja terhadap pegawai yang tidak disiplin&nbsp;dan SK Hukdis.</p>',11,NULL,'2019-08-27 08:49:48','2019-08-27 08:49:48',NULL,NULL),
(33,'<p>a. SK Tim Kerja Pembangunan ZI menuju WBK/ WBBM satuan kerja yang melibatkan keterwakilan setiap bagian dalam struktur organisasi,</p>',12,NULL,'2019-08-27 08:49:56','2019-08-27 08:49:56',NULL,NULL),
(34,'<p>b. Dokumen pakta integritas,</p>',12,NULL,'2019-08-27 08:50:05','2019-08-27 08:50:05',NULL,NULL),
(35,'<p>c. Dokumentasi penerapan tata nilai PASTI oleh Kepala satuan kerja pada kegiatan sosialisasi, bimtek dan diklat.</p>',12,NULL,'2019-08-27 08:50:19','2019-08-27 08:50:19',NULL,NULL),
(36,'<p>d. Laporan Kegiatan yang melibatkan seluruh pegawai satuan kerja,</p>\r\n\r\n<p>seperti: Jumat Olahraga, Jumat Bersih, Coffee Morning, Apel Pagi, Apel Sore. (Undangan, Daftar hadir, Notulen dan Foto)</p>',12,NULL,'2019-08-27 08:50:43','2019-08-27 08:50:43',NULL,NULL),
(37,'<p>a. Dokumen Peta Bisnis Instansi (Kementerian),</p>',13,NULL,'2019-08-28 02:29:51','2019-08-28 02:29:51',NULL,NULL),
(38,'<p>b. Dokumen SOP Pusat/Unit Eselon I,</p>',13,NULL,'2019-08-28 02:32:00','2019-08-28 02:32:00',NULL,NULL),
(39,'<p>c. Dokumen SOP (Wilayah dan UPT),</p>',13,NULL,'2019-08-28 02:32:00','2019-08-28 02:32:00',NULL,NULL),
(40,'<p>d. Dokumen SOP Inovasi (Ditetapkan oleh Ka. UPT/Satker).</p>\r\n\r\n<p>Dokumen SOP yang diterbitkan oleh satuan kerja mengacu kepada unit eselon I/ Instansi/ Kementerian dengan melakukan inovasi terkait dengan pelayanan yang dilaksanakan di satuan kerja, yaitu:</p>\r\n\r\n<ul>\r\n	<li>a. Untuk unit satuan kerja Imigrasi dan&nbsp;Pemasyarakatan melampirkan dokumen peta bisnis eselon I,</li>\r\n	<li>b. Untuk unit satuan kerja Eselon I melampirkan dokumen peta bisnis Instansi (Kementerian).</li>\r\n</ul>',13,NULL,'2019-08-28 02:35:13','2019-08-28 02:35:13',NULL,NULL),
(41,'<p>a. Kepala Satuan Kerja menerbitkan kembali SOP dari Unit Eselon I/ Kementerian dalam bentuk SK Kepala Satuan Kerja serta melakukan inovasi terkait dengan pelayanan yang dilaksanakan di satuan kerja,</p>',14,NULL,'2019-08-28 02:36:22','2019-08-28 02:36:22',NULL,NULL),
(42,'<p>b. Dokumentasi pemasangan/informasi tentang alur atau prosedur layanan.</p>',14,NULL,'2019-08-28 02:36:32','2019-08-28 02:36:32',NULL,NULL),
(43,'<p>Dokumen laporan hasil evaluasi SOP dan tindak lanjut perbaikan yang berisi:<br />\r\na. SOP sebelum perbaikan,</p>',15,NULL,'2019-08-28 02:37:21','2019-08-28 02:37:21',NULL,NULL),
(44,'<p>b. Usulan SOP perbaikan,</p>',15,NULL,'2019-08-28 02:37:28','2019-08-28 02:37:28',NULL,NULL),
(45,'<p>c. SOP hasil perbaikan.</p>',15,NULL,'2019-08-28 02:37:34','2019-08-28 02:37:34',NULL,NULL),
(46,'<p>a. Capture penggunaan teknologi/aplikasi e-Performance,</p>',16,NULL,'2019-08-28 02:39:20','2019-08-28 02:39:20',NULL,NULL),
(47,'<p>b. Capture Kinerja Pegawai dalam Simpeg terbaru.</p>\r\n\r\n<ul>\r\n	<li>1) Untuk satuan kerja Pemasyarakatan dan Imigrasi hanya melampirkan capture Penilaian Kinerja pada SIMPEG,</li>\r\n	<li>2) Untuk satuan kerja Eselon I melampirkan penilaian kinerja pada SIMPEG dan E-Performance.</li>\r\n</ul>',16,NULL,'2019-08-28 02:39:46','2019-08-28 02:39:46',NULL,NULL),
(48,'<p>Capture penggunaan teknologi/aplikasi Simpeg Terbaru.</p>',17,NULL,'2019-08-28 02:41:27','2019-08-28 02:41:27',NULL,NULL),
(49,'<p>Capture penggunaan teknologi informasi/aplikasi Layanan dan Capture web/media sosial sebagai sarana sosialisasi layanan:<br />\r\na. UPT Keimigrasian:<br />\r\n1) Capture SIMKIM Pendaftaran Paspor RI,<br />\r\n2) Capture Aplikasi Pendaftaran Paspor Online,<br />\r\n3) Capture Web/Media Sosial sebagai sarana&nbsp;layanan Keimigrasian.</p>',18,2,'2019-08-28 02:42:47','2019-08-28 02:42:47',NULL,NULL),
(50,'<p>Capture penggunaan teknologi informasi/aplikasi Layanan dan Capture web/media sosial sebagai sarana sosialisasi layanan:</p>\r\n\r\n<p>b. UPT Pemasyarakatan:<br />\r\n1) Capture layanan kunjungan berbasis TI,<br />\r\n2) Capture Remisi Online,<br />\r\n3) Capture Perolehan hak online,<br />\r\n4) Capture self service,<br />\r\n5) Capture Web/Media Sosial sebagai sarana layanan Pemasyarakatan.</p>',18,1,'2019-08-28 02:43:44','2019-08-28 02:43:44',NULL,NULL),
(51,'<p>Capture penggunaan teknologi informasi/aplikasi Layanan dan Capture web/media sosial sebagai sarana sosialisasi layanan:<br />\r\nc. Unit Eselon I :<br />\r\nCapture Layanan Pada Website masing-masing unit Eselon I, contoh:<br />\r\n1) Capture 40 Layanan pada Ditjen AHU,<br />\r\n2) Capture Layanan Pencatatan Hak Cipta pada Ditjen KI,<br />\r\n3) Capture Layanan Perpanjangan Merk pada Ditjen KI,<br />\r\n4) Capture Layanan Indikasi Geografis pada Ditjen KI,<br />\r\n5) Capture Layanan Perpanjangan Merk,<br />\r\n6) Capture Layanan VISA pada Direktorat Lalu Lintas Keimigrasian,<br />\r\n7) Capture Layanan Berbasis Aplikasi pada masing-masing unit Eselon I, misalnya:<br />\r\nCapture Aplikasi YAP (Your All Payment), yaitu aplikasi Layanan Pembayaran AHU untuk Notaris.</p>',18,4,'2019-08-28 02:44:21','2019-08-28 02:44:21',NULL,NULL),
(52,'<p>a. Dokumen kegiatan monitoring dan evaluasi terhadap pemanfaatan teknologi informasi dalam pengukuran kinerja unit, operasionalisasi SDM, dan pemberian layanan kepada publik (Undangan, Notulen, Daftar Hadir, dan Foto);</p>',19,NULL,'2019-08-28 02:46:33','2019-08-28 02:46:33',NULL,NULL),
(53,'<p>b. Dokumen laporan hasil monitoring dan evaluasi bulanan.</p>',19,NULL,'2019-08-28 02:46:43','2019-08-28 02:46:43',NULL,NULL),
(54,'<p>a. Capture DIPA melalui Website.</p>',20,NULL,'2019-08-28 02:48:19','2019-08-28 02:48:19',NULL,NULL),
(55,'<p>b. Dokumentasi publikasi layanan, seperti: Spanduk, banner, dan media sosial lainnya.<br />\r\nContoh:<br />\r\n1) Capture mekanisme informasi publik layanan (persyaratan, alur, waktu, dan biaya) di Spanduk, Banner, Website dan Media Sosial,<br />\r\n2) Capture dokumentasi kegiatan yang di tampilkan di website dan/atau media sosial.</p>',20,NULL,'2019-08-28 02:48:30','2019-08-28 02:48:30',NULL,NULL),
(56,'<p>a. Dokumentasi kegiatan monitoring dan evaluasi pelaksanaan kebijakan keterbukaan informasi publik (Undangan, Notulen, Daftar Hadir, Foto);</p>',21,NULL,'2019-08-28 02:48:59','2019-08-28 02:48:59',NULL,NULL),
(57,'<p>b. Dokumen laporan hasil monitoring dan evaluasi pelaksanaan kebijakan keterbukaan informasi publik.</p>',21,NULL,'2019-08-28 02:49:14','2019-08-28 02:49:14',NULL,NULL),
(58,'<p>a. Surat undangan, notulen rapat, daftar hadir, foto kegiatan,</p>',22,NULL,'2019-08-28 02:51:31','2019-08-28 02:51:31',NULL,NULL),
(59,'<p>b. Dokumen kebutuhan pegawai berdasarkan peta jabatan dan analisis beban kerja,</p>',22,NULL,'2019-08-28 02:51:39','2019-08-28 02:51:39',NULL,NULL),
(60,'<p>c. Dokumentasi kegiatan rapat kebutuhan pegawai berdasarkan peta jabatan dan analisis beban kerja (Undangan, Notulen, Daftar Hadir, Foto),</p>',22,NULL,'2019-08-28 02:51:45','2019-08-28 02:51:45',NULL,NULL),
(61,'<p>d. Surat usulan kebutuhan pegawai.</p>',22,NULL,'2019-08-28 02:51:51','2019-08-28 02:51:51',NULL,NULL),
(62,'<p>a. SK kolektif CPNS,</p>',23,NULL,'2019-08-28 02:52:27','2019-08-28 02:52:27',NULL,NULL),
(63,'<p>b. Surat pengantar penempatan pegawai dari Kanwil ke Satuan Kerja,</p>',23,NULL,'2019-08-28 02:52:39','2019-08-28 02:52:39',NULL,NULL),
(64,'<p>c. Surat perintah melaksanakan tugas (SPMT) dari&nbsp;Kepala Satuan Kerja,</p>',23,NULL,'2019-08-28 02:53:01','2019-08-28 02:53:01',NULL,NULL),
(65,'<p>d. Dokumen persetujuan dari MenPAN dan BKN (Data Dukung Hanya Bisa Diperoleh dari Biro Kepegawaian).</p>',23,NULL,'2019-08-28 02:53:09','2019-08-28 02:53:09',NULL,NULL),
(66,'<p>a. Dokumentasi kegiatan monitoring dan evaluasi tentang penempatan pegawai terhadap kinerja unit (Undangan, Notulen, Daftar Hadir, Foto);</p>',24,NULL,'2019-08-28 02:53:58','2019-08-28 02:53:58',NULL,NULL),
(67,'<p>b. Dokumen laporan hasil monitoring dan evaluasi tentang penempatan pegawai terhadap kinerja unit.</p>',24,NULL,'2019-08-28 02:54:08','2019-08-28 02:54:08',NULL,NULL),
(68,'<p>a. SK Menkumham tentang Pemberian Kuasa (Biro Kepegawaian),</p>',25,NULL,'2019-08-28 02:56:08','2019-08-28 02:56:08',NULL,NULL),
(69,'<p>b. SK Sekjen Kemenkumham tentang Tim Penilai Kinerja Jabatan Administrasi (Biro Kepegawaian),</p>',25,NULL,'2019-08-28 02:56:22','2019-08-28 02:56:22',NULL,NULL),
(70,'<p>c. Surat Undangan, Notula Rapat, Berita Acara Rapat, Daftar Hadir, Dokumentasi Kegiatan,</p>',25,NULL,'2019-08-28 02:56:32','2019-08-28 02:56:32',NULL,NULL),
(71,'<p>d. Surat usul mutasi/rotasi dari UPT, Kanwil dan/ atau Unit Utama,</p>',25,NULL,'2019-08-28 02:56:41','2019-08-28 02:56:41',NULL,NULL),
(72,'<p>e. Daftar Riwayat Pekerjaan/ Hidup (DRP/DRH).</p>',25,NULL,'2019-08-28 02:56:49','2019-08-28 02:56:49',NULL,NULL),
(73,'<p>a. SK Menkumham tentang Pemberian Kuasa (Biro Kepegawaian),</p>',26,NULL,'2019-08-28 02:58:04','2019-08-28 02:58:04',NULL,NULL),
(74,'<p>b. SK Sekjen Kemenkumham tentang Tim Penilai Kinerja Jabatan Administrasi (Biro Kepegawaian),</p>',26,NULL,'2019-08-28 02:58:29','2019-08-28 02:58:29',NULL,NULL),
(75,'<p>c. Surat Undangan, Notula rapat, Berita Acara Rapat, Daftar Hadir, Dokumentasi Kegiatan,</p>',26,NULL,'2019-08-28 02:58:37','2019-08-28 02:58:37',NULL,NULL),
(76,'<p>d. Surat usul mutasi/rotasi dari UPT, Kanwil dan/ atau Unit Utama,</p>',26,NULL,'2019-08-28 02:58:44','2019-08-28 02:58:44',NULL,NULL),
(77,'<p>e. Hasil Profile Assessment,</p>',26,NULL,'2019-08-28 02:58:54','2019-08-28 02:58:54',NULL,NULL),
(78,'<p>f. Daftar Riwayat Pekerjaan/ Hidup (DRP/DRH)</p>',26,NULL,'2019-08-28 02:58:58','2019-08-28 02:58:58',NULL,NULL),
(79,'<p>a. Dokumentasi kegiatan monitoring dan evaluasi tentang terhadap kegiatan mutasi yang telah dilakukan dalam kaitannya dengan perbaikan kinerja (Undangan, Notulen, Daftar Hadir, Foto);</p>',27,NULL,'2019-08-28 03:01:09','2019-08-28 03:01:09',NULL,NULL),
(80,'<p>b. Dokumen laporan hasil monitoring dan evaluasi terhadap kegiatan mutasi yang telah dilakukan dalam kaitannya dengan perbaikan kinerja.</p>',27,NULL,'2019-08-28 03:02:11','2019-08-28 03:02:11',NULL,NULL),
(81,'<p>a. Surat Permintaan peserta Diklat dari BPSDM ke Biro Kepegawaian (data di BPSDM),</p>',28,NULL,'2019-08-28 03:03:41','2019-08-28 03:03:41',NULL,NULL),
(82,'<p>b. Data peserta diklat dari Biro Kepegawaian dikirim ke BPSDM (data di Biro Kepegawaian),</p>',28,NULL,'2019-08-28 03:03:52','2019-08-28 03:03:52',NULL,NULL),
(83,'<p>c. Dokumen Training Need Analysis (TNA) Satuan kerja yang ditandatangani oleh Kepala Satuan Kerja,</p>',28,NULL,'2019-08-28 03:03:58','2019-08-28 03:03:58',NULL,NULL),
(84,'<p>d. Dokumen surat usulan Kepala Satuan Kerja kepada Kepala Kantor Wilayah/Sekretaris Jenderal perihal Training Need Analysis:<br />\r\n1) Untuk Satuan Kerja Pemasyarakatan dan Keimigrasian, melampirkan usulan kepada Kantor Wilayah,<br />\r\n2) Untuk Satuan Kerja Unit Eselon I, melampirkan usulan kepada Sekretaris Jenderal.</p>',28,NULL,'2019-08-28 03:04:07','2019-08-28 03:04:07',NULL,NULL),
(85,'<p>e. Dokumentasi kegiatan pelaksanaan Training Need Analysis (TNA) atau analisis kebutuhan diklat untuk pengembangan kompetensi pegawai&nbsp;(Undangan, Notulen, Daftar Hadir, Foto).</p>',28,NULL,'2019-08-28 03:04:26','2019-08-28 03:04:26',NULL,NULL),
(86,'<p>1. Dokumentasi kegiatan penyusunan rencana pengembangan kompetensi pegawai berdasarkan hasil penilaian Sasaran Kinerja Pegawai (SKP) (Undangan, Notulen, Daftar Hadir, Foto);</p>',29,NULL,'2019-08-28 03:05:17','2019-08-28 03:05:17',NULL,NULL),
(87,'<p>2. Dokumen rencana pengembangan kompetensi pegawai berdasarkan hasil penilaian Sasaran Kinerja Pegawai (SKP).</p>',29,NULL,'2019-08-28 03:05:22','2019-08-28 03:05:22',NULL,NULL),
(88,'<p>Capture fitur kompetensi pada aplikasi Simpeg Terbaru</p>',30,NULL,'2019-08-28 03:05:50','2019-08-28 03:05:50',NULL,NULL),
(89,'<p>a. Surat edaran kepala BPSDM dan Pedoman pelaksanaan Diklat maupun pengembangan kompetensi pegawai. (dokumen di BPSDM),</p>',31,NULL,'2019-08-28 03:06:35','2019-08-28 03:06:35',NULL,NULL),
(90,'<p>b. Surat Kanwil ke UPT tentang edaran kepala BPSDM tentang Diklat maupun pengembangan kompetensi,</p>',31,NULL,'2019-08-28 03:06:41','2019-08-28 03:06:41',NULL,NULL),
(91,'<p>c. Surat Pemanggilan Pegawai Satker untuk Mengikuti Diklat atau Pengembangan Kompetensi Lainnya dari Kanwil dan/atau BPSDM,</p>',31,NULL,'2019-08-28 03:06:48','2019-08-28 03:06:48',NULL,NULL),
(92,'<p>d. Surat Perintah Perihal Penunjukkan Pegawai Satker Untuk Mengikuti Diklat atau Pengembangan Kompetensi Lainnya,</p>',31,NULL,'2019-08-28 03:06:53','2019-08-28 03:06:53',NULL,NULL),
(93,'<p>e. Sertifikat/ Piagam Telah Mengikuti Diklat atau Pengembangan Kompetensi Lainnya,</p>',31,NULL,'2019-08-28 03:07:03','2019-08-28 03:07:03',NULL,NULL),
(94,'<p>f. Rekapitulasi Data Pegawai yang Telah Mengikuti Diklat atau Pengembangan Kompetensi Lainnya.</p>',31,NULL,'2019-08-28 03:07:10','2019-08-28 03:07:10',NULL,NULL),
(95,'<p>Dokumentasi kegiatan In House Training, Pelatihan, Mentoring yang dilakukan oleh Pegawai atau Pejabat yang Telah Mengikuti Diklat di Lingkungan Satuan Kerja itu sendiri</p>',32,NULL,'2019-08-28 03:07:17','2019-08-28 03:07:17',NULL,NULL),
(96,'<p>a. Dokumen laporan hasil monitoring dan evaluasi terhadap hasil pengembangan kompetensi dalam kaitannya dengan perbaikan kinerja,</p>',33,NULL,'2019-08-28 03:07:56','2019-08-28 03:07:56',NULL,NULL),
(97,'<p>b. Dokumen laporan evaluasi dari BPSDM (Data dari BPSDM).</p>',33,NULL,'2019-08-28 03:08:04','2019-08-28 03:08:04',NULL,NULL),
(98,'<p>a. Dokumen SKP yang disetujui dan ditandatangani oleh atasan langsung,</p>',34,NULL,'2019-08-28 03:09:38','2019-08-28 03:09:38',NULL,NULL),
(99,'<p>b. Dokumen Kinerja Unit yang disetujui dan ditandatangani oleh atasan langsung,</p>',34,NULL,'2019-08-28 03:09:53','2019-08-28 03:09:53',NULL,NULL),
(100,'<p>c. Dokumen Penetapan Kinerja yang berasal dari Aplikasi E-Performance.</p>',34,NULL,'2019-08-28 03:09:58','2019-08-28 03:09:58',NULL,NULL),
(101,'<p>Dokumen kompilasi SKP melalui aplikasi Simpeg Terbaru yang telah disahkan secara berjenjang.</p>',35,NULL,'2019-08-28 03:10:38','2019-08-28 03:10:38',NULL,NULL),
(102,'<p>Dokumen pengukuran kinerja individu per bulan yang diperoleh dari SIMPEG.</p>',36,NULL,'2019-08-28 03:11:00','2019-08-28 03:11:00',NULL,NULL),
(103,'<p>a. Dokumentasi kegiatan rapat pemberian reward (penghargaan pegawai teladan) berdasarkan hasil penilaian kinerja individu. (Undangan, Notulen, Daftar Hadir, Foto);</p>',37,NULL,'2019-08-28 03:11:36','2019-08-28 03:11:36',NULL,NULL),
(104,'<p>b. Surat keputusan pemberian reward (penghargaan pegawai teladan) berdasarkan hasil penilaian kinerja individu.</p>',37,NULL,'2019-08-28 03:11:43','2019-08-28 03:11:43',NULL,NULL),
(105,'<p>a. Permenkumham No. 23 Tahun 2015,</p>',38,NULL,'2019-08-28 03:13:02','2019-08-28 03:13:02',NULL,NULL),
(106,'<p>b. Permenkumham No. 20 Tahun 2017,</p>',38,NULL,'2019-08-28 03:13:06','2019-08-28 03:13:06',NULL,NULL),
(107,'<p>c. Dokumen sosialisasi,</p>',38,NULL,'2019-08-28 03:13:13','2019-08-28 03:13:13',NULL,NULL),
(108,'<p>d. Dokumen penerapan disiplin (foto dan absensi),</p>',38,NULL,'2019-08-28 03:13:19','2019-08-28 03:13:19',NULL,NULL),
(109,'<p>e. Dokumen penegakan hukuman disiplin atas pelanggaran aturan disiplin/kode etik/kode perilaku,</p>',38,NULL,'2019-08-28 03:13:34','2019-08-28 03:13:34',NULL,NULL),
(110,'<p>f. SK Penerbitan Sanksi Disiplin Kode Etik sesuai Permenkumham No. 20 Tahun 2017 dan Permenkumham No. 23 Tahun 2015 (Bila Ada Pelanggaran Kode Etik)<br />\r\nCatatan:<br />\r\nSatuan Kerja Keimigrasian dan Pemasyarakatan mengacu Kepada Permenkumham No. 20 Tahun 2017 tentang Kode Etik Pegawai di Lingkungan Kemenkumham RI</p>',38,NULL,'2019-08-28 03:13:51','2019-08-28 03:13:51',NULL,NULL),
(111,'<p>a. Dokumen laporan hasil pemutakhiran data pegawai secara bulanan (Diperoleh dari SIMPEG),</p>',39,NULL,'2019-08-28 03:16:55','2019-08-28 03:16:55',NULL,NULL),
(112,'<p>b. Screenshot KPO dan PPO dari SIMPEG,</p>',39,NULL,'2019-08-28 03:17:06','2019-08-28 03:17:06',NULL,NULL),
(113,'<p>c. Screenshot Taspen otomatis dari SIMPEG.</p>',39,NULL,'2019-08-28 03:17:14','2019-08-28 03:17:14',NULL,NULL),
(114,'<p>a. Dokumentasi kegiatan penyusunan Rencana Kinerja Tahunan (RKT)/Renja Satker, Perjanjian Kinerja, dan RKA K/L (Surat undangan, notulen, daftar hadir, foto kegiatan);</p>',40,NULL,'2019-08-28 03:19:55','2019-08-28 03:19:55',NULL,NULL),
(115,'<p>b. Dokumen Rencana Kinerja Tahunan (RKT)/ Renja Satker, Perjanjian Kinerja, dan RKA K/L.<br />\r\nCatatan:<br />\r\n1) Untuk unit Eselon I melampirkan dokumen dan Rencana Kinerja Tahunan (RKT)/ Renja Satker, Perjanjian Kinerja, dan RKA K/L,<br />\r\n2) Untuk Satuan kerja Pemasyarakatan dan Keimigrasian melampirkan Perjanjian Kinerja, dan RKA K/L.</p>',40,NULL,'2019-08-28 03:20:07','2019-08-28 03:20:07',NULL,NULL),
(116,'<p>a. Dokumentasi kegiatan rapat penyusunan penetapan kinerja (Surat undangan, notulen, daftar hadir, foto kegiatan);</p>',41,NULL,'2019-08-28 03:56:57','2019-08-28 03:56:57',NULL,NULL),
(117,'<p>b. Dokumen perjanjian kinerja yang sudah ditandatangani oleh pimpinan/kepala Satuan Kerja.</p>',41,NULL,'2019-08-28 03:57:04','2019-08-28 03:57:04',NULL,NULL),
(118,'<p>a. Dokumentasi kegiatan rapat pemantauan pencapaian kinerja perbulan (Surat undangan, notulen, daftar hadir, foto kegiatan);</p>',42,NULL,'2019-08-28 03:57:15','2019-08-28 03:57:15',NULL,NULL),
(119,'<p>b. Dokumen pemantauan pencapaian kinerja (monev kinerja berkala).</p>',42,NULL,'2019-08-28 03:57:20','2019-08-28 03:57:20',NULL,NULL),
(120,'<p>Dokumen Renstra, Renja dan Perjanjian Kinerja.</p>',43,NULL,'2019-08-28 03:58:09','2019-08-28 03:58:09',NULL,NULL),
(121,'<p>a. Dokumen turunan Renja yang mendukung peningkatan pelayanan publik,</p>',44,NULL,'2019-08-28 03:58:32','2019-08-28 03:58:32',NULL,NULL),
(122,'<p>b. Dokumen turunan Renja yang mendukung kegiatan anti korupsi.</p>',44,NULL,'2019-08-28 03:58:41','2019-08-28 03:58:41',NULL,NULL),
(123,'<p>a. Renstra, Renja dan Perjanjian Kinerja,</p>',45,NULL,'2019-08-28 03:59:01','2019-08-28 03:59:01',NULL,NULL),
(124,'<p>b. Dokumen IKU tambahan yang mendukung peningkatan pelayanan publik dan kegiatan anti korupsi:<br />\r\n1) Pada unit Eselon I Renstra, Renja dan&nbsp;Perjanjian Kinerja memuat IKU Tambahan yang mendukung peningkatan pelayanan publik dan kegiatan anti korupsi,<br />\r\n2) Pada Satuan Kerja Pemasyarakatan dan Keimigrasian, Perjanjian Kinerja memuat IKU Tambahan yang mendukung peningkatan pelayanan publik dan kegiatan anti korupsi</p>',45,NULL,'2019-08-28 03:59:29','2019-08-28 03:59:29',NULL,NULL),
(125,'<p>a. Dokumen IKU yang mengandung prinsip SMART (Specific, Measurable, Achievable, Realistic, Timely)</p>',46,NULL,'2019-08-28 04:00:08','2019-08-28 04:00:08',NULL,NULL),
(126,'<p>b. Dokumen IKU tambahan yang spesifik (pelayanan publik dan anti korupsi), terukur, dapat dicapai, realistis, dan dengan waktu yang jelas.</p>',46,NULL,'2019-08-28 04:00:15','2019-08-28 04:00:15',NULL,NULL),
(127,'<p>Dokumen LKj (Laporan Kinerja)</p>',47,NULL,'2019-08-28 04:00:47','2019-08-28 04:00:47',NULL,NULL),
(128,'<p>Dokumen LKj (Laporan Kinerja)</p>',48,NULL,'2019-08-28 04:01:11','2019-08-28 04:01:11',NULL,NULL),
(129,'<p>a. Dokumen laporan kegiatan bimtek dan sosialisasi terkait dengan penyusunan LKIP,</p>',49,NULL,'2019-08-28 04:01:31','2019-08-28 04:01:31',NULL,NULL),
(130,'<p>b. Dokumen usulan pegawai untuk mengikuti bimtek dan sosialisasi terkait dengan penyusunan LKIP.</p>',49,NULL,'2019-08-28 04:01:38','2019-08-28 04:01:38',NULL,NULL),
(131,'<p>a. Daftar anggota yang menangani pelaporan akuntabilitas kinerja yang telah mengikuti bimtek/sosialisasi,</p>',50,NULL,'2019-08-28 04:01:58','2019-08-28 04:01:58',NULL,NULL),
(132,'<p>b. Sertifikat atau bukti mengikuti bimtek/sosialisasi.</p>',50,NULL,'2019-08-28 04:02:03','2019-08-28 04:02:03',NULL,NULL),
(133,'<p>a. Dokumen Kegiatan Public campaign tentang pengendalian gratifikasi, (Undangan, Notulen, Daftar Hadir, Foto),</p>',51,NULL,'2019-08-28 04:12:31','2019-08-28 04:12:31',NULL,NULL),
(134,'<p>b. Capture banner/spanduk/media public campaign lainnya,</p>',51,NULL,'2019-08-28 04:12:37','2019-08-28 04:12:37',NULL,NULL),
(135,'<p>c. Laporan Kegiatan Public Campaign pada satuan kerja dilaksanakan secara berkala (Bulanan, Triwulan, Semester, dan Tahunan).</p>',51,NULL,'2019-08-28 04:12:46','2019-08-28 04:12:46',NULL,NULL),
(136,'<p>a. SK Tim UPG,</p>',52,NULL,'2019-08-28 04:13:13','2019-08-28 04:13:13',NULL,NULL),
(137,'<p>b. Laporan berkala tentang Pengendalian Gratifikasi</p>',52,NULL,'2019-08-28 04:13:18','2019-08-28 04:13:18',NULL,NULL),
(138,'<p>a. SK Tim SPIP,</p>',53,NULL,'2019-08-28 04:13:45','2019-08-28 04:13:45',NULL,NULL),
(139,'<p>b. Dokumen laporan sosialisasi SPIP,</p>',53,NULL,'2019-08-28 04:13:49','2019-08-28 04:13:49',NULL,NULL),
(140,'<p>c. Dokumentasi kegiatan Pengawasan dan Monitoring pada pelayanan (Surat undangan, notulen, daftar hadir, foto kegiatan).</p>',53,NULL,'2019-08-28 04:13:55','2019-08-28 04:13:55',NULL,NULL),
(141,'<p>d. Dokumen laporan pengawasan dan monitoring.</p>',53,NULL,'2019-08-28 04:14:01','2019-08-28 04:14:01',NULL,NULL),
(142,'<p>a. Dokumen matrik identifikasi resiko,</p>',54,NULL,'2019-08-28 04:15:03','2019-08-28 04:15:03',NULL,NULL),
(143,'<p>b. Dokumen analisis resiko.<br />\r\nCatatan:<br />\r\nFormulir Manajemen Risiko berdasarkan Permenkumham No. 5 Tahun 2018</p>',54,NULL,'2019-08-28 04:15:12','2019-08-28 04:15:12',NULL,NULL),
(144,'<p>a. Dokumentasi kegiatan pengendalian resiko yang telah diidentifikasi;</p>',55,NULL,'2019-08-28 04:15:39','2019-08-28 04:15:39',NULL,NULL),
(145,'<p>b. Dokumen laporan kegiatan pengendalian resiko yang telah diidentifikasi dan inovasinya.</p>',55,NULL,'2019-08-28 04:15:45','2019-08-28 04:15:45',NULL,NULL),
(146,'<p>a. Dokumentasi Sosialisasi SPIP kepada pegawai melalui apel pagi/sore atau bimtek atau sosialisasi (Surat undangan, notulen, daftar hadir, foto kegiatan);</p>',56,NULL,'2019-08-28 04:16:26','2019-08-28 04:16:26',NULL,NULL),
(147,'<p>b. Dokumen dan capture sosialisasi SPIP.</p>',56,NULL,'2019-08-28 04:16:32','2019-08-28 04:16:32',NULL,NULL),
(148,'<p>a. SK Petugas Penanganan Pengaduan,</p>',57,NULL,'2019-08-28 04:17:47','2019-08-28 04:17:47',NULL,NULL),
(149,'<p>b. Foto petugas/ruang/loket/kotak khusus pengaduan,</p>',57,NULL,'2019-08-28 04:17:58','2019-08-28 04:17:58',NULL,NULL),
(150,'<p>c. Foto spanduk/banner/ leaflet,</p>',57,NULL,'2019-08-28 04:18:03','2019-08-28 04:18:03',NULL,NULL),
(151,'<p>d. Capture aplikasi (aplikasi LAPOR, Facebook, Twitter, Instagram, WA, line),</p>',57,NULL,'2019-08-28 04:18:10','2019-08-28 04:18:10',NULL,NULL),
(152,'<p>e. Dokumentasi inovasi sarana dan mekanisme pengaduan masyarakat.</p>',57,NULL,'2019-08-28 04:18:16','2019-08-28 04:18:16',NULL,NULL),
(153,'<p>a. Capture respon pengaduan masyarakat,</p>',58,NULL,'2019-08-28 04:18:42','2019-08-28 04:18:42',NULL,NULL),
(154,'<p>b. Nota dinas penyampaian pengaduan masyarakat kepada bagian terkait untuk ditindaklanjuti,</p>',58,NULL,'2019-08-28 04:18:49','2019-08-28 04:18:49',NULL,NULL),
(155,'<p>c. Rekapitulasi tindak lanjut pengaduan masyarakat.</p>',58,NULL,'2019-08-28 04:18:55','2019-08-28 04:18:55',NULL,NULL),
(156,'<p>a. Laporan monitoring dan evaluasi laporan pengaduan setiap bulan,</p>',59,NULL,'2019-08-28 04:19:23','2019-08-28 04:19:23',NULL,NULL),
(157,'<p>b. Nota dinas penyampaian pengaduan masyarakat kepada bagian terkait untuk ditindaklanjuti.</p>',59,NULL,'2019-08-28 04:19:29','2019-08-28 04:19:29',NULL,NULL),
(158,'<p>Dokumen laporan perbaikan layanan sebagai tindak lanjut pengaduan masyarakat.</p>',60,NULL,'2019-08-28 04:19:52','2019-08-28 04:19:52',NULL,NULL),
(159,'<p>Dokumentasi kegiatan internalisasi WBS pada satuan kerja yang dilakukan oleh Kepala Satuan Kerja maupun oleh pihak ketiga (Undangan, Notulensi, Daftar Hadir, Foto).</p>',61,NULL,'2019-08-28 04:20:56','2019-08-28 04:20:56',NULL,NULL),
(160,'<p>Capture aplikasi Whistle Blowing System (Dokumen disajikan oleh Inspektorat Jenderal).</p>',62,NULL,'2019-08-28 04:21:37','2019-08-28 04:21:37',NULL,NULL),
(161,'<p>Laporan hasil evaluasi atas penerapan Whistle Blowing System (Dokumen disajikan oleh Inspektorat Jenderal)</p>',63,NULL,'2019-08-28 04:21:56','2019-08-28 04:21:56',NULL,NULL),
(162,'<p>Laporan tindak lanjut hasil evaluasi atas penerapan Whistl Blowing System (Dokumen disajikan oleh Inspektorat Jenderal).</p>',64,NULL,'2019-08-28 04:22:28','2019-08-28 04:22:28',NULL,NULL),
(163,'<p>a. Dokumen identifikasi/pemetaan benturan kepentingan dalam tugas fungsi utama,</p>',65,NULL,'2019-08-28 04:23:19','2019-08-28 04:23:19',NULL,NULL),
(164,'<p>b. Permenkumham Nomor 38 Tahun 2015 tentang Pedoman Penanganan Benturan Kepentingan di lingkungan Kementerian Hukum dan HAM.</p>',65,NULL,'2019-08-28 04:23:25','2019-08-28 04:23:25',NULL,NULL),
(165,'<p>Dokumen Laporan internalisasi / Sosialisasi Penanganan Benturan Kepentingan melalui apel pagi/sore atau bimtek atau sosialisasi.</p>',66,NULL,'2019-08-28 04:23:42','2019-08-28 04:23:42',NULL,NULL),
(166,'<p>Dokumen surat pernyataan bebas dari benturan kepentingan.</p>',67,NULL,'2019-08-28 04:24:00','2019-08-28 04:24:00',NULL,NULL),
(167,'<p>Dokumen Laporan hasil evaluasi atas Penanganan Benturan Kepentingan.</p>',68,NULL,'2019-08-28 04:24:48','2019-08-28 04:24:48',NULL,NULL),
(168,'<p>Dokumen laporan evaluasi atas Penanganan Benturan Kepentingan telah ditindaklanjuti.</p>',69,NULL,'2019-08-28 04:25:04','2019-08-28 04:25:04',NULL,NULL),
(169,'<p>a. Standar Pelayanan yang telah ditetapkan melalui SK Kepala Satuan Kerja serta memuat inovasi layanan yang terdapat pada satuan kerja masing-masing,</p>',70,NULL,'2019-08-28 04:26:03','2019-08-28 04:26:03',NULL,NULL),
(170,'<p>b. Dokumentasi kegiatan inovasi terhadap standar pelayanan di Satker (contoh: Foto Inovasi Layanan)</p>',70,NULL,'2019-08-28 04:26:08','2019-08-28 04:26:08',NULL,NULL),
(171,'<p>a. Piagam Maklumat Pelayanan yang ditandatangani oleh Kepala Satuan Kerja,</p>',71,NULL,'2019-08-28 04:26:31','2019-08-28 04:26:31',NULL,NULL),
(172,'<p>b. Capture Penempatan Maklumat Pelayanan pada ruang layanan dan/ atau ruang tunggu layanan</p>',71,NULL,'2019-08-28 04:26:41','2019-08-28 04:26:41',NULL,NULL),
(173,'<p>a. Dokumen Peta Bisnis Instansi (Kementerian),</p>',72,NULL,'2019-08-28 04:27:13','2019-08-28 04:27:13',NULL,NULL),
(174,'<p>b. Dokumen SOP Pusat/Unit Eselon I,</p>',72,NULL,'2019-08-28 04:27:21','2019-08-28 04:27:21',NULL,NULL),
(175,'<p>c. Dokumen SOP (Wilayah dan UPT),</p>',72,NULL,'2019-08-28 04:27:32','2019-08-28 04:27:32',NULL,NULL),
(176,'<p>d. Dokumen SOP Inovasi (Ditetapkan oleh Ka. UPT/Satker),<br />\r\nCatatan:<br />\r\nDokumen SOP yang diterbitkan oleh satuan kerja mengacu kepada unit eselon I/ Instansi/ Kementerian dengan melakukan inovasi terkait dengan pelayanan yang dilaksanakan di satuan kerja:<br />\r\n1) Untuk unit satuan kerja Imigrasi dan Pemasyarakatan melampirkan dokumen peta bisnis eselon I,<br />\r\n2) Untuk unit satuan kerja Eselon I melampirkan dokumen peta bisnis Instansi (Kementerian).</p>',72,NULL,'2019-08-28 04:28:25','2019-08-28 04:28:25',NULL,NULL),
(177,'<p>Dokumen reviu dan perbaikan atas standar pelayanan dan SOP</p>',73,NULL,'2019-08-28 04:29:16','2019-08-28 04:29:16',NULL,NULL),
(178,'<p>a. Dokumentasi sosialisasi/pelatihan budaya pelayanan prima (Kegiatan dapat dilakukan oleh internal satuan kerja. Contoh: Workshop, in House Training). (Undangan, Notulensi, Daftar Hadir, dan foto);</p>',74,NULL,'2019-08-28 04:30:45','2019-08-28 04:30:45',NULL,NULL),
(179,'<p>b. Dokumen sosialisasi/pelatihan dalam upaya penerapan Budaya Pelayanan Prima.</p>',74,NULL,'2019-08-28 04:30:52','2019-08-28 04:30:52',NULL,NULL),
(180,'<p>Dokumen Capture, papan pengumuman, website, media social, media cetak, media televisi, radio, dan lain sebagainya.</p>',75,NULL,'2019-08-28 04:31:13','2019-08-28 04:31:13',NULL,NULL),
(181,'<p>Dokumentasi Pemberian reward dan punishment pada petugas layanan<br />\r\nContoh:<br />\r\na. Penghargaan/ Piagam terhadap pegawai terbaik/ teladan atas kinerja layanan,</p>',76,NULL,'2019-08-28 04:32:54','2019-08-28 04:32:54',NULL,NULL),
(182,'<p>b. Punishment berupa teguran terhadap pegawai secara tertulis atau mutasi bagi pegawai yang tidak memberikan layanan sesuai standar layanan.</p>',76,NULL,'2019-08-28 04:33:02','2019-08-28 04:33:02',NULL,NULL),
(183,'<p>Dokumentasi foto Layanan terpadu<br />\r\na. Untuk satuan kerja keimigrasian menyajikan foto layanan permohonan Paspor RI pada saat proses wawancara dan Pengambilan sidik jari,</p>',77,NULL,'2019-08-28 04:33:37','2019-08-28 04:33:37',NULL,NULL),
(184,'<p>b. Untuk satuan kerja pemasyarakatan menyajikan capture layanan SDP yang terintegrasi dengan layanan kunjungan, pemberian PB, CB, Remisi Online,</p>',77,NULL,'2019-08-28 04:33:44','2019-08-28 04:33:44',NULL,NULL),
(185,'<p>c. Untuk satuan kerja Eselon I menyajikan capture layanan yang terintegrasi (Contoh: Layanan pendaftaran PT yang terintegrasi dengan OSS (Online Single Submission) dan Layanan Penelusuran Kekayaan Intelektual yang terintegrasi dengan database WIPO).</p>',77,NULL,'2019-08-28 04:33:50','2019-08-28 04:33:50',NULL,NULL),
(186,'<p>Dokumen dan dokumentasi inovasi pada pelayanan</p>',78,NULL,'2019-08-28 04:34:27','2019-08-28 04:34:27',NULL,NULL),
(187,'<p>Dokumen laporan survei kepuasan masyarakat terhadap pelayanan yang mengacu kepada ketentuan yang ditetapkan oleh Permen PAN RB.</p>',79,NULL,'2019-08-28 04:34:51','2019-08-28 04:34:51',NULL,NULL),
(188,'<p>Dokumen capture publikasi hasil survey melalui Website, Media sosial, Banner/spanduk;</p>',80,NULL,'2019-08-28 04:34:59','2019-08-28 04:34:59',NULL,NULL),
(189,'<p>Dokumen laporan perbaikan pelayanan sebagai tindak lanjut hasil dari survey kepuasan masyarakat</p>',81,NULL,'2019-08-28 04:35:05','2019-08-28 04:35:05',NULL,NULL);

/*Table structure for table `divisi` */

DROP TABLE IF EXISTS `divisi`;

CREATE TABLE `divisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `divisi` */

insert  into `divisi`(`id`,`nama`) values 
(1,'Pemasyarakatan'),
(2,'Imigrasi'),
(3,'Pelayanan Hukum'),
(4,'Kanwil');

/*Table structure for table `file2` */

DROP TABLE IF EXISTS `file2`;

CREATE TABLE `file2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `id_data_dukung` int(11) DEFAULT NULL,
  `ori_nama_file` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `file2` */

insert  into `file2`(`id`,`path`,`created_at`,`updated_at`,`created_by`,`updated_by`,`id_data_dukung`,`ori_nama_file`) values 
(1,'file_upload/Kantor Imigrasi Kelas II Blitar/1.jpg','2019-08-07 11:29:17','2019-08-07 11:29:18',2,NULL,1,NULL),
(2,'file_upload/Kantor Imigrasi Kelas II Blitar/1.jpg','2019-08-07 14:07:44','2019-08-07 14:07:45',2,NULL,1,NULL),
(3,'file_upload/Kantor Imigrasi Kelas II Blitar/1.jpg','2019-08-07 14:08:10','2019-08-07 14:08:11',2,NULL,1,NULL),
(4,'file_upload/Lapas Klas I Malang/1.jpg','2019-08-08 01:10:16','2019-08-08 01:10:16',5,NULL,1,NULL),
(5,'file_upload/Lapas Klas I Malang/1.jpg','2019-08-08 02:50:06','2019-08-08 02:50:06',5,NULL,1,NULL);

/*Table structure for table `files` */

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(500) DEFAULT NULL,
  `namafile` varchar(500) DEFAULT NULL,
  `ori_nama` varchar(255) DEFAULT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_datadukung` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `files` */

insert  into `files`(`id`,`path`,`namafile`,`ori_nama`,`id_transaksi`,`id_datadukung`,`created_at`,`updated_at`,`id_user`) values 
(1,'file_upload/Lapas Klas I Malang/1.pdf','1.pdf',NULL,1,1,'2019-08-20 03:34:04','2019-08-20 03:39:00',5),
(3,'file_upload/Kantor Imigrasi Kelas II Blitar/2.pdf','2.pdf',NULL,3,2,'2019-08-20 04:00:31','2019-08-20 04:00:31',2),
(6,'file_upload/Kantor Imigrasi Kelas II Blitar/8.accdb','8.accdb',NULL,5,8,'2019-08-23 09:44:31','2019-08-23 09:44:31',2),
(8,'file_upload/Kantor Imigrasi Kelas II Blitar/10.pdf','10.pdf',NULL,5,10,'2019-08-29 04:43:02','2019-08-29 04:43:02',2),
(11,'file_upload/Kantor Imigrasi Kelas II Blitar/3.pdf','3.pdf',NULL,3,3,'2019-08-29 07:00:31','2019-08-29 07:00:31',2),
(12,'file_upload/Kantor Imigrasi Kelas II Blitar/9.pdf','9.pdf',NULL,5,9,'2019-08-30 02:07:50','2019-08-30 02:07:50',2),
(13,'file_upload/Kantor Imigrasi Kelas II Blitar/1.docx','1.docx',NULL,6,1,'2019-09-03 01:20:10','2019-09-03 01:20:10',2),
(14,'file_upload/Kantor Imigrasi Kelas II Blitar/12.txt','12.txt',NULL,7,12,'2019-09-03 01:21:26','2019-09-03 01:21:26',2),
(15,'file_upload/Kantor Imigrasi Kelas II Blitar/18.txt','18.txt',NULL,8,18,'2019-09-03 01:22:55','2019-09-03 01:22:55',2);

/*Table structure for table `jawaban` */

DROP TABLE IF EXISTS `jawaban`;

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(500) DEFAULT NULL,
  `id_abcsoal` int(11) DEFAULT NULL,
  `nilai` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `jawaban` */

insert  into `jawaban`(`id`,`nama`,`id_abcsoal`,`nilai`) values 
(1,'a. Telah membentuk Tim Reformasi Birokrasi sesuai kebutuhan organisasi\n',1,NULL),
(2,'b. Telah membentuk Tim Reformasi Birokrasi namun belum sesuai kebutuhan organisasi',1,NULL),
(3,'c. Belum membentuk Tim Reformasi Birokrasi',1,NULL),
(4,'a. Seluruh tugas telah dilaksanakan oleh tim reformasi birokrasi sesuai dengan rencana kerja',2,NULL),
(5,'b. Sebagian besar telah dilaksanakan oleh tim reformasi birokrasi sesuai dengan rencana kerja',2,NULL),
(6,'c. Sebagian kecil telah dilaksanakan oleh tim reformasi birokrasi sesuai dengan rencana kerja',2,NULL),
(7,'d. Seluruh tugas belum dilaksanakan oleh tim reformasi birokrasi sesuai dengan rencana kerja',2,NULL),
(8,'a. Seluruh rencana kerja telah dimonitoring dan di evaluasi, dan hasil evaluasi telah ditindaklanjuti',3,NULL),
(9,'b. Sebagian besar rencana kerja telah dimonitoring dan di evaluasi, dan hasil evaluasi telah ditindaklanjuti',3,NULL),
(10,'c. Sebagian kecil rencana kerja telah dimonitoring dan di evaluasi, dan hasil evaluasi telah ditindaklanjuti',3,NULL),
(11,'d. Seluruh rencana kerja belum dimonitoring dan di evaluasi',3,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1);

/*Table structure for table `nomorsoal` */

DROP TABLE IF EXISTS `nomorsoal`;

CREATE TABLE `nomorsoal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(500) DEFAULT NULL,
  `id_romawisoal` int(11) DEFAULT NULL,
  `nilai` float DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `nomorsoal` */

insert  into `nomorsoal`(`id`,`nama`,`id_romawisoal`,`nilai`,`keterangan`) values 
(1,'Tim Kerja',1,1,'Tim kerja adalah tim yang dibentuk untuk melaksanakan proses perubahan melalui Program, kegiatan dan Inovasi di 6 Area Perubahan (6 komponen\r\nPengungkit), Tim kerja akan menjadi motor dalam Pembangunan Zona Integritas menuju WBK dan WBBM.\r\n'),
(2,'Dokumen Rencana Pembangunan Zona Integritas',1,1,'Rencana Pembangunan Zona Integritas adalah program, Kegiatan dan Inovasi yang akan dilaksanakan dalam melakukan perubahan yang berisi tentang\r\nTarget, Waktu dan Hasil yang ingin dicapai, disesuaikan dengan kondisi dan karakteristik Satker di wilayah masing-masing.'),
(3,'Pemantauan dan Evaluasi Pembukaan WBK / WBBM',1,2,'Kegiatan pemantauan dan evaluasi dilaksanakan secara kontinyu dalam rangka monitoring capaian pembangunan ZI tiap-tiap komponen'),
(4,'Perubahan Pola Pikir dan Budaya Kerja',1,1,'Perubahan pola piker dan budaya kerja adalah kegiatan yang dilaksanakan dalam rangka merubah pola pikir anggota menuju kearah yang lebih baik serta\r\nmewujudkan budaya kerja di Satker sehingga tercipta lingkungan kerja yang benar-benar bebas korupsi dan berkinerja baik\r\n'),
(5,'Prosedur Operasional Tetap (SOP) Kegiatan Utama ',2,1,NULL),
(6,'E-Office',2,2,NULL),
(7,'Keterbukaan Informasi Publik',2,1,NULL),
(8,'Perencanaan kebutuhan pegawai sesuai dengan kebutuhan organisasi',3,2,NULL),
(9,'Pola Mutasi Internal',3,2,NULL),
(10,'Pengembangan Pegawai Berbasis kompetensi',3,3,NULL),
(11,'Penetapan kinerja Individu',3,4,NULL),
(12,'Penegakan aturan disiplin/ kode etik/ kode perilaku pegawai',3,3,NULL),
(13,'Sistem informasi Kepegawaian',3,1,NULL),
(14,'Keterlibatan Pimpinan',4,5,NULL),
(15,'Pengelolaan Akuntabilitas Kinerja',4,5,NULL),
(16,'Pengendalian Gratifikasi',5,3,NULL),
(17,'Penerapan SPIP',5,3,NULL),
(18,'Pengaduan Masyarakat',5,3,NULL),
(19,'Whistle-Blowing System',5,3,NULL),
(20,'Penanganan Benturan Kepentingan',5,3,NULL),
(21,'Standar Pelayanan',6,3,NULL),
(22,'Budaya Pelayanan Prima',6,3,NULL),
(23,'Penilaian Kepuasan Terhadap pelayanan',6,4,NULL);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `romawisoal` */

DROP TABLE IF EXISTS `romawisoal`;

CREATE TABLE `romawisoal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(500) DEFAULT NULL,
  `keterangan` text,
  `nilai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `romawisoal` */

insert  into `romawisoal`(`id`,`nama`,`keterangan`,`nilai`) values 
(1,'I. Manajemen Perubahan','Bertujuan untuk mengubah secara sistematis dan konsisten mekanisme kerja, pola pikir (mind set), serta budaya kerja (culture set) individu pada\r\nSatuan Kerja yang dibangun, menjadi lebih baik sesuai dengan tujuan dan sasaran pembangunan zona integritas',5),
(2,'II. Penataan Tatalaksana','Penataan Tatalaksanan Bertujuan untuk meningkatkan efisiensi dan efektivitas sistem, proses, dan prosedur kerja yang jelas, efektif, efisien, dan\r\nterukur pada Zona Integritas Menuju WBK/WBBM.',5),
(3,'III. Penataan Sistem Manajemen SDM','Penataan Sistem Manajemen SDM di lingkungan Kementerian Hukum dan HAM bertujuan untuk meningkatkan profesionalisme SDM Kementerian\r\nHukum dan HAM pada Zona Integritas Menuju WBK/WBBM.',15),
(4,'IV. Penguatan Akuntabilitas','Akuntabilitas kinerja bertujuan untuk meningkatkan kapasitas dan akuntabilitas kinerja Kementerian Hukum dan HAM.\r\n',10),
(5,'V. Penguatan Pengawasan','Penguatan pengawasan bertujuan untuk meningkatkan penyelenggaraan organisasi Kementerian Hukum dan HAM yang bersih dan bebas KKN',15),
(6,'VI. Peningkatan Kualitas Pelayanan Publik','Peningkatan kualitas pelayanan publik merupakan suatu upaya untuk meningkatkan kualitas dan inovasi pelayanan publik sesuai kebutuhan dan\r\nharapan masyarakat.',10);

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_abcsoal` int(11) DEFAULT NULL,
  `revisi` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `nilai` double DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `capaian` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id`,`id_abcsoal`,`revisi`,`status`,`nilai`,`keterangan`,`created_at`,`updated_at`,`created_by`,`updated_by`,`capaian`) values 
(1,1,NULL,1,0.5,'ok','2019-08-20 03:39:00','2019-08-23 09:55:23',5,3,1),
(3,2,NULL,2,0.1,'file kurang banyak','2019-08-29 07:00:31','2019-08-30 10:13:17',2,3,0.2),
(5,3,NULL,0,0.132,'2 file belum diisi','2019-08-30 02:07:50','2019-08-30 02:07:50',2,3,0.4),
(6,1,NULL,2,0.3,'kurang tanda tangan kepala kantor','2019-09-03 01:20:09','2019-09-03 02:03:34',2,3,0.6),
(7,4,NULL,0,NULL,NULL,'2019-09-03 01:21:26','2019-09-03 01:21:26',2,NULL,NULL),
(8,6,NULL,0,NULL,NULL,'2019-09-03 01:22:55','2019-09-03 01:22:55',2,NULL,NULL);

/*Table structure for table `transaksiipk` */

DROP TABLE IF EXISTS `transaksiipk`;

CREATE TABLE `transaksiipk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nilai` double DEFAULT NULL,
  `path` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `triwulan` varchar(100) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksiipk` */

/*Table structure for table `transaksivideo` */

DROP TABLE IF EXISTS `transaksivideo`;

CREATE TABLE `transaksivideo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` datetime DEFAULT NULL,
  `path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksivideo` */

/*Table structure for table `upt` */

DROP TABLE IF EXISTS `upt`;

CREATE TABLE `upt` (
  `id_upt` int(11) NOT NULL AUTO_INCREMENT,
  `nama_upt` varchar(500) DEFAULT NULL,
  `id_divisi` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_upt`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

/*Data for the table `upt` */

insert  into `upt`(`id_upt`,`nama_upt`,`id_divisi`,`created_at`,`updated_at`) values 
(1,'Lapas Klas I Surabaya',1,NULL,NULL),
(2,'Lapas Klas I Malang',1,NULL,NULL),
(3,'Lapas Klas I Madiun',1,NULL,NULL),
(4,'Lapas Klas IIA Pamekasan',1,NULL,NULL),
(5,'Lapas Klas IIA Bojonegoro',1,NULL,NULL),
(6,'Lapas Klas IIA Sidoarjo',1,NULL,NULL),
(7,'Lapas Perempuan Klas IIA Malang',1,NULL,NULL),
(8,'Lapas Klas IIA Kediri',1,NULL,NULL),
(9,'Lapas Klas IIA Jember',1,NULL,NULL),
(10,'Lapas Anak Klas IIA Blitar',1,NULL,NULL),
(11,'Lapas Klas IIB Mojokerto',1,NULL,NULL),
(12,'Lapas Klas IIB Jombang',1,NULL,NULL),
(13,'Lapas Klas IIB Lamongan',1,NULL,NULL),
(14,'Lapas Klas IIB Tuban',1,NULL,NULL),
(15,'Lapas Klas IIB Ngawi',1,NULL,NULL),
(16,'Lapas Klas IIB Blitar',1,NULL,NULL),
(17,'Lapas Klas IIb Tulungagung',1,NULL,NULL),
(18,'Lapas Klas IIB Probolinggo',1,NULL,NULL),
(19,'Lapas Klas IIB Pasuruan',1,NULL,NULL),
(20,'Lapas Klas IIB Lumajang',1,NULL,NULL),
(21,'Lapas Klas IIB Bondowoso',1,NULL,NULL),
(22,'Lapas Klas IIB Banyuwangi',1,NULL,NULL),
(23,'Lapas Narkotika Madiun',1,NULL,NULL),
(24,'Lapas Narkotika Pamekasan',1,NULL,NULL),
(25,'Rutan Kelas I Surabaya ',1,NULL,NULL),
(26,'Rutan Kelas IIB Ponorogo',1,NULL,NULL),
(27,'Rutan Kelas IIB Pacitan',1,NULL,NULL),
(28,'Rutan Kelas IIB Magetan',1,NULL,NULL),
(29,'Rutan Kelas IIB Nganjuk',1,NULL,NULL),
(30,'Rutan Kelas IIB Kraksaan',1,NULL,NULL),
(31,'Rutan Kelas IIB Bangil',1,NULL,NULL),
(32,'Rutan Kelas IIB Situbondo',1,NULL,NULL),
(33,'Rutan Kelas IIB Trenggalek',1,NULL,NULL),
(34,'Rutan Kelas IIB Bangkalan',1,NULL,NULL),
(35,'Rutan Kelas IIB Sampang',1,NULL,NULL),
(36,'Rutan Kelas IIB Sumenep',1,NULL,NULL),
(37,'Rutan Kelas IIB Gresik',1,NULL,NULL),
(38,'Rutan Perempuan Surabaya',1,NULL,NULL),
(39,'Cab Rutan Sumenep Arjasa',1,NULL,NULL),
(40,'Rupbasan Surabaya',1,NULL,NULL),
(41,'Rupbasan Blitar',1,NULL,NULL),
(42,'Rupbasan Jombang',1,NULL,NULL),
(43,'Rupbasan Mojokerto',1,NULL,NULL),
(44,'Rupbasan Pasuruan',1,NULL,NULL),
(45,'Rupbasan Probolinggo',1,NULL,NULL),
(46,'Kantor Imigrasi Kelas I Khusus Surabaya',2,NULL,NULL),
(47,'Kantor Imigrasi Kelas I TJ Perak',2,NULL,NULL),
(48,'Kantor Imigrasi Kelas I Malang',2,NULL,NULL),
(49,'Kantor Imigrasi Kelas II Jember',2,NULL,NULL),
(50,'Kantor Imigrasi Kelas II Blitar',2,NULL,NULL),
(51,'Kantor Imigrasi Kelas II Madiun',2,NULL,NULL),
(52,'Kantor Imigrasi Kelas III Kediri',2,NULL,NULL),
(53,'Kantor Imigrasi Kelas III Pamekasan',2,NULL,NULL),
(54,'Kantor Imigrasi Kelas III Ponorogo',2,NULL,NULL),
(55,'Rudenim Pasuruan',2,NULL,NULL),
(56,'Bapas Surabaya',1,NULL,NULL),
(57,'Bapas Pamekasan',1,NULL,NULL),
(58,'Bapas Malang',1,NULL,NULL),
(59,'Bapas Bojonegoro ',1,NULL,NULL),
(60,'Bapas Kediri',1,NULL,NULL),
(61,'Bapas Madiun',1,NULL,NULL),
(62,'Bapas Jember',1,NULL,NULL),
(63,'Balai Harta Peninggalan',3,NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_upt` int(11) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`,`id_upt`,`id_role`) values 
(1,'faiqfirdausy','faiqfirdausy','faiqfirdausy16@gmail.com',NULL,'$2y$10$sl7k1v3HBXMDKHdMdKJGBuOLkkld4HytNmnOQDUCReg25mcoFu0gu','MAYpmldMqWVJ0Tdte9FocZnIcHDY3Md1Ly1KM2xkQTgxg1QMwjjm91aCCFdQ','2019-02-11 12:31:52','2019-02-12 14:00:46',NULL,NULL),
(2,'kanimblitar','upt','faiqfirdausy17@gmail.com',NULL,'$2y$10$mfp1Vd5q4tseGFV9/0vs/.zDo6aN9POj6q4XO5NEXmRAuaYV8PbZ2','mnrlA3jYOWwqfKpMhxl8stqHmyZFTMku6zytyZVt8SvbLCuk0T0BdsVEMhE0','2019-02-12 14:08:12','2019-02-18 06:06:04',50,1),
(3,'admin','admin','admin@gmail.com',NULL,'$2y$10$mfp1Vd5q4tseGFV9/0vs/.zDo6aN9POj6q4XO5NEXmRAuaYV8PbZ2','AKIqD6pC9bDPG9sZew3Ruyg3dDGYkVz5w6NepFZR6bY9hQBOwj7CuULnnfVO','2019-02-18 06:07:12','2019-02-18 06:07:12',65,0),
(4,'faiq2','faiq2','faiq3@gmail.com',NULL,'$2y$10$mfp1Vd5q4tseGFV9/0vs/.zDo6aN9POj6q4XO5NEXmRAuaYV8PbZ2',NULL,'2019-07-08 08:42:31','2019-07-08 08:42:31',62,1),
(5,'lapas1malang','upt','faiqfirdausy18@gmail.com',NULL,'$2y$10$mfp1Vd5q4tseGFV9/0vs/.zDo6aN9POj6q4XO5NEXmRAuaYV8PbZ2','WtdiH4pZhrKgWKsfUsa0xKssx61Sx5ujUcHkHECUktYVMScwFyzZQVgZr47h','2019-02-12 14:08:12','2019-02-12 14:08:12',2,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
