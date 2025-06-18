<ul class="clear">
    <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="/">Beranda</a></li>
    <li class="{{ (request()->is('profil*')) ? 'active' : '' }}"><a class="drop" href="#">Profil</a>
      <ul>
        <li class="{{ (request()->is('profil/struktur')) ? 'active' : '' }}"><a href="/profil/struktur">Struktur Organisasi</a></li>
        <li class="{{ (request()->is('profil/renstra')) ? 'active' : '' }}"><a href="/profil/renstra">Renstra</a></li>
        <li class="{{ (request()->is('profil/tupoksi')) ? 'active' : '' }}"><a href="/profil/tupoksi">Tupoksi</a></li>
      </ul>
    </li>
    <li class="{{ (request()->is('berita*')) ? 'active' : '' }}"><a class="drop" href="#">Berita</a>
      <ul>
        <li class="{{ (request()->is('berita/berita')) ? 'active' : '' }}"><a href="/berita/berita">Berita</a></li>
        <li class="{{ (request()->is('berita/agenda')) ? 'active' : '' }}"><a href="/berita/agenda">Agenda</a></li>
      </ul>
    </li>
    <li class="{{ (request()->is('informasi*')) ? 'active' : '' }}"><a class="drop" href="#">Informasi</a>
      <ul>
        <li class="{{ (request()->is('informasi/iujk')) ? 'active' : '' }}"><a href="/informasi/iujk">IUJK</a></li>
        <li class="{{ (request()->is('informasi/tdup')) ? 'active' : '' }}"><a href="/informasi/tdup">TDUP</a></li>
        <li class="{{ (request()->is('informasi/bu')) ? 'active' : '' }}"><a href="/informasi/bu">Badan Usaha</a></li>
        <li class="{{ (request()->is('informasi/timpembina')) ? 'active' : '' }}"><a href="/informasi/timpembina">Tim Pembina Jasa Konstruksi</a></li>
      </ul>
    </li>
    <li class="{{ (request()->is('datajakon*')) ? 'active' : '' }}"><a class="drop" href="#">Data Jakon</a>
      <ul>
        <li class="{{ (request()->is('datajakon/standarbiaya')) ? 'active' : '' }}"><a href="/datajakon/standarbiaya">Standar Biaya Umum</a></li>
        <li class="{{ (request()->is('datajakon/progresspaket')) ? 'active' : '' }}"><a href="/datajakon/progresspaket">Progress Paket Pekerjaan</a></li>
      </ul>
    </li>
    <li class="{{ (request()->is('tenagakerja*')) ? 'active' : '' }}"><a class="drop" href="#">Tenaga Kerja</a>
      <ul>
        <li class="{{ (request()->is('tenagakerja/skaskt')) ? 'active' : '' }}"><a href="/tenagakerja/skaskt">SKA/SKT</a></li>
        <li class="{{ (request()->is('tenagakerja/pjt')) ? 'active' : '' }}"><a href="/tenagakerja/pjt">Penanggung Jawab Teknik</a></li>
      </ul>
    </li>
    <li class="{{ (request()->is('spm*')) ? 'active' : '' }}"><a class="drop" href="#">SPM</a>
      <ul>
        <li class="{{ (request()->is('spm/informasi')) ? 'active' : '' }}"><a href="/spm/informasi">Informasi SPM</a></li>
        <li class="{{ (request()->is('spm/laporan')) ? 'active' : '' }}"><a href="/spm/laporan">Laporan SPM</a></li>
      </ul>
    </li>
    <li class="{{ (request()->is('peraturan*')) ? 'active' : '' }}"><a class="drop" href="#">Peraturan</a>
      <ul>
        <li class="{{ (request()->is('peraturan/undangundang')) ? 'active' : '' }}"><a href="/peraturan/undangundang">Undang-Undang</a></li>
        <li class="{{ (request()->is('peraturan/pp')) ? 'active' : '' }}"><a href="/peraturan/pp">Peraturan Pemerintah</a></li>
        <li class="{{ (request()->is('peraturan/perpres')) ? 'active' : '' }}"><a href="/peraturan/perpres">Peraturan Presiden</a></li>
        <li class="{{ (request()->is('peraturan/permen')) ? 'active' : '' }}"><a href="/peraturan/permen">Peraturan Menteri</a></li>
        <li class="{{ (request()->is('peraturan/kepmen')) ? 'active' : '' }}"><a href="/peraturan/kepmen">Keputusan Menteri</a></li>
        <li class="{{ (request()->is('peraturan/edaran')) ? 'active' : '' }}"><a href="/peraturan/edaran">Surat Edaran Menteri</a></li>
        <li class="{{ (request()->is('peraturan/referensi')) ? 'active' : '' }}"><a href="/peraturan/referensi">Referensi</a></li>
        <li class="{{ (request()->is('peraturan/perda')) ? 'active' : '' }}"><a href="/peraturan/perda">Peraturan Daerah</a></li>
        <li class="{{ (request()->is('peraturan/pergub')) ? 'active' : '' }}"><a href="/peraturan/pergub">Peraturan Gubernur</a></li>
        <li class="{{ (request()->is('peraturan/perwali')) ? 'active' : '' }}"><a href="/peraturan/perwali">Peraturan Walikota</a></li>
        <li class="{{ (request()->is('peraturan/sk')) ? 'active' : '' }}"><a href="/peraturan/sk">Surat Keputusan</a></li>
      </ul>
    </li>
  </ul>