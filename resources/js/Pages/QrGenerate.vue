<template>
  <div class="container">
    <div>
    <h1>Генератор QR Code</h1>
    <button v-on:click="getRandomNumbor(6)">Сгенераровать QR Code</button>
    </div>
    <!-- <div>
      Random1 = {{randomNumber1}}
      Random2 = {{randomNumber2}}
      Random3 = {{randomNumber3}}
      Random4 = {{randomNumber4}}
      Random5 = {{randomNumber5}}
      Random6 = {{randomNumber6}}
      Random7 = {{randomNumber7}}
      Random8 = {{randomNumber8}}
      Random9 = {{randomNumber9}}
      Random10 = {{randomNumber10}}
    </div> -->
    <div class="generate">
      <div>
        <qrcode-vue :value="randomNumber1" :size="size" level="H" /> 
      </div>
      <div>
        <qrcode-vue :value="randomNumber2" :size="size" level="H" />
      </div>
      <div>
        <qrcode-vue :value="randomNumber3" :size="size" level="H" />
      </div>
      <div>
        <qrcode-vue :value="randomNumber4" :size="size" level="H" />
      </div>
      <div>
        <qrcode-vue :value="randomNumber5" :size="size" level="H" />
      </div>
      <div>
        <qrcode-vue :value="randomNumber6" :size="size" level="H" />
      </div>
      <div>
        <qrcode-vue :value="randomNumber7" :size="size" level="H" />
      </div>
      <div>
        <qrcode-vue :value="randomNumber8" :size="size" level="H" />
      </div>
      <div>
        <qrcode-vue :value="randomNumber9" :size="size" level="H" />
      </div>
      <div>
        <qrcode-vue :value="randomNumber10" :size="size" level="H" />
      </div>
    </div>
  </div>
</template>

<script>
import QrcodeVue from 'qrcode.vue'
import axios, { Axios } from 'axios';
  
const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

export default {
  
    data() {
      return {
        randomNumber1: '',
        randomNumber2: '',
        randomNumber3: '',
        randomNumber4: '',
        randomNumber5: '',
        randomNumber6: '',
        randomNumber7: '',
        randomNumber8: '',
        randomNumber9: '',
        randomNumber10: '',
        value: 'https://example.com',
        size: 300,
      }
    },
    components: {
      QrcodeVue,
    },
    methods: {
      getRandomNumbor(length) {
        let result1 = ' ';
        let result2 = ' ';
        let result3 = ' ';
        let result4 = ' ';
        let result5 = ' ';
        let result6 = ' ';
        let result7 = ' ';
        let result8 = ' ';
        let result9 = ' ';
        let result10 = ' ';
    const charactersLength = characters.length;
    for ( let i = 0; i < length; i++ ) {
        result1 += characters.charAt(Math.floor(Math.random() * charactersLength));
        result2 += characters.charAt(Math.floor(Math.random() * charactersLength));
        result3 += characters.charAt(Math.floor(Math.random() * charactersLength));
        result4 += characters.charAt(Math.floor(Math.random() * charactersLength));
        result5 += characters.charAt(Math.floor(Math.random() * charactersLength));
        result6 += characters.charAt(Math.floor(Math.random() * charactersLength));
        result7 += characters.charAt(Math.floor(Math.random() * charactersLength));
        result8 += characters.charAt(Math.floor(Math.random() * charactersLength));
        result9 += characters.charAt(Math.floor(Math.random() * charactersLength));
        result10 += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    this.randomNumber1 = result1;
    this.randomNumber2 = result2;
    this.randomNumber3 = result3;
    this.randomNumber4 = result4;
    this.randomNumber5 = result5;
    this.randomNumber6 = result6;
    this.randomNumber7 = result7;
    this.randomNumber8 = result8;
    this.randomNumber9 = result9;
    this.randomNumber10 = result10;
    axios.post('/api/qr-generate', {
      token1: result1,
      token2: result2,
      token3: result3,
      token4: result4,
      token5: result5,
      token6: result6,
      token7: result7,
      token8: result8,
      token9: result9,
      token10: result10,
    }).then(response => {
        console.log(response)
      })
      .catch(function (error) {
        console.log(error);
      });
      }
  },
}

</script>

<style scoped>

.container {
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 100%;
  min-height: 100%;
  height: auto !important;
  width: 1250px;
  margin-top: 0;
  margin-bottom: 0;
  margin-left: auto;
  margin-right: auto; 
}
.generate {
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  flex-wrap: wrap;
  align-items: stretch;
  flex-grow: 1;
    
  padding: 30px;
}

.generate div {
  height: 400px;
  width: 350px;
}

button {
  background-color: cadetblue;
  height: 60px;
  width: 160px;
}
</style>