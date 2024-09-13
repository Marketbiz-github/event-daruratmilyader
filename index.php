<?php
  ob_start();
  require 'config.php';

  $referenceId = (string) rand(10000, 99999); 

  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootcamp Eksklusif - Unlimited Reach Conversion Campaign & Viral SEO</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    .bg-custom {
      background-image: linear-gradient(to right top, #373737, #353442, #32314d, #2d2e59, #232b64, #2e3975, #384786, #435697, #697bb1, #91a2ca, #bcc9e2, #ebf1fb);
      background-size: cover; 
      background-repeat: no-repeat; 
      background-attachment: fixed; 
    }
    .timeline {
      position: relative;
    }

    .timeline-item {
      position: relative;
      margin-bottom: 20px;
    }

    .timeline-item:before {
      content: '';
      position: absolute;
      left: -6px;
      top: 0;
      height: 100%;
      border-left: 2px solid #ffffff;
    }

    .timeline-content {
      padding: 10px 20px 10px 10px;
      background-color: rgba(255, 255, 255, 0.2);
      border-radius: 6px;
      color: #ffffff;
    }

    .timeline-content .time {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    #form-container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: rgba(0, 0, 0, 0.5); 
      border-radius: 8px;
      overflow-y: auto;
      height: auto; 
    }

    body {
      margin: 0;
      padding: 0;
      overflow: auto; 
    }

    .close-btn {
    background: none;
    border: none;
    font-size: 1.5rem;
    cursor: pointer;
    }

    .close-btn:hover {
        color: #000;
    }
  </style>
</head>

<body class="bg-custom flex justify-center items-center">
  <div class="relative w-full h-full flex items-center justify-center">
    <div id="form-container" class="relative w-full max-w-xl min-h-[100vh] overflow-hidden">
      <!-- First Screen (Event Info) -->
      <div id="event-info" class="flex flex-col items-center text-white text-center p-[30px]">
        <h1 class="md:text-4xl text-3xl font-bold">#DARURATMILYADER</h1>
        <p class="md:tracking-[2.2px] tracking-[1.2px] md:text-base text-sm">1.000.000 MILYADER ONLINE BARU</p>

        <div class="bg-[#4C536D] mt-8 mb-1 py-4 md:w-[600px] w-[470px]">
          <h1 class="md:text-2xl text-xl md:px-6 px-[50px]  font-bold mb-1">Viral di Google & Strategi Konversi Maksimal dengan Audiens Tanpa Batas</h1>
          <h4 class="text-gray-300 md:text-base text-sm md:px-0 px-[90px]">#DaruratMilyader dengan cara landscape digital marketing baru</h4>
        </div>
        

        <div class="flex space-x-6 md:my-3 md:pt-0 pt-2 md:scale-100 scale-[0.75]">
          <!-- Icon 1: Place -->
          <div class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
            </svg>
            <span><small>Jakarta, CGV-Pacific Place</small></span>
          </div>
      
          <!-- Icon 2: Date -->
          <div class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
              <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
            </svg>
            <span><small>18 September 2024</small></span>
          </div>
      
          <!-- Icon 3: Time -->
          <div class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
              <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
            </svg>
            <span><small>14.30 - 18.00 WIB</small></span>
          </div>
        </div>

        <div class="bg-[#4C536D] text-white p-6 rounded-lg shadow-lg mt-4 w-[480px] md:scale-100 scale-90 md:mt-3 mt-[-10px] md:mb-2 mb-[-35px]">
          <h2 class="text-xl font-bold mb-6 text-center">Pembicara Utama & Pemateri Workshop</h2>
          <!-- Speaker 1 -->
          <div class="flex items-center w-96 ps-12">
            <img src="img/gita-wirjawan.png" alt="Speaker 1" class="w-32 h-32 rounded-full object-cover mr-5">
            <div class="flex flex-col text-left border-l-4 border-gray-300 pl-3">
              <h4 class="text-lg font-bold mb-1 leading-6">Gita Wirjawan</h4>
              <small class="text-gray-300 leading-4">Investor, Pendidik, Pemikir, Podcaster Youtube Endgame, Mantan Menteri Perdagangan (2011-2014)</small>
            </div>
          </div>

          <div class="flex flex-wrap md:gap-6 gap-3 justify-center mt-6">
            <!-- Speaker 2 -->
            <div class="flex flex-col items-center w-50">
              <img src="img/riyeke-ustadiyanto.png" alt="Speaker 2" class="w-32 h-32 rounded-full object-cover mb-3">
              <h4 class="text-lg font-bold mb-1 leading-6">Riyeke Ustadiyanto</h4>
              <small class="text-gray-300 leading-4">100% Growth Hacking</small>
            </div>
            
            <!-- Speaker 3 -->
            <div class="flex flex-col items-center w-50">
              <img src="img/Fahrian.png" alt="Speaker 3" class="w-32 h-32 rounded-full object-cover mb-3">
              <h4 class="text-lg font-bold mb-1 leading-6">M. Fahrian</h4>
              <small class="text-gray-300 leading-4">CEO ethix & Omni Channel Expert</small>
            </div>
          </div>

          <h4 class="text-xl font-bold mt-12 mb-1 md:px-0 px-[30px]">Anda pembisnis, content creator, dropshipper, affiliator, WAJIB HADIR!</h4>

        </div>

        <div class="bg-[#4C536D] mt-8 mb-1 py-4 md:w-[600px] w-[470px]">
          <h1 class="md:text-xl text-lg md:px-0 px-[80px] font-bold mb-1">Garansi 100% Brand Awareness & Sales Tanpa Batas,<br> less budget & less effort!</h1>
        </div>

        <div class="text-left md:px-0 px-[80px]">
          <h4 class="md:text-xl text-lg font-bold mt-5 mb-1 md:ms-[53px]">Agenda - Talk & Demo:</h4>
          <div class="timeline md:py-[10px] py-3 md:px-[60px]">
            <div class="timeline-item">
              <div class="timeline-content">
                <span class="time">14.00 - 14.30 WIB</span>
                <small>Pembukaan</small>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-content">
                <span class="time">14.30 - 15.30 WIB</span>
                <small>Gita Wirjawan “Bagaimana Indonesia Melahirkan 1.000.000 Milyader Muda Baru”</small>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-content">
                <span class="time">15.30 - 16.30 WIB</span>
                <small>Riyeke Ustadiyanto “Jangkauan Audien Tanpa Batas Brand & Sales, Less Budget, Less  Effort”</small>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-content">
                <span class="time">16.30 - 17.30 WIB</span>
                <small>M. Fahrian “Percepatan Mewujudkan Bisnis Online dengan Solusi End-to-End”</small>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-content">
                <span class="time">17.30 - 18.00 WIB</span>
                <small>Implementation Demo</small>
              </div>
            </div>
          </div>
        </div>


        <div class="relative bg-[#4C536D] text-white p-6 py-8 rounded-lg shadow-lg my-2 md:w-[480px] w-[320px] flex justify-center md:mt-2 mt-[-5px]">
          <!-- FLASHSALE Banner -->
          <div class="absolute top-0 left-0 bg-red-600 text-white text-xs font-bold py-1 px-2 rounded-br-lg">
            FLASHSALE 13 - 14 September 2024
          </div>
          <div class="flex items-center space-x-4 text-center">
            <span class="font-bold md:text-4xl text-2xl">HTM</span>
            <div class="flex flex-col items-center border-l-4 border-gray-300 pl-3">
              <span class="text-xs font-medium line-through">Rp. 400.000</span>
              <span class="md:text-2xl text-xl font-bold">Rp. 150.000</span>
            </div>
          </div>
        </div>


        <div class="flex md:space-x-4 space-x-3 mt-5">
          <!-- Join Workshop Button -->
          <div class="flex flex-col items-center space-y-2  ">
            <button id="reserve-btn" class="px-6 py-3 bg-green-600 text-white font-bold rounded shadow-lg hover:bg-green-700 focus:outline-none">
              JOIN WORKSHOP!
            </button>
            <small class="text-gray-300 text-left">*Tempat terbatas hanya 150 orang</small>
          </div>
        
          <!-- Share Button with Icon and Tooltip -->
          <div class="relative group w-[120px]">
            <div class="flex flex-col items-center space-y-2">
              <button id="share-btn" class="flex items-center px-6 py-3 bg-red-600 text-white font-bold rounded shadow-lg hover:bg-red-600 focus:outline-none">
                SHARE
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill ms-2" viewBox="0 0 16 16">
                  <path d="M13.5 1a2.5 2.5 0 1 1-2.45 2.999l-6.407 3.2a2.502 2.502 0 0 1 0 1.602l6.407 3.2A2.5 2.5 0 1 1 14.5 15a2.5 2.5 0 0 1-2.45-3l-6.406-3.2a2.5 2.5 0 1 1 0-2.402l6.406-3.2A2.5 2.5 0 0 1 13.5 1z"/>
                </svg>
              </button>
              <small class="text-gray-300 text-left">*Re-share, Anda mendapat Rp 1.000,-</small>
            </div>
        
            <!-- Tooltip -->
            <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 hidden group-hover:block bg-black text-white text-xs rounded px-6 py-2 whitespace-nowrap">
              Bagikan dan dapatkan komisi /transaksi sukses
            </div>
          </div>
        </div>
        

      </div>

      <!-- Second Screen (Form) -->
      <div id="event-form" class="hidden flex flex-col text-white p-[30px]">
        <h2 class="text-xl font-bold mb-5 text-left">Silahkan isi data:</h2>
        
        <form action="form.php" method="post" id="registration-form" class="w-full max-w-lg space-y-3">
          <div>
            <label for="fullname" class="block text-sm font-medium text-white mb-1">Nama lengkap*</label>
            <input id="fullname" name="fullname" type="text" placeholder="Nama lengkap" class="w-full p-3 rounded bg-gray-800 border border-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-600" required>
          </div>
          
          <div>
            <label for="business" class="block text-sm font-medium text-white mb-1">Punya bisnis? (isi jika punya)</label>
            <input id="business" name="business" type="text" placeholder="Bisnis Anda" class="w-full p-3 rounded bg-gray-800 border border-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-600">
          </div>
          
          <div>
            <label for="whatsapp" class="block text-sm font-medium text-white mb-1">No. Whatsapp*</label>
            <input id="whatsapp" name="whatsapp" type="text" placeholder="No. Whatsapp" class="w-full p-3 rounded bg-gray-800 border border-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-600" required pattern="\d{12}" maxlength="12" title="No. Whatsapp harus terdiri dari 12 angka">
          </div>
          
          <div>
            <label for="email" class="block text-sm font-medium text-white mb-1">Email*</label>
            <input id="email" name="email" type="email" placeholder="Email" class="w-full p-3 rounded bg-gray-800 border border-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-600" required>
          </div>
          
          <div>
            <label for="tickets" class="block text-sm font-medium text-white mb-1">Jumlah Tiket*</label>
            <input id="tickets" name="tickets" type="number" placeholder="Jumlah Tiket" value="1" min="1" class="w-full p-3 rounded bg-gray-800 border border-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-600" required>
          </div>
          
          <div class="flex items-center space-x-2 pb-6">
            <input type="checkbox" id="agree" class="text-red-600 focus:ring-red-500" required>
            <label for="agree" class="text-sm text-white">Saya menyetujui syarat & ketentuan yang berlaku</label>
          </div>

          <input type="hidden" id="referenceId" name="referenceId" value="<?php echo $referenceId; ?>">
          
          <button type="submit" id="submit-button" class="px-6 py-2 bg-green-600 text-white font-bold rounded shadow-lg hover:bg-green-700 focus:outline-none">DAFTAR</button>
        </form>
        
      </div>

    </div>
  </div>

  <!--<div class="fixed bottom-4 right-4">-->
  <!--  <a href="https://wa.me/6287820837778" target="_blank" rel="noopener noreferrer" class="bg-green-500 hover:bg-green-600 text-white rounded-full p-3 shadow-lg flex items-center justify-center">-->
  <!--    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-whatsapp h-6 w-6" viewBox="0 0 16 16">-->
  <!--      <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>-->
  <!--    </svg>-->
  <!--  </a>-->
  <!--</div>-->

  <div id="loginPopup" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">
    <div class="bg-white rounded-lg p-8 max-w-md w-full relative">
        <h2 class="text-xl font-bold">Login untuk Share</h2>
        <p class="leading-5 text-sm mt-3 mb-2">Anda akan mendapatkan Rp.500 setiap share & setiap ada reshare Anda akan mendapat tambahan Rp.1000</p> 
        <p class="leading-5 text-sm">Uang langsung masuk ke rekening!</p>
        <p class="leading-5 text-xs">*untuk hasil maksimal, buat caption menarik untuk terjadi Re-Share!</p>
        
        <div class="close-btn absolute top-2 right-2 p-2 text-gray-600 hover:text-gray-900">
            &times;
        </div>
        <form id="loginForm" class="space-y-4 mt-6">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nama*</label>
            <input type="text" id="name" name="name" required class="bg-zinc-100 py-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 pl-2">
          </div>
          <div>
            <label for="phone" class="block text-sm font-medium text-gray-700">Telp*</label>
            <input type="tel" id="phone" name="phone" required class="bg-zinc-100 py-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 pl-2">
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email*</label>
            <input type="email" id="emailShare" name="emailShare" required class="bg-zinc-100 py-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 pl-2">
          </div>
          <div>
            <button type="submit" class="w-full flex justify-center py-2 px-4 bg-green-600 text-white font-bold rounded shadow-lg hover:bg-green-700 focus:outline-none">
              Login
            </button>
          </div>

        </form>
      </div>
  </div>

  <div id="sharePopup" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">
    <div class="bg-white rounded-lg p-8 max-w-md w-full relative">
        <h2 class="text-xl font-bold mb-6">Share Workshop</h2>
        <div class="close-btn absolute top-2 right-2 p-2 text-gray-600 hover:text-gray-900">
            &times;
        </div>
        <div class="flex justify-around mt-6">
            <button class="flex flex-col items-center" data-via="facebook">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                </svg>
                <span class="mt-2">Facebook</span>
            </button>
            <button class="flex flex-col items-center" data-via="whatsapp">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                </svg>
                <span class="mt-2">WhatsApp</span>
            </button>
            <button class="flex flex-col items-center" data-via="x">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-black" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
                <span class="mt-2">Twitter</span>
            </button>
        </div>
    </div>
  </div>

  <div id="activacyPopup" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">
    <div class="bg-white rounded-lg p-8 max-w-md w-full relative">
        <h2 class="text-xl font-bold mb-6">Pemberitahuan</h2>
        <div class="close-btn absolute top-2 right-2 p-2 text-gray-600 hover:text-gray-900">
            &times;
        </div>
        <div class="flex justify-around mt-6">
          Akun Anda berhasil dibuat, namun perlu diaktivasi. Tautan aktivasi telah dikirim ke email Anda. Silakan periksa email Anda dan ikuti instruksinya. Setelah diaktivasi, Anda dapat login kembali di halaman ini.
        </div>
    </div>
  </div>

  <script>
    const baseAPI = '<?php echo $baseAPI; ?>';
    let ownerID = '';

    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }

    function recordLinkHit(code) {
        const formData = new URLSearchParams();
        formData.append('code', code);

        fetch(`${baseAPI}/link-hit`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: formData.toString(),
        })
        .then(response => response.json())
        .then(data => {
            console.log('Link hit recorded:', data);
            ownerID = data.data.id;
        })
        .catch(error => {
            console.error('Error recording link hit:', error);
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        const code = getUrlParameter('code');
        if (code) {
            recordLinkHit(code);
        }
    });
  </script>
  

  <script>
    let dropshipperId = 0;
    let status = 0;

    document.getElementById('share-btn').addEventListener('click', function(event) {
        event.preventDefault();
        if(status == 0){
            document.getElementById('loginPopup').classList.remove('hidden');
            document.getElementById('loginPopup').classList.add('flex');
        } else {
            document.getElementById('sharePopup').classList.remove('hidden');
            document.getElementById('sharePopup').classList.add('flex');
        }
    });

    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const name = document.getElementById('name').value;
        const phone = document.getElementById('phone').value;
        const email = document.getElementById('emailShare').value;
        const store_id = 26931;

        const formData = new URLSearchParams();
        formData.append('name', name);
        formData.append('phone', phone);
        formData.append('email', email);
        formData.append('store_id', store_id);

        fetch(`${baseAPI}/auth-reseller-global`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: formData.toString(),
        })
        .then(response => response.json())
        .then(data => {
            // console.log('API Response:', data);
            if (data.status === 200 && data.message === 'success') {
                dropshipperId = data.data.dropshipper.id;
                status = data.data.dropshipper.status;

                document.getElementById('loginPopup').classList.add('hidden');
                document.getElementById('loginPopup').classList.remove('flex');

                if(status == 1){
                  document.getElementById('sharePopup').classList.remove('hidden');
                  document.getElementById('sharePopup').classList.add('flex');
                }else{
                  document.getElementById('activacyPopup').classList.remove('hidden');
                  document.getElementById('activacyPopup').classList.add('flex');
                }
                
            } else {
                throw new Error(`Login failed: ${data.message}`);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert(`Login failed. Please try again. Error: ${error.message}`);
        });
    });

    // Close popup when clicking outside the form or on close button
    document.querySelectorAll('#loginPopup, #sharePopup, #activacyPopup').forEach(popup => {
        popup.addEventListener('click', function(event) {
            if (event.target === this || event.target.classList.contains('close-btn')) {
                this.classList.add('hidden');
                this.classList.remove('flex');
            }
        });
    });

    // Share buttons functionality
    document.querySelectorAll('#sharePopup button').forEach(button => {
        button.addEventListener('click', function() {
            const via = this.getAttribute('data-via');
            getShareLink(via);
        });
    });

    function getShareLink(via) {
        const formData = new URLSearchParams();
        formData.append('campaign_id', '49');
        formData.append('reseller_id', dropshipperId.toString());
        formData.append('via', via);
        formData.append('owner_id', ownerID);

        console.log(ownerID);

        fetch(`${baseAPI}/share-link`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: formData.toString(),
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 200 && data.message === 'success') {
                const shareLink = data.data.share_link;
                window.open(shareLink, '_blank');
            } else {
                throw new Error(`Failed to generate share link: ${data.message}`);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert(`Failed to generate share link. Please try again. Error: ${error.message}`);
        });
    }
  </script>

  
  
  <script>
    document.getElementById('reserve-btn').addEventListener('click', function () {
      document.getElementById('event-info').classList.add('hidden');
      document.getElementById('event-form').classList.remove('hidden');
    });
  </script>

  
</body>

</html>
