<template>
  <div class="d-flex flex-column">
    <div class="bg flex-fill">
      <div class="flex-center position-ref full-height">
        <div class="content mb-5">
          <div class="title text-light">
            Laravel API Development
            <br>
            Vue/Nuxt JS Web App
          </div>
          <hr>
          <nuxt-link to="/dashboard" class="btn btn-outline-primary mr-2">Post a Topic</nuxt-link>
          <nuxt-link to="/topics" class="btn btn-outline-warning">Browse Topics</nuxt-link>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  // middleware: ['auth']
}

</script>

<style scoped>
	html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }
    .full-height {
        height: 100vh;
    }
    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .content {
        text-align: center;
    }
    .title {
        font-size: 84px;
    }
</style>
