   // OpenWeatherMap API anahtarı
   const apiKey = '2ff5589a0bf8ca8273a27597fe18df99'; // API anahtarınızı buraya girin

   // Tüm ilçelerin isimleri
   const ilceler = ['Çorum', 'Alaca', 'Bayat', 'Boğazkale', 'Dodurga', 'İskilip', 'Kargı', 'Laçin', 'Mecitözü', 'Oğuzlar', 'Ortaköy', 'Osmancık', 'Sungurlu', 'Uğurludağ'];

   // Hava durumu verilerini çekmek için API url'i oluştur
   function createApiUrl(ilce) {
       return `http://api.openweathermap.org/data/2.5/weather?q=${ilce}&appid=${apiKey}&units=metric&lang=tr`;
   }

   // Tarih ve saat bilgisini almak için fonksiyon
   function getCurrentDateTime() {
       const now = new Date();
       return now.toLocaleString('tr-TR');
   }

   // Hava durumu kartlarını oluştur ve sayfaya ekle
   function createWeatherCards() {
       const weatherCardsDiv = document.getElementById('corumhavadurumu');
       ilceler.forEach(ilce => {
           const apiUrl = createApiUrl(ilce);
           fetch(apiUrl)
               .then(response => response.json())
               .then(data => {
                   const cardHtml = `
                       <div class="col-md-4 mb-4">
                           <div class="card" id="havadurumu">
                               <div class="card-header">
                                   <h5 class="card-title">${ilce} Hava Durumu</h5>
                               </div>
                               <div class="card-body">
                                   <p class="card-text">Şehir: ${ilce}</p>
                                   <p class="card-text">Tarih ve Saat: <span>${getCurrentDateTime()}</span></p>
                                   <p class="card-text">Sıcaklık: ${data.main.temp}°C</p>
                                   <p class="card-text">Hissedilen Sıcaklık: ${data.main.feels_like}°C</p>
                                   <p class="card-text">Hava Durumu: ${data.weather[0].description}</p>
                               </div>
                           </div>
                       </div>
                   `;
                   weatherCardsDiv.innerHTML += cardHtml;
               })
               .catch(error => console.log('Hava durumu verileri alınırken bir hata oluştu:', error));
       });
   }

   // HTML yüklendikten sonra çağrılacak fonksiyon
   window.onload = function() {
       createWeatherCards();
   };