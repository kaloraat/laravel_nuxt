<template>
  <div class="container col-md-6 mt-5">
  	<h2>Ask for password reset link</h2>
  	<br>

    <div v-if="loading" class="alert alert-primary">
      Please wait...
    </div>

    <div v-if="messages.length > 0" class="alert alert-primary">
      We have send you password reset link. Please check your email.
    </div>

    <form @submit.prevent="submit">
      <div class="form-group">
        <label>Email address</label>
        <input v-model.trim="form.email" type="email" class="form-control" placeholder="Enter email" autofocus>
        <small class="form-text text-danger" v-if="errors.email">{{errors.email[0]}}</small>
      </div>
      <button type="submit" class="btn btn-primary">Send Password Rest Link</button>
    </form>
    <br>
    <p><nuxt-link to="/login">Back to Login</nuxt-link></p>
  </div>
</template>

<script>
    export default {
      middleware: ['guest'],
      data() {
        return {
          form: {
            email: ''
          },
          messages: [],
          loading: false
        }
      },
      methods: {
          async submit() {
          this.loading = true
          let {message} = await this.$axios.post("/password/create" ,{
            email: this.form.email
          })
          this.messages.push(message)
          this.loading = false
          this.form = {}
      }
    }
  }
</script>









