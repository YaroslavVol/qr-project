<template>
  <div>
    <div class="mb">
      Qr Сканер
    </div>
    <div class="center stream">
      <qr-stream @decode="onDecode" class="mb">
        <div style="color: black;" class="frame"></div>
      </qr-stream>
    </div>
    <div class="result">
      Результат: {{info}}
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, reactive, toRefs } from 'vue';
import { QrStream } from 'vue3-qr-reader';
import axios, { Axios } from 'axios';

import { ref } from "vue";
export default defineComponent({
  components: {
    QrStream
  },
  setup() {
  const info = ref()
    const state = reactive({
      data: null,
      info: ''
    })
      function onDecode(data) {
      state.data = data,
      axios.post('/api/qr', {
        token: data
      }).then(response => {
        info.value = response.data
        console.log(response.data)
      })
      .catch(function (error) {
        console.log(error);
      });
    }
    return {
      ...toRefs(state),
      onDecode, 
      info
    }
  }
});
</script>

<style scoped>
.stream {
  max-height: 500px;
  max-width: 500px;
  margin: auto;
}
.frame {
  border-style: solid;
  border-width: 2px;
  border-color: red;
  height: 200px;
  width: 200px;
  position: absolute;
  top: 0px;
  bottom: 0px;
  right: 0px;
  left: 0px;
  margin: auto;
}
</style>